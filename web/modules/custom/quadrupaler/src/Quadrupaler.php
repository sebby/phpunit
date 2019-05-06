<?php
/**
 * Created by PhpStorm.
 * User: sebastiencunin
 * Date: 06/05/2019
 * Time: 05:34
 */

class Quadrupaler
{
  public function quadrupal(string $string):string {
    return str_replace('drupal','drupaldrupaldrupaldrupal', $string);
  }
}
