<?php

class Expositores extends Controller {   

    function __construct() {
        parent::__construct();
        /*
         * page title
         */
        $this->view->title = "Expositores - I Beauty Show Cartagena - Colombia";
        /*
         * CSS files included
         * Avia slider styles, Pretty Photo
         */
        $this->view->css = Array(
            "style_avia.css",
            "prettyPhoto.css"
        );
        /*
         * Javascripts libraries included
         * Avia Slider, Prety photo, Easy slider, index2
         */
        $this->view->js = Array(           
            JS."jquery.aviaSlider.js",
            JS."custom_avia.js",
            JS."jquery.prettyPhoto.js"            
        );
        /*
        * This atribute enable body atributes
        */
        /*$this->view->body = Array(
            "onload" => "initialize()", 
            "class" => "back-paginas"
         );*/
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
        $this->view->render("expositores/index");        
    }   
}