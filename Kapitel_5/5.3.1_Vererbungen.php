<?php 
class LKW extends Fahrzeug {
    function __construct($zuladung,$maxV = 100)
    {
      $this->zuladung = $zuladung;
      parent::__construct($maxV);
    }
  }
  
  $lkw = new LKW(500,75);
  $lkw->starteMotor();
  echo($lkw->gestartet)?'an':'aus';
  $lkw->beschleunigen(100);

?>