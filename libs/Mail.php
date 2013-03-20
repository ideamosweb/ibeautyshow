<?php
class Mail { 
    
    
    function setEmail($blogname = "", $email = ""){        
        if(isset($_POST['email'])){            
            error_reporting(0);	
            $errorC = false;

            $the_email 		= $_POST['email'];
            $the_name 		= $_POST['yourname'];
            $the_message 	= $_POST['message'];

            $the_phone 		= $_POST['Telefono'];
            $the_country 	= $_POST['Pais'];
            

            # want to add aditional fields? just add them to the form in template_contact.php,
            # you dont have to edit this file

            //added fields that are not set explicit like the once above are combined and added before the actual message
            $already_used = array('email','yourname','message','phone','fax','company','website','myblogname','tempcode','temp_url','ajax');
            $attach = '';

            foreach ($_POST as $key => $field)
            {
                    if(!in_array($key,$already_used))
                    {
                            $attach.= $key.": ".$field."<br /> \n";
                    }
            }
            $attach.= "<br /> \n";

            if(!$this->checkmymail($the_email))
            {
                    $errorC = true;
                    $the_emailclass = "error";
            }else{
                    $the_emailclass = "valid";
                    }

            if($the_message == "")
            {
                    $errorC = true;
                    $the_messageclass = "error";
            }else{
                    $the_messageclass = "valid";
                    }

            if($errorC == false)
            { 	
                    $to      =  $email;
                    $subject = "Nuevo Mensaje desde " . $blogname;
                    $header  = 'MIME-Version: 1.0' . "\r\n";
                    $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                    $header .= 'From:'. $email  . " \r\n";

                    $message1 = nl2br($the_message);

                    if(!empty($the_name)) 		$the_name 		= "<b>Nombre</b>:  	$the_name <br/>";                    
                    if(!empty($the_phone)) 		$the_phone 		= "<b>Telefono</b>:   $the_phone <br/>";
                    if(!empty($the_country)) 		$the_country 		= "<b>Pais</b>:  	$the_country <br/>";                    
                    if(!empty($the_email))      $the_email      = "<b>Email</b>: $the_email <br/>";

                    $message = "
                    Has recibido un nuevo correo! <br/><br/>
                    $the_name
                    $the_country
                    $the_phone                    
                    $the_email
                    <br />

                    <b>Mensaje</b>: $message1 <br />";



                    if(@mail($to,$subject,$message,$header)) $send = true; else $send = false;

                    if(isset($_POST['ajax'])){

                    if ($send)
                    echo '<h3>Tu mensaje ha sido enviado!</h3><div class="confirm">
                                    <p class="textconfirm">Gracias por contactarnos.<br/>En la mayor brevedad nos contactaremos con usted.</p>
                                </div>';
                    else
                    echo '<h3>Oops!</h3><div class="confirm">
                                    <p class="texterror">Hubo un error, sus datos no fueron enviados, por favor reenvie el formulario o intente mas tarde.</p>
                                </div>'; 

                    }
            }
		
        }        
               
    }
    
    public function checkmymail($mailadresse){
        $email_flag=preg_match("!^\w[\w|\.|\-]+@\w[\w|\.|\-]+\.[a-zA-Z]{2,4}$!",$mailadresse);
	return $email_flag;
    }
}
