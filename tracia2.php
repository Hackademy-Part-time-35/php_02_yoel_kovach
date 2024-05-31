<?php
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


// HINT: l’operatore % restituisce il resto della divisione (es. 5 % 3 darà come risultato 2)



$numero = [2, 4, 63, 12, 541, 35, 49, 43, 23, 51, 53, 101, 43];

$contoNPari = 0;
$sommaPari = 0;

foreach($numero as $numeri){

    if ($numeri%2 == 0) {
        $sommaPari += $numeri;
        $contoNPari++;
    } else {
        // echo "$numeri no sono par \n";
    }
};

echo "la somma dei numeri pari è $sommaPari\n";
echo $contoNPari/$sommaPari;
?>