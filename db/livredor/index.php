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

// --- Liste des messages --- //
// Crée le message
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Gestion form vide
    $errors = [];
    if(empty($_POST['signature'])){
        $errors['signature'] = true;
    }

    if(empty($_POST['body'])){
        $errors['body'] = true;
    }

    if(count($errors) === 0) {
        $signature = $_POST['signature'];
        $body = $_POST['body'];
        createMessage($connexion, $signature, $body);
    }
}

$messages = getMessages($connexion); // Récupérer les messages -> Il faut passer la variable de la connexion

// -- Includes -- //
include('views/golden.php');
