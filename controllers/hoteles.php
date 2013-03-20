<?php

class Hoteles extends Controller {   

    function __construct() {
        parent::__construct();
        /*
         * page title
         */
        $this->view->title = "Hoteles - I Beauty Show Cartagena - Colombia";
        /*
         * CSS files included
         * Avia slider styles, Pretty Photo
         */
        $this->view->css = Array(
            "slideshow.css",            
            "prettyPhoto.css"
        );
        /*
         * Javascripts libraries included
         * Avia Slider, Prety photo, Easy slider, index2
         */
        $this->view->js = Array(
            JS."jquery.cycle.lite.js",            
            JS."jquery.prettyPhoto.js",
            JS."custom_cicle.js"
        );
        /*
        * This atribute enable body atributes
        */
        $this->view->body = Array(             
            "class" => "back-paginas"
         );
        /*
        * This atribute enable slider if TRUE
        */
        $this->view->slide = false;
        /*
        * id on header section
        */
        $this->view->header_id = false;
    }
    
    public function index(){
        $this->view->render("hoteles/index");        
    }   
}
