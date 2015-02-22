<?php
/* --- RECUPERE LES POSTS --- */
function getPosts($dbConnexion){

	// Stocker la requête SQL
	$sql = 'SELECT author_sign, content, date, name
			FROM posts, categories
			WHERE posts.id_cat LIKE categories.id
			ORDER BY date';

	// PDO::query -- Resultat de la requête
	$res = $dbConnexion->query($sql);
	return $res->fetchAll();
}

/* --- AJOUTE UN POST --- */
function createPost() {


}
