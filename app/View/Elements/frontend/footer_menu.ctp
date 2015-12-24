
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
                    <li><?php echo $value['New']['title'];?></li>
					<?php
						endforeach;
						endif;
					?>
					
                </ol>
            </div>
        </div>
    </div>
</div>      
