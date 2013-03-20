<?php

class Asociaciones_asistentes extends Controller {   

    function __construct() {
        parent::__construct();
        /*
         * page title
         */
        $this->view->title = "Programación - I Beauty Show Cartagena - Colombia";
        /*
         * CSS files included
         * Avia slider styles, Pretty Photo
         */
        $this->view->css = Array(
            "style_avia.css",
            "prettyPhoto.css",
			"jquery.booklet.1.4.0.css"
        );
        /*
         * Javascripts libraries included
         * Avia Slider, Prety photo, Easy slider, index2
         */
        $this->view->js = Array(
			"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js",
			JS."jquery.aviaSlider.js",
            JS."custom_avia.js",
            JS."jquery.prettyPhoto.js",	 
			JS."jquery.easing.1.3.js",
			JS."jquery.booklet.1.4.0.min.js",
			JS."jquery.booklet.1.4.0.js" 
			           
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
        $this->view->render("asociaciones_asistentes/index");        
    }
    
    public function formato_de_reserva(){
        header("location:".URL."views/tarifas_y_formularios/FORMATO DE RESERVA ibeautyshow.xlsx");    
    }
}
