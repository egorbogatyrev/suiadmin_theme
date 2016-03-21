<?php
namespace Drupal\suiadmin_core\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

class SuiadminNegotiator implements ThemeNegotiatorInterface {
  public function applies(RouteMatchInterface $route_match) {
    /** @var \Drupal\suiadmin_core\Service\SuiadminCore $suiadmin_core_service */
    $suiadmin_core_service = \Drupal::service('suiadmin.core');
    return strpos(
      \Drupal::service('path.current')->getPath(),
      $suiadmin_core_service->getBaseAdminPath()
    ) === 0;//TODO: suiadmin move to config
  }

  public function determineActiveTheme(RouteMatchInterface $route_match) {
    /** @var \Drupal\suiadmin_core\Service\SuiadminCore $suiadmin_core_service */
    $suiadmin_core_service = \Drupal::service('suiadmin.core');
    return $suiadmin_core_service->getAdminTheme();
  }
}