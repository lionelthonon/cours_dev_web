<?php
// -- VARIABLES -- //
$ch1 = 0;
$ch2 = 0;
// Récupérer ce que l'utilisateur a rentré
$ch1 = $_POST['ch1'];
$ch2 = $_POST['ch2'];

if(!isset($ch1)){
    $ch1 = 0;
}

// Vérifier si chiffre1 est un chiffre
if(!is_numeric($ch1)){
    die('Ceci n\'est pas un chiffre<br /><a href=".">Retour</a>');
}



// -- INCLUDES -- //
include('model.php'); 
include('view.php');