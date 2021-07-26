<?php

// while-Schleifen

$countdown = 10;
$currentTime = 0;
while($countdown >= 0) {
    $currentTime = $countdown;
    $countdown--;
    echo $currentTime;
    echo "<br />";

}

// do-Schleifen

$spartacus = "bring the system down";
do {
    echo $spartacus;
    echo "<br />";
} while (strlen($spartacus) >= 0);

// for-Schleife
$ducks = array(
    array('duck 1' => 'on', 'duck 2' => 'off'),
);

for($i = 0; $i < count($ducks); ++$i) {
    $ducks[$i]['duck 2'] = 'on';
}

print_r($ducks);



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