<?php
namespace Drupal\suiadmin_core\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

class SuiadminNegotiator implements ThemeNegotiatorInterface {
  public function applies(RouteMatchInterface $route_match) {
    return strpos(\Drupal::service('path.current')->getPath(), '/suiadmin') === 0;//TODO: suiadmin move to config
  }

  public function determineActiveTheme(RouteMatchInterface $route_match) {
    return 'semanticui_admin_theme';
  }

}