<?php 
// Pass-by-reference
    // Amperse
    $a = "Bruce Wayne"; 
    $b = &$a; 
    $b="Batman"; 
    echo "Bruce Wayne is" . " " . $b;

    // Global Keyword
    $param1 = 'global 1';
    $param2 = 'global 2';

    function globalFunc() {
    global $param1;
    global $param2;
    return "fetch" . " " . $param1 . " " . "and" . " " . $param2;
    }

    echo globalFunc();



?>