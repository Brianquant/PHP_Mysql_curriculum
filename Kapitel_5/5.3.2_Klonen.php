<?php 

// Iteration 11
// Klonen mit dem Schlüsselwort clone, welches ein Objekt repliziert
class Bus extends Fahrzeug {

    use Hilfsysteme;
  
    public static $cameras = "on";
    public $wheels = 6;
    public $sensors;
  
    public static function closeDoors($sensors) {
      if($sensors === 0) {
        echo "Close doors";
      } else {
        echo "Doors are still open";
      }
    }
  
    public function meldeAusfall()
    {
      echo "Alle Systeme sind ausgefallen";
    }
  
  
  }
  
  
  
  echo "<br/>";
  echo "Cameras:";
  echo Bus::$cameras; // Access Atrribute
  echo "<br/>";
  
  echo Bus::closeDoors(1);
  echo "<br/>";
  
  $originalBus = new Bus();
  $kopieBus = clone $originalBus;
  print_r($kopieBus);

// Iteration 11
// Klonen mit dem Schlüsselwort clone und der Methode _clone()

class Bus extends Fahrzeug {

    use Hilfsysteme;
  
    public static $cameras = "on";
    public $wheels = 6;
    public $sensors;
  
    public static function closeDoors($sensors) {
      if($sensors === 0) {
        echo "Close doors";
      } else {
        echo "Doors are still open";
      }
    }
  
    public function meldeAusfall()
    {
      echo "Alle Systeme sind ausgefallen";
    }
  
    function __clone()
    {
      $this->wheels = 4;
    }
  
  }
  
  
  
  echo "<br/>";
  echo "Cameras:";
  echo Bus::$cameras; // Access Atrribute
  echo "<br/>";
  
  echo Bus::closeDoors(1);
  echo "<br/>";
  
  $originalBus = new Bus();
  $kopieBus = clone $originalBus;
  echo $kopieBus->wheels;
  


?>