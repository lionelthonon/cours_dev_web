<?php
/* --- INCLUDES --- */
include('models/message.php');
include('configs/db.php');

// --- connexion BDD --- //
// Creation de la variable de connexion -- PDO::__construct
try {
    $connexion = new PDO(DSN, USER, PSSWD); // new PDO('connexion', 'user', 'motdepasse') -> configd/db.php

    // corriger l'encodage
    $connexion->query('SET CHARACTER SET UTF8');
    $connexion->query('SET NAMES UTF8');

}catch(PDOException $e){ // Stock l'erreur dans $e
    // Gestion de l'erreur -- affichage de l'erreur
    die('Err.1 : '.$e->getMessage());
}

$messages = getMessages($connexion); // Récupérer les messages -> Il faut passer la variable de la connexion

// -- Includes -- //
include('views/golden.php');
