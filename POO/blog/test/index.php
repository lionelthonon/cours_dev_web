<?php
/* --- include path --- */
set_include_path('controllers;models;'.get_include_path());

/* --- autoload pour les class --- */
spl_autoload_register(function($className){
    include($className.'.class.php'); // Autoload reçoit automatiquement le nom de la classe
});

/* --- routes [OK] --- */
include('configs/routes.php');
$routeParts = explode('/', $routes['default']);

// Variables que l'on utilise pour les routes
$a = isset($_REQUEST['a'])?$_REQUEST['a']:$routeParts[0];
$e = isset($_REQUEST['e'])?$_REQUEST['e']:$routeParts[1];
$route = $a.'/'.$e;

// tester si la route existe
 if(!in_array($route, $routes)){
    die('404'); // L'utilisateur a modifié l'URL d'une manière pas permise
 }


/* --- CONNEXION A LA BDD AVEC PDO [OK] --- */
include('configs/db.php');
try {
	$connexion = new PDO(DSN, USER, PASSWORD); // Constantes créées dans config/db.php
	// Set l'encodage
	$connexion->query('SET CHARACTER SET UTF8');
	$connexion->query('SET NAMES UTF8');
	Echo "Connexion a la BDD reussie";
}catch(PDOException $e){
	// Gestion de l'erreur (stockée dans $e)
	die('index.php line 27'.$e->getMessage());
}


/* --- Créer la vue --- */
$controllerName = "C_".ucfirst($e);
$controller = new $controllerName;

$view = $a.'_'.$e.'.php';
$data = call_user_func([$controller, $a]);
include('views/layout.php');
