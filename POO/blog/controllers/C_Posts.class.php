<?php
class C_Posts {

    protected $post = null;

    public function __construct () {
        $this->post = new Posts();
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
		$data['author_sign'] = $_POST['author_sign'];
		$data['title'] = $_POST['title'];
		$data['content'] = $_POST['content'];
		$data['category'] = $_POST['category'];
		
		$this->post->createPost($data['author_sign'], $data['title'], $data['content'], $data['category']);
		
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
		$data['view'] = "validUpdate_posts.php";
		
		$id = $_GET['id'];
		$author_sign = $_POST['author_sign'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$category = $_POST['category'];
		
		$this->post->updatePost($id, $author_sign, $title, $content, $category);
		
		return $data;
	}

}
