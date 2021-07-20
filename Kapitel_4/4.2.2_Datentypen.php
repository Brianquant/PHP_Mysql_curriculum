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
            $entcryptMessage = "Yo%u wo=n 1 Bitc4oin";
            $decrypt_process = array("%", "=", "4");
            $replace = '';
            $decrypt_message = str_replace($decrypt_process,  $replace, $entcryptMessage);
            echo $decrypt_message;

            // Inkrementierung
            $Germany = 0;
            $klose = true;
            $Brasilien = 0;
            $neymar = false;
            if($klose === true) {
                for($i = 0; $i < 7; $i++) {
                    $Germany++;
                }
            } else {
                $Brasilien++;
            }
            echo "Germany:" . $Germany;
            echo "<br>";
            echo "Brasilien:" . $Brasilien;

            // Rundungen von Zahlen
            $taxes = 10.45643;
            $customer = "ceil";

            if($customer === "floor") {
                $taxes = floor($taxes); 
            } elseif ($customer === "ceil") {
                $taxes = ceil($taxes);
            } else {
                $taxes = round($taxes);
            }

            echo "The Customer wants her/his taxes in a" . " " . $customer . " " . "way" . " " . "taxes:" . "$" . $taxes;

            // "==" vs. "==="
            $integer = 10;
            $string = "10";
            var_dump($integer == $string); 
            var_dump($integer === $string);

            // Boolesche Wahrheitswert
                // Das logische Und
                $tipp_1 = true;
                $tipp_2 = false;
                if($tipp_1 === true && $tipp_2 === true) {
                    echo "Sie haben die Wette verloren";
                }
                else {
                    echo "Sie haben die Wette gewonnen";
                }
                // Das logische Oder
                    // Landstraße 100 km/h
                $currentSpeed = 60;
                if($currentSpeed === 100 || $currentSpeed > 80) {
                    echo "Ihre Geschwindigkeit ist angemessen";
    
                } elseif($currentSpeed < 80 || $currentSpeed > 100) {
                    echo "Sie behindern den Verkher";
                }
                // Das logische exlusive Oder
                $tipp_1 = false;
                $tipp_2 = false;

                if($tipp_1 xor $tipp_2) {
                    echo "Ein Tipp von 2 gewonnen";
                } else {
                    echo "Gar kein Tipp gewonnen";
                }
                // Das logische Nicht
                    //  grenzwert = 3;
                        $zurzeitgePegelStand = 5.09;

                        if($zurzeitgePegelStand !== 3 && $zurzeitgePegelStand > 3) {
                            echo "Veralssen Sie die Überschwemmungszone!";
    
                        } elseif($zurzeitgePegelStand === 2.5 || $zurzeitgePegelStand < 3) {
                            echo "Es besteht noch keine akute Gefahr";
                        }

                



            






?>