<?php
/**
 * Created by PhpStorm.
 * User: sebastiencunin
 * Date: 06/05/2019
 * Time: 05:42
 */

require_once 'Quadrupaler.php';

class QuadrupalerTest extends PHPUnit\Framework\TestCase
{
  public function testQuadrupal_GivenOneDrupal_ReturnFourDrupals(){
    $quad = new Quadrupaler();
    $this->assertEquals('drupaldrupaldrupaldrupal', $quad->quadrupal('drupal'));
  }

  public function testQuadrupal_GivenDRUPAL_ReturnDRUPAL(){
    $quad = new Quadrupaler();
    $this->assertEquals('DRUPAL', $quad->quadrupal('DRUPAL'));
  }

  public function testQuadrupal_GivenDrupalWithText_ReturnFourDrupalWithText(){
    $quad = new Quadrupaler();
    $this->assertEquals('adrupaldrupaldrupaldrupala', $quad->quadrupal('adrupala'));
  }
}
