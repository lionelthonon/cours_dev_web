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

/* --- Ajoute un message via le formulaire --- */
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	/* --- Verifie si le formulaire est complet --- */

	// Variable des erreurs
	$errors = [];

	// Récupère les valeurs du formulaire
	$author_sign = $_POST['author_sign'];
	$content = $_POST['content'];
	$category = $_POST['category'];

	// Vérifie si chaque champ a été remplis
	if(empty($_POST['author_sign'])){
		$errors['author_sign'] = true;
	}
	if(empty($_POST['content'])){
		$errors['content'] = true;
	}

	// Lance la fonction createPost() si il n'y a pas d'erreur
	if(count($errors) === 0){
		createPost($connexion, $author_sign, $content, $category);
	}else{
		die('Err. : Un des champs du formulaire n\'a pas été remplis');
	}
}

/* --- Supprimer un post ---*/
if(isset($_GET['delete'])){
	var_dump(isset($_POST['post_to_delete']));
};

/* --- Affiche les messages --- */
$posts = getPosts($connexion);

/* --- INCLUDE VIEWS --- */
include('views/main.php');
