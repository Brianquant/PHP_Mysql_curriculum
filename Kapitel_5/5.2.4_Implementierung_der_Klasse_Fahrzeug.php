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

?>