<?php 

/**
 * Überladungen
 * - Alle Überladungsmethoden müssen als public definiert sein.
 * - Keiner der Parameter dieser magischen Methoden kann als Referenz übergeben werden.
 * - Anwendungsfall 1: Zugriff auf nicht sichtbare Methoden oder Attribute oder 
 * - Anwendungsfall 2: Erstellung von nicht deklarierten Attribute oder Methoden
 */

// Iteration 10

// Klassenattribute überladen __get(), __set(), __isset(), __unset()

class Fahrzeug
{
  // Attribute
  public $gestartet = false;
  protected $aktuelleGeschwindigkeit = 0;
  private $hoechstGeschwindigkeit = 0;

  // Konstruktor
  function __construct($maxV = 180)
  {
    // echo "Das Fahrzeug hat eine Hoechstgeschwindigkeit von ";
    $this->hoechstGeschwindigkeit = $maxV;
    // echo "<br/>";
  }

  // added Feature __set_state()
  public static function __set_state($array)
  {
    $f = new Fahrzeug($array['hoechstGeschwindigkeit']);
    $f->gestartet=$array['gestartet'];
    $f->aktuelleGeschwindigkeit = $array['aktuelleGeschwindigkeit'];
    // var_export($f);
    
  }

  
  public function __toString()
 {
  // echo "Eine Hoechstgeschwindigkeit (toString) ";
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
    // echo "Das Fahrzeug hat eine Geschwindigkeit von ";
    $this->aktuelleGeschwindigkeit = $kmh;
    echo "<br/>";

  }
  
  public function starteMotor() {
    // echo "Motor ist gestartet: ";
    $this->gestartet = true;
    echo "<br/>";
  }
  public function stoppeMotor() {
    $this->gestartet = false;
  }
  public function beschleunigen($neuV) {
    if($this->gestartet) {
      if($neuV <= $this->hoechstGeschwindigkeit) {
        echo "Beschleunigung: ";
        echo $this->aktuelleGeschwindigkeit = $neuV;
        echo "<br/>";
      } else {
        echo "Beschleunigung: ";
        echo $this->aktuelleGeschwindigkeit = $this->hoechstGeschwindigkeit;
        echo "<br/>";
      }
    }
  }
  public function bremse($neuV) {
    if($neuV <= $this->aktuelleGeschwindigkeit){
        $this->aktuelleGeschwindigkeit = $neuV;
    } else {
        $this->aktuelleGeschwindigkeit = $this->aktuelleGeschwindigkeit;
    }
  }

  public function _get() {
    // echo "Das Attribut $attr ist nicht vorhanden";
    return array("gestartet" => $this->gestartet,
        "aktV" => $this->aktuelleGeschwindigkeit,
        "maxV" => $this->hoechstGeschwindigkeit
  );
  }



  public function __set($name, $value)
  {
    echo "Attribut ";
    echo $name;
    echo " kann nicht mit dem Wert ' ";
    echo $value;
    echo " ' belegt werden, weil es nicht existiert";
  }

  public function __isset($attr)
  {
    $this->anzahlFehlerIsset++;
    echo $this->anzahlFehlerIsset;
  }

  public function __unset($attr)
  {
    echo "Das Löschen von $attr ist nicht notwendig";
  }
}

$kfz = new Fahrzeug();
$kfz->$_POST['name'] = $_POST['wert'];
$kfz->__isset($attr);
$kfz->__unset($attr);
?>