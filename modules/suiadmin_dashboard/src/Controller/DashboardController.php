<?php

/**
 * @file
 * Contains \Drupal\suiadmin_dashboard\Controller\DashboardController.
 */

namespace Drupal\suiadmin_dashboard\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for SUIAdmin Dashboard.
 */
class DashboardController extends ControllerBase {

  /**
   * The controller method to display the dashboards page.
   */
  public function DashboardPage() {
    $output = array();

    $output['#title'] = 'SUIAdmin Dashboard';
    $output['#markup'] = 'content missing';

    return $output;
  }
  
}