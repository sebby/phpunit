<?php
/**
 * Created by PhpStorm.
 * User: sebastiencunin
 * Date: 06/05/2019
 * Time: 05:42
 */

use Drupal\quadrupaler\Quadrupaler;
use PHPUnit\Framework\TestCase;

class QuadrupalerTest extends TestCase
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
  public function testQuadrupal_GivenAuthenticatedUser_FirstCHapUppercase(){
    $quad = new Quadrupaler();
    $this->assertEquals('Drupaldrupaldrupaldrupal', $quad->quadrupal('drupal'));
  }
}
