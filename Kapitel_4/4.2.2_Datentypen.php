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
                        $zurzeitgerPegelStand = 5.09;

                        if($zurzeitgePegerlStand !== 3 && $zurzeitgerPegelStand > 3) {
                            echo "Veralssen Sie die Überschwemmungszone!";
    
                        } elseif($zurzeitgePegerlStand === 2.5 || $zurzeitgePegerlStand < 3) {
                            echo "Es besteht noch keine akute Gefahr";
                        }
                
                // Arrays
                        // Einen weiteren Wert hinzufügen
                        $ducks = array('duck 1: off', 'duck 2: active', 'duck 3: off', 'duck 4: active');
                        $ducks[4] = 'duck 5: active';
                        print_r($ducks);
                        // Alternative Schreibweise
                        $ducks = ['duck 1: off', 'duck 2: active', 'duck 3: off', 'duck 4: active'];
                        $ducks[4] = 'duck 5: active';
                        print_r($ducks);
                        // Operator =>
                        $ducks = ['duck 1:' => 'off', 'duck 2:' => 'active', 'duck 3:' => 'active', 'duck 4:' => 'off', ];
                        // print_r() = Das _r steht für Rekursiv (zurückkehrend)
                        print_r($ducks);
                        // Array Methoden
                        $covidVarianten = array('B.1.617.2' => 'delta', 'B.1.1.7'  => 'alpha', 'B.1.351' =>  'beta', 'P.1' => 'gamma');

                        // Alphabetisch
                        sort($covidVarianten);
                        // Assoziative Schlüssel und Werte
                        asort($covidVarianten);
                        // Ordnet nach den Schlüssel (key)
                        ksort($covidVarianten);
                        // Umgekehrter Reihenfolge
                        rsort($covidVarianten);

                        print_r($covidVarianten);

                        // in_array & array_search 
                        $ducks = ['duck 1:' => 'off', 'duck 2:' => 'active', 'duck 3:' => 'active', 'duck 4:' => 'actives', ];
                        $offDucks = array_search('off', $ducks);

                        if(in_array('off', $ducks) && $offDucks) {
                            echo "Some ducks are offline: $offDucks";
                        } else {
                            echo "All ducks are online";
                        }

                        // array_key_exist() 
                        $ducks = ['mama duck:' => 'active', 'duck 1:' => 'off', 'duck 2:' => 'active', 'duck 3:' => 'active', 'duck 4:' => 'actives', ];

                        $mamaDuck = array_key_exists('mama duck:', $ducks);

                        if($mamaDuck) {
                            echo "Mama duck is online";
                        } else {
                            echo "Mama duck is offline";
                        }
                        // array_keys()
                        $ducks = ['mama duck:' => 'active', 'duck 1:' => 'off', 'duck 2:' => 'active', 'duck 3:' => 'active', 'duck 4:' => 'actives', ];

                        $locatedDucks = array_keys($ducks);
                        // isset()
                        var_dump(isset($locatedDucks));
                        print_r($locatedDucks);
                        
                        // Array Zeiger

                        $ducks = ['mama duck:', 'duck 1:', 'duck 2:', 'duck 3:', 'duck 4:'];

                        $mode = current($ducks);
                        $mode = next($ducks);
                        $mode = prev($ducks);
                        $mode = end($ducks);
                        $mode = reset($ducks);

                        print_r($mode);

                        // Array Methoden array_push() & array_pop
                        $ducks = ['mama duck:' => 'active', 'duck 1:' => 'off', 'duck 2:' => 'active', 'duck 3:' => 'active', 'duck 4:' => 'off'];

                        if(in_array('off', $ducks)) {
                            array_pop($ducks);
                            array_push($ducks, 'duck 4:', 'active');
                        }

                            print_r($ducks);
                        
                        // Der Wert Null
                        $initDuck = null;

                        if(is_null($initDuck)) {
                            echo "Wert gleich Null";
                        } else {
                            echo "Duck ist aktiv";
                        }


                        
                        


                



            






?>