<?php

namespace Drupal\pasarela_de_pago_con_mercado_libre\PluginForm;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\commerce_payment\Exception\PaymentGatewayException;
use Drupal\commerce_payment\PluginForm\PaymentOffsiteForm as BasePaymentOffsiteForm;
use MercadoPago\Preference;
use MercadoPago\Item;
use MercadoPago\SDK;


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
    // Agrega credenciales
    SDK::setAccessToken($payment_gateway_plugin->getAccessToken());

    $preference = new Preference();
    $preference->back_urls = [
      "success" => $form['#return_url'],
      "failure" => $form['#cancel_url'],
      "pending" => $form['#return_url'],
    ];

    $productos = [];
    $item = new Item();
    $item->title = "Prueba de producto";
    $item->quantity = 1;
    $item->unit_price = 60;

    array_push($productos, $item);

    $preference->items = $productos;

    $preference->save();

    return $preference->id;
    
  }


}//fin de la clase



