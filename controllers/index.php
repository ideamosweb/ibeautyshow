<?php

class Index extends Controller {   

    function __construct() {
        parent::__construct();
        /*
         * page title
         */
        $this->view->title = "Ibeauty show - Cartagena 2012";
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
            JS."jquery.prettyPhoto.js",
            JS."easySlider1.7.js",
            JS."index2.js",
            JS."custom_avia.js"
        );
        /*
        * This atribute enable body atributes
        */
        $this->view->body = array(
			"class" => "newbg"
		);
        /*
        * This atribute enable slider if TRUE
        */
        $this->view->slide = false;
		$this->view->contentmain = true;
        /*
        * id on header section
        */
        $this->view->header_id = "aside2";
    }
    
    public function index(){
        $this->view->render("index/index");
    }
}