<?php
    class User{
        public $name; 
        public function login(){
            require_once('../app/component/connect.php'); //connect database
            $ressult = '';
            try{
            $stmt = $conn->prepare('SELECT * FROM User');
            $stmt->execute();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
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