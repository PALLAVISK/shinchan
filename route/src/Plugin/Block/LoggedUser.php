<?php

namespace Drupal\route\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'User Name' Block.
 *
 * @Block(
 *   id = "my_show_user",
 *   admin_label = @Translation("Show User"),
 *   category = @Translation("Show User"),
 * )
 */

class LoggedUser extends BlockBase {

    /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t(\Drupal::currentUser()->getUsername()),
    );
  }

}