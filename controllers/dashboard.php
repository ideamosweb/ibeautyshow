<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        //start session
        $this->view->js = Array("dashboard/js/default.js");                
        Session::init();        
        $logged = Session::get("loggedIn");
        if($logged == false){
            Session::destroy();
            header('location:'.URL.'login');
            exit;
        }
        
        //print_r($_SESSION);
    }
    
    public function index(){
        $this->view->render("dashboard/index");
    }
    
    public function logout(){
        Session::destroy();
        $this->view->redirect('login/index');
        exit;
    }
    
    public function ajaxFunctionInsert(){
        $this->model->ajaxFunctionInsert();
    }
    
    public function ajaxFuntionGet(){
        $this->model->ajaxFuntionGet();
    }
    
    public function ajaxDelete(){
        $this->model->ajaxDelete();
    }
            

}
