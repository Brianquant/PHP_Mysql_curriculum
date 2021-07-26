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

// elseif Konstrukt
if($shootDistance < 4) {
    $lebronJames = "Throw";
} elseif($lebronJames < $frontPlayer) {
    $lebronJames = "Pass to another player";
} else {
    $lebronJames = "shoot the ball";
}

echo $lebronJames;

// if-Konstrukt (veraltet)
if($shootDistance < 4): 
    $lebronJames = "Throw";
elseif($lebronJames < $frontPlayer):
    $lebronJames = "Pass to another player";
else:
    $lebronJames = "shoot the ball";
endif;

echo $lebronJames;

// Ternäre Operator
$lebronJames = true;
$freeZone = false;

echo ($lebronJames === $freeZone) ? $lebronJames = "Throw" : $lebronJames = "defense";


// switch-Konstrukt
$mamaDuck = 90;

 switch($mamaDuck) {
     case 90:
        echo "Battery status: 90%";
     break;
     case 80:
        echo "Battery status: 80%";
     break;
     case 70:
        echo "Battery status: 70%";
     break;
     case 60:
        echo "Battery status 60%";
     break;
     case 50:
        echo "Battery status 50%";
     break;
     default:
     echo "Battery is low";
 }







?>