<?php

echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function () {
        

        
        
//      $('#reason_of_proverty_other').hide();
//      $('#type_of_coping').hide();
//      $('#SectionIFoodConsumptionReasonOfProverty').on('change', function () {
//            var selectboxValue = $('#SectionIFoodConsumptionReasonOfProverty').val();
//            if (selectboxValue == 99) {
//                $('#reason_of_proverty_other').show();
//               
//            }
//            else {
//
//                $('#reason_of_proverty_other').hide();
//               
//            }
//        });
//      
//      
//      $('#SectionIFoodConsumptionCoping').on('change', function () {
//            var selectboxValue = $('#SectionIFoodConsumptionCoping').val();
//            if (selectboxValue == 99) {
//                $('#type_of_coping').show();
//               
//            }
//            else {
//
//                $('#type_of_coping').hide();
//               
//            }
        });
        
        
         for (i = 0; i <50; i++) {
            $('#' + i + 'other_secondary_source').hide();
            $('#' + i + 'other_primary_source').hide();
            $('#' + i + 'SectionIFoodConsumptionOtherPrimarySource').hide();
            $('#' + i + 'SectionIFoodConsumptionOtherSecondarySource').hide();
            
        }
        
        
      
     
    })
</script>    
<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Cultural'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                       <?php echo $this->Form->create('SectionIFoodConsumption',array('class'=>'')) ?>
                                           
                                           <h4>SECTION-I:FOOD SECURITY</h4>
                                           <h5><b>900. FOOD AVAILABILITY</b></h5>
       					 <div class="table-responsive">
                         <table class="table table-bordered table-striped">
                             <tr>
                                 <td>901</td>      
                                 
                                 <?php  
                               
   if(!empty($this->data['SectioniFirstPartMarker'][0]['SectioniFirstPart']['id'])){
                                     echo $this->Form->input('SectioniFirstPartMarker.0.SectioniFirstPart.id',array('type'=>'hidden')); 
                                        } ?>
                                
                                 
    <?php   echo $this->Form->input('SectioniFirstPartMarker.SectioniFirstPart.interview_id', array('type' => 'hidden','value'=>$interview_id)); ?>                             
    <td  colspan="9"><p><strong>Do you think all the members of the    family ate well three times a day in the last week? </strong></p></td>
    <?php  
                               
   if(!empty($this->data['SectioniFirstPartMarker'][0]['SectioniFirstPart']['id'])){
                                     echo $this->Form->input('SectioniFirstPartMarker.0.SectioniFirstPart.id',array('type'=>'hidden')); 
                                        } ?>
    <th colspan="3"> <?php echo $this->form->input('SectioniFirstPartMarker.SectioniFirstPart.yes_no_ans',array('type'=>'select','options'=>array('1'=>'Yes','0'=>'No'),'label'=>FALSE,'class'=>'form-control')); ?></th>
        
<!--    <td  colspan="5"><p align="center"><strong>01</strong><strong>- Yes</strong><br />
      <strong>(Go to 907)</strong></p></td>
    <td  colspan="5"><p align="center"><strong>02</strong><strong>- No</strong></p></td>-->
  </tr>
  <tr>
    <td rowspan="2">902</td>     
    <td rowspan="2"  colspan="3" ><p>If &lsquo;no&rsquo;,    then how many times all the household members have eaten a day in the last 1    week? </p></td>
    <td ><p align="right">Type </p></td>
    <td  colspan="3"><p align="center">Child 2-14 years</p></td>
    <td  colspan="3"><p align="center">14-18 years</p></td>
    <td  colspan="5"><p align="center">Woman (&gt;18 years)</p></td>
    <td  colspan="5"><p align="center">Man (&gt;18 years)</p></td>
  </tr>
  <tr>
    
    <td ><p align="center">Number of meals </p></td>
    
    <td colspan="3"> <?php echo $this->form->input('SectioniFirstPartMarker.SectioniFirstPart.child_14',array('type'=>'select','options'=>array('01','02','03'),'class'=>'form-control','label'=>false)); ?></td>
    

     <td colspan="3"> <?php echo $this->form->input('SectioniFirstPartMarker.SectioniFirstPart.child_18',array('type'=>'select','options'=>array('01','02','03'),'class'=>'form-control','label'=>false)); ?></td>

      <td colspan="5"> <?php echo $this->form->input('SectioniFirstPartMarker.SectioniFirstPart.woman_more_18',array('type'=>'select','options'=>array('01','02','03'),'class'=>'form-control','label'=>false)); ?></td>
     <td colspan="5"> <?php echo $this->form->input('SectioniFirstPartMarker.SectioniFirstPart.man_more_18',array('type'=>'select','options'=>array('01','02','03'),'class'=>'form-control','label'=>false)); ?></td>
  </tr>
  

  <tr>
    <td>903</td>    
    <td  colspan="3"><p>Which    months are considered as slack seasons? </p></td>
    
    <td colspan="14">
        
        
       <?php 
       $season_list = array(
           
           'Boishakh','Jaishtha','Ashar','Sravan','Vadra','Ashwin','Kartik','Agrahayan',
           'Poush','Magh','Falgun','Chaitra'
       );
       
       foreach($season_list as $key=>$value): ?>  
                                        <?php
                                        echo $this->form->input('SectioniFirstPartMarker.SectioniFirstPart.col_'.($key+1), array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>    
    </td>

  </tr>

  
  
  <tr>
      <td>904</td>  
      <td colspan="3"><p>During    slack seasons how many times have you eaten a day?</p></td>
      <td colspan="12"><p align="right"><?php echo $this->form->input('SectioniFirstPartMarker.SectioniFirstPart.slack_season',array('type'=>'text','class'=>'form-control','label'=>false)); ?> </p></td>
    <td><p>Times </p></td>
  </tr>
  
  <?php
  
     $reason_of_proverty = array(
      'Acute draught','Saline water in land','Serious illness in family','Lack of employment','Lack of seed and fertilizer','Lack of rain',
      'Lack of capital','Death of earning member of household','Loss through illegal land seizure','99'=>'Others (Please specify)'
      
      ); 
  
      $coping = array(
          'Cultivating more agricultural products','Spending cash savings','Selling assets (land, domestic animals)','Excess daily labour','Help from friends and neighbors',
          'Help from N.G.O, community organization, and religious organization;','Loan from money laundering person or organization','Reducing household expenditure',
          'No special measures taken','Temporary migration in search of work','99'=>'Others (Please specify)'
          
      );
  
  ?>
  
  
  <tr>
      <td>905</td>  
    <td  colspan="3"><p>What do    you think are the reasons for not being able to eat 3 times sufficiently? </p></td>
    <td colspan="15">
         <?php echo $this->Form->input('SectioniFirstPartMarker.SectioniFirstPart.sifficient_three',array('type'=>'select','options'=>$reason_of_proverty,'label'=>false,'div'=>false,'class'=>'form-control','empty'=>'Select One')); ?>
          <?php echo $this->Form->input('SectioniFirstPartMarker.SectioniFirstPart.other_sifficient_three',array('type'=>'text','id'=>'reason_of_proverty_other','label'=>false,'div'=>false,'class'=>'form-control')); ?>
    </td>
  </tr>
  <tr>
      <td>906</td>  
    <td  colspan="3"><p>What did you do to cope with poverty?    What were your strategies? </p></td>
    <td colspan="15">
      <?php echo $this->Form->input('SectioniFirstPartMarker.SectioniFirstPart.strategies',array('type'=>'select','options'=>$coping,'label'=>false,'div'=>false,'class'=>'form-control','empty'=>'Select One')); ?>
          <?php echo $this->Form->input('SectioniFirstPartMarker.SectioniFirstPart.other_strategies',array('type'=>'text','id'=>'type_of_coping','label'=>false,'div'=>false,'class'=>'form-control')); ?>  
    </td>
  </tr>
  
  <?php 
  
  $resource_list = array(
      
       '01'=>'Local haat/ market','02'=>'Local shop','03'=>'Own produce','04'=>'From near relatives/ neighbors',
       '05'=>'Food for work','06'=>'Government aid','07'=>'N.G.O aid','08'=>'Invitation/ Gift','09'=>'Collected from fields',
      '98'=>'Do not know/ Cannot say','99'=>'Others (Please specify) ____________'
      
  );
  
 // pr($primary_resource);
  
 
  ?>
  
  <?php
  
      if(!empty($this->data['SectionIFoodConsumption']['id'])){
                                     echo $this->Form->input('SectionIFoodConsumption.id',array('type'=>'hidden')); 
                                        }
  
  ?>
  
  
<!--  <tr>
      <td>90</td>  
      <td>Reasons of poverty</td>
      <td colspan="20">
          <?php echo $this->Form->input('reason_of_proverty',array('type'=>'select','options'=>$reason_of_proverty,'label'=>false,'div'=>false,'class'=>'form-control','empty'=>'Select One')); ?>
          <?php echo $this->Form->input('reason_of_proverty_other',array('type'=>'text','id'=>'reason_of_proverty_other','label'=>false,'div'=>false,'class'=>'form-control')); ?>
      </td>
  </tr>
  
  <tr>
      <td>Coping</td>
      <td colspan="20">
          <?php echo $this->Form->input('coping',array('type'=>'select','options'=>$coping,'label'=>false,'div'=>false,'class'=>'form-control','empty'=>'Select One')); ?>
          <?php echo $this->Form->input('type_of_coping',array('type'=>'text','id'=>'type_of_coping','label'=>false,'div'=>false,'class'=>'form-control')); ?>  
          </td>
  </tr>-->
                         </table>
                     </div>    
                    
                    
                    
                    
                    <h4><b>907. FOOD CONSUMPTION SCORE (FCS) FOOD ACCESSIBILITY</b></h4>
                    <div class="table-responsive">
                        
                        
                         <?php 
                         
                         $food_item_list = array(
                             
                             'Rice','Bread/ Wheat','Potato/ Sweet potato','Groundnuts/ Pulses','Fish','Meat- sheep/goat/beef/ poultry',
                             'Eggs','Milk and dairy products','Oil, fats and butter','Vegetables','Fruits','Sweets, sugar','Others (Please specify) ____________',
                             'Others (Please specify)____________'
                         );
                         
                         $field_name = array('amount','purchase_price');
                         //$field_name = array('interview_id','food_items_name','how_many_days','primary_source','secondary_source','amount','purchase_price');
                         
                         ?>
                        <table class="table table-bordered table-striped">
                            
                            <thead>
                            <tr>
                                <th rowspan="2">Food Items</td>
                                <th rowspan="2">How many days did you eat in the last 7 days? </th>
                                <th colspan="2">Source of food</th>
                                <th rowspan="2">Amount</th>
                                <th rowspan="2">Purchase price</th>
                            </tr>
                            
                            <tr>
                                <th><strong>Primary source</strong></th>
                                <th><strong>Secondary source</strong></th>
                            </tr>
                            </thead>
                            
                            <tbody>
                                <?php for($i=0;$i<count($food_item_list)-2;$i++): 
                                    
                                   
                                  if(!empty($this->data[$i]['SectionIFoodConsumption']['id'])){
                                     echo $this->Form->input($i.'.SectionIFoodConsumption.id',array('type'=>'hidden')); 
                                        }
                                        
                                       $num_padded = sprintf("%02d", $i+1); 
                                ?>
                                <tr>
                                  <td><?php echo ($num_padded).'. '.$food_item_list[$i];?></td>
                                   
                                                                  <?php 
                                                                      
                                                                    
                                                                      //    $a =  $food_item_list[$k];  
                                                                            
                                                                        //$field_name =  str_replace(' ','_',$a);
                                                                        echo $this->Form->input($i.'.SectionIFoodConsumption.interview_id',array('type'=>'hidden','value'=>$interview_id));
                                                                        echo $this->Form->input($i.'.SectionIFoodConsumption.food_items_name',array('type'=>'hidden','value'=>$food_item_list[$i]));
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.how_many_days',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.primary_source',array('type'=>'select','options'=>$resource_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px'));
                                                                        echo $this->Form->input($i.'.SectionIFoodConsumption.other_primary_source',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.secondary_source',array('type'=>'select','options'=>$resource_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px'));
                                                                        echo $this->Form->input($i.'.SectionIFoodConsumption.other_secondary_source',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.amount',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.purchase_price',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                       
                                                                    ?>
                                    
                                </tr>
                                
                            <script> 
                                $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionPrimarySource').change(function () {
                                              
                                         
                                              var selectboxValue = $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionPrimarySource').val();
                                              if (selectboxValue == 99) {
                                                  $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionOtherPrimarySource').show();
                                              }
                                                    
                                              else{
                                                        
                                                   $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionOtherPrimarySource').hide();
                                              }
                                })
                                
                                 $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionSecondarySource').change(function () {
                                              
                                         
                                              var selectboxValue = $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionSecondarySource').val();
                                              if (selectboxValue == 99) {
                                                  $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionOtherSecondarySource').show();
                                              }
                                                    
                                              else{
                                                        
                                                   $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionOtherSecondarySource').hide();
                                              }
                                })
                                
                                
                                  </script>
                                
                                
                                
                                <?php  endfor;?>
                                  
                                <?php for($i=12;$i<count($food_item_list);$i++): 
                                    
                                   
                                  if(!empty($this->data[$i]['SectionIFoodConsumption']['id'])){
                                     echo $this->Form->input($i.'.SectionIFoodConsumption.id',array('type'=>'hidden')); 
                                        }
                                ?>
                                <tr>
                                  <td><?php //echo ($i+86); ?><?php echo $this->Form->input($i.'.SectionIFoodConsumption.food_items_name',array('type'=>'text','placeholder'=>$food_item_list[$i],'class'=>'form-control','label'=>false)); ?><?php //echo $food_item_list[$i];?></td>
                                   
                                                                  <?php 
                                                                    
                                                                        echo $this->Form->input($i.'.SectionIFoodConsumption.interview_id',array('type'=>'hidden','value'=>$interview_id));
                                                                       // echo $this->Form->input($i.'.SectionIFoodConsumption.food_items_name',array('type'=>'text','placeholder'=>$food_item_list[$i]));
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.how_many_days',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.primary_source',array('type'=>'select','options'=>$resource_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px'));
                                                                        echo $this->Form->input($i.'.SectionIFoodConsumption.other_primary_source',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.secondary_source',array('type'=>'select','options'=>$resource_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px'));
                                                                        echo $this->Form->input($i.'.SectionIFoodConsumption.other_secondary_source',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.amount',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                        echo '<td>'.$this->Form->input($i.'.SectionIFoodConsumption.purchase_price',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).'</td>';
                                                                       
                                                                    ?>
                                    
                                </tr>
                                
                            <script> 
                                $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionPrimarySource').change(function () {
                                              
                                         
                                              var selectboxValue = $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionPrimarySource').val();
                                              if (selectboxValue == 99) {
                                                  $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionOtherPrimarySource').show();
                                              }
                                                    
                                              else{
                                                        
                                                   $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionOtherPrimarySource').hide();
                                              }
                                })
                                
                                 $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionSecondarySource').change(function () {
                                              
                                         
                                              var selectboxValue = $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionSecondarySource').val();
                                              if (selectboxValue == 99) {
                                                  $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionOtherSecondarySource').show();
                                              }
                                                    
                                              else{
                                                        
                                                   $('#'+<?php echo $i; ?>+'SectionIFoodConsumptionOtherSecondarySource').hide();
                                              }
                                })
                                
                                
                                  </script>
                                
                                
                                
                                <?php  endfor;?>  
                                  
                                  
                            </tbody>
                            
                            
                            
                            
                        </table>

                    </div>     
                    
                                    
                      <hr/>              
                    <center><button class="btn btn-info">Submit</button></center>
                       <?php echo $this -> Form -> end(); ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>