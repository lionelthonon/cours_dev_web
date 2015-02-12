<?php

// --- connexion BDD --- //
$connexion = new PDO(); // Creation de la variable de connexion


$messages = [
    ['signature' => 'salut', 'date' => 'Aujourd\'hui', 'body' => 'Mon message'],
    ['signature' => 'salut', 'date' => 'Aujourd\'hui', 'body' => 'Mon message']
];

// -- Includes -- //
include('views/golden.php');
