<?php

namespace Drupal\entity_usage\Plugin\EntityUsage\Track;

use Drupal\Component\Utility\Html;

/**
 * Tracks usage of images embedded in WYSIWYG fields with CKEditor Image plugin.
 *
 * @EntityUsageTrack(
 *   id = "ckeditor_image",
 *   label = @Translation("CKEditor Image"),
 *   description = @Translation("Tracks relationships created with CKEditor Image widget in formatted text fields."),
 *   field_types = {"text", "text_long", "text_with_summary"},
 * )
 */
class CkeditorImage extends TextFieldEmbedBase {

  /**
   * {@inheritdoc}
   */
  public function parseEntitiesFromText($text) {
    $dom = Html::load($text);
    $xpath = new \DOMXPath($dom);
    $entities = [];
    foreach ($xpath->query('//img[@data-entity-type and @data-entity-uuid]') as $node) {
      assert($node instanceof \DOMElement);
      // Skip elements with empty data-entity-uuid/type attributes.
      if (empty($node->getAttribute('data-entity-uuid'))
        || empty($node->getAttribute('data-entity-type'))
      ) {
        continue;
      }

      $entity_type_id = $node->getAttribute('data-entity-type');
      if ($this->isEntityTypeTracked($entity_type_id)) {
        // Note that this does not cover 100% of the situations. In the
        // (unlikely but possible) use case where the user embeds the same
        // entity twice in the same field, we are just recording 1 usage for
        // this target entity, when we should record 2. The alternative is to
        // add a lot of complexity to the update logic of our plugin, to deal
        // with all possible combinations in the update scenario.
        // @todo Re-evaluate if this is worth the effort and overhead.
        $entities[$node->getAttribute('data-entity-uuid')] = $entity_type_id;
      }
    }
    return $entities;
  }

}
