<?php

/**
 * Implements hook_form_FORM_ID_alter().
 */
function suiadmin_theme_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['admin_theme_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Widget'),
    '#description' => t('Place this text in the widget spot on your site.'),
    '#default_value' => theme_get_setting('admin_theme_text'),
  );
}