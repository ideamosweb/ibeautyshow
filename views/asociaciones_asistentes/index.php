<!-- Load header -->
<?php $this->page_section('header') ?>

<!-- end Load header -->
<div class="bg_welcome_bar">
    <div class="welcome_bar">
        <!-- bar -->	
        <div class="container_12 bar">
            <div class="bar-icon"><img src="<?php echo IMGS ?>icon_portfolio.png" width="70" height="64" alt="" /></div>
            <div class="bar-title">
                <h1><span>Magazine</span></h1>            
            </div>

            <div class="clear"></div>
        </div>
        <!--/ bar -->   
    </div>	
</div>	

<!-- middle body -->    
<div class="middle" id="sidebar_right">
    <div class="container_12">
        <div class="wrapper-book">
        	
            <div id="mybook">
                <div> 
                	<img src="<?php echo IMGS ?>bookslider/1.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/2.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/3.jpg" />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/4.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/5.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/6.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/7.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/8.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/9.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/10.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/11.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/12.jpg"  />
                </div>
                <div> 
                    <img src="<?php echo IMGS ?>bookslider/13.jpg"  />
                </div>
			</div>
                
        </div>        

        <div class="clear"></div>
    </div>	
</div>
<!--/ middle body -->
<!-- Load footer -->
<?php $this->page_section('footer') ?>
<!-- En Load footer -->
<script type="text/javascript">	
	
	
	$(function() {
		//single book
		$('#mybook').booklet({
			width:  940,
        	height: 608,			
			pagePadding: 0,
			tabs:  true,			
			tabWidth:  80,
			tabHeight:  25,
			pageNumbers: false,
			closed: true,
			autoCenter: true
		});
		
		
		//multiple books with ID's
		$('#mybook1, #mybook2').booklet();
		
		//multiple books with a class
		$('.mycustombooks').booklet();
	});


</script>

