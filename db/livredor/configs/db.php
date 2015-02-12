<?php
/* --- CONSTANTES --- */
define('DSN', 'mysql:host=localhost;dbname=golden');
define('USER', 'root');
define('PSSWD', '');

/* --- Constantes de classes -- configuration de PDO --- */
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
