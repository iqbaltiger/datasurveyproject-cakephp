<div class="container-fluid">
            <div class="body_bacground">
                <div class="container">
                    <div class="row">
                        <div class='col-xs-12 col-sm-12 col-md-8 col-lg-8'>								
                            <div class="left_content">
                                <div class="slider_image">
                                    <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
									
									<?php 
									$slider = $this->Slider->generateSlider();
									//pr($slider);
									if(!empty($slider)):
									foreach($slider as $value):
									?>
									
                                        <div data-src="<?php echo $this->base.$value['SliderContent']['image'];?>" data-thumb="<?php //echo Router::url().$value['SliderContent']['image'];?>">     
                                        </div>	
									<?php
										endforeach;
										endif;
									?>
																		  
                                    </div><!-- .fluid_container -->		
                                </div>							
                            </div>																					
                        </div>								
                        <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4' >
                            <div class="right_content">
							
							<?php echo $this->element('frontend/hot_collection');?>

                        </div>         
                    </div>
                </div>
          </div>
</div>