<?php

namespace Drupal\ws_mercado_libre\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Mercado Libre settings for this site.
 */
class MercadoLibreSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ws_mercado_libre_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['ws_mercado_libre.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('ws_mercado_libre.settings');

    $form['client_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Client ID'),
      '#default_value' => $config->get('client_id'),
      '#description' => $this->t('The Client ID provided by Mercado Libre.'),
    ];

    $form['client_secret'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Client Secret'),
      '#default_value' => $config->get('client_secret'),
      '#description' => $this->t('The Client Secret provided by Mercado Libre.'),
      '#required' => TRUE,
    ];

    $form['url_redirect'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Redirect url'),
      '#default_value' => $config->get('url_redirect'),
      '#description' => $this->t('URL completa con el valor cargado cuando tu app fue creada en Mercado libre.'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('ws_mercado_libre.settings')
      ->set('client_id', $form_state->getValue('client_id'))
      ->set('client_secret', $form_state->getValue('client_secret'))
      ->set('url_redirect', $form_state->getValue('url_redirect'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
