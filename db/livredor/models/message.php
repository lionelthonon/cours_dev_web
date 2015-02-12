<?php
// Récupérer les messages dans la BDD
function getMessages($dbConnexion) {

    $sql = 'SELECT * FROM messages'; // Stocker la requête sql
    $res = $dbConnexion->query($sql); // Résultat de la requête -> Voir PDO::query
    return $res->fetchAll();
}

// Ajouter un message dans la BDD
function createMessage($dbConnexion, $signature, $body){
    $sql = 'INSERT INTO messages (signature, body) VALUES ()';
}
