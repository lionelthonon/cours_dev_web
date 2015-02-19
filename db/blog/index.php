<?php
/* --- INCLUDE CONFIGS $ MODELS --- */
include('config/db.php');
include('models/posts.php');

/* --- SET L'ENCODAGE --- */
setlocale(LC_TIME, 'fr');

/* --- CONNEXION A LA BDD AVEC PDO --- */
try {
	$connexion = new PDO(DSN, USER, PASSWORD); // Constantes créées dans config/db.php
	// Set l'encodage
	$connexion->query('SET CHARACTER SET UTF8');
	$connexion->query('SET NAMES UTF8');
	Echo "Connexion à la BDD réussie";
}catch(PDOException $e){
	// Gestion de l'erreur (stockée dans $e)
	die('index.php line 17'.$e->getMessage());
}

/* --- MODELS/POSTS.PHP --- */
$posts = getPosts($connexion);

/* --- INCLUDE VIEWS --- */
include('views/main.php');
