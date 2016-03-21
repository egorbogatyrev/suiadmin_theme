<?php
namespace Drupal\suiadmin_core\Service;

class SuiadminCore {
  public function getBaseAdminPath() {
    return '/suiadmin';
  }

  public function getAdminTheme() {
    //TODO: implement vua config
    return 'suiadmin_theme';
  }

}