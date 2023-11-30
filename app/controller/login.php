<?php 
class Login extends Controller{
    public function index($name=''){
        // $user = $this->model('User');
        // $user->name = $name;
        
        $this->view('login/index', []);
    }
    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $_POST['name'];
            $pass = $_POST['password'];

            // Validate and sanitize input
            // ...
            // echo $user. ' - '. $pass;
            $userModel = $this->model('User');
            $userModel->login($user, $pass);
        }else{
            echo "don't post";
        }
        if(isset($_SESSION['login']) && $_SESSION['login']){
            header('location: /techshop');
            exit();
        }else{
            echo "false connect";
        }
    }
    public function logout(){
        session_unset();
        session_destroy();
        $_SESSION = array();
        //
        header('location: /techshop');
        exit();
    }
    public function changeinfo(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!isset($_POST['email']) || !isset($_POST['firstname']) || !isset($_POST['lastname']) || !isset($_POST['phone']) || !isset($_POST['password'])){
                echo 'wrong! you need provide full field.';
            }else{
                $email = $_POST['email'];
                $fname = $_POST['firstname'];
                $lname = $_POST['lastname'];
                $phone = $_POST['phone'];
                $pass = $_POST['password'];
                $user = $this->model('User');
                $user->updateUser([
                    'password' => $pass,
                    'email' => $email,
                    'fname' => $fname,
                    'lname' => $lname,
                    'phone' => $phone
                ]);
                header('location: /techshop/public/home/private');
                exit();
            }
        }
    }
}
?>