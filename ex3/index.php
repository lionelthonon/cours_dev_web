<?php
    // -- Variables -- //

    // Vérifier si l'utilisateur a rentré quelque chose
    $chaine='';
    if(isset($_GET['chaine'])){
        $chaine=$_GET['chaine']; // On récupère les valeurs passées par l'utilisateur
    }

    // -- includes --//
    include('model.php');
    include('view.php');