<?php
// Creare una variabile $temperatura ed utilizzando if elseif ed else in base alle necessità, stampare il testo “Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.

// Stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.

// Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi.

// Facoltativo: integra questo codice con la traccia precedente per stampare un output su ogni città presente


$temperature = [
    "Venezia" => 16, "Bari" => 32,
    "Roma" => 28, "Napoli" => 30,
    "Milano" => 4, "Palermo" => 14,
    "Torino" => 24, "Roccaraso" => -5000,
    "Lecce" => 27, "Genova" => 30,
    "Catania" => 11, "Cosenza" => 9,
   ];
   
   
       
   foreach($temperature as $citta => $temperatura){
   
       if ($temperatura > 25) {
           echo "A $citta fa molto caldo> con $temperatura °C\n";
       } else if($temperatura > 15){
           echo "A $citta fa caldo con $temperatura °C\n";
       }else {
           echo "A $citta fa freddo con $temperatura °C\n";
       }
   }













?>