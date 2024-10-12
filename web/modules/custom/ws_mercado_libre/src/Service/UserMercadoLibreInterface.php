<?php


namespace Drupal\ws_mercado_libre\Service;

interface UserMercadoLibreInterface {

	public function publicarArticulo($articulo);

	public function isTokenActive($token);

	public function getToken();

	public function refreshToken($old_token);

	public function isTokenValid($token);
}
