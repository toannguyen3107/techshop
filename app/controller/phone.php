<?php 
class Phone extends Controller{
    public function index($name=''){
        // $user = $this->model('User');
        // $user->name = $name;

        $this->view('phone/index', []);
    }
}