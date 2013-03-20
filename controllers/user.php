<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
        //start session
        $this->view->js = Array("user/js/users.js");                
        Session::init();        
        $logged = Session::get("loggedIn");
        $role = Session::get("role");
        if($logged == false || $role != 'owner'){
            Session::destroy();
            header('location:'.URL.'login');
            exit;
        }       
    }
    
    public function index(){
        //$this->view->userList = $this->model->userList(); Uncomment if you want get data from view 
        $this->view->render("user/index");
    }
    
    public function getDataAjax(){
        $this->model->userList();        
    }
    
    public function create(){
        $create = $this->model->createUser();
        
        if ($create){
            header('location:'.URL.'user');
            
        }else{
            echo "error";
            return false;
        }
    }
    
    public function edit($id){
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render("user/edit");
    }
    
    public function saveEdit($id){        
        $this->model->editUser($id);
        header('location:'.URL.'user');
    }


    public function delete($id){
        $this->model->deleteUser($id);
    }
}

