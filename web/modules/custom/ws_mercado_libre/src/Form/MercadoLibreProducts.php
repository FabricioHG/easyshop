<?php

declare(strict_types=1);

namespace Drupal\ws_mercado_libre\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\UserInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use \Drupal\Core\Config\ConfigFactoryInterface;
use \Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Routing\TrustedRedirectResponse;

/**
 * Provides a WS Mercado Libre form.
 */
final class MercadoLibreProducts extends FormBase {

  /**
   * {@inheritdoc}
   */

  protected $configFactory;

  public function __construct(ConfigFactoryInterface $config_factory) {
    $this->configFactory = $config_factory;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }


  public function getFormId(): string {
    return 'ws_mercado_libre_mercado_libre_products';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, UserInterface $user = NULL): array {
    $publish_products = $user ? $user->get('field_publish_products')->value : FALSE;

    $form['info'] = [
      '#markup' => $this->t('Publicar en Mercado Libre mis productos que publique en este sitio'),
    ];

    $form['publicar'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Publicar productos'),
      '#default_value' => $publish_products,
    ];

    $form['actions'] = [
      '#type' => 'actions',
      'submit' => [
        '#type' => 'submit',
        '#value' => $this->t('Publicar'),
      ],
    ];

    $form_state->set('user', $user);

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state): void {
    // @todo Validate the form here.
    // Example:
    // @code
    //   if (mb_strlen($form_state->getValue('message')) < 10) {
    //     $form_state->setErrorByName(
    //       'message',
    //       $this->t('Message should be at least 10 characters.'),
    //     );
    //   }
    // @endcode
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $user = $form_state->get('user');

    $config = $this->configFactory->get('ws_mercado_libre.settings');
    $client_id = $config->get('client_id');
    $client_secret = $config->get('client_secret');
    $redirect_uri = $config->get('url_redirect');

    
    //If publish_products is checked, initiate OAuth flow.
    if ($form_state->getValue('publicar') && $redirect_uri != "") {
      $auth_url = "https://auth.mercadolibre.com.mx/authorization?response_type=code&client_id=$client_id&redirect_uri=" . urlencode($redirect_uri);
      
      $response = new TrustedRedirectResponse($auth_url);
      $response->send();
      exit();

    }

    \Drupal::messenger()->addMessage($this->t('Settings saved, conectando con Mercado Libre.'));
  }

}



















