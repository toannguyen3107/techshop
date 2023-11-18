<?php
    class Home extends Controller{
        public function index($name=''){
            // $user = $this->model('User');
            // $user->name = $name;
            // 'name' => $user->name
            $product = $this->model('Product');
            $ele = $product->getProduct();
            
            $this->view('home/index', ['product' => $ele]);
        }
    }
    
?>