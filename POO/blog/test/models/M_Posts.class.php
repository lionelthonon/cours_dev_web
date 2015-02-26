<?php
class M_Posts {
    // fonctions relatives à la bdd
    function getPost($id){
        global $connexion;
        $sql='SELECT * FROM posts WHERE posts.id = :id';
        $pdost = $connexion->prepare($sql);
        $pdost->execute([':id'=>$id]);
        return $pdost->fetch();
    }
}
