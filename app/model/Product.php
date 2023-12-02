<?php
    class Product {
        public function getProduct(){
            try {
                require_once '../app/component/connect.php';
                
                // Get the total number of products
                $countQuery = 'SELECT COUNT(*) FROM product';
                $stmt1 = $conn->prepare($countQuery);
                $stmt1->execute();
                $totalCount = $stmt1->fetchColumn();
        
                // Get the limit index from the cookie
                if(isset($_SESSION['idx'])){
                    $limitIndex = (int)$_SESSION['idx'];
                    $_SESSION['idx'] = $_SESSION['idx'] + 4;
                }else{
                    $limitIndex = 0;
                }
                // Check if the limit index is valid
                if ($limitIndex >= 0 && $limitIndex < $totalCount) {
                    // Fetch products from the database based on the limit index
                    $stmt = $conn->prepare('SELECT * FROM product LIMIT ' . $limitIndex . ', 4');
                    $stmt->execute();
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    // Invalid limit index, set data to an empty array or handle accordingly
                    $data = array();
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            } finally {
                require_once '../app/component/close.php';
            }
        
            return $data;
        } 
        
        public function getCategory(){
            $data = file_get_contents('./json/category.json');
            $data = json_decode($data);
            return $data;
        }
        public function getPhoneTop(){
            try{
                require_once '../app/component/connect.php';
                $stmt = $conn->prepare('SELECT * FROM product p JOIN phone ph ON p.id = ph.id LIMIT 4');
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
            }finally{
                require_once '../app/component/close.php';
            }
            //$data = file_get_contents('./product.json');
            //$data = json_decode($data);
            return $data;
        }
        public function getLaptopTop(){
            try{
                require_once '../app/component/connect.php';
                $stmt = $conn->prepare('SELECT * FROM product p JOIN laptop l ON p.id = l.id LIMIT 4');
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                echo $e->getMessage();
            }finally{
                require_once '../app/component/close.php';
            }
            //$data = file_get_contents('./product.json');
            //$data = json_decode($data);
            return $data;
        }
    }
?>