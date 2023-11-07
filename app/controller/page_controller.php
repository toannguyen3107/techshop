<?php 
    class Page{
        function home(){
            require_once('view/pages/home.php');
        }
        function error(){
            require_once('views/pages/error.php');
        }
    }
?>