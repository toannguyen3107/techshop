<?php 
class Cart extends Controller{
    public function index($name=''){
        // $user = $this->model('User');
        // $user->name = $name;

        $this->view('cart/index', []);
    }
}