<?php 

/*  The base hardware unit of the ClusterDuck network. 
    A DuckLink is an IoT WiFi device that wirelessly 
    connects to consumer electronics.
*/

/**
 * PlatformIO Project Configuration File
 * Build options: build flags, source filter
 * Upload options: custom upload port, speed and extra flags
 * 
 * @version 1.0
 */


$ducks = ['duck 1:' => 'off', 'duck 2:' => 'active', 'duck 3:' => 'active', 'duck 4:' => 'actives', ];
// This is an array method whick takes the value and the var/array as params
$offDucks = array_search('off', $ducks);

if(in_array('off', $ducks) && $offDucks) {
    echo "Some ducks are offline: $offDucks";
} else {
    echo "All ducks are online";
}

?>