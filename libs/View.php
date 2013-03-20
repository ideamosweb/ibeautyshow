<?php

class View {
    
    public $content_layout = "";

    function __construct() {        
    }
    
    public function render($name, $noInclude = false){
        if($noInclude){
            require 'views/'.$name.'.php';
        }else{
            $this->set_content($name);
            require 'views/layout.php';            
        }        
    }
    
    public function set_content($name){
        $this->content_layout = $name;                 
    }
    
    public function get_content(){
       require 'views/'.$this->content_layout.'.php';
    }
    
    
    public function redirect($name){
        header("location:".URL."".$name);
    }

    public function page_section($section){
        require 'views/' . $section . '.php';
    }
}
