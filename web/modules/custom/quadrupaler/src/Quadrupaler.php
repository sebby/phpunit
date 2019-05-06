<?php

namespace  Drupal\quadrupaler;


use Drupal\Core\Session\AccountProxy;

class Quadrupaler
{
  private $accountProxy;
  public function __construct(AccountProxy $accountProxy) {
    $this->accountProxy = $accountProxy;
  }

  public function quadrupal(string $string):string {
    $ap  = new AccountProxy();
    $replacement = str_replace('drupal','drupaldrupaldrupaldrupal', $string);
    if (!$ap->isAnonymous()) {
      $replacement = ucfirst($replacement);
    }

    return $replacement;
  }
}
