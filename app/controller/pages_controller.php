<?php 
    class Page{
        function home(){
            require_once('app/view/pages/home.php');
        }
        function error(){
            require_once('app/views/pages/error.php');
        }
    }
?>