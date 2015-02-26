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
        $data['data'] = $this->post->getPosts();
        $data['view'] = 'view_posts.php';
        return $data;
    }

}
