<?php

namespace Drupal\academy\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    
    $build = [];
    $build['#theme'] = 'default_block';
     $build['default_block']['#markup'] =  $this->user();

    return $build;
  }


  public function user() {

    $user = \Drupal::currentUser();
    $userName = $user->getUsername();

    if($user->isAuthenticated()) {
      return 'Bonjour '.$userName.'! <a href="/Drupal/creationTheme/user/logout" class="log">Se déconnecter</a>';
    }else {
      return '<a href="/Drupal/creationTheme/user/login" class="log">Se connecter </a>  <a href="/Drupal/creationTheme/register" class="log">S\'enregistrer</a>';
    }
   

  }

}



