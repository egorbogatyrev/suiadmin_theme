# Administration theme for Drupal 8#
Comes with scope of modules which bring completely new appearance of Drupal administrative interface without replacing existing one. 

New admin panel can be found by /suiadmin path

## Installation ##
- Download theme
- Enable *suiadmin_theme* theme
- Enable *suiadmin_core* module(comes with theme).

## Development ##
- Enable ```drush en suiadmin_theme -y```
- Make it administration theme ``` drush config-set system.theme admin suiadmin_theme -y```