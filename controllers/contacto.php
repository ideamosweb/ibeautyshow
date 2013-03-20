<?php

class Contacto extends Controller {   

    function __construct() {
        parent::__construct();
        /*
         * page title
         */
        $this->view->title = "Contacto - I Beauty Show Cartagena - Colombia";
        /*
         * CSS files included
         * Avia slider styles, Pretty Photo
         */
        $this->view->css = Array(
            "style_avia.css",
            "prettyPhoto.css",
            "ui-lightness/jquery-ui-1.8.4.custom.css",
            "ui.selectmenu.css"
            
        );
        /*
         * Javascripts libraries included
         * Avia Slider, Prety photo, Easy slider, index2
         */
        $this->view->js = Array(
            JS."jquery.aviaSlider.js",
            JS."custom_avia.js",
            JS."jquery.prettyPhoto.js",
            JS."jquery-ui-1.8.4.custom.min.js",
            JS."ui.selectmenu.js",
            JS."styled.selectmenu.js",            
            JS."custom_contact.js"
        );
        /*
        * This atribute enable body atributes
        */
        $this->view->body = Array(             
            "class" => "back-contact"
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
        $this->view->render("contacto/index");        
    }
    
    public function sendMail(){
        // Change this with your blog name and email address
        $the_blogname   = 'ibeautyshow.com';
        $the_myemail 	= 'info@ibeautyshow.com.co';
        $this->email->setEmail($the_blogname, $the_myemail);
    }
    
}
