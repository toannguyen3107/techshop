<?php 
class Payment extends Controller{
    public function index($name=''){
        // $user = $this->model('User');
        // $user->name = $name;

        $this->view('payment/index', []);
    }
}