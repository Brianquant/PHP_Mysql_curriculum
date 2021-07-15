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

        // Konkatenationsoperator
        for($i = 0; $i < 11; $i++) {
            echo "<img alt='$i' src='Bild". $i .".png' />";  
        }

        // Stringfunktionen

            // trim
            $entcryptMessage = " &You won 1 Bitcoin %";
            $entcryptMessage = trim($entcryptMessage, " &");
            $entcryptMessage = rtrim($entcryptMessage, "%");
            echo $entcryptMessage;

            // substr
            $snippet = "This, bring, hi, I am, green, blue, your father";

            $snippet_1 = substr($snippet, -30, 4);
            $snippet_2 = substr($snippet, -11, 11);
            $starWarsQuote = $snippet_1 . " " . $snippet_2;
            echo $starWarsQuote;

            // strpos
            $url = "http://example.com/foo?bar";
            $findQuery = "?bar";
            $index = strpos($url, $findQuery);

            if ($index === false) {
                echo "Der String '$findQuery' wurde nicht im String '$url' gefunden";
            } else {
                echo "Der String '$findQuery' wurde im String '$url' gefunden";
                echo " und befindet sich an Position $index";
            }

            // strstr
            $url = "http://example.com/foo?bar";
            $findQuery = "?bar";
            $index = strstr($url, $findQuery);

            echo $index;

            // str_replace()
            $entcryptMessage = "Yo%u wo=n 1 Bitc4oin";
            $entcryptMessage = str_replace('%', '', $entcryptMessage);
            $entcryptMessage = str_replace('=', '', $entcryptMessage);
            $entcryptMessage = str_replace('4', '', $entcryptMessage);

            echo $entcryptMessage;

            // str_replace() with an array
            $strings = array(4, 'string', 'string', 5);

            $strings = str_replace(4, 'string', $strings);
            $strings = str_replace(5, 'string', $strings);

            print_r($strings);






?>