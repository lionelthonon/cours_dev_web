<?php

namespace controllers;

class Posts {

    protected $post = null;

    public function __construct () {
        $this->post = new \models\Posts();
    }

    public function index () {
        $data = [];
        $data['data'] = $this->post->getPosts();
        $data['view'] = 'index_posts.php';
        return $data;
    }

    public function view () {
        $data = [];
        $data['view'] = 'view_posts.php';
		$id = $_GET['id'];
		$data['data'] = $this->post->getPost($id);
        return $data;
    }

	public function add () {
		// récupérer les données du formulaire
		$data = [];
		$data['view'] = 'add_posts.php';

		// Données du formulaire
        if(empty($_POST['author_sign'])){
            $errors = [
                'author_sign' => true
            ];
            die('Vous n\'avez pas spécifié votre nom.');
        }else{
             $author_sign = $_POST['author_sign'];
        }

        if(empty($_POST['title'])){
            $errors = ['title' => true];
            die('Vous n\'avez pas specifie de titre pour votre artticle');
        }else{
            $title = $_POST['title'];
        }

        if(empty($_POST['content'])){
            $errors = ['content' => true];
            die('Il faut un contenu pour votre article');
        }else{
            $content = $_POST['content'];
        }

        if($_POST['category'] == "NULL"){
            $errors = ['category' => true];
            die('Il faut choisir une categorie pour votre article');
        }else{
            $category = $_POST['category'];
        }

		$this->post->createPost($author_sign, $title, $content, $category);

		return $data;
	}

	public function delete () {
		$data = [];
		$data['view'] = "delete_posts.php";
		$data['id'] = $_GET['id'];

		$this->post->deletePost($data['id']);

		return $data;
	}

	public function update () {
		$data = [];
		$data['view'] = 'update_posts.php';

		$id = $_GET['id'];
		$data['data'] = $this->post->getPost($id);

		return $data;
	}

	public function validUpdate () {
		$data = [];
        $errors = array(
            'author_sign' => false,
            'title' => false,
            'content' => false,
            'category' => false
        );

		$data['view'] = "validUpdate_posts.php";
		$id = $_GET['id'];

        if(empty($_POST['author_sign'])){
            $errors = [
                'author_sign' => true
            ];
            die('Vous n\'avez pas spécifié votre nom.');
        }else{
            $author_sign = $_POST['author_sign'];
        }

        if(empty($_POST['title'])){
            $errors = ['title' => true];
            die('Vous n\'avez pas specifie de titre pour votre artticle');
        }else{
            $title = $_POST['title'];
        }

        if(empty($_POST['content'])){
            $errors = ['content' => true];
            die('Il faut un contenu pour votre article');
        }else{
            $content = $_POST['content'];
        }

        if($_POST['category'] == "NULL"){
            $errors = ['category' => true];
            die('Il faut choisir une categorie pour votre article');
        }else{
            $category = $_POST['category'];
        }

		$this->post->updatePost($id, $author_sign, $title, $content, $category);

		return $data;
	}

}
