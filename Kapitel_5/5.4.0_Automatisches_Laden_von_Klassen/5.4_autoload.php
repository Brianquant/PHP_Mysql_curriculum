<?php 

// Hinweis: Klassen werden in der Regel immer i seperaten Dateien gespeichert.
// Namenskonvention: class.Fahrzeug.php

function __autoload($classname) {
    $filename = "class.". $classname .".php";
    include_once($filename);
  }
  
  $obj = new Klonbar();

?>