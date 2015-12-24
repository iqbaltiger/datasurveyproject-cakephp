<?php 
	//pr($menu_data);die();
?>
<nav class="navbar navbar-default navbar-custom" role="navigation">											
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-collapse-custom" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo Router::url('/',true);?>">Home</a></li>
                <?php
					if(!empty($menu_data['header'])):
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