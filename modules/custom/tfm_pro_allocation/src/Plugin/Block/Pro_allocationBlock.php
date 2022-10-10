<?php

namespace Drupal\tfm_pro_allocation\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "Pro_allocation_block",
 *   admin_label = @Translation("Pro AllocationBlock"),
 *   category = @Translation("Pro AllocationBlock"),
 * )
 */
class Pro_allocationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $data= " ";   
    $ff = 'Feedback Form';
    $pf = 'Project Form'; 
    $data .= '<a href="/tfp9314/feedback/add">'.$ff.'</a>'.'<br>';    
    $data .= '<a href="/tfp9314/project/add">'.$pf.'</a>'.'<br>';     
    $build = [
        '#markup' =>  $data,
    ];      
    return $build; 
    
  }
  
}