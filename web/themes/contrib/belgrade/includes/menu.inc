<?php

/**
 * @file
 * Theme and preprocess functions for menus.
 */

/**
 * Implements template_preprocess_menu_local_action().
 */
function belgrade_preprocess_menu_local_action(&$variables) {
  // Add button classes.
  $variables['link']['#options']['attributes']['class'][] = 'btn';
  $variables['link']['#options']['attributes']['class'][] = 'btn-sm';
  $variables['link']['#options']['attributes']['class'][] = 'btn-primary';
}

/**
 * Implements template_preprocess_links__dropbutton().
 */
function belgrade_preprocess_links__dropbutton(&$variables) {
  $links = &$variables['links'];

  // Do nothing if we have no links.
  if (!count($links)) {
    return;
  }

  // Get the first link and use it for the dropbutton.
  $link = reset($links);

  /** @var \Drupal\Core\Url $url */
  $variables['split'] = FALSE;
  if (isset($link['link']) && ($url = $link['link']['#url'])) {
    $button = $link['link'];

    if ($variables['split'] = $url->getRouteName() !== '<nolink>') {
      $button['#options']['attributes']['class'][] = 'btn';
      $button['#options']['attributes']['class'][] = 'btn-sm';
      $button['#options']['attributes']['class'][] = 'btn-outline-dark';
    }

    $variables['button'] = $button;

    // Remove first link from links.
    array_shift($links);
  }

  // Add required classes.
  foreach ($links as $key => $link) {
    $links[$key]['link']['#options']['attributes']['class'][] = 'dropdown-item';

    if (isset($links[$key]['text_attributes'])) {
      $links[$key]['text_attributes']->addClass('dropdown-item');
    }

    if (isset($links[$key]['attributes'])) {
      $links[$key]['attributes']->addClass('dropdown-item');
    }
  }
}
