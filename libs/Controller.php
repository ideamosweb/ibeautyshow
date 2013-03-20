<?php

class Controller {

    function __construct() {        
        $this->view = new View();
        $this->email = new Mail();
    }
    
    public function loadModel($name){        
        $path = 'models/'.$name.'_model.php';
        if (file_exists($path)){
            require $path;
            $nameModel = ucfirst($name).'_model';
            $this->model = new $nameModel();
        }
    }
    
    public function error($msg){
        require "controllers/error.php";
        $error = new Error();        
        $error->index($msg);
        exit;
    }

}