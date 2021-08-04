<?php 

// include() gibt Fehlermeldungen aus, jedoch läuft das Skript weiter trotz Fehlerhaften code
echo include('index.php');
// require() bricht den Vorgang des Skriptes ab, fall der Code Fehlerhaft ist
echo require('index.php');

// Externe Dateien
// Hint: Bestimmte Parameter in der Datei php.ini müssen verändert werden
require('https://www.php.net/manual/en/function.set-error-handler.php');

// Mehrfache Einbindungen zwischen php Datein ausgeschlossen! Preventions Funktionen
include_once('index.php');
require_once('index.php');

?>