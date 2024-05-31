<?php
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

// es.

//   $users = [

//      ['name' => 'Davide',
        // 'surname' => 'Cariola', 
        // 'gender' => 'NB'],

//   ];



// - Pushate su Github chiamando la repository php_02_nome_cognome. Integra anche gli altri esercizi e poi pusha tutto.



$users = [
    ["nome" => "yoel", "surname" => "kovach", "gender" =>"male"],
    ["nome" => "giada", "surname" => "tolve", "gender" =>"female"],
    ["nome" => "cristian", "surname" => "zelarayan", "gender" =>"NB"],
    ["nome" => "marco", "surname" => "fonte", "gender" =>"male"],
    ["nome" => "jordi", "surname" => "torre", "gender" =>"female"],
    ["nome" => "emanuel", "surname" => "dolha", "gender" =>"NB"]
];


foreach($users as $utente){
    $nome = $utenste["nome"];
    $surname = $utente["surname"];
    $gender = $utente["gender"];

    if ($utente["gender"] === "male") {
    echo "Buongiorno Sig. $nome $surname \n";
    } else if ($utente["gender"] === "female") {
        echo "Buongiorno Sig.Ra $nome $surname \n";
    } else if ($utente["gender"] === "NB") {
        echo "Buongiorno $nome $surname \n";
    };
}






























?>