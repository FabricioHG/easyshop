<?php

namespace Drupal\encuesta_ws\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "encuesta_ws_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("Encuesta WS")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
