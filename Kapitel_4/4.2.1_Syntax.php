<?php 
// Pass-by-reference
$string_1 = "No System&nbsp;";
$string_2 = &$string_1;
echo $string_2;
$string_1 = "is SAFE!";
echo $string_2;

// Double $$


?>