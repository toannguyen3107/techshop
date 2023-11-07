<?php 
    function call($controller, $action){
          require_once('app/controller/'.$controller.'_controller.php');  
          switch($controller){
            case 'pages':
                $controller = new Page();
        
            break;
          }
          $controller->{$action}();
    }

    $controllers = array('pages'=>['home', 'error']);
    if(array_key_exists($controller, $controllers)){
        if (in_array($action, $controllers[$controller])) {
            call($controller, $action);
        } else {
            call('pages', 'error'); // if action hasn't in controllers => error
        }
    }else {
        call('pages', 'error');
    }
?>
