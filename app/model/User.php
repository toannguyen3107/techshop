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
               $_SESSION['user_id'] = $result[0]['user_id']; //set id for session
            }else{
                // header('location: /techshop/public/login/index');
                // echo "false";
                // Send POST request with body "login_fault=true"
                header('location: /techshop/public/login/index?login_false=false');
            }
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
            require_once('../app/component/close.php');
            return $result; 
        }
        public function getUser(){
            require_once('../app/component/connect.php'); //connect database
            $ressult = '';
            try{
            $stmt = $conn->prepare('SELECT * FROM User WHERE user_id = ' . $_SESSION['user_id']);
            $stmt->execute();

            if($stmt->rowCount() > 0){
               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        public function updateUser($data = [])
        {
            require_once '../app/component/connect.php'; // connect
        
            try {
                // Use placeholders to prevent SQL injection
                $sql = 'UPDATE User SET password = :password, email = :email, first_name = :fname, last_name = :lname, phone = :phone WHERE user_id = :user_id';
        
                // Prepare the SQL statement
                $stmt = $conn->prepare($sql);
        
                // Bind parameters with values
                $stmt->bindParam(':password', $data['password']);
                $stmt->bindParam(':email', $data['email']);
                $stmt->bindParam(':fname', $data['fname']);
                $stmt->bindParam(':lname', $data['lname']);
                $stmt->bindParam(':phone', $data['phone']);
                $stmt->bindParam(':user_id', $_SESSION['user_id']);
        
                // Execute the statement
                $stmt->execute();
        
                // Redirect after successful update
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            } finally { // if succes it go to this area!
                require_once '../app/component/close.php'; // close
            }
        }        
    }
?>