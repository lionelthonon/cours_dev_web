<?php
// Récupérer les messages dans la BDD
function getMessages($dbConnexion) {

    $sql = 'SELECT * FROM messages'; // Stocker la requête sql
    $res = $dbConnexion->query($sql); // Résultat de la requête -> Voir PDO::query
    return $res->fetchAll();
}
