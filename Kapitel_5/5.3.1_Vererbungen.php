<?php 

// Klasse Fahrzeug Iteration 5

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
}

class ABS extends Fahrzeug {

  public $blocked = true;

  function __construct($blocked)
  {
    $this->blocked = $blocked;
  }
  public static function aktivieren($active) {
    $active->blocked = true;
  }

  public static function deaktivieren($notactive) {
    $notactive->blocked = false;
  }
}


class LKW extends Fahrzeug {

  public $statusLadeKlappe = false;
  public $zuladung = 500;

  function __construct($zuladung, $maxV = 100)
  {
    $this->zuladung = $zuladung;
    parent::__construct($maxV);
  }

  function senkeLadeklappe() {
    $this->statusLadeKlappe = false;
  }

  function hebeLadeklappe() {
    $this->statusLadeKlappe = true;
  }

  public function bremse($neuV) {
    ABS::aktivieren($neuV);
    parent::bremse($neuV);
    ABS::deaktivieren($neuV);
  }

}


$lkw = new LKW(500,75); // 500 Kilogramm und 75km/h
$lkw->starteMotor();
echo($lkw->gestartet)?'an':'aus';
echo "<br>";
$lkw->beschleunigen(100);

// parent:: Gueltigkeitsbereichoperator
class smartPhone {

  function installOs($os) {
    if($os === "linux") {
      return "Install linux on an apple device";
      return "<br/>";
    } 
    return;
  }

  function getInternet($internet) {
    if($internet >= 40) {
      return "Download mbps ist sehr gut";
    } else {
      return "Download mbps ist sehr niedrig";
    }
    
  }
}

$phone1 = new smartPhone;
$phone1->installOs('linux');
$phone1->getInternet(45);



class iphone extends smartPhone {
  function installOs($os)
  {
    echo parent::installOs($os);
  }
  function getInternet($internet)
  {
    echo parent::getInternet($internet);
  }
}



$iphone1 = new iphone;

$iphone1->installOs("lunix");
$iphone1->getInternet(30);



?>