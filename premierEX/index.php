<?php

/*
 * index.php
 * CONTROLLER
 * 
 */

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // -- Variables -- //
    $Hello = 'Lionel';
    $nom = 'Thonon';
    $prenom = 'Lionel';
    
    // Exercice fruits
    $fruits = [
        'prefered' => 'Pommes',
        'hated' => 'Oranges',
        'exotic' => 'Raisins',
    ];

    $fruits2 = [
        'Pommes',
        'Oranges',
        'Raisins'
    ];
    $tab_length = count($fruits2);

    // -- Exercice model -- //
    $chiffres = [
        58,
        12,
        35,
        42,
        3,
        125,
        12,
        -9
    ];

    // -- Constantes -- //
    define('NOM', 'Thonon');
    define('PRENOM', 'Lionel');

    // -- Ordre de priorité à utiliser -- //
    include('model.php');
    include('view.php');