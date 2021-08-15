<?php 

// Klasse Fahrzeug Iteration 1

class Fahrzeug
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

  public function bremse($neuV) {
    if($neuV <= $this->aktuelleGeschwindigkeit){
      $this->aktuelleGeschwindigkeit = $neuV;
    } else {
      $this->aktuelleGeschwindigkeit = $this->aktuelleGeschwindigkeit;
    }
  }
}

// Refactor
class Fahrzeug2 {
  public $gestartet;
  protected $aktuelleGeschwindigkeit;
  protected $hoechstGeschwindigkeit;

  function __construct($istGestartet, $istAktuelleGeschwindigkeit, $istHoechstGeschwindigkeit)
  {
    $this->gestartet = $istGestartet;
    $this->aktuelleGeschwindigkeit = $istAktuelleGeschwindigkeit;
    $this->hoechstGeschwindigkeit = $istHoechstGeschwindigkeit;
  }
  public function starteMotor() {
    $this->gestartet = 'true';
  }
  public function stoppeMotor() {
    $this->gestartet = 'false';
  }

  public function beschleunigen($neuV) {
    if($this->gestartet) {
      if($neuV <= $this->hoechstGeschwindigkeit) {
        echo $this->aktuelleGeschwindigkeit = $neuV;
      }
      else 
      {
        echo $this->aktuelleGeschwindigkeit = $this->hoechstGeschwindigkeit;
      }
    }
  }

  public function bremse($neuV) {
    if($neuV <= $this->aktuelleGeschwindigkeit) {
      $this->aktuelleGeschwindigkeit = $neuV;
    } 
    else 
    {
      $this->aktuelleGeschwindigkeit = $this->aktuelleGeschwindigkeit;
    }
  }


}

$fahrzeug1 = new Fahrzeug2('true' ,0 ,180);
$fahrzeug1->beschleunigen(0);

?>