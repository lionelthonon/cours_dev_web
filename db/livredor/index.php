<?php

// --- onnexion BDD --- //
$connexion = new PDO();

$messages = [
    ['signature' => 'salut', 'date' => 'Aujourd\'hui', 'body' => 'Mon message'],
    ['signature' => 'salut', 'date' => 'Aujourd\'hui', 'body' => 'Mon message']
];

// -- Includes -- //
include('views/golden.php');