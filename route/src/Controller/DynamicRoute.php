<?php
namespace Drupal\route\Controller;
use Drupal\Core\Controller\ControllerBase;
 
class DynamicRoute extends ControllerBase {
    public function content($user) {
    return array(
      '#type' => 'markup', 
      '#markup' => t('Hello ' . $user . '! I am your node listing page.'), 
    ); 
  } 
} 