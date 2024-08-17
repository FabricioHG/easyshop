<?php
namespace Drupal\ws_mercado_libre\Service;

use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use GuzzleHttp\ClientInterface;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

class UserMercadoLibre
{
    protected $user;
    protected $messenger;
    protected $entityTypeManager;
    protected $request;
    protected $configFactory;
    protected $client_id;
    protected $client_secret;
    protected $redirect_uri;
    protected $userEntity;
    protected $config;

    // Constructor actualizado para incluir MessengerInterface
    public function __construct(AccountProxyInterface $user, MessengerInterface $messenger, EntityTypeManagerInterface $entityTypeManager, ClientInterface $request, ConfigFactoryInterface $configFactory)
    {
        $this->user = $user;
        $this->messenger = $messenger;
        $this->entityTypeManager = $entityTypeManager;
        $this->request = $request;
        $this->configFactory = $configFactory;

        $this->config = $this->configFactory->get('ws_mercado_libre.settings');
	    $this->client_id = $this->config->get('client_id');
	    $this->client_secret = $this->config->get('client_secret');
	    $this->redirect_uri = $this->config->get('url_redirect');

	    $userStorage = $this->entityTypeManager->getStorage('user');

	    $this->userEntity = $userStorage->load( $this->user->id() );
	    if (!$this->userEntity) {
            $this->messenger->addMessage('No se pudo cargar la entidad de usuario.', 'error');
        }
    }

    public function publicarArticulo($articulo)
    {
        // Construir el mensaje correctamente
        $mensaje = 'Artículo publicado en ML: ' . $articulo;

        // Agregar el mensaje al sistema de mensajería de Drupal
        $this->messenger->addMessage($mensaje);

        // Devolver el mensaje
        return $mensaje;
    }

    public function isTokenActive($token)
    {
        // Implementar la lógica real para verificar si el token está activo
        // Por ahora solo retorna un ejemplo
        return !empty($token) && $this->isTokenValid($token);
    }

    public function getToken()
    {
    	$user_id = $this->user->id();
    	$user = $this->entityTypeManager->getStorage('user')->load($user_id);
    	if ($user) {
    		$token = $user->get('field_mercadolibre_access_token')->getValue()[0]['value'];
    	}
    	else {
            $this->messenger->addMessage('No se pudo cargar la entidad de usuario.');
        }

        return $token;
    }

    public function refreshToken($old_token)
    {
        // Implementar la lógica real para refrescar un token
        // Este es un ejemplo simplificado
        return 'refresh token ' . $old_token;
    }

    public function isTokenValid()
    {
    	$token = $this->userEntity->get('field_mercadolibre_access_token')->getValue()[0]['value'];
    	kint('token '.$token);
    	exit;

    	// Implementar la lógica para validar el token, por ejemplo, haciendo una solicitud a la API
        try {
	      $response = $request->get('https://api.mercadolibre.com/users/me', [
	        'form_params' => [
	          'grant_type' => 'authorization_code',
	          'client_id' => $client_id,
	          'client_secret' => $client_secret,
	          'code' => $auth_code,
	          'redirect_uri' => $redirect_uri,
	          'code_verifier' => $code_verifier,
	        ],
	      ]);

	       $response = $client->get('https://api.mercadolibre.com/users/me', [
			    'headers' => [
			        'Authorization' => 'Bearer '.$this->token,
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
	     	$this->messenger->addMessage($this->t('Token Valido'));
	      // $data = json_decode($response->getBody(), true);
	      // $access_token = $data['access_token'];
	      // $refresh_token = $data['refresh_token'];

	      // // Save the tokens to the user's configuration or database.
	      // $user = \Drupal::currentUser();
	      // $account = \Drupal\user\Entity\User::load($user->id());
	      // $account->set('field_mercadolibre_access_token', $access_token);
	      // $account->set('field_mercadolibre_refresh_token', $refresh_token);
	      // $account->set('field_publish_products', TRUE);
	      // $account->save(); 

	      // \Drupal::messenger()->addMessage($this->t('Successfully connected to Mercado Libre.'));
	      // return new TrustedRedirectResponse('/user/' . $user->id());
	     }
    	
    	//return true; // Ejemplo simplificado
    }

}
