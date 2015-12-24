<?php echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function() {
        
         $('#0HouseholdSectionG5711AnswerPrimaryOther').hide();
         $('#0HouseholdSectionG5711AnswerSecondaryOther').hide();

     $('#0HouseholdSectionG5711AnswerA').on('change', function() {
     
     var primary_val = $('#0HouseholdSectionG5711AnswerA').val();
        
        if(primary_val==99){
            
            $('#0HouseholdSectionG5711AnswerPrimaryOther').show();
        }
        
        else{
            
             $('#0HouseholdSectionG5711AnswerPrimaryOther').hide();
        }
     
 });
 
  $('#0HouseholdSectionG5711AnswerB').on('change', function() {
     
     var secondary_val = $('#0HouseholdSectionG5711AnswerB').val();
        
        if(secondary_val==99){
            
            $('#0HouseholdSectionG5711AnswerSecondaryOther').show();
        }
        
        else{
            
             $('#0HouseholdSectionG5711AnswerSecondaryOther').hide();
        }
     
 });

    })
</script>
<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Household/Section-G-5'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                         <h5>G- 5: Survey of business earnings of the household in the last month </h5>
                        <h5>(If members of households are involved in different business activities, a specific column has to be filled in by each business)</h5>

                        <div class="table-responsive">

                                        <?php
                                        $survey_businessTitle = array(
                                            'Description', 'Primary business', 'Secondary business'
                                        );


                                        $what_type = array(
                                            'What types of businesses the members are involved in?', 'Total earning (Total sale)'
                                        );

                                        $expenditure_list = array(
                                            '01. Purchase of goods', '02. Own labour (Equivalent of market value)', '03. Recruiting employees', '04. Cost of transportation and marketing',
                                            '05. Value of capital', '06. Other expenses', '07. Gross earning', '08. Value of existing investment'
                                        );
                                        
                                        $business_type_list = array(
                                           '01'=>'Shop','02'=>'Processing harvest','03'=>'Handicrafts','04'=>'Brokerage',
                                            '05'=>'Transportation business','06'=>'Skilled laborer','07'=>'Tea stall','99'=>'Others (Please specify)'
                                        );
                                        
                                        
                                        ?>

                           <?php echo $this->Form->create('HouseholdSectionG5711', array('class' => '')) ?>  
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>711. Are any member/ or members of the household involved in any business activity?</th>
                                        <?php
                                       
                                     if(!empty($this->data[0]['HouseholdSectionG5711']['id'])){
                                                        echo $this->Form->input('0.HouseholdSectionG5711.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <th colspan="5">
                                            <?php echo $this->form->input('0.HouseholdSectionG5711.yes_no_ans',array('type'=>'select','options'=>array('Yes','No'),'label'=>FALSE,'class'=>'form-control')); ?>
                                            
                                        </th>
                                       
                                    </tr>
                                    <tr>
                                        <?php
                                        for ($k = 0; $k < count($survey_businessTitle); $k++):

                                            echo '<th>' . $survey_businessTitle[$k] . '</th>';

                                        endfor;
                                        ?>
                                    <tr>



                                </thead>

                                <tbody>

                                    <?php
                                       
                                     if(!empty($this->data[0]['HouseholdSectionG5711']['id'])){
                                                        echo $this->Form->input('0.HouseholdSectionG5711.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                    
                                  <?php   echo $this->Form->input('0.HouseholdSectionG5711.interview_id', array('type' => 'hidden','value'=>$interview_id)); ?>
                                        <tr>
                                            <td><?php   echo $this->Form->input('0.HouseholdSectionG5711.question', array('type' => 'hidden','value'=>1)); ?>01.What types of businesses the members are involved in?</td>
                                            <td><?php echo $this->form->input('0.HouseholdSectionG5711.answer_a',array('type'=>'select','options'=>$business_type_list,'empty'=>'(Choose One)','label'=>false,'class'=>'form-control')); ?>
                                            <?php echo $this->form->input('0.HouseholdSectionG5711.answer_primary_other',array('type'=>'text','label'=>false,'class'=>'form-control')); ?></td>
                                            </td>
                                            <td><?php echo $this->form->input('0.HouseholdSectionG5711.answer_b',array('type'=>'select','options'=>$business_type_list,'empty'=>'(Choose One)','label'=>false,'class'=>'form-control')); ?>
                                            
                                                <?php echo $this->form->input('0.HouseholdSectionG5711.answer_secondary_other',array('type'=>'text','label'=>false,'class'=>'form-control')); ?></td>
                                            </td>
                                        </tr>

                                        <tr>
                                           <?php
                                       
                                     if(!empty($this->data[1]['HouseholdSectionG5711']['id'])){
                                                        echo $this->Form->input('1.HouseholdSectionG5711.id',array('type'=>'hidden')); 
                                                    }
                                                ?>  
                                            
                                            
                                          <?php   echo $this->Form->input('1.HouseholdSectionG5711.interview_id', array('type' => 'hidden','value'=>$interview_id)); ?>
                                            <td><?php   echo $this->Form->input('1.HouseholdSectionG5711.question', array('type' => 'hidden','value'=>2)); ?>02.	Total earning (Total sale)  </td>
                                            <td> <?php echo $this->form->input('1.HouseholdSectionG5711.answer_a',array('type'=>'text','label'=>false,'class'=>'form-control')); ?></td></td>
                                             <td> <?php echo $this->form->input('1.HouseholdSectionG5711.answer_b',array('type'=>'text','label'=>false,'class'=>'form-control')); ?></td></td>
                                        </tr>
                                        
                                        

                                    <tr>

                                        <td colspan="3"><b>Expenditure</b></td>  
                                    </tr>

                            <?php for ($i = 0; $i < count($expenditure_list); $i++): ?>
                                    
                                     <?php
                                       
                                     if(!empty($this->data[($i+2)]['HouseholdSectionG5711']['id'])){
                                                        echo $this->Form->input(($i+2).'.HouseholdSectionG5711.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <tr>
                                             <?php   echo $this->Form->input(($i+2).'.HouseholdSectionG5711.interview_id', array('type' => 'hidden','value'=>$interview_id)); ?>
                                            <td><?php   echo $this->Form->input(($i+2).'.HouseholdSectionG5711.question', array('type' => 'hidden','value'=>$i+3)); ?><?php echo $expenditure_list[$i]; ?></td> 
                                            <td><?php echo $this->form->input(($i+2).'.HouseholdSectionG5711.answer_a',array('type'=>'text','label'=>false,'class'=>'form-control')); ?></td>
                                            <td><?php echo $this->form->input(($i+2).'.HouseholdSectionG5711.answer_b',array('type'=>'text','label'=>false,'class'=>'form-control')); ?></td>
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