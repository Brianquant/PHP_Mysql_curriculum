<?php
echo _LINE_;
echo "<br />";
echo _FILE_;
echo "<br />";
echo _DIR_;
echo "<br/>";
echo _FUNCTION_;

// Konstanten der Fehlerausgabe
$errLevel = E_WARNING;

switch($errLevel) {
    case E_ERROR: // 1 //
        echo 'E_ERROR';
    break;
    case E_WARNING: // 2 //
        echo 'E_WARNING';
    break;
    case E_PARSE: // 4 //
        echo 'E_PARSE';
    break;
    case E_NOTICE: // 8 //
        echo 'E_NOTICE';
    break;
    case E_CORE_ERROR: // 16 //
        echo 'E_CORE_ERROR';
    break;
    case E_CORE_WARNING: // 32 //
    break;
    default:
        echo "Error";

}



?>