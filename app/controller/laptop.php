<?php 
class Laptop extends Controller{
    public function index($name=''){
        // $user = $this->model('User');
        // $user->name = $name;

        $this->view('laptop/index', []);
    }
}