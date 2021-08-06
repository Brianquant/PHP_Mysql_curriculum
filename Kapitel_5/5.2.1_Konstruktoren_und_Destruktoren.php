<?php 

// Konstruktoren & Destruktoren: 
//using a constructor saves us from calling the set_name() method which reduces the amount of code
class Fahrzeug {
    // Properties
    public $gestartet;
    public $aktuelleGeschwindigkeit;
  
    // Methods
    function __construct($gestartet,$aktuelleGeschwindigkeit) {
      $this->gestartet = $gestartet;
      $this->aktuelleGeschwindigkeit = $aktuelleGeschwindigkeit;

    }

    function __destruct() {
        echo "Das Fahrzeug ist {$this->gestartet} und die Aktuellegeschwindigkeit beträgt {$this->aktuelleGeschwindigkeit}.";
      }


    function get_gestartet() {
      return $this->gestartet;
    }
    function get_aktuelleGeschwindigkeit() {
      return $this->aktuelleGeschwindigkeit;
    }
  }
  
  $modus = new Fahrzeug('on','250');
  
  echo "Gestartet:" . " " . $modus->get_gestartet();
  echo "<br>";
  echo "Hoechstgeschwindigkeit:" . " " . $modus->get_aktuelleGeschwindigkeit();
  echo "<br />";



?>