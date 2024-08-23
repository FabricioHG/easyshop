<?php
namespace Drupal\ws_mercado_libre\Service;

use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;

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

    public function isTokenActive()
    {
        $token_expires_in = $this->userEntity->get('field_ml_token_expires_in')->getValue()[0]['value'];
        if ($token_expires_in <= time()) {
        	return false;
        }
        else{
        	return true;
        }
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

    public function refreshToken()
    {
    	$token = $this->userEntity->get('field_mercadolibre_access_token')->getValue()[0]['value'];
    	$refresh_token = $this->userEntity->get('field_mercadolibre_refresh_token')->getValue()[0]['value'];
    	
    	// Implementar la lógica para validar el token, por ejemplo, haciendo una solicitud a la API
        try {
	    	$response = $client->post('https://api.mercadolibre.com/oauth/token', [
	        	'form_params' => [
	          		'grant_type' => 'authorization_code',
	          		'client_id' => $this->client_id,
	          		'client_secret' => $this->client_secret,
	          		'refresh_token' => $refresh_token,
	        	],
	      	]);
	    }
	    catch (ClientException $e) {
	      $response = $e->getResponse();
	      if ($response) {
	        $body = $response->getBody()->getContents();
	        $data = json_decode($body, TRUE);
	        $error_message = $data['message'];
	        \Drupal::logger('ws_mercado_libre')->notice('Error al intentar actualizar el refresh token %mensaje', ['%mensaje' => $error_message]);
	        return new TrustedRedirectResponse('/user');
	      }
	    }
		catch (\Exception $e) {
		    // Manejo de cualquier otro tipo de error
		    \Drupal::logger('ws_mercado_libre')->notice('Error %error', ['%error' => $e->getMessage()]);
		    return new TrustedRedirectResponse('/user');
		}

	    if ($response->getStatusCode() == 200) {
	    	$body = $response->getBody()->getContents();
	        $data = json_decode($body, TRUE);
	        $access_token_new = $data['access_token'];
     		$refresh_token_new = $data['refresh_token'];
     		$username = $this->userEntity->getName();

	      	// Save the tokens to the user's configuration or database.
	      	$this->userEntity->set('field_mercadolibre_access_token', $access_token_new);
	      	$this->userEntity->set('field_mercadolibre_refresh_token', $refresh_token_new);
	      	$this->userEntity->save(); 

	    	\Drupal::logger('ws_mercado_libre')->notice('Se actualizo el token del usuario %username', ['%username' => $username]);
	    	return true;
	     }
    }

    public function isTokenValid()
    {
    	$token = $this->userEntity->get('field_mercadolibre_access_token')->getValue()[0]['value'];
    	
    	// Implementar la lógica para validar el token, por ejemplo, haciendo una solicitud a la API
        try {
	       $response = $this->request->get('https://api.mercadolibre.com/users/me', [
			    'headers' => [
			        'Authorization' => 'Bearer '.$token,
			    ],
			]);
	    }
	    catch (ClientException $e) {
	      $response = $e->getResponse();
	      if ($response) {
	        $body = $response->getBody()->getContents();
	        $data = json_decode($body, TRUE);
	        $error_message = $data['message'];
	        \Drupal::logger('ws_mercado_libre')->notice('Error en la solicitud para validar token %mensaje', ['%mensaje' => $error_message]);
	        return new TrustedRedirectResponse('/user');
	      }
	    }
		catch (\Exception $e) {
		    // Manejo de cualquier otro tipo de error
		    \Drupal::logger('ws_mercado_libre')->notice('Error %error', ['%error' => $e->getMessage()]);
		    return new TrustedRedirectResponse('/user');
		}

	    if ($response->getStatusCode() == 200) {
	    	$body = $response->getBody()->getContents();
	        $data = json_decode($body, TRUE);
	        $usuario_id_ml = $data['id'];
	    	\Drupal::logger('ws_mercado_libre')->notice('token valido, id de usuario %usuario_id_ml', ['%usuario_id_ml' => $usuario_id_ml]);
	    	return true;
	     }
    }

}
