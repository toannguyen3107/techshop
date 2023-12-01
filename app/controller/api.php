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
    }
?>