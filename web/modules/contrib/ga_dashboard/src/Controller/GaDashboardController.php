<?php

namespace Drupal\ga_dashboard\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Welcome page module.
 */
class GaDashboardController extends ControllerBase {

  /**
   * Returns a simple message page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function gaDashboard() {
    // Specify the view ID and display ID of the view block you want to render.
    $view_id = 'ga_reports_page';
    $display_ids = [
      'sessions_and_pageviews',
      'top_pages_block',
      'top_cities',
      'site_speed',
      'top_sources_block',
    ];

    // Render the view block.
    $rendered_view = [];
    foreach ($display_ids as $display_id) {
      $rendered_view[] = views_embed_view($view_id, $display_id);
    }
    return $rendered_view;
  }

}
