<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
			<nav class="navbar navbar-default" role="navigation">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
                <li><a href="<?php echo Router::url('/',true);?>">Home</a></li>
                <?php
					if(!empty($menu_data['footer'])):
					foreach($menu_data['header'] as $value):
					if($value['Menu']['type']=='external_link' && !empty($value['Menu']['url'])){
						$link = $value['Menu']['url'];
					}else{
						$link = Router::url(array('controller'=>'pages','action'=>'content_details', $value['Menu']['slug']));
					}
					
				?>
                <li><a href="<?php echo $link;?>"><?php echo $value['Menu']['title'];?></a></li>
                <?php
					endforeach;
					endif;
				?>
					  </ul>
				</div><!-- /.navbar-collapse -->
					   
			  </nav>
	</div>
	 <div class="col-xs-12 col-sm-12 col-md-2-lg-2">
	 </div>
   
 </div>
 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="popupContainer">
        <header class="popupHeader">
            <span class="header_title">Login</span>
            <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>                                           
        <section class="popupBody">
            <!-- Social Login -->
            <div class="social_login">
                <div class="">
                    <a href="#" class="social_box fb">
                        <span class="icon"><i class="fa fa-facebook"></i></span>
                        <span class="icon_title">Connect with Facebook</span>
                        
                    </a>

                </div>

                    <div class="centeredText">
                        <span>Or use your Email address</span>
                    </div>

                    <div class="action_btns">
                    <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
        <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                    </div>
            </div>

                <!-- Username & Password Login form -->
            <div class="user_login">
                <?php
					echo $this->element('frontend/user_login');
				?>
            </div>

                <!-- Register Form -->
                
                <?php
					echo $this->element('frontend/registration');
				?>
                

        </section>
        </header>
    </div> 
    
</div>