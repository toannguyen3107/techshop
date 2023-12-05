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
                echo json_encode($productElement);            
        }
        
        public function laptoptop(){
            $product = $this->model('Product');
            $productElement = $product->getLaptopTop();
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
                echo json_encode($productElement);            
        }
        public function productrecommendPhone(){
            $product = $this->model('Product');
            $productElement = $product->getProductPhone();
            echo json_encode($productElement); 
        }

        public function tablet(){
            $product = $this->model('Product');
                $productElement = $product->getTablet();
                echo json_encode($productElement);            
        }
        public function productrecommendTablet(){
            $product = $this->model('Product');
            $productElement = $product->getProductTablet();
            echo json_encode($productElement); 
        }
        public function laptop(){
            $product = $this->model('Product');
                $productElement = $product->getLaptop();
                echo json_encode($productElement);            
        }
        public function productrecommendLaptop(){
            $product = $this->model('Product');
            $productElement = $product->getProductLaptop();
            echo json_encode($productElement); 
        }
    }
?>