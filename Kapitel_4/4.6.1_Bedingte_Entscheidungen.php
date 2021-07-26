<?php 
//  if-Konstrukt
$computer = "off";
if($computer) {
    $computer = "on";
}
    // oder alternative Schreibweise
    if($computer) $computer = "on";

echo $computer;

// if - then - else Konstrukt
$lebronJames = true;
$freeZone = false;

if($lebronJames === $freeZone) {
    $lebronJames = "Throw";
} else {
    $lebronJames = "defense";
}

echo $lebronJames;

// Verschachtelte if-Konstrukte
$lebronJames = 195;
$shootDistance = 5;
$frontPlayer = 190;

if($shootDistance < 4) {
    $lebronJames = "Throw";
} else 
{
    if($lebronJames < $frontPlayer) {
        $lebronJames = "Pass to another player";
    }
    else 
    {
        $lebronJames = "shoot the ball";
    }
}

echo $lebronJames;


?>