<?php
/* --- SET L'ENCODAGE --- */
setlocale(LC_TIME, 'fr');
include('config/db.php');

/* --- include path --- */
set_include_path('configs;controllers;models;'.get_include_path());

/* --- autoload pour les class --- */
spl_autoload_register(function($className){
    include($className.'.class.php'); // Autoload reçoit automatiquement le nom de la classe
});

/* --- Déclare les routes --- */
include('config/routes.php');
// Route par défaut
$routeParts = explode('/', $routes['default']);

// Variables que l'on utilise pour les routes
$a = isset($_REQUEST['a'])?$_REQUEST['a']:$routeParts[0];
$e = isset($_REQUEST['e'])?$_REQUEST['e']:$routeParts[1];
$route = $a.'/'.$e;

// tester si la route existe
 if(!in_array($route, $routes)){
    header('Location: views/404.php'); // L'utilisateur a modifié l'URL d'une manière pas permise
 }

/* --- Opérations sur les posts --- */
$post = new Posts();

/* --- Affiche tous les messages dans la page d'accueil --- */
$posts = $post->getPosts();

/* --- Choix du controller --- */
$controllerName = "C_".ucfirst($e);
$controller = new $controllerName;
$data = call_user_func([$controller, $a]);














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
	$id_to_delete = $_GET['delete'];
	deletePost($connexion, $id_to_delete);
};

/* --- INCLUDE VIEWS --- */
include('views/main.php');
