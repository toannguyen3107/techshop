<?php
    class Product {
        public function getProduct(){
            $data = file_get_contents('./product.json');
            $data = json_decode($data);
            return $data;
        }
    }
?>