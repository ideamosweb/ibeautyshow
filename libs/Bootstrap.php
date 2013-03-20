<?php

class Bootstrap {

    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);
        
        if (empty($url['0'])){
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        $file = "controllers/" . $url[0] . ".php";

        if (file_exists($file)) {
            require $file;
        } else {
            $msg = "Page doesn't exist";
            $controller = new Controller();
            $controller->error($msg);            
        }

        $controller = new $url[0];
        $controller->loadModel($url[0]);
        
        if (isset($url[2])) {
            if(method_exists($controller, $url[1])){
                $controller->{$url[1]}($url[2]);
            }else{
                $msg = "Page doesn't exist";
                $controller->error($msg);
            }            
        } else {
            if (isset($url[1])) {
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();                    
                }else{
                    $msg = "Page doesn't exist";
                    $controller->error($msg);
                }                
            }else{
                $controller->index();
            }
        }
    }
}