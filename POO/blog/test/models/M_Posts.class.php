<?php
class M_Posts extends Model {
    // fonctions relatives à la bdd
    function getPost($id){
        $this->connexion; // Hérité de la classe Model
        $sql='SELECT * FROM posts WHERE posts.id = :id';
        $pdost = $this->connexion->prepare($sql);
        $pdost->execute([':id'=>$id]);
        return $pdost->fetch();
    }
}
