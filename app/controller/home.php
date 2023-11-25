<?php
    class Home extends Controller{
        public function index($name=''){
            // $user = $this->model('User');
            // $user->name = $name;
            // 'name' => $user->name
            $product = $this->model('Product');
            $ele1 = $product->getProduct();
            $ele2 = $product->getCategory();
            $this->view('home/index', ['product' => $ele1, 'category' => $ele2]);
        }
    }
    
?>