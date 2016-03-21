<?php
namespace Drupal\suiadmin_content\Controller;

use Drupal\Core\Controller\ControllerBase;

class Content extends ControllerBase {
  public function displayAll() {
    $output = array();

    $output['#title'] = 'SUIAdmin content';
    $output['#markup'] = 'content missing';

    return $output;

  }
}
