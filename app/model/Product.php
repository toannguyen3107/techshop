<?php
    class Product {
        public function getProduct(){
            $data = file_get_contents('./product.json');
            $data = json_decode($data);
            return $data;
        }
        public function getCategory(){
            $data = file_get_contents('./json/category.json');
            $data = json_decode($data);
            return $data;
        }
        public function getPro(){
            
        }
    }
?>