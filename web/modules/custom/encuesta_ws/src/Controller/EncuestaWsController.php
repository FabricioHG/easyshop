<?php

namespace Drupal\encuesta_ws\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Encuesta WS routes.
 */
class EncuestaWsController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
