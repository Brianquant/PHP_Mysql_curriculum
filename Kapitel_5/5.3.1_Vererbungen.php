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

// Abstrakte Klassen und Metthoden

// Example 1 START
abstract class Elternklasse {
  abstract public function abstrElternMethoden();

  public function implElternMethode() {
    echo 'implementierte Methode';
    echo "<br/>";
  }
}

class Kindklasse extends Elternklasse {

  public function abstrElternMethoden() {
    echo 'Implementierung einer abstrakten Methode';
    echo "<br/>";
  }
}

$kind = new Kindklasse();
$kind->abstrElternMethoden();
$kind->implElternMethode();
// Example 1 END

// Example 2 START
abstract class Os {
  abstract public function installLinux($vm);
  
}

class VM extends Os {
  public function installLinux($vm)
  {
    if($vm === "Linux Virtual Machine") {
        echo "Nice Choice";
    } else {
      echo "Bad Choice";
    }
  }
}

$os = new VM();
$os->installLinux("Linux Virtual Machine");

// Example 2 END

// Interface and implements
// Iteration 6 

interface Scheibenwischer {
  public function einschalten($param);
  public function ausschalten($param);
}
 

class LKW extends Fahrzeug implements Scheibenwischer {

  public $statusLadeKlappe = false;
  public $zuladung;

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

  public function einschalten($liters)
  {
    if($liters > 2) {
      echo "Scheibenwischer an";
    }
    return;
  }

  public function ausschalten($liters)
  {
    if($liters < 2) {
      echo "Scheibenwischer aus";
    }
  }

}

$lkw = new LKW(500);
$lkw->einschalten(1);
$lkw->ausschalten(1);

// Traits
// Hilfskonstruktoren insteadof oder as. Verhindern Kollisionen unter Namen
// Iteration 7
trait Scheibenwischer {
  public function einschalten() { echo "Scheibenwischer an"; }
  public function ausschalten() { echo "Scheibenwischer aus"; }
}

trait Klimaanlage {
  public function einschalten() { echo "Klimma an"; }
  public function ausschalten() { echo "Klimma aus"; }
}
 

class LKW extends Fahrzeug {

  use Scheibenwischer, ABS, Klimaanlage {
    Scheibenwischer::einschalten insteadof Klimaanlage;
    Klimaanlage::einschalten as KlimaEinschalten;
    Scheibenwischer::ausschalten insteadof Klimaanlage;
    Klimaanlage::ausschalten as KlimaAusschalten;
  }



  public $statusLadeKlappe = false;
  public $zuladung;

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
    $this->aktivieren();
    parent::bremse($neuV);
    $this->deaktivieren();
  }

  
}

$lkw = new LKW(500);
$lkw->einschalten();
echo "<br>";
$lkw->ausschalten();
echo "<br>";
$lkw->ausschalten();
echo "<br>";
$lkw->bremse(100);
echo "<br>";
$lkw->KlimaEinschalten();
echo "<br>";
$lkw->KlimaAusschalten();

// Traits gruppieren: Ausschließen, umbennen, Sichtbarkeit einstellen
// Use case: Viele vereinzelte Traits sorgen für Unübersichtlichkeit, das bündeln sorgt für eine gut Methodenlandschaft
// Iteration 8

trait Hilfsysteme {
  use Scheibenwischer, Klimaanlage,ABS {
    Scheibenwischer::einschalten insteadof Klimaanlage;
    Klimaanlage::einschalten as KlimaEinschalten;
    Scheibenwischer::ausschalten insteadof Klimaanlage;
    Klimaanlage::ausschalten as KlimaAusschalten;
    ABS::aktivieren as private;
    ABS::deaktivieren as private ABS_aus;
  }

  public abstract function meldeAusfall();
  
}
 

class LKW extends Fahrzeug {

use Hilfsysteme;

  public $statusLadeKlappe = false;
  public $zuladung;

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
    $this->aktivieren();
    parent::bremse($neuV);
    $this->deaktivieren();
  }

  public function meldeAusfall() {
    echo "Achtung all Systeme sind ausgefallen";
  }

}


// Iteration 9
// Keyword final
final class LKW extends Fahrzeug {

  use Hilfsysteme;
  
    public $statusLadeKlappe = false;
    public $zuladung;
  
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
      $this->aktivieren();
      parent::bremse($neuV);
      $this->deaktivieren();
    }
  
    public function meldeAusfall() {
      echo "Achtung all Systeme sind ausgefallen";
    }
  
  }

  // Keyword static
  
  class Bus extends Fahrzeug {
  
    use Hilfsysteme;
  
    public static $cameras = "on";
    public static $wheels = 6;
    private $sensors;
  
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
  
  Bus::closeDoors(1); // Acces Methods
  echo "<br/>";




?>