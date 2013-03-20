<div class="main-wrapper">
	
      <div class="topnav">
          <div class="container_12">
  
              <div class="logo"><a href="<?php echo URL ?>index/"><img src="<?php echo IMGS ?>logo3.png" alt="I Beauty Show" width="310" height="89" border="0" /></a></div>
              <div class="bandera"><a href="http://www.ibeautyshow.com/" target="_blank"><img src="<?php echo IMGS ?>B_eeuu_32x20.png" width="32" height="20" /></a></div>
              <!-- topmenu -->            
              <div class="menu-header">
              <h3>Noviembre 3-4, 2013</h3>
              <h2>Centro de convenciones Cartagena de Indias</h2>
              <h4>Empieza a formar parte de un estilista integral capacítate y conoce las nuevas tendencias 2013</h4>
                  <?php
                      $url = isset($_GET['url']) ? $_GET['url'] : null;
                      $url = rtrim($url, "/");
                      $url = explode("/", $url);
                      $current = "";                  
                  ?>                  
              </div>
              <!--/ topmenu -->        
          </div>
    <div style="background:#0074BB; height:37px; padding:8px 0">
              <ul class="topmenu">
                    <li><a href="<?php echo URL ?>index/"><span><div class="homebackgroung"></div></span></a></li>
                    <li class="<?php echo $url[0] == 'evento'? 'current-menu-item': '' ?>"><a href="<?php echo URL ?>evento/"><span>Evento 2013</span></a></li>
                    
                    
                    <!--<li class="<?php echo $url[0] == 'construccion'? 'current-menu-item': '' ?>"><a href="<?php echo URL ?>construccion/"><span>Invitados</span></a>
                        <ul class="sub-menu">
                            <li class="first parent"><a href="<?php echo URL ?>invitada_internacional/"><span>Invitada Internacional</span></a></li>
                            <li class="parent last"><a href="<?php echo URL ?>invitados/"><span>Invitados Especiales</span></a></li>										
                        </ul>
                    </li>-->
                        
                    <li class="parent <?php echo $url[0] == 'expositores'? 'current-menu-item': '' ?>"><a href="<?php echo URL ?>expositores/"><span>Evento 2012</span></a>
                    	<ul class="sub-menu">
                            <li class="first parent"><a href="<?php echo URL ?>expositores/"><span>Expositores</span></a></li>
                            <li class="parent last"><a href="<?php echo URL ?>evento_cartagena/"><span>Evento</span></a></li>										
                        </ul>
                    
                    </li>
                    
                    <!--<li class="<?php echo $url[0] == 'asociaciones_asistentes'? 'current-menu-item': '' ?>"><a href="<?php echo URL ?>asociaciones_asistentes/"><span>Programación</span></a></li>-->
                    
                    <li class="<?php echo $url[0] == 'planos'? 'current-menu-item': '' ?>"><a href="<?php echo URL ?>planos/"><span>Plano 2013</span></a></li>
                        
                    <li class="<?php echo $url[0] == 'hoteles'? 'current-menu-item': '' ?>"><a href="<?php echo URL ?>hoteles/"><span>Hotel</span></a></li>
                    
                    <li class="last <?php echo $url[0] == 'contacto'? 'current-menu-item': '' ?>"><a href="<?php echo URL ?>contacto/"><span>Contacto</span></a></li>                                             
                </ul>
                <div class="socialbox">
                	<div class="socialiconshf left"><a href="http://www.facebook.com/www.ibeautyshow.com.co" target="_blank"></a></div>
                    <div class="socialiconsht right"><a href="https://twitter.com/#!/IBeautyShow" target="_blank"></a></div>
                </div>
           </div>
      </div>
  <!-- Load slider if exist on the controller -->    
  <?php if(isset($this->slide) && $this->slide == true){ ?>   
          <div class="container_12" id="wrap_slide">
              <div id="slider">
                  <ul>				
                      <li><a href="#"><img src="<?php echo IMGS ?>slider27.png" alt="Css Template Preview" /></a></li>
                      <li><a href="<?php echo URL ?>evento_cartagena/"><img src="<?php echo IMGS ?>slider23.png" alt="Css Template Preview" /></a></li>
                      <li><a href="<?php echo URL ?>evento_miami/"><img src="<?php echo IMGS ?>slider25.png" alt="Css Template Preview" /></a></li>                                        
                      <li><a href="#"><img src="<?php echo IMGS ?>slider24.png" alt="Css Template Preview" /></a></li>							
                  </ul>
              </div>
          </div>   
    <?php }elseif(isset($this->contentmain) && $this->contentmain == true){ ?>
      		<div style="height:497px; margin-bottom:15px">
       	  		<img src="<?php echo IMGS ?>newslider10.jpg" width="1000" height="497" />
          	</div>
      <?php }?>
  <!--/ slider -->
  <!--/ header -->
