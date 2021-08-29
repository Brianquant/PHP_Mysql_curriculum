<?php 

function __autoload($classname) {
    $filename = "class.". $classname .".php";
    include_once($filename);
  }
  
  $obj = new Klonbar();

?>