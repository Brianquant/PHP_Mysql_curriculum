<?php 

/**
 * goto-Operator
 * 
 * Sprunganweisungen: goto definiert ein Label. Das Label wirkt wie ein Anker,
 *  mit dem man im Skript hin und her springen kann.
 */
$inputValue = 20;
    if($inputValue > 5) {
        goto jump;
    }
    jump: 
    echo "I am out";

?>