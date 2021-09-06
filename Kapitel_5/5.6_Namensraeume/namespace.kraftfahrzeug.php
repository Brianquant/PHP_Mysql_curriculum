<?php 

/**
 * Namespace
 * Namensräume sind Pakete von Klassen, Funktionen, Konstanten
 */


namespace Kraftfahrzeug;

class Fahrzeug {
  public $gestartet = false;
  function __construct() {}
  public function starteMotor() {}
  
}

class LKW extends Fahrzeug{}

print_r(get_declared_classes());



?>