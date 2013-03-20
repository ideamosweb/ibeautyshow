<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();        
    }
    
    public function index($msg = "This is error"){
        $this->view->msg = $msg;
        $this->view->render("error/index");
    }

}
