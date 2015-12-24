<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Household/Section-G'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                        <h5><b>706. Description of goods or products produced from livestock of this household? (In last three months)</b></h5>

                        <div class="table-responsive">

<?php
$description_goods_head = array(
    'Type of production', 'Amount of product or item(4+5)', 'Unit of production', 'Gift giving and own use',
    'Sold and exchanged', 'Price per unit', 'Total existing price (2 X 6)'
);

$description_good_cols_title = array(
    'Meat', 'Milk', 'Butter', 'Cheese', 'Ghee', 'Egg', 'Skin', 'Organic fertilizer', 'Others'
);
?>
             <?php echo $this->Form->create('Section706',array('class'=>'')) ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
<?php for ($k = 0; $k < count($description_goods_head); $k++): ?>

                                            <th><?php echo $description_goods_head[$k]; ?></th>

<?php endfor; ?>  
                                    </tr>

                                <tbody>
                            <?php for ($i = 0; $i < count($description_good_cols_title); $i++): ?> 
                                    
                                    <?php
                                    if(!empty($this->data[$i]['Section706']['id'])){
                                                        echo $this->Form->input($i.'.Section706.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <tr>
                                             <?php echo $this->form->input($i.'.Section706.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                            <td>
                                                <?php if($i==8){ 
                                                     
                                                       echo $this->form->input($i.'.Section706.type_of_production',array('type'=>'text','placeholder'=>'Others:','class'=>'form-control','label'=>false));
                                                    ?>
                                                
                                                <?php } else{ ?>
                                                <?php echo $this->form->input($i.'.Section706.type_of_production',array('type'=>'hidden','value'=>$description_good_cols_title[$i])); ?> <?php echo $description_good_cols_title[$i];} ?></td>
                                            <td><?php echo $this->Form->input($i.'.Section706.amount', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.Section706.unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.Section706.gift_own_use', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.Section706.sale_and_exchange', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.Section706.price_per_kg', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.Section706.total_price', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        </tr> 
                            <?php endfor; ?>         
                                </tbody>

                                </thead>

                                <tbody>





                                </tbody>
                            </table>  

                        </div>  
                         
                            <hr/>

                        <center><button class="btn btn-info">Next>></button></center>
                            <?php echo $this->Form->end(); ?>                
                                        
                                    </div>
                                </div>
                        </div>   
                </div>
        </div>
</div>