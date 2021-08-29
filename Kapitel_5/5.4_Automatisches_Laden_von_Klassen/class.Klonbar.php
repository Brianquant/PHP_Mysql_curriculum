<?php 

class Klonbar {
    public $wert = 0;

    function __construct()
    {
        $this->wert = 1;

    }

    function __clone()
    {
        $this->wert = 2;
    }
}


?>