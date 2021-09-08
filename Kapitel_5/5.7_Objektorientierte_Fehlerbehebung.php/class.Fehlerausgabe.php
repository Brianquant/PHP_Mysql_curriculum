<?php

class Fehlerausgabe extends Exception {

    function __construct($nachricht, $code)
    {
        parent::__construct($nachricht, $code);
    }

    function __toString()
    {
        $meldung = 'Die Datei <i>' .basename(__FILE__). '</i> meldet ['.$this->getCode().']:<br />';
        $meldung .= $this->getMessage();
        return $meldung;
    }  
}

function generischeFehlerbehandlung() {
    set_exception_handler('generischeFehlerbehandlung');
    try {
        if(!@mail()) {
            $nachricht = 'Die E-mail konnte nicht versendet werden';
            throw new Fehlerausgabe($nachricht, 1);
        }
    }
    catch (Fehlerausgabe $f) {
        echo $f;
    }

}


?>