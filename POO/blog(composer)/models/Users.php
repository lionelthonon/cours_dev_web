<?php

namespace models;

class M_Users extends Models {

    /* Récupère un user */
    public function getUser($email, $password) {
        $sql = 'SELECT * FROM users
                WHERE users.name=:email, users.password=:password';
        $pdost = $this->connexion->prepare($sql);
        $pdost->execute([
            ':email' => $email,
            ':password' => $password
        ]);

        return $pdost->fetch();
    }

    /* Crée un user */
    public function createUser($email, $password) {
        $sql = 'INSERT INTO users(name, password)
                VALUES(:email, :password)';

        try{
            $pdost = $this->connexion->prepare($sql);
            $pdost->execute([
                ':email' => $email,
                ':password' => $password
            ]);
            return true;
        }catch(PDOException $e){
            die($e->getMessage());
            return false;
        }
    }
}
