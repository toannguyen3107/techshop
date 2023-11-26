<?php 
class Login extends Controller{
    public function index($name=''){
        // $user = $this->model('User');
        // $user->name = $name;
        
        $this->view('login/index', []);
    }
    public function login(){
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];

        //     // Validate and sanitize input
        //     // ...

        //     $userModel = $this->model('UserModel');
        //     $userModel->login($email, $password);
        // }
        $user = $this->model('User');
        $result = $user->login();
    }
    public function logout(){
        echo "it's working - out";
    }
}
?>