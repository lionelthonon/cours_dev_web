<?php
/* --- RECUPERE LES POSTS --- */
function getPosts($dbConnexion){

	// Stocker la requête SQL
	$sql = 'SELECT posts.id, author_sign, content, date, name
			FROM posts, categories
			WHERE posts.id_cat LIKE categories.id
			ORDER BY date';

	// PDO::query -- Resultat de la requête
	$res = $dbConnexion->query($sql);
	return $res->fetchAll();
}

/* --- AJOUTE UN POST --- */
function createPost($connexion, $author_sign, $content, $category) {
	// Prépare la requête avec les jokers
	$sql = 'INSERT INTO posts (content, author_sign, id_cat)
			VALUES (:content, :author_sign, :category)';

	// Execute la requete
	try {
		$res = $connexion->prepare($sql);
		$res->execute([
			':author_sign' => $author_sign,
			':content' => $content,
			':category' => $category
		]);
	}catch(PDOException $e){ // S'il y a une erreur, la place dans $e
		die($e->getMessage());
	}
}
