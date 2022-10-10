<?php

namespace Drupal\social_icon_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'social_icon_block' Block.
 *
 * @Block(
 *   id = "social_icon_block",
 *   admin_label = @Translation("social_icon_block"),
 *   category = @Translation("social_icon_block"),
 * )
 */
class Social_icon_blockBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'social_icon_block',      
    ];
  }

}