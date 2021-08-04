<?php

// Vordefinierte Konstante
echo _LINE_;
echo "<br />";
echo _FILE_;
echo "<br />";
echo _DIR_;
echo "<br/>";
echo _FUNCTION_;

// Konstanten der Fehlerausgabe
echo "E_ERROR:" ." " . E_ERROR;
echo "<br />";
echo "E_WARNING:" ." " . E_WARNING;
echo "<br />";
echo "E_PARSE:" ." " . E_PARSE;
echo "<br />";
echo "E_NOTICE:" ." " . E_NOTICE;
echo "<br />";
echo "E_CORE_ERROR:" ." " . E_CORE_ERROR;
echo "<br />";
echo "E_CORE_WARNING:" ." " . E_CORE_WARNING;
echo "<br />";
echo "E_COMPILE_ERROR:" ." " . E_COMPILE_ERROR;
echo "<br />";
echo "E_COMPILE_WARNING:" ." " . E_COMPILE_WARNING;
echo "<br />";
echo "E_USER_ERROR:" ." " . E_USER_ERROR;
echo "<br />";
echo "E_USER_ERROR:" ." " . E_USER_ERROR;
echo "<br />";
echo "E_USER_WARNING:" ." " . E_USER_WARNING;
echo "<br />";
echo "E_USER_NOTICE:" ." " . E_USER_NOTICE;
echo "<br />";
echo "E_DEPRECATED:" ." " . E_DEPRECATED;
echo "<br />";
echo "E_USER_DEPRECATED:" ." " . E_USER_DEPRECATED;
echo "<br />";
echo "E_RECOVERABLE_ERROR:" ." " . E_RECOVERABLE_ERROR;
echo "<br />";
echo "E_ALL:" ." " . E_ALL;
echo "<br />";
echo "E_STRICT:" ." " . E_STRICT;

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

$errLevel_1 = E_WARNING;
$errLevel_2 = E_ERROR;


switch($errLevel_1 | $errLevel_2) {
    case E_ERROR: // 1 //
        echo 'E_ERROR';
    break;
    case E_WARNING | E_ERROR: // 2 //
        echo 'E_WARNING & E_ERROR';
    break;
    default:
        echo "Error";
}

// Standard-Fehlerbehandlung set_error_handler()
function myErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Custom error:</b> [$errno] $errstr<br>";
    echo " Error on line $errline in $errfile<br>";
}

// Set user-defined error handler function
set_error_handler("myErrorHandler");

$test=2;

// Trigger error
if ($test>1) {
    trigger_error("A custom error has been triggered");
}

// Restore previous error handler
restore_error_handler();

// Trigger error again
if ($test>1) {
    trigger_error("A custom error has been triggered");
}


?>

