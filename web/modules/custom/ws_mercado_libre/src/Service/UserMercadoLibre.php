<?php

namespace Drupal\ws_mercado_libre\Service;

use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;
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
	protected $client;
	protected $configFactory;
	protected $client_id;
	protected $client_secret;
	protected $redirect_uri;
	protected $userEntity;
	protected $config;

	// Constructor actualizado para incluir MessengerInterface
	public function __construct(AccountProxyInterface $user, MessengerInterface $messenger, EntityTypeManagerInterface $entityTypeManager, ClientInterface $client, ConfigFactoryInterface $configFactory)
	{
		$this->user = $user;
		$this->messenger = $messenger;
		$this->entityTypeManager = $entityTypeManager;
		$this->client = $client;
		$this->configFactory = $configFactory;

		$this->config = $this->configFactory->get('ws_mercado_libre.settings');
		$this->client_id = $this->config->get('client_id');
		$this->client_secret = $this->config->get('client_secret');
		$this->redirect_uri = $this->config->get('url_redirect');

		$userStorage = $this->entityTypeManager->getStorage('user');

		$this->userEntity = $userStorage->load($this->user->id());
		if (!$this->userEntity) {
			$this->messenger->addMessage('No se pudo cargar la entidad de usuario.', 'error');
		}
	}

	public function publicarArticulo($data_product)
	{
		/*Obtener el token y validar esi esta activo para su uso*/
		if ($this->isTokenValid()) {
			$token_user = $this->getToken();
		} else {
			if (!$this->isTokenActive()) {
				$this->refreshToken();
			} else {
				$this->messenger->addMessage('Error, el token de usuario para la conexión con mercado libre no es valido');
				\Drupal::logger('ws_mercado_libre')->notice('Error, el token de usuario para la conexión con mercado libre no es valido');
			}
		}

		$body = [
			"title" => $data_product['title'],
			"category_id" => $data_product['category_id'],
			"price" => $data_product['price'],
			"currency_id" => $data_product['currency_id'],
			"available_quantity" => $data_product['available_quantity'],
			"buying_mode" => $data_product['buying_mode'],
			"condition" => $data_product['condition'],
			"listing_type_id" => $data_product['listing_type_id'],
			"pictures" => $data_product['pictures'],
			"attributes" => $data_product['attributes'],
		];
		
		$jsonBody = json_encode($body);
		//kint($jsonBody);
		// exit;

		$client = new Client();

		try {
			$response = $client->post('https://api.mercadolibre.com/items', [
				'body' => $jsonBody,
				'headers' => [
					'Content-Type' => 'application/json',
					'Authorization' => "Bearer $token_user",
				],
			]);
		} catch (ClientException $e) {
			$response = $e->getResponse();
			if ($response) {
				$body = $response->getBody()->getContents();
				$data = json_decode($body, TRUE);
				$errores = $data['cause'];
				//Buscar en el array de errores si existe alguno con type=>error porque tambien existen type=>warning pero esos no nos interesan
				$mensajesDeError = array_map(function ($item) {
					return $item['message'];
				}, array_filter($errores, function ($item) {
					return isset($item['type']) && $item['type'] === 'error';
				}));

				//\Drupal::logger('ws_mercado_libre')->notice('Array de error: %error_completo', ['%error_completo' => print_r($data, true)]);
				$this->messenger->addMessage('Error al tratar de publicar el articulo en Mercado Libre', 'error');
				
				foreach ($mensajesDeError as $key => $mensaje) {
					$this->messenger->addMessage($mensaje, 'error');
				}

				return false;
			}
		}

		if ($response->getStatusCode() == 201) {
			/*Revisando si hay respuesta*/
			$data = json_decode($response->getBody(), true);
			if($this->agregarDescripcion($data_product['description'], $data['id'])){
				$this->messenger->addMessage('Se publico el articulo en Mercado Libre.');
				\Drupal::logger('ws_mercado_libre')->notice('Se publico el articulo %articulo en Mercado libre', ["%articulo" => $data_product['title']]);
			}
			else{
				$this->messenger->addMessage('Se publico el articulo en Mercado Libre sin descripción.');
				\Drupal::logger('ws_mercado_libre')->notice('Se publico el articulo %articulo en Mercado libre sin descripción.', ["%articulo" => $data_product['title']]);
			}
			
			//\Drupal::logger('debug')->notice('Respuesta de publicacion. %resp', ["%resp" => print_r($data, true)]);
			return true;
		}

		\Drupal::logger('ws_mercado_libre')->notice('Error, se obtuvo una respuesta inesperada al publicar el producto: %respuesta', ["%articulo" => $response->getReasonPhrase()]);
		return false;
	}

	public function agregarDescripcion($texto, $item_id){
		$item_id = $item_id;
		$token_user = $this->getToken();

		//Formatear a texto plano para la descripcion
		// 1. Reemplazar etiquetas <br> por saltos de línea.
		$text_with_newlines = str_replace('<br>', "\n", $texto);
		// 2. Reemplazar etiquetas de párrafo <p> y </p> por saltos de línea.
		$text_with_newlines = str_replace(['<p>', '</p>'], "\n", $text_with_newlines);
		// 3. Eliminar cualquier etiqueta HTML restante.
		$text_plain = strip_tags($text_with_newlines);
		// 4. Eliminar espacios en blanco adicionales al inicio o final.
		$text_plain = trim($text_plain);

		$jsonBody = json_encode([
			'plain_text' => strip_tags($text_plain),
		]);

		$client = new Client();
		try {
			$response = $client->post('https://api.mercadolibre.com/items/'.$item_id.'/description', [
				'body' => $jsonBody,
				'headers' => [
					'Content-Type' => 'application/json',
					'Authorization' => "Bearer $token_user",
				],
			]);
		} catch (ClientException $e) {
			$response = $e->getResponse();
				if ($response) {
					$body = $response->getBody()->getContents();
					$data = json_decode($body, TRUE);

					\Drupal::logger('debug')->notice('Error descripcion: %error_completo', ['%error_completo' => print_r($data, true)]);
					return false;
				}
		}
		if ($response->getStatusCode() /*== 201*/) {
			/*Revisando si hay respuesta*/
			$data = json_decode($response->getBody(), true);
			if( isset($data['plain_text']) ){
				//\Drupal::logger('ws_mercado_libre')->notice('Respuesta al agregar la descripcion %respuesta', ["%respuesta" => print_r($data, true)]);
			}			
			return true;
		}
	}

	public function isTokenActive()
	{
		$token_expires_in = $this->userEntity->get('field_ml_token_expires_in')->getValue()[0]['value'];
		if ($token_expires_in <= time()) {
			return false;
		} else {
			return true;
		}
	}

	public function getToken()
	{
		$user_id = $this->user->id();
		$user = $this->entityTypeManager->getStorage('user')->load($user_id);
		if ($user) {
			$token = $user->get('field_mercadolibre_access_token')->getValue()[0]['value'];
		} else {
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
			$response = $this->client->post('https://api.mercadolibre.com/oauth/token', [
				'form_params' => [
					'grant_type' => 'refresh_token',
					'client_id' => $this->client_id,
					'client_secret' => $this->client_secret,
					'refresh_token' => $refresh_token,
				],
			]);
		} catch (ClientException $e) {
			$response = $e->getResponse();
			if ($response) {
				$body = $response->getBody()->getContents();
				$data = json_decode($body, TRUE);
				$error_message = $data['message'];
				\Drupal::logger('ws_mercado_libre')->notice('Error al intentar actualizar el refresh token %mensaje', ['%mensaje' => $error_message]);
				return false; //new TrustedRedirectResponse('/user');
			}
		} catch (\Exception $e) {
			// Manejo de cualquier otro tipo de error
			\Drupal::logger('ws_mercado_libre')->notice('Error %error', ['%error' => $e->getMessage()]);
			return false; //new TrustedRedirectResponse('/user');
		}

		if ($response->getStatusCode() == 200) {
			$body = $response->getBody()->getContents();
			$data = json_decode($body, TRUE);
			$access_token_new = $data['access_token'];
			$refresh_token_new = $data['refresh_token'];
			$token_expires_in = time() + 21600;
			$username = $this->userEntity->getDisplayName();

			// Save the tokens to the user's configuration or database.
			$this->userEntity->set('field_mercadolibre_access_token', $access_token_new);
			$this->userEntity->set('field_mercadolibre_refresh_token', $refresh_token_new);
			$this->userEntity->set('field_ml_token_expires_in', $token_expires_in);


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
			$response = $this->client->get('https://api.mercadolibre.com/users/me', [
				'headers' => [
					'Authorization' => 'Bearer ' . $token,
				],
			]);
		} catch (ClientException $e) {
			$response = $e->getResponse();
			if ($response) {
				$body = $response->getBody()->getContents();
				$data = json_decode($body, TRUE);
				$error_message = $data['message'];
				\Drupal::logger('ws_mercado_libre')->notice('Error en la solicitud para validar token %mensaje', ['%mensaje' => $error_message]);
				$this->messenger->addMessage('Error en la solicitud para validar token. Revisar los mensajes de registro.');
				//return new TrustedRedirectResponse('/user');
				return false;
			}
		} catch (\Exception $e) {
			// Manejo de cualquier otro tipo de error
			\Drupal::logger('ws_mercado_libre')->notice('Error %error', ['%error' => $e->getMessage()]);
			$this->messenger->addMessage('Error en la solicitud para validar token. Revisar los mensajes de registro.');
			//return new TrustedRedirectResponse('/user');
			return false;
		}

		if ($response->getStatusCode() == 200) {
			$body = $response->getBody()->getContents();
			$data = json_decode($body, TRUE);
			$usuario_id_ml = $data['id'];
			\Drupal::logger('ws_mercado_libre')->notice('token valido, id de usuario %usuario_id_ml', ['%usuario_id_ml' => $usuario_id_ml]);
			return true;
		}
	}

	public function predecir_categoria($titulo)
	{
		/*Obtener el token y validar esi esta activo para su uso*/
		if ($this->isTokenValid()) {
			$token_user = $this->getToken();
		} else {
			if (!$this->isTokenActive()) {
				$this->refreshToken();
			} else {
				$this->messenger->addMessage('Error, el token de usuario para la conexión con mercado libre no es valido');
				\Drupal::logger('ws_mercado_libre')->notice('Error, el token de usuario para la conexión con mercado libre no es valido');
			}
		}

		/*Hacer una peticion a la url para obtener prediccion de categorias
        https://api.mercadolibre.com/sites/MLM/domain_discovery/search?q=Item de test - No Ofertar
        */
		$request = "https://api.mercadolibre.com/sites/MLM/domain_discovery/search?q=" . $titulo;
		$headers = ['Authorization' => "Bearer $token_user"];

		try {
			$response = $this->client->request('GET', $request, $headers);
		} catch (ClientException $e) {
			$response = $e->getResponse();
			if ($response) {
				$body = $response->getBody()->getContents();
				$data = json_decode($body, TRUE);
				$error = $data['error'];
				\Drupal::logger('ws_mercado_libre')->notice('Mensaje %mensaje', ['%mensaje' => $error]);
				$this->messenger->addMessage('Error al obtener las categorias del producto');
			}
		}

		if ($response->getStatusCode() == 200) {
			$categorias = [];
			$body = $response->getBody()->getContents();
			$data = json_decode($body, TRUE);
			foreach ($data as  $categoria) {
				$categorias['categoria_select'][$categoria['category_id']] = $categoria['domain_name'];
				$categorias['atributos_implicitos'][$categoria['category_id']] = $categoria['attributes'];
			}
			return $categorias;
		} else {
			\Drupal::logger('ws_mercado_libre')->notice('Mensaje %mensaje', ['%mensaje' => $response->getStatusCode()]);
			$this->messenger->addMessage('Error al obtener la categoría para el producto: @error', ["@error" => $response->getStatusCode()]);
		}
	}

	public function obtener_attr_obligatorios($codigo_cat)
	{
		$request = "https://api.mercadolibre.com/categories/$codigo_cat/attributes";

		try {
			$response = $this->client->request('GET', $request);
		} catch (ClientException $e) {
			$response = $e->getResponse();
			if ($response) {
				$body = $response->getBody()->getContents();
				$data = json_decode($body, TRUE);
				$error = $data['error'];
				\Drupal::logger('ws_mercado_libre')->notice('Mensaje %mensaje', ['%mensaje' => $error]);
				$this->messenger->addMessage('Error en la conexion al tratar de obtener atributos obligatorios de la categoria');
			}
		}

		if ($response->getStatusCode() == 200) {
			$body = $response->getBody()->getContents();
			$data = json_decode($body, TRUE);
			$atributos_obligatorios = array();
			foreach ($data as $num_attr) {
				if (array_key_exists('required', $num_attr['tags']) || array_key_exists('conditional_required', $num_attr['tags'])) {
					$found_key = array_key_exists('required', $num_attr['tags']) ? 'required' : 'conditional_required';
					$atributos_obligatorios[] = [
						'id' => $num_attr['id'],
						'name' => $num_attr['name'],
						'value_name' => '',
						'values' => $num_attr['values'],
						'required' => $found_key,
					];
				}
			}
			return $atributos_obligatorios;
		} else {
			\Drupal::logger('ws_mercado_libre')->notice('Mensaje %mensaje', ['%mensaje' => $response->getStatusCode()]);
			$this->messenger->addMessage('Error al obtener atributos obligatorios sobre la categoria: @error', ["@error" => $response->getStatusCode()]);
		}
	}
}
