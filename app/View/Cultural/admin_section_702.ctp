<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Household/Section-J'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                         <h5>702.What was the total amount of crop production in the last 12 months and the estimated sale price of the crops?</h5>

                        <div class="table-responsive">

<?php
$crop_production_headTitle = array(
    'Produced crops (Code Table)', 'Amount of Land(In Decimal)', 'Amount of Total Production(5+6)', 'Production Unit', 'Own Use (Including Gifts)',
    'Total sale(Including Exchange)', 'Sale Price of Production Unit', 'TotalSale Price (3 X 7)'
);


$crop_production_RowTitle = array(
    '0' => 'Aush', 'Aman', 'Boro', 'Wheat', 'Mustard','Jute','Others', 'Others'
);
?>                     <?php echo $this->Form->create('TotalProductionG', array('class' => '')) ?>
                            
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                            <?php for ($i = 0; $i < count($crop_production_headTitle); $i++): ?>

                                            <th>
                                <?php echo $crop_production_headTitle[$i]; ?>  
                                            </th>


<?php endfor; ?>  
                                    </tr>

                                </thead>

                                <tbody>

<?php
for ($i = 0; $i < count($crop_production_RowTitle); $i++):
    ?>



                                        <!--Row Start--->
    <?php
    if (!empty($this->data[$i]['TotalProductionG']['id'])) {
        echo $this->Form->input($i .'.TotalProductionG.id', array('type' => 'hidden'));
    }
    ?>    
                                        <tr>
    <?php echo $this->Form->input($i.'.TotalProductionG.interview_id', array('type' => 'hidden', 'value' => $interview_id)); ?>
                                            
                                           <?php if($i==6){
                                               ?>
                                                 <td><?php echo $this->Form->input($i.'.TotalProductionG.produced_crops_name', array('type' => 'text','placeholder'=>'Others-1:','label'=>false,'class'=>'form-control' )); ?></td>
                                        
                                            <?php     
                                                 }
                                                 
                                             else if($i==7){
                                             ?>    
                                                 
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.produced_crops_name', array('type' => 'text','placeholder'=>'Others-2:','label'=>false,'class'=>'form-control' )); ?></td>
                                            <?php     
                                             }
                                               else{  
                                                 ?>
                                            
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.produced_crops_name', array('type' => 'hidden', 'value' => $crop_production_RowTitle[$i])); ?><?php echo ($i + 1) . '. ' . $crop_production_RowTitle[$i]; ?></td>
                                          
                                               <?php } ?>
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.amount_of_land', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.amount_total_production', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.production_unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.own_use', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.total_sale', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.sale_price', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($i.'.TotalProductionG.total_sale_price', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        </tr>

                                        <?php endfor; ?>

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