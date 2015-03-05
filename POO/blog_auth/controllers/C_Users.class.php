<?php
class C_Users {
    private $userModel = null;
    public function __construct() {
        $this->userModel = new M_Users();
    }
    
    public function collect() {
        return ['data' => null, 'view' => 'collect_users.php'];
    }
    
    public function check () {
        if(empty($_REQUEST['email']) || empty($_REQUEST['password'])){
            die('Erreur !');
        }

        $user = $this->userModel->getUser($_REQUEST['email'], sha1($_REQUEST['password']));
        
        if($user){
            $this->connect($user);
        }else{
            $this->create($_REQUEST['email'], sha1($_REQUEST['password']));
        }
    }
    
    /* Connecte l'user */
    private function connect($user) {
        $_SESSION['user'] = $user['email'];
        $_SESSION['connected'] = 1;
        
        header('Location: index.php');
    }
    
    /* Crée l'user */
    private function create($email, $password) {
        $this->userModel->createUser($email, $password);
        $this->connect(['email'=>$email]);
    }
    
}