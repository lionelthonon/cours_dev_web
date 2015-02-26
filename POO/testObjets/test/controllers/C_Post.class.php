<?php
class C_Post extends C_Base {

    private $postsModel = null;

    public function __construct() {
        $this->postsModel = new M_Post();
    }

    public function view() {
        // Vérifie la méthode
        if($_SERVER['REQUEST_METHOD'] != 'GET'){
            die('Vous ne pouvez pas faire ça');
        }

        // Vérifie s'il y a un id
        if(!isset($_GET['id'])){
            die('Il n\'y a pas d\'ID');
        }

        // Vérifie si l'id est bien un chiffre
        if(!is_numeric($_GET['id'])){
            die('Ceci n\'est pas un ID');
        }

        // Affecte l'id
        $id = $_GET['id'];

        $data = [];

        $data['data'] = $this->postsModel->getPost($id);
        $data['view'] = 'view_post.php';
        return $data;
    }

}
