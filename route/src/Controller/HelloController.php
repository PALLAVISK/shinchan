<?php
namespace Drupal\route\Controller;

class HelloController {
  public function content() {
    return array(
      '#type' => 'markup', 
      '#markup' => t('Hello! I am your node listing page.'), 
    ); 
  } 
} 