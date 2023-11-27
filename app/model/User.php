<?php
    class User{
        public $name; 
        public function login($user, $pass){
            require_once('../app/component/connect.php'); //connect database
            $ressult = '';
            try{
            $stmt = $conn->prepare('SELECT * FROM User WHERE user_name = :username and password = :password');
            $stmt->bindParam(":username", $user);
            $stmt->bindParam(":password", $pass);
            $stmt->execute();
            if($stmt->rowCount() > 0){
               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
               $_SESSION['login'] = true;  
            }else{
                header('location: /techshop/public/login/index');
                echo "false";
                exit();
            }
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
            require_once('../app/component/close.php');
            return $result;
        }
        public function logout(){
            //code logout
        }
    }
?>