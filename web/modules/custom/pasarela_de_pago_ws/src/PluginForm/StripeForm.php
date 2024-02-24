<?php

namespace Drupal\pasarela_de_pago_ws\PluginForm;

use Drupal\Core\Form\FormStateInterface;
use Drupal\commerce_payment\PluginForm\PaymentMethodAddForm;
use Stripe\SetupIntent;
use Stripe\Stripe;


class StripeForm extends PaymentMethodAddForm {

	public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    
    // $form['#attached']['library'][] = 'pasarela_de_pago_ws/pasarela_de_pago_ws_library';
    // $form['#attached']['drupalSettings']['pasarela_de_pago_ws']['clientsecret']= $this->getClientSecret();

    
    
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

  // private function getClientSecret(){
  //   $plugin = $this->plugin;
  //   $publishableKey = $plugin->getPublishableKey();
  //   $stripe = Stripe::setApiKey($publishableKey);
    
  //   try {
  //       // Crea el SetupIntent
  //       $setupIntent = SetupIntent::create();
  //       // Devuelve el client secret del SetupIntent
  //       return $setupIntent->client_secret;

  //   } catch (\Stripe\Exception\ApiErrorException $e) {
  //       // Manejar errores de la API de Stripe
  //       // Log o manejar el error según tus necesidades
  //       \Drupal::logger('pasarela_de_pago_ws')->error('Error al crear SetupIntent: ' . $e->getMessage());
  //       return null;
  //   }
  // }


}//fin de la clase



