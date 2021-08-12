<?php 

// Auslösende Ereignisse für magische Methoden

function __construct() {
    // Erstellen eines Objektes
}

function __destruct() {
    // Zerstören eines Objektes
}

function __sleep() {
    // Serialisieren eines Objektes: Ein Objekt wird einem String nach bestimmten Syntaxregeln gespeichert
}
function __wakeup() {
    // Deserialisieren eines Objektes
}
function __invoke() {
    // Aufruf eines Objektes
}
function __toString() {
    // Konvertierung des Objekts in einen String
}
function __set_state() {
    // Export des Objekts über var_export()
}
function __autoload($x) {
    // Erstellen eines Objekts einer unbekannten Klasse
}
function __clone() {
    // Anfertigen einer exakten Objektkopie
}
function __get() {
    // Lesen aus nicht deklarierten Objektattributen
}
function __set() {
    // Schreiben aus nicht deklarierten Objektattributen
}
function __isset() {
    // Existenzabfrage auf nicht deklarierter Objektattribute
}
function __unset() {
    // Löschen nicht deklarierter Objektattribute
}
function __call() {
    // Aufruf einer nicht implementierten Methode
}function __callStatic() {
    // Aufruf einer unimplementierten statischen Methode
}

// Serialisierung & Desierialisierung

// Methode: serialize()
// i: steht für integer & s: steht für String
$array = serialize(array('version' => 2, 'datum' => '2008-11-09'));
$unserialize = unserialize($array);
var_dump($unserialize);

// Klasse Fahrzeug Iteration 2
class Fahrzeug2
{
  // Attribute
  public $gestartet = false;
  protected $aktuelleGeschwindigkeit = 0;
  private $hoechstGeschwindigkeit = 0;
  // Konstruktor
  function __construct($maxV = 180)
  {
    $this->hoechstGeschwindigkeit = $maxV;
  }

  // Serialize 
  public function __sleep() {
    return array('gestartet', 'hoechstGeschwindigkeit');
  }
  // Unserialize
  public function __wakeup()
  {
    $this->aktuelleGeschwindigkeit = 0;
  }
  
  public function starteMotor() {
    $this->gestartet = true;
  }
  public function stoppeMotor() {
    $this->gestartet = false;
  }
  public function beschleunigen($neuV) {
    if($this->gestartet) {
      if($neuV <= $this->hoechstGeschwindigkeit) {
        $this->aktuelleGeschwindigkeit = $neuV;
      } else {
        $this->aktuelleGeschwindigkeit = $this->hoechstGeschwindigkeit;
      }
    }
  }

}

// Klasse Fahrzeug Iteration 3

class Fahrzeug3
{
  // Attribute
  public $gestartet = false;
  protected $aktuelleGeschwindigkeit = 0;
  private $hoechstGeschwindigkeit = 0;

  // Konstruktor
  function __construct($maxV = 180)
  {
    $this->hoechstGeschwindigkeit = $maxV;
  }
  // Serialize 
  public function __sleep() {
    return array('gestartet', 'hoechstGeschwindigkeit');
  }
  // Unserialize
  public function __wakeup()
  {
    $this->aktuelleGeschwindigkeit = 0;
  }

  public function __invoke($kmh)
  {
    echo "Das Fahrzeug hat eine Geschwindigkeit von ";
    echo $this->aktuelleGeschwindigkeit = $kmh;

  }
  
  public function starteMotor() {
    $this->gestartet = true;
  }
  public function stoppeMotor() {
    $this->gestartet = false;
  }
  public function beschleunigen($neuV) {
    if($this->gestartet) {
      if($neuV <= $this->hoechstGeschwindigkeit) {
        $this->aktuelleGeschwindigkeit = $neuV;
      } else {
        $this->aktuelleGeschwindigkeit = $this->hoechstGeschwindigkeit;
      }
    }
  }
}

$kfz = new Fahrzeug;
$kfz(150);



// Klasse Fahrzeug Iteration 4

class Fahrzeug4
{
  // Attribute
  public $gestartet = false;
  protected $aktuelleGeschwindigkeit = 0;
  private $hoechstGeschwindigkeit = 0;

  // Konstruktor
  function __construct($maxV = 180)
  {
    echo "Das Fahrzeug hat eine Hoechstgeschwindigkeit von ";
    echo $this->hoechstGeschwindigkeit = $maxV;
    echo "<br/>";
  }

  // New Feature __set_state()
  public static function __set_state($array)
  {
    $f = new Fahrzeug($array['hoechstGeschwindigkeit']);
    $f->gestartet=$array['gestartet'];
    $f->aktuelleGeschwindigkeit = $array['aktuelleGeschwindigkeit'];
    var_export($f);
  }

  
  public function __toString()
 {
  echo "Eine Hoechstgeschwindigkeit (toString) ";
  return $this->hoechstGeschwindigkeit;
 }
  // Serialize 
  public function __sleep() {
    return array('gestartet', 'hoechstGeschwindigkeit');
  }
  // Unserialize
  public function __wakeup()
  {
    $this->aktuelleGeschwindigkeit = 0;
  }

  public function __invoke($kmh)
  {
    echo "Das Fahrzeug hat eine Geschwindigkeit von ";
    echo $this->aktuelleGeschwindigkeit = $kmh;
    echo "<br/>";

  }
  
  public function starteMotor() {
    echo "Motor ist gestartet: ";
    echo $this->gestartet = true;
    echo "<br/>";
  }
  public function stoppeMotor() {
    $this->gestartet = false;
  }
  public function beschleunigen($neuV) {
    if($this->gestartet) {
      if($neuV <= $this->hoechstGeschwindigkeit) {
        echo "Beschleunigung Aktuelle Geschwindigkeit: ";
        echo $this->aktuelleGeschwindigkeit = $neuV;
        echo "<br/>";
      } else {
        echo "Beschleunigung Aktuelle Hoechstgeschwindigkeit: ";
        $this->aktuelleGeschwindigkeit = $this->hoechstGeschwindigkeit;
        echo "<br/>";
      }
    }
  }
  public function bremse($neuV) {
    if($neuV <= $this->aktuelleGeschwindigkeit){
      echo $this->aktuelleGeschwindigkeit = $neuV;
    } else {
      echo $this->aktuelleGeschwindigkeit = $this->aktuelleGeschwindigkeit;
    }
  }
}











?>