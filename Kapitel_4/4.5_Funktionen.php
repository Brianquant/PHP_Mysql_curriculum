<?php 

// Parametisiert
function rmSpaces($string) {
    $cleanString = trim($string);
    return $cleanString;
 }
 
 echo rmSpaces(' clean Me up ');
 
 // Ohne Parameter
 function rm() {
     $cleanString = trim(' clean Me up ');
     return $cleanString;
  }
  
  echo rm();

?>