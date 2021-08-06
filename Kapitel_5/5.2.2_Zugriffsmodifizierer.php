<?php 

/**
 * public(+) Element is von jedem Scope erreichbar
 * protected(#) Element is nur von Objekten der eigenen Klasse erreichbar oder von abgeleiteten Klassen
 * private(-) Element is nur von von Objekten der eigenen Klasse erreichbar
 */


class Fahrzeug {
    public $gestartet = "Aus";
    public $aktuelleGeschwindigkeit = 0;
    public $hoechstGeschwindigkeit = 180;
  
    function status() {
       $this->gestartet;
       $this->aktuelleGeschwindigkeit;
       $this->hoechstGeschwindigkeit;
    }
    protected function greifen() {
        echo "Ich greife";
        echo "<br />";
      }
    
  }
  
  $obj = new Fahrzeug();
  echo $obj->gestartet; // Funktioniert
  echo "<br />";
  echo $obj->aktuelleGeschwindigkeit; // Fataler Fehler
  echo "<br />";
  echo $obj->hoechstGeschwindigkeit; // Fataler Fehler
  echo "<br />";
  $obj->status();

  // Gültigkeitsbereichsoperator
class Bremse extends Fahrzeug {

    public function greifen() {
      parent::greifen();
      echo "Ich greife";
    }
  
  }
  
  $class = new Bremse();
  $class->greifen();



?>