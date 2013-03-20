<!-- Load header -->
<?php $this->page_section('header') ?>
<!-- end Load header -->
<div class="bg_welcome_bar">
    <div class="welcome_bar">
        <!-- bar -->	
        <div class="container_12 bar">
            <div class="bar-icon"><img src="<?php echo IMGS ?>icon_contact.png" width="64" height="63" alt="" /></div>
            <div class="bar-title">
                <h1><span>Contáctenos</span></h1>            
            </div>
            <!--<div class="bar-iconsocial"> 
            	<a href="http://www.facebook.com/www.ibeautyshow.com.co"><img src="../public/images/facebook.png" width="48" height="48" /></a>
          		<a href="https://twitter.com/#!/IBeautyShow"><img src="../public/images/twitter.png" width="48" height="48" /></a>
            </div>-->
      <div class="bar-right"></div>
            <div class="clear"></div>
        </div>
        <!--/ bar -->   
    </div>	
</div>	

<!-- middle body -->    
<div class="middle" id="sidebar_right">
    <div class="container_12">
        <div class="wrapper">
            <div class="content">
                <div class="text">
                	<div>
                		<div class="contact-address">
                        	<div style="display:block; float:left"><h3>Contactenos:</h3></div>
                            <div class="address">Calle 99A # 42F - 211</div>
                            <div class="phone">Teléfono: (5) 3192546.</div>
                            <div class="phone">Celular: (57) 3007873439 - 3007888002</div>                                                       
                            
                        </div>
                    	<div class="social-box">
                        	<div class="row social-mail"><a href="#">info@ibeautyshow.com.co</a></div>
                          	<div class="row social-twitter"><a href="https://twitter.com/#!/IBeautyShow">twitter.</a></div>            
                          	<div class="row social-facebook"><a href="http://www.facebook.com/pages/I-Beauty-Show/334848406525614">facebook.</a></div>                        
                        </div>
                      </div>
                      
                                
                    <div class="contact-form">
                    
                        <h2>Por favor llena el siguiente formulario:</h2>

                        <form action="" method="post" class="ajax_form" name="contactForm" enctype="multipart/form-data">

                            <div class="row field_text">
                                <label>Nombre (requerido):</label> 
                                <input name="yourname" value="" id="name" class="inputtext input_middle required" size="30" type="text" />
                            </div>

                            <div class="row field_text">
                                <label>Email (requerido):</label> 
                                <input name="email" value="" id="email" class="inputtext input_middle required" size="40" type="text" />
                            </div>
                            <div class="clear"></div>

                            <div class="row field_select alignleft">
                                <label>País:</label> 
                                <select class="select_styled" name="Pais" id="Pais">
                                    <option value="Colombia">Colombia</option>
                                    <option value="Estados Unidos">Estados Unidos</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="row field_text alignleft">
                                <label>Teléfono (con indicativo):</label> 
                                <input name="Telefono" value="" id="Telefono" class="inputtext input_middle" size="40" type="text" />
                            </div>
                            <div class="clear"></div>

                            <div class="row field_textarea">
                                <label>Comentario:</label> 
                                <textarea id="message" name="message" class="textarea textarea_middle required" cols="40" rows="10"></textarea>
                            </div>

                            <div class="clear"></div>

                            <div class="row field_submit">
                                <!--<span class="reset-link"><a href="#" onclick="document.contactForm.reset();return false">borrar los campos</a></span>-->
                                <input value="Enviar" title="send" name="send" class="contact-submit submit" id="send"  type="submit" /> 
                            </div>
                        </form>
                    </div>						   

                </div>
            </div>
            <!-- Load sidebar -->
            <div class="sidebar">
                <?php $this->page_section('sidebar') ?>
                <br />
                
              
              
              </div>
              <br />
                           
                          	
              </div>
                              
                <div class="inner">
	            	
                    <!-- widget contacts -->
                    <div class="widget-container widget_contact">              
                        
                        
                        <!--<div class="contact-maillist">
                        	<div class="contact-mail"><a href="mailto:info@ibeautyshow.com.co">info@ibeautyshow.com.co</a></div>           
                                 
                        </div>-->
                        
                        <br />
                        
                        
                        
                    </div>
                    <!--/ widget contacts -->

                    
                    
            	</div>
            </div>
            <!-- End Load sidebar -->
            <div class="clear"></div>
                        
        </div>        

        <div class="clear"></div>
    </div>	
</div>
<!--/ middle body -->
<!-- Load footer -->
<?php $this->page_section('footer') ?>
<!-- En Load footer -->
