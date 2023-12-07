<?php
// Esercizio 1
$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$somma = 0;
$count = 0;
foreach ($numeri as $numero) {
    if ($numero % 2 == 0) {
        $somma = $somma + $numero;
        $count++;
    } else {
        echo "Numero non pari \n";
    }
}
echo $media = $somma / $count;

// Esercizio 2
$utenti = [
    ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'],
    ['name' => 'Pippa', 'surname' => 'Pluta', 'gender' => 'F'],
    ['name' => 'Filippo', 'surname' => 'Pluto', 'gender' => 'M'],
    ['name' => 'Angela', 'surname' => 'Pluto', 'gender' => 'F'],
    ['name' => 'Angela', 'surname' => 'Pluto', 'gender' => '']
];

foreach ($utenti as $utente) {
    if ($utente["gender"] == "M") {
        echo "Buongiorno Sig. $utente[name] $utente[surname] \n";
    } else if ($utente["gender"] == "F") {
        echo "Buongiorno Sig.ra $utente[name] $utente[surname] \n ";
    } else {
        echo "Buongiorno $utente[name] $utente[surname] \n ";
    }
}


//Esercizio 3

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY\n";
    } else if ($i % 3 == 0) {
        echo "PHP\n";
    } else if ($i % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo "$i\n";
    }
}
