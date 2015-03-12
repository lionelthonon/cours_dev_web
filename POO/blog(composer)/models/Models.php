<?php

namespace models;

class Models {

/* --- Connexion à la DBB --- */
    protected $connexion = null;

    public function __construct() {
        try {
            $this->connexion = new \PDO(DSN, USER, PASSWORD); // Constantes créées dans config/db.php
            $this->connexion->query('SET CHARACTER SET UTF8');
            $this->connexion->query('SET NAMES UTF8');
            //Echo "Connexion à la BDD réussie";
        }catch(\PDOException $e){
            die('index.php line 17'.$e->getMessage());
        }
    }
}
