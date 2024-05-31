<?php
// Utilizza il seguente array e stampa per ogni elemento la stringa

// “A <nome città> fa <freddo/caldo/molto caldo> con <temperatura>°C”

$temperature = [
 "Venezia" => 16, "Bari" => 32,
 "Roma" => 28, "Napoli" => 30,
 "Milano" => 4, "Palermo" => 14,
 "Torino" => 24, "Roccaraso" => -5000,
 "Lecce" => 27, "Genova" => 30,
 "Catania" => 11, "Cosenza" => 9,
];


    
foreach($temperature as $citta => $temperatura){

    if ($temperatura > 24) {
        echo "A $citta fa molto caldo> con $temperatura °C\n";
    } else if($temperatura > 10){
        echo "A $citta fa caldo con $temperatura °C\n";
    }else{
        echo "A $citta fa freddo con $temperatura °C\n";
    }
}



















?>