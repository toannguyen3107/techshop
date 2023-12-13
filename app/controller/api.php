<?php
    class Api extends Controller
    {
        public function name(){
            $user = $this->model('User');
            $info = $user->getUser();
            echo $info[0]['user_name'];
        }
        public function phonetop(){
            $product = $this->model('Product');
                $productElement = $product->getPhoneTop();
                header('Content-Type: application/json');
                echo json_encode($productElement);            
        }
        
        public function laptoptop(){
            $product = $this->model('Product');
            $productElement = $product->getLaptopTop();
            header('Content-Type: application/json');
            echo json_encode($productElement); 
        }
        public function productrecommend(){
            $product = $this->model('Product');
            $productElement = $product->getProduct();
            echo json_encode($productElement); 
        }

        public function phone(){
            $product = $this->model('Product');
                $productElement = $product->getPhone();
                header('Content-Type: application/json');
                echo json_encode($productElement);            
        }
        public function productrecommendPhone(){
            $product = $this->model('Product');
            $productElement = $product->getProductPhone();
            header('Content-Type: application/json');
            echo json_encode($productElement); 
        }

        public function tablet(){
            $product = $this->model('Product');
                $productElement = $product->getTablet();
                header('Content-Type: application/json');
                echo json_encode($productElement);            
        }
        public function productrecommendTablet(){
            $product = $this->model('Product');
            $productElement = $product->getProductTablet();
            header('Content-Type: application/json');
            echo json_encode($productElement); 
        }
        public function laptop(){
            $product = $this->model('Product');
                $productElement = $product->getLaptop();
                header('Content-Type: application/json');
                echo json_encode($productElement);            
        }
        public function productrecommendLaptop(){
            $product = $this->model('Product');
            $productElement = $product->getProductLaptop();
            header('Content-Type: application/json');
            echo json_encode($productElement); 
        }
    }
?>