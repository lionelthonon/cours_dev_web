<?php
/* --- RECUPERE LES POSTS --- */
function getPosts($dbConnexion){

	// Stocker la requête SQL
	$sql = 'SELECT * FROM posts ORDER BY date';

	// PDO::query -- Resultat de la requête
	$res = $dbConnexion->query($sql);
	return $res->fetchAll();
}
