<?php 

// 2 Parameter
function dreiSatz($param1, $param2) {
    $onePercent = $param1 / 100;
    $taxes = $onePercent * $param2;
    $netto = $param1 - $taxes;

    return $netto;

}

echo dreiSatz(850, 19);

// Standardparameter

function dreiSatze($param1, $param2 = 19) {
    $onePercent = $param1 / 100;
    $taxes = $onePercent * $param2;
    $netto = $param1 - $taxes;

    return $netto;

}

echo dreiSatze(850);

// Array Dereferencing bzw. Object Dereferencing

function keys() {
    return array('key 1', 'key 2', 'key 3');
}

echo keys()[0];

?>