<?php 

class Fahrzeug {
    // Properties
    public $gestartet;
    public $aktuelleGeschwindigkeit;
  
    // Methods
    function set_gestartet($gestartet) {
      $this->gestartet = $gestartet;
    }
    function get_gestartet() {
      return $this->gestartet;
    }
    
    function set_aktuelleGeschwindigkeit($aktuelleGeschwindigkeit) {
      $this->aktuelleGeschwindigkeit = $aktuelleGeschwindigkeit;
    }
    function get_aktuelleGeschwindigkeit() {
      return $this->aktuelleGeschwindigkeit;
    }
  }
  
  $on = new Fahrzeug();
  $max = new Fahrzeug();
  $on->set_gestartet('on');
  $max->set_aktuelleGeschwindigkeit('250');
  
  
  
  echo "Gestartet:" . " " . $on->get_gestartet();
  echo "<br>";
  echo "Hoechstgeschwindigkeit:" . " " . $max->get_aktuelleGeschwindigkeit();
  echo "<br />";
//   get_class() Funktion; Gibt die Klasse wieder mit Boolischen Wert
  echo get_class($on);
  echo "<br/>";
// instanceof prueft ob die Instanz zu der Klasse zugewisen wurde
  echo ($on instanceof Fahrzeug)?'ja':'nein';
  echo "<br/>";
// class_exists prueft ob die Klasse vorhanden ist. Gibt einen Boolischen Wert wieder.
  echo class_exists("Fahrzeug");
  echo "<br/>";

//   Klassenbasis Konstante
  const DB_USER = 'phpmysql_user';

  echo DB_USER;


?>