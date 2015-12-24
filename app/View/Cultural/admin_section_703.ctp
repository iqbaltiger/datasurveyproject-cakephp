<?php

echo $this->Html->script('jquery.min'); ?>
<script>
  
    $(function () {
        
        for(i=0;i<40;i++){
             $('#'+i+'TotalProductionCost703GOtherSourceAgriculturalInput').hide();
            
            
        }
    });
</script> 
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
                                        <h5><b>703.What was your total production cost in the last 12 months? (Include inputs for all the crops listed in the previous table)</b></h5>

                        <div class="table-responsive">

                                    <?php
                                    $table_row_head = array('Areas of production expenditure', 'Amount', 'Unit', 'Sale price per unit', 'Total purchase value (2X4)', 'Sources of Agricultural Inputs');

                                    $table_col_title = array(
                                        'Seed',
                                        'Urea',
                                        'Potaseum',
                                        'Gypsum',
                                        'Others',
                                        'Irrigation',
                                        'Organic fertilizer',
                                        'Insecticide',
                                        'Rented machinery (Tractor)',
                                        'Employing agricultural labour',
                                        'Transportation and marketing',
                                        'Other expenses (Please mention)',
                                        'Other expenses (Please mention) '
                                    );

                                    $sources_of_agricultural_inputs = array(
                                        '01' => '',
                                        '02' => ''
                                    );
                                    
                                    $sources_agricultural_inputs = array(
                                        '01'=>'Department of agricultural extension','02'=>'N.G.O','03'=>'Dealer','04'=>'Purchased from market',
                                        '05'=>'Council','98'=>'Do not know/ Cannot say','99'=>'Others (Please specify)',
                                    );
                                    
                                    ?>



                             <?php echo $this->Form->create('TotalProductionCost703G', array('class' => '')) ?>

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                            <?php for ($i = 0; $i <count($table_row_head); $i++): ?>

                                            <th>

                                <?php echo $table_row_head[$i]; ?>  
                                            </th>


<?php endfor; ?>
                                    </tr>


<?php 

for ($j = 0; $j < count($table_col_title); $j++): ?>
                                     <?php
                                        if (!empty($this->data[$j]['TotalProductionCost703G']['id'])) {
                                            echo $this->Form->input($j . '.TotalProductionCost703G.id', array('type' => 'hidden'));
                                        }
                                        ?>

                                        <tr>
                                            <?php echo $this->form->input($j.'.TotalProductionCost703G.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                            <td>
                                                <?php echo $this->Form->input($j.'.TotalProductionCost703G.areas_production_expenditure', array('type' => 'hidden','value'=>$table_col_title[$j])); ?><?php echo $table_col_title[$j]; ?>  

                                            </td> 
                                           
                                            <td><?php echo $this->Form->input($j.'.TotalProductionCost703G.amount', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($j.'.TotalProductionCost703G.unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($j.'.TotalProductionCost703G.sale_price_per_unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($j.'.TotalProductionCost703G.total_purchase_value', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td>
                                                <?php echo $this->Form->input($j.'.TotalProductionCost703G.source_agricultural_input', array('type' => 'select','options'=>$sources_agricultural_inputs, 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                                <?php echo $this->Form->input($j.'.TotalProductionCost703G.other_source_agricultural_input', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                            </td>
                                        </tr>
                                        
                                        <script>
  
  
 
    
    $('#'+<?php echo $j; ?>+'TotalProductionCost703GSourceAgriculturalInput').change(function () {
                                      
                                 
                                            var selectboxValue = $('#'+<?php echo $j; ?>+'TotalProductionCost703GSourceAgriculturalInput').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $j; ?>+'TotalProductionCost703GOtherSourceAgriculturalInput').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $j; ?>+'TotalProductionCost703GOtherSourceAgriculturalInput').hide();
                                            }
        })
            </script>
                                        
                                        

                                    <?php endfor; ?>
                                </thead>
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