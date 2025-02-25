<?php

namespace Drupal\control_de_envios\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\commerce_shipping\Event\FilterShippingMethodsEvent;
use Drupal\commerce_shipping\Event\ShippingEvents;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\commerce_price\Price;
use Drupal\commerce_order\Entity\Order;

class ShippingEventSubscriber implements EventSubscriberInterface {

  protected $entityTypeManager;

  public function __construct(EntityTypeManagerInterface $entityTypeManager) {
    $this->entityTypeManager = $entityTypeManager;
  }

  public static function getSubscribedEvents() {
    return [
      ShippingEvents::FILTER_SHIPPING_METHODS => 'filterShippingMethods',
    ];  
  }

  public function filterShippingMethods(FilterShippingMethodsEvent $event) {
    // Obtener la orden del envío
    $orden = $event->getShipment()->getOrder();
    // Obtener los métodos de envío disponibles
    $methods = $event->getShippingMethods();
    $envio = $event->getShipment();

    $rate_amount = $methods[1]->getPlugin()->getConfiguration()['rate_amount']['number'];
   
    // Variables para controlar si hay productos con envío gratis
    $envio_gratis_disponible = FALSE;
    $envio_pagado_necesario = FALSE;
    $total_envio = 0;

    // Recorrer los productos de la orden para revisar la taxonomía "Envío gratis"
    foreach ($orden->getItems() as $key => $item) {
        // Obtener la entidad de variación y luego el ID del producto
        $entity_variation_product = $item->getPurchasedEntity();
        $product_id = $entity_variation_product->getProductId();
        
        // Cargar el storage de productos
        $product_storage = $this->entityTypeManager->getStorage('commerce_product');
        $product = $product_storage->load($product_id);

        if ($product && $product->hasField('field_categoria')) {
            // Obtener las taxonomías asociadas al producto
            $terms = $product->get('field_categoria')->referencedEntities();

            // Inicializar la variable para determinar si el producto tiene envío gratis
            $has_free_shipping = FALSE;

            // Revisar las taxonomías y determinar si el producto tiene envío gratis
            foreach ($terms as $term) {
                if ($term->label() === 'Envío gratis') {
                    $has_free_shipping = TRUE;
                    break; // Salir del bucle si se encuentra el envío gratis
                }
            }

            // Si el producto tiene "Envío Gratis", actualizamos la variable
            if ($has_free_shipping) {
                $envio_gratis_disponible = TRUE;
            } else {
                $envio_pagado_necesario = TRUE;
            }
        }

        //Sumar envio
        $cantidad = $item->getQuantity();
        if (!$has_free_shipping){
            $total_envio += $cantidad * intval($rate_amount);

        }
        
    }
  
   
    $nueva_tarifa = new Price($total_envio, 'MXN');
    $envio->setAmount($nueva_tarifa);
    $envio->setOriginalAmount($nueva_tarifa);
   
    $orden_id = $orden->id();
    $orden = Order::load($orden_id);
    
    $orden->recalculateTotalPrice();
    $orden->save();
    $envio->save();
    //kint( $envio->getOriginalAmount());
    //\Drupal::logger('shipping')->debug('Nuevo monto: ' . $envio->getOriginalAmount());


    // Filtrar los métodos de envío según la disponibilidad de "Envío Gratis"
    $filtered_methods = [];
    foreach ($methods as $method) {
        $method_label = $method->getName();
        // Si hay productos con costo de envío, eliminamos la opción "Envío Gratis"
        if ($envio_pagado_necesario && strpos($method_label, 'Envío gratis') !== false) {
            continue;
        }

        // Si no hay productos con "Envío Gratis", eliminamos los métodos con "Envío Gratis"
        if (!$envio_gratis_disponible && strpos($method_label, 'Envío gratis') !== false) {
            continue;
        }

        // Si solo hay productos con "Envío Gratis"
        if (!$envio_pagado_necesario && strpos($method_label, 'Envio en todo México') !== false) {
            continue;
        }

        // Agregar el método de envío al filtro si cumple las condiciones
        $filtered_methods[] = $method;
    }
   

    // Establecer los métodos de envío filtrados
    $event->setShippingMethods($filtered_methods);
}

}
