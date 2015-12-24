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
                                        <h5><b>707.What was your total expenditure for animal husbandry? (In last three months)</b></h5>

                        <div class="table-responsive">

<?php
$animal_husbandry_headTitle = array(
    'Areas of expenditure', 'Unit', 'Amount', 'Purchase value of standard unit', 'Total purchase value(3X4)'
);

$animal_husbandry_col_list = array(
    'Livestock feed', 'Price for using pasture (If any)', 'Vaccination, medicine and miscellaneous expenses ', 'Construction and maintenance of animal housing', 'Labour employment if necessary', 'Others', 'Others'
);
?>
                   <?php echo $this->Form->create('Section707',array('class'=>'')) ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
<?php for ($i = 0; $i < count($animal_husbandry_headTitle); $i++): ?>

                                            <th>
    <?php echo $animal_husbandry_headTitle[$i]; ?>  

                                            </th>
<?php endfor; ?>
                                    </tr>


                                </thead>

                                <tbody>

                            <?php for ($j = 0; $j < count($animal_husbandry_col_list)-2; $j++): ?>
                                    
                                    <?php
                                 
                                     
                                     if(!empty($this->data[$j]['Section707']['id'])){
                                                        echo $this->Form->input($j.'.Section707.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <tr>
                                            <td>
                                <?php echo $this->Form->input($j.'.Section707.areas_expenditure', array('type' => 'hidden','value'=>$animal_husbandry_col_list[$j],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?> <?php echo $animal_husbandry_col_list[$j]; ?> 
                                  
                                <?php echo $this->Form->input($j.'.Section707.interview_id', array('type' => 'hidden','value'=>$interview_id,'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>                
                                            </td>    
                                            <td><?php echo $this->Form->input($j.'.Section707.unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($j.'.Section707.amount', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input($j.'.Section707.purchased_value_unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($j.'.Section707.total_purchased_value', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        </tr>

                            <?php endfor; ?>
                                        
                            <?php for ($j = 5; $j < count($animal_husbandry_col_list); $j++): ?>
                                        <?php
                                 
                                     
                                     if(!empty($this->data[$j]['Section707']['id'])){
                                                        echo $this->Form->input($j.'.Section707.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <tr>
                                            <td>
                                <?php echo $this->Form->input($j.'.Section707.areas_expenditure', array('type' => 'text','placeholder'=>$animal_husbandry_col_list[$j],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?> <?php //echo $animal_husbandry_col_list[$j]; ?> 
                                <?php echo $this->Form->input($j.'.Section707.interview_id', array('type' => 'hidden','value'=>$interview_id,'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>                                
                                            </td>    
                                            <td><?php echo $this->Form->input($j.'.Section707.unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($j.'.Section707.amount', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input($j.'.Section707.purchased_value_unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($j.'.Section707.total_purchased_value', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
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