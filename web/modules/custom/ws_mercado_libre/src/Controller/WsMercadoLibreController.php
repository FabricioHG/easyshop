<?php

namespace Drupal\ws_mercado_libre\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\ws_mercado_libre\Form\MercadoLibreProducts;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;
//use Symfony\Component\HttpFoundation\Response;
use \Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Routing\TrustedRedirectResponse;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;



/**
 * Returns responses for Ws mercado libre routes.
 */
final class WsMercadoLibreController extends ControllerBase {

  protected $formBuilder;
  protected $configFactory;

  public function __construct(FormBuilderInterface $form_builder, ConfigFactoryInterface $config_factory) {
    $this->formBuilder = $form_builder;
    $this->configFactory = $config_factory;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_builder'),
      $container->get('config.factory')
    );
  }

  /**
   * Builds the response.
   */
  public function page_config(UserInterface $user) {

     $form = $this->formBuilder->getForm('Drupal\ws_mercado_libre\Form\MercadoLibreProducts', $user);

    $build = [
      'formulario' => $form,
    ];


    return $build;
  }

  public function notify(Request $request) {
    $user = \Drupal::currentUser();

    $auth_code = $request->query->get('code');
    $code_verifier = $request->query->get('state');

    if (!$auth_code) {
      \Drupal::messenger()->addError($this->t('Failed to connect to Mercado Libre.'));
      \Drupal::logger('ws_mercado_libre')->notice('Failed to connect to Mercado Libre to user. %user', ['%user' => $user->getAccountName()]);
      return new TrustedRedirectResponse('/user/' . $user->id() . '/ws-mercado-libre');
      
    }

    $config = $this->configFactory->get('ws_mercado_libre.settings');
    $client_id = $config->get('client_id');
    $client_secret = $config->get('client_secret');
    $redirect_uri = $config->get('url_redirect');

    
    $client = new Client();
    try {
      $response = $client->post('https://api.mercadolibre.com/oauth/token', [
        'form_params' => [
          'grant_type' => 'authorization_code',
          'client_id' => $client_id,
          'client_secret' => $client_secret,
          'code' => $auth_code,
          'redirect_uri' => $redirect_uri,
          'code_verifier' => $code_verifier,
        ],
      ]);
    }
    catch (ClientException $e) {
      $response = $e->getResponse();
      if ($response) {
        $body = $response->getBody()->getContents();
        $data = json_decode($body, TRUE);
        $error = $data['error'];
        \Drupal::logger('ws_mercado_libre')->notice('Mensaje %mensaje', ['%mensaje' => $error]);
      }
    }
   
    if ($response->getStatusCode() == 200) {
      $data = json_decode($response->getBody(), true);
      $access_token = $data['access_token'];
      $refresh_token = $data['refresh_token'];
      $token_expires_in = time() + 21600;

      // Save the tokens to the user's configuration or database.
      $user = \Drupal::currentUser();
      $account = \Drupal\user\Entity\User::load($user->id());
      $account->set('field_mercadolibre_access_token', $access_token);
      $account->set('field_mercadolibre_refresh_token', $refresh_token);
      $account->set('field_ml_token_expires_in', $token_expires_in);
      $account->set('field_publish_products', TRUE);
      $account->save(); 

      \Drupal::messenger()->addMessage($this->t('Successfully connected to Mercado Libre.'));
      \Drupal::logger('ws_mercado_libre')->notice('Token expire in %expires_in', ['%expires_in' => date('d-m-Y h:i:s',$token_expires_in)]);
      return new TrustedRedirectResponse('/user/' . $user->id());
    }
    else {
        \Drupal::messenger()->addError($this->t('Failed to connect to Mercado Libre.'));
        return new TrustedRedirectResponse('/user/' . $user->id() . '/ws-mercado-libre');
      }
 
  
    
  }//Fin de notify


  //Pagina de prueba
  public function test_page() {

    $mercado_libre_service = \Drupal::service('ws_mercado_libre.mercadolibre_service');

    $token = $mercado_libre_service->isTokenActive();
    
    if (!empty($token) ) {
      $res = "Token activo"
    }else{
      $res = "El token expiro";
    }

    $build = [
      '#markup' => $res,
    ];


    return $build;
  }

}//Fin del controlador










