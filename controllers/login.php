<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = Array("login/js/login.js");
    }
    
    function index(){        
        $this->view->render("login/index");
    }
    
    function doLogin(){
        $login = $this->model->doLogin($_POST['user'], $_POST['password']);
        if ($login){
            //$this->view->redirect("dashboard");
            echo "true";
        }else{            
            //$msg = "Wrong username or password";
            //$this->error($msg);
            echo "false";
        }
    }
}

