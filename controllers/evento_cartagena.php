<?php

class Evento_cartagena extends Controller {   

    function __construct() {
        parent::__construct();
        /*
         * page title
         */
        $this->view->title = "Evento Cartagena - I Beauty Show Cartagena - Colombia";
        /*
         * CSS files included
         * Avia slider styles, Pretty Photo
         */
        $this->view->css = Array(
            "colorbox.css",
            "style_avia.css",
            "prettyPhoto.css"
        );
        /*
         * Javascripts libraries included
         * Avia Slider, Prety photo, Easy slider, index2
         */
        $this->view->js = Array(          
            JS."jquery.colorbox.js",
            JS."jquery.prettyPhoto.js",
            JS."custom_colorbox.js",
            JS."jquery.aviaSlider.js",
            JS."custom_avia.js"
            
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
        $this->view->render("evento_cartagena/index");        
    }   
}
