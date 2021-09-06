<?php 

class Namensmonster { }
class foo{}

if(!class_exists('foo')) {
  class_alias('Namensmonster', 'foo');
} else {
  echo 'Der Name der Klasse ist bereits vergeben.';
  echo "<br>";
}


$a = new Namensmonster;
$b = new foo;

// the objects are the same
var_dump($a == $b, $a === $b);
var_dump($a instanceof $b);

// the classes are the same
var_dump($a instanceof Namensmonster);
var_dump($a instanceof foo);

var_dump($b instanceof Namensmonster);
var_dump($b instanceof foo);

?>