<?php

namespace Drupal\pasarela_de_pago_con_mercado_libre\Plugin\Commerce\CheckoutFlow;

use Drupal\commerce_checkout\Plugin\Commerce\CheckoutFlow\CheckoutFlowWithPanesBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @CommerceCheckoutFlow(
 *  id = "custom_checkout_flow",
 *  label = @Translation("Custom checkout flow"),
 * )
 */
class CustomCheckoutFlow extends CheckoutFlowWithPanesBase {

/**
 * {@inheritdoc}
 */
public function getSteps() {
    return [
      'login' => [
        'label' => $this->t('Login'),
        'previous_label' => $this->t('Go back'),
        'has_sidebar' => FALSE,
      ],
      'order_information' => [
        'label' => $this->t('Order information'),
        'has_sidebar' => TRUE,
        'previous_label' => $this->t('Go back'),
      ],
      'payment' => [
        'label' => $this->t('Payment'),
        'next_label' => $this->t('Pay and complete purchase'),
        'has_sidebar' => FALSE,
        'hidden' => TRUE,
      ],
      'complete' => [
        'label' => $this->t('Complete'),
        'next_label' => $this->t('Complete checkout'),
        'has_sidebar' => FALSE,
      ],
    ]; 
}

}