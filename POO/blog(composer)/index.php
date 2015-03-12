<?php

/* --- include path --- */
set_include_path('configs;'.get_include_path());

/* --- Démarrer la session --- */
session_start();

/* --- SET L'ENCODAGE --- */
setlocale(LC_TIME, 'fr');
include('config/db.php');

/* --- autoload pour les class (avec composer) --- */
require 'vendor/autoload.php';

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
$post = new models\Posts();

/* --- Affiche tous les messages dans la page d'accueil --- */
$posts = $post->getPosts();

/* --- Choix du controller --- */
$controllerName = 'controllers\\'.ucfirst($e);
$controller = new $controllerName;
$data = call_user_func([$controller, $a]);

/* --- INCLUDE VIEWS --- */
include('views/main.php');
