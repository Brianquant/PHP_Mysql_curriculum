<?php 

// get_defined_constants()
$ducks = array("duck 1", "duck 2", "duck 3");
    $arr = get_defined_vars();
    print_r($ducks["a"]);


// get_defined_constants()
$ducks = array('duck 1' => 'on', 'duck 2' => 'off');
    $arr = get_defined_vars($ducks);
    print_r($arr);

    define("Konstant", 1);
    print_r(get_defined_constants(true));

// get_defined_functions()
$arr = get_defined_functions();

    print_r($arr);



?>