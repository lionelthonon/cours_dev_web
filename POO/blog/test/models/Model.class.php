<?php
class Model {
    protected $connexion = null;

    public function __construct(){
        /* --- CONNEXION A LA BDD AVEC PDO [OK] --- */
        include('db.php');
        try {
            $this->connexion = new PDO(DSN, USER, PASSWORD); // Constantes créées dans config/db.php
            // Set l'encodage
            $this->connexion->query('SET CHARACTER SET UTF8');
            $this->connexion->query('SET NAMES UTF8');
            Echo "Connexion a la BDD reussie";
        }catch(PDOException $e){
            // Gestion de l'erreur (stockée dans $e)
            die('index.php line 27'.$e->getMessage());
        }
    }
}
