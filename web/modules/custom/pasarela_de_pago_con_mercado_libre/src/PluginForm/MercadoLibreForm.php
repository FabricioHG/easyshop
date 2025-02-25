<?php

namespace Drupal\pasarela_de_pago_con_mercado_libre\PluginForm;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\commerce_payment\Exception\PaymentGatewayException;
use Drupal\commerce_payment\PluginForm\PaymentOffsiteForm as BasePaymentOffsiteForm;
use MercadoPago\Preference;
use MercadoPago\Item;
use MercadoPago\SDK;
use Drupal\commerce_order\Entity\OrderInterface;


class MercadoLibreForm extends BasePaymentOffsiteForm {

	public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    
    $payment_gateway_plugin = $this->plugin;
    $payment = $this->entity;
    $order = $payment->getOrder();
    $order_number = $order->get('order_id')->getValue()[0]['value'];
    

    

    //Obtener datos para enviar a js con drupalSettings
    $form['#attached']['library'][] = 'pasarela_de_pago_con_mercado_libre/pasarela_de_pago_ml_library';
    $form['#attached']['drupalSettings']['pasarela_de_pago_ml']=[
      'public_key'=> $payment_gateway_plugin->getPublicKey(),
      'preference_id'=> $this->createPreference($form),
      'return_url' => $form['#return_url'],
      'cancel_url' => $form['#cancel_url'],
    ]; 

    $form['div_form_ml'] = [
      '#type' => 'item',
      '#markup' => '<div id="wallet_container"></div>',
    ];

    // $form['submit'] = array(
    //   '#type' => 'submit',
    //   '#value' => 'Pagar',
    //   '#attributes' => array(
    //     'id' => 'submit',
    //   ),
    // );

    $form['cancel'] = [
      '#type' => 'link',
      '#title' => $this->t('Cancel'),
      '#url' => Url::fromRoute("commerce_payment.checkout.cancel", ['commerce_order' => $order_number, 'step' => 'payment']),
      '#attributes' => [
        'id' => 'cancel',
      ],
    ];



    // kint($payment_gateway_plugin);
    // kint($payment_method);
    // kint($order);    
  
    return $form;
	}

  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::validateConfigurationForm($form, $form_state);
    //Parece ser que aqui se va a actualizar el estatus del SetupIntent de requires_payment_method a requires_confirmation
   // $stripe = new \Stripe\StripeClient('');

  }


  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
      parent::submitConfigurationForm($form, $form_state);
      //Actualizar el PaimentIntent por si se actualizo el total del carrito
      //Despues de actualizar el PaimentIntent confirmar el pago

    
  }

  private function createPreference($form){
    $payment_gateway_plugin = $this->plugin;

    $payment = $this->entity;
    $order = $payment->getOrder();
    $order_items = $order->getItems();
    $order_id = intval( $order->get('order_id')->getValue()[0]['value'] );
    $email = $order->getEmail();


    // Agrega credenciales
    SDK::setAccessToken($payment_gateway_plugin->getAccessToken());

    $preference = new Preference();
    $preference->back_urls = [
      "success" => $form['#return_url'],
      "failure" => $form['#cancel_url'],
      "pending" => $form['#return_url'],
    ];

    $productos = [];
    foreach ($order_items as $key => $item) {
      $item_title = $item->getTitle();
      $item_quentity = strval(intval( $item->getQuantity() ) );
      $item_price = number_format($item->getUnitPrice()->getNumber(),2) ;

      $item = new Item();
      $item->title = $item_title;
      $item->quantity = $item_quentity;
      $item->unit_price = $item_price;
      
      array_push($productos, $item);
      unset($item_array); 
      unset($item);
    }

    $metadata = [
      'order_id' => $order_id,
      'email' => $order_id
    ];

     
    $preference->statement_descriptor = "Productos Webssistems";
    $preference->auto_return = 'approved';
    $preference->metadata = $metadata;
    $preference->items =  $productos ;
    
    //Envio
    $shipping_total = $this->getShippingTotal($order);
    $shipment = [
      "cost" => (float) $shipping_total,
      "mode" => "not_specified"
    ];
  
    $preference->shipments = json_decode(json_encode($shipment));
    
    $preference->save();
    //kint($preference);
    return $preference->id;
    
  }

  private function getShippingTotal(OrderInterface $orden) {
    $shipping_total = 0;
    
    /* Calcular el envio */
    
    // Variables para controlar si hay productos con envío gratis
    $total_envio = 0;

    $shipment_storage = \Drupal::entityTypeManager()->getStorage('commerce_shipment');
    $shipments =reset( $shipment_storage->loadByProperties(['order_id' => $orden->id()]) );
    $rate_amount = $shipments->getAmount()->getNumber();

    // Recorrer los productos de la orden para revisar la taxonomía "Envío gratis"
    foreach ($orden->getItems() as $key => $item) {
        // Obtener la entidad de variación y luego el ID del producto
        $entity_variation_product = $item->getPurchasedEntity();
        $product_id = $entity_variation_product->getProductId();
        
        // Cargar el storage de productos
        $product_storage = \Drupal::entityTypeManager()->getStorage('commerce_product');
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
  
   
    $shipping_total += $total_envio;
    
    
    return $shipping_total;
  }
  


}//fin de la clase


