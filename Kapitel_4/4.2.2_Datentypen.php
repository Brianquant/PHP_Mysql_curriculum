<?php 
        // Datentypen konvertieren
        $integer = (int) '10 Säcke Kartoffeln';
        $string = (string) 10;
        $float = (float) "2.9";
        $bool = (bool) "false";
        $array = (array) true;
        $object = (object) 3.5;


        echo gettype($integer);
        echo "<br>";
        echo gettype($string);
        echo "<br>";
        echo gettype($float);
        echo "<br>";
        echo gettype($bool);
        echo "<br>";
        echo gettype($object);

        // Strings
        $a = 'Test';
        echo "Ausgabe einer \$a-Variablen";
        echo "<br>";
        echo "Ausgabe einer $a-Variablen";
        echo "<br>";
        echo "Ausgabe einer 'Variablen'";
        echo "<br>";
        echo 'Ausgabe einer "Variablen"';
        echo "<br>";
        echo "Ausgabe einer \"Variablen\" ";
?>