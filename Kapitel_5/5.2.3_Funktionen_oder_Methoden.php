<?php 

// Funktionen oder Methoden
/**
 * Datentypehinweise für Objekte & Arrays: e.g: function zeichenTabelle(array $daten) {}
 * Numerische Datentypen: 
 * Integer: An integer is a number without any decimal part.
 * Float: Decimal number
 * Double: Floating point numbers
 */

// function: function_exists()
$arrayOfDucks = array('duck 1', 'duck 2', 'duck 3');

function zeichenTabelle(array $daten) {
  echo '<table>';
  foreach($daten as $key=>$val) {
    echo '<tr><td>' .$key. '</td><td>' .$val. '</td></tr>';
  }
  echo '</table>';
}

zeichenTabelle($arrayOfDucks);

if (function_exists('zeichenTabelle')) {
 echo "Zeichen Tabelle Funktion ist verfügbar.<br />\n";
} else {
 echo "Zeichen Tabelle Funktion ist nicht verfügbar.<br />\n";
}

// Method: method_exsists()
$arrayOfDucks = array('duck 1', 'duck 2', 'duck 3');

 class Tabelle {

 function zeichenTabelle(array $daten) {
   echo '<table>';
   foreach($daten as $key=>$val) {
     echo '<tr><td>' .$key. '</td><td>' .$val. '</td></tr>';
   }
   echo '</table>';
 }

}

  $neueSpalte = new Tabelle;

 if (method_exists($neueSpalte,'zeichenTabelle')) {
  echo "Zeichen Tabelle Funktion ist verfügbar.<br />\n";
} else {
  echo "Zeichen Tabelle Funktion ist nicht verfügbar.<br />\n";
}


?>