
<div class="container">
    <div class="row">
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
            <div class="ff">
                <ol id="sample" class="ticker"><span>Latest News</span>
				
				<?php
					$news = $this->LatestNews->generateLatestNews();
					//pr($news);die();
					if(!empty($news)):
					foreach($news as $value):
				?>
                    <li><a href='<?php echo Router::url(array('controller'=>'pages','action'=>'get_full_news',$value['New']['id']));?>'><?php echo $value['New']['title'];?></a></li>
					<?php
						endforeach;
						endif;
					?>
					
                </ol>
            </div>
        </div>
    </div>
</div>      
