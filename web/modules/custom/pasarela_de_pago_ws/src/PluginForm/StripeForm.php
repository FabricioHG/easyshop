<?php

namespace Drupal\pasarela_de_pago_ws\PluginForm;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\commerce_payment\Exception\PaymentGatewayException;
use Drupal\commerce_payment\PluginForm\PaymentOffsiteForm as BasePaymentOffsiteForm;
// use Stripe\SetupIntent;
// use Stripe\Stripe;
use Stripe\StripeClient;


class StripeForm extends BasePaymentOffsiteForm {

	public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    
    $payment_gateway_plugin = $this->plugin;
    $payment = $this->entity;
    $order = $payment->getOrder();
    $order_number = $order->get('order_id')->getValue()[0]['value'];
    

    if ( !$order->getData('paymentIntent') ) {
      $paymentIntent = $this->createPaymentIntent();
      $clientSecret = $paymentIntent->client_secret;
      $order->setData('paymentIntent', $paymentIntent->id);
      $order->save();
    }else{
      $payment_gateway_plugin = $this->plugin;
      $privateKey = $payment_gateway_plugin->getPrivateKey();
      $stripe = new StripeClient($privateKey);

      $payment_id = $order->getData('paymentIntent');
      $paymentIntent = $stripe->paymentIntents->retrieve($payment_id, []);
      $clientSecret = $paymentIntent->client_secret;
    }

    //Obtener datos para enviar a js con drupalSettings
    $form['#attached']['library'][] = 'pasarela_de_pago_ws/pasarela_de_pago_ws_library';
    $form['#attached']['drupalSettings']['pasarela_de_pago_ws']=[
      'clientsecret'=> $clientSecret,
      'publishablekey'=> $payment_gateway_plugin->getPublishableKey(),
      'return_url' => $form['#return_url'],
      'cancel_url' => $form['#cancel_url'],
    ]; 

    $form['div_form_stripe'] = [
      '#type' => 'item',
      '#markup' => '<div id="payment-element"></div>',
    ];
    $form['div_form_stripe_msg'] = [
      '#type' => 'item',
      '#markup' => ' <div id="payment-message" class="hidden"></div>',
    ];    
    
    $form['spiner'] = [
      '#type' => 'item',
      '#markup' => '<div class="spinner hidden" id="spinner"></div>',
    ];

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Pagar',
      '#attributes' => array(
        'id' => 'submit',
      ),
    );

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

  private function createPaymentIntent(){
    
    $payment_gateway_plugin = $this->plugin;
    $payment = $this->entity;
    $order = $payment->getOrder();
    $order_items = $order->getItems();
    $total_order = number_format($order->getTotalPrice()->getNumber(),2);
    $email = $order->getEmail();
    $order_id = intval( $order->get('order_id')->getValue()[0]['value'] );
    $items = [];
    $item_array = '';
    $fecha_token = time();
    $token = $order_id.$fecha_token.$email;

    foreach ($order_items as $key => $item) {
      $item_title = $item->getTitle();
      $item_quentity = strval(intval( $item->getQuantity() ) );
      $item_price = number_format($item->getUnitPrice()->getNumber(),2) ;
      $item_total_price = number_format ($item->getTotalPrice()->getNumber(),2);

      $item_array .= "titulo: ". $item_title; 
      $item_array .= ", cantidad: ". $item_quentity; 
      $item_array .= ", precio: ". $item_price; 
      $item_array .= ", total: ". $item_total_price;
      
      array_push($items, $item_array);
      unset($item_array);
    }
    
    $items['orden_id'] = $order_id;
    $items['total de orden'] = $total_order;
    $items['email'] = $email;
    $items['token'] = $token;


    $privateKey = $payment_gateway_plugin->getPrivateKey();
    $stripe = new StripeClient($privateKey);

    try {
        // Crea el PaymentIntent
        $paymentIntent = $stripe->paymentIntents->create([
          'amount' => intval( $payment->getAmount()->getNumber() ) * 100,
          'currency' => 'mxn',
          // In the latest version of the API, specifying the `automatic_payment_methods` parameter is optional because Stripe enables its functionality by default.
          'automatic_payment_methods' => [
            'enabled' => true,
          ],
          'metadata' => $items,

        ]);
        // Devuelve el client secret del SetupIntent
        return $paymentIntent;

    } catch (\Stripe\Exception\ApiErrorException $e) {
        // Manejar errores de la API de Stripe
        // Log o manejar el error según tus necesidades
        \Drupal::logger('pasarela_de_pago_ws')->error('Error al crear SetupIntent: ' . $e->getMessage());
        return null;
    }
  }


}//fin de la clase



