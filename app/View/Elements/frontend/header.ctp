<?php
//pr($this->Session->read('ProdducItem'));
?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <a href="<?php echo Router::url('/',true);?>"><?php echo $this->Html->image('cropped-logo.png');?></a>	
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
        <div class="header_menu">
			<?php echo $this->element('frontend/main_menu');?>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    	<div class='row'>
    		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    			<div class="logged_user_name pull-right">
    				<?php
    					if(!empty($logged_user['id'])):
    				?>
    				<b>Logged as <a href='<?php echo $this->base.'/pages/get_logged_user_info';?>'><?php echo $logged_user['Profile']['name'];?></a></b>
    				<?php
						endif;
    				?>
    				
    			</div>
    		</div>
    	</div>
    	<div class='row'>
		    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="productCart">
		    		<a href="javascript:void(0)" class="top-link-cart cart_btn top-link-cart-open"><span class="glyphicon glyphicon-shopping-cart custom-cart"></span>Cart(<span id='no_of_item'><?php echo count($this->Session->read('ProdducItem')); ?></span>)</a>
		    		</div>
		    </div>
		    		
		    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		        <div class="signin pull-right">
		        <?php
				if(empty($logged_user['id'])):
				?>
		            <a class="btn" data-toggle="modal" data-target="#myModal">Login or register</a>
		         <?php
				 	else:
				 ?>  
		         <a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'logout'));?>" class="btn">Logout</a>
		         <?php
				 	endif;
				 ?>
		        </div>	
		    </div>
    	</div>
    </div>
    
</div>

<div id='headercart' class="headercart">
	<div class="block block-cart">
        <div class="block-title">
        <strong><span>Recently added item(s)</span><span class="close-cart-box"><a onclick="cart_close()" href="javascript:void(0)">X</a></span></strong>       
    	</div>
	    <div class="block-content" id="block-content">
	    	<?php
	    	$data = $this->Session->read('ProdducItem');
			if(!empty($data)):
	    	?>
	    	<table class="table table-striped">
	    		<tr><th>Picture</th><th>Title</th><th>Price</th><th>Qty</th><th>Total</th><th>Action</th></tr>
	    		<?php
	    		$grn_total = 0;
	    		foreach($data as $keyindex=>$result):
					$total = $result['Product']['price']*$result['Product']['qty'];
					$grn_total = $grn_total+$total;
	    		?>
	    		
	    		<tr id='status-<?php echo $keyindex;?>'><td><?php echo $this->Html->image($result['Product']['image'],array('width'=>50));?></td><td><?php echo $result['Product']['name'];?></td><td><?php echo $result['Product']['price'];?></td><td><input id='<?php echo $keyindex;?>' size="1" name="prduct_qty" value="<?php echo $result['Product']['qty'];?>" onkeyup="changeProductQty(this.id,this.value)" OnClick="changeProductQty(this.id,this.value)"></td><td id='price-<?php echo $keyindex;?>'><?php echo $total;?></td><td><button id='<?php echo $keyindex;?>' type="button" class="btn btn-sm btn_red" OnClick="deleteCartProduct(this.id)"><span class='glyphicon glyphicon-remove'></span></button></td></tr>
	    		<?php
				endforeach;
	    		?>
	    		<tr><td colspan='3'></td><td><b>Total($)&nbsp;</b>:</td><td colspan='2'><b><span class="amount_usd"><?php echo $grn_total;?>.00 (USD)</span></b></td></tr>
	    		</table>
	    		<div class="orderbtn pull-right">
	    			
	 			<?php
				if(empty($logged_user['id'])):
				?>
	                <a class="btn btn_red" data-toggle="modal" data-target="#myModal">Place Orders</a>
	             <?php
				 	else:
				 ?>  
	            
	             <a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'cart_checkout'));?>" class="btn btn_red">Place Orders</a>
	            
	            
	            
	             <?php
				 	endif;
				 ?> 	    			
	    		
	    		</div>
	    		
	    	<?php
			else:
	    	?>
	       <p class="empty">You have no items in your shopping cart.</p>
	       <?php
			endif;
	       ?>
	    </div>
</div>
</div>
