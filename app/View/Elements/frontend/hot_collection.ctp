<div class="news">Hot Collections</div>
<div class="demo5 demof">
    <ul>
    <?php
		$datas = $this->HotCollections->generateHotCollection();
		//pr($datas);
		if(!empty($datas)):
		foreach($datas as $val):
	?>
        <li><?php echo $this->Html->image($val['Paint']['image'],array('title'=>$val['Paint']['title'],'class'=>'img-responsive'));?><a href="<?php echo Router::url(array('controller'=>'pages','action'=>'view_full_paint',$val['Paint']['slug']));?>"><h4 style="color:#555555"><?php echo $val['Paint']['title'];?></h4></a>
        <p><?php echo String::truncate($val['Paint']['description'],70,array('ellipsis'=>'...','exact'=>false));?></p>
        </li>
      <?php
	  endforeach;
	  endif;
	  ?>
    </ul>
</div>

</div>