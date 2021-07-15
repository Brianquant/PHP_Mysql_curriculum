<?php 
// Rekursiv
    function countdown($param) {
        echo $param, "<br>";

        if($param >  1) {
            countdown($param - 1);
        }
    }
    $param = 10;

    countdown($param);
?>