 <?php 
        echo $this->Html->css('frontend/datepickercss/default');
        echo $this->Html->script('jquery.min');
        echo $this->Html->script('frontend/datepickerjavascript/zebra_datepicker');
        
        ?>

<style type="text/css">
    .rdonly:hover
{
   cursor: pointer;
}
    .border-radius{
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;
           border: 3px solid #BADA55;
           padding: 3px 10px;
}
</style>


<script>
   j = jQuery.noConflict();
    j(function(){
        
        for(i=0;i<14;i++){
        j('#check_in_date_'+i).Zebra_DatePicker({
             
             format: 'M d, Y',
//             direction: true,
             
         });
         
        }
         
       
   
    })        
    
    </script>
<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('ETHNIC IDENTIFICATION'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                            <h4>SECTION – A: REFERENCE INFORMATION</h4>
                                            <h5><b>A-01: DATA COLLECTION AND PROCESSING (NOTE: SEE THE TECHNICAL GUIDELINES)</span></h5>
                       <?php echo $this->Form->create('Ethnic',array('class'=>'')) ?>
                                            
                                            <?php $task_list_a = array(
                                                'Interviewer','Supervision, Checking and Submission','Reviewing and Finalize',
                                                'Error Checking & Probing','Accepted for Processing '
                                                ); ?>
                    
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                    	
                                                        <th>Task</th> 
                                                        <th>Date(s)</th>
                                                        <th>By whom?</th>
                                                        <th>Status OK? If not, give comments</th>
                                                        
                                                    </tr> 
                                                    
                                                </thead>
                                                <tbody>
                                                     
                                                 <?php for($i=0;$i<count($task_list_a);$i++):?>
                                                       
                                                 	<?php
			                                            if (!empty($this->request->data['Reference'][$i]['EthnicSectionAReferenceInformation']['id'])) {
			                                                echo $this->Form->input('Reference.'.$i.'.EthnicSectionAReferenceInformation.id', array('type' => 'hidden'));
			                                            }
                              						?>
                                                 	
                                                         <?php if($i==0){echo $this->Form->input('Reference.'.$i.'.EthnicSectionAReferenceInformation.interview_key',array('type'=>'hidden','value'=>'1'));} ?>
                                                    
                                                 	<?php
                                                        echo '<tr><td>'.$task_list_a[$i].'</td>';
														echo $this ->Form->input('Reference.'.$i.'.EthnicSectionAReferenceInformation.task', array('type' => 'hidden','value'=>$task_list_a[$i]));
														echo $this ->Form->input('Reference.'.$i.'.EthnicSectionAReferenceInformation.ethnic_interview_id', array('type' => 'hidden','value'=>$pid));
                                                        echo '<td>'.$this ->Form->input('Reference.'.$i.'.EthnicSectionAReferenceInformation.date', array('type' => 'text','id'=>'check_in_date_'.$i, 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                        echo '<td>'.$this -> Form -> input('Reference.'.$i.'.EthnicSectionAReferenceInformation.by_whom', array('type' => 'select','options'=>$users,'empty'=>'Select One', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                         echo '<td>'.$this -> Form -> input('Reference.'.$i.'.EthnicSectionAReferenceInformation.status', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                       endfor;
                                                      ?>
                                                   </tr>
                                                    
                                                </tbody>
                                            </table>
                                            
                                            
                                            
                       <?php
                        
                          $household_formed = array(
                              '00 – 03 Year(s)','03 – 06 Years',
                              '06 – 09 Years','09 – 12 Years',
                              '12 or More Years'
                          );
                          $settlement_unit = array(
                              '00 – 03 Year(s)','03 – 06 Years',
                              '06 – 09 Years','09 – 12 Years',
                              '12 or More Years'
                          );                          
                          $shifted = array(
                              'Once','Two Times',
                              'Three Times','More than three times'
                          );
                          $schooling = array(
                              'Illiterate/ no schooling',
							  'Can Do Sign',
							  'Can Read and Write',
                              'Class 01 - 05','Primary Passed (Class 05 – 07)',
                              'Secondary (Class 8/ 9/ 10)',
                              'SSC Passed',
							  'HSC Passed',
							  'Diploma',
                              'Graduate',
                              'Post Graduate'
                          );						  
						  
//						  $divisions = array('Dhaka','Rajshahi','Ranpur');	
//						  $districts = array('Dhaka','Rajshahi','Ranpur','Pabna','Jessore');						  
//						  $upazila = array('Mirpur','Gulshan','Dhanmondhi');
						  
                        ?> 
                       
                        <?php echo $this->Form->create('CommSectionAConstruction');?>
                        
                         <?php
                         
                      
                        $options[0] = $divisions;
                        $options[1] = $districts;
                        $options[2] = $upazilas;
                        
                        
                        
                        ?>                    
                                            
                                            
                        
                         <h4>A-02: LOCATION OF THE INTERVIEW</h4>
                       <table class="table table-bordered table-striped">
                            <tbody>                         
                                  <tr>
                                      
                                       <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['0']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'0.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                      
                                    <td><?php  echo $this ->Form ->input('EthnicSectionA2.0.EthnicSectionA2.question', array('type'=>'hidden','value'=>111));?>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.0.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                         	
                                        111</td>
                                    <td>What is the name of the Division?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.0.EthnicSectionA2.answer', array('type'=>'select','options' =>$options[0], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr> 
                                
                                  <tr>
                                      
                                      <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['1']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'1.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.1.EthnicSectionA2.question', array('type'=>'hidden','value'=>112));?>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.1.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                        
                                        
                                        112</td>
                                    <td>What is the name of the District?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.1.EthnicSectionA2.answer', array('type'=>'select','options' =>$options[1], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr> 
                                  
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['2']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'2.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.2.EthnicSectionA2.question', array('type'=>'hidden','value'=>113));?>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.2.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                        
                                        113</td>
                                    <td>What is the name of the Upazila?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.2.EthnicSectionA2.answer', array('type'=>'select','options' =>$options[2], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr>                                                                                                   
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['3']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'3.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.3.EthnicSectionA2.question', array('type'=>'hidden','value'=>114));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.3.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>  
                                        
                                        
                                        114</td><td>What is the name of the Union/ Municipality?</td><td>
                                            
                                            
                                            <?php echo $this ->Form->input('EthnicSectionA2.3.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['4']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'4.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.4.EthnicSectionA2.question', array('type'=>'hidden','value'=>115));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.4.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>  
                                        
                                        
                                        115</td><td>What is the local name of the settlement unit/ locality?</td><td>
                                            
                                            <?php echo $this ->Form->input('EthnicSectionA2.4.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['5']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'5.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                         <?php  echo $this ->Form ->input('EthnicSectionA2.5.EthnicSectionA2.question', array('type'=>'hidden','value'=>116));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.5.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?> 
                                        
                                        
                                        116</td><td>Comments based on observation (if any)</td><td><?php echo $this ->Form->input('EthnicSectionA2.5.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                            </tbody>
                        </table>                         
                         
                          <h4>A-03: INFORMATION OF THE RESPONDENT</h4>                    
                        <table class="table table-bordered table-striped">
                            <tbody>
                               <tr>
                                   <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['6']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'6.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                   <td>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.6.EthnicSectionA2.question', array('type'=>'hidden','value'=>121));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.6.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                       
                                       
                                       121</td><td>What is your name? </td><td><?php echo $this ->Form->input('EthnicSectionA2.6.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>

                                
                               <?php
                               
                                  $religion_list = array(
                              
                              '1'=>'Ancestor/ Nature worship/ Shamanism',
                              '2'=>'Amalgam of Hinduism/ Folk Hinduism',
                              '3'=>'Amalgam of Buddhism',
                              '4'=>'Brahmanism/ Hinduism',
                              '5'=>'Buddhism',
                              '6'=>'Islam',
                              '7'=>'Christianity',
                              '8'=>'Other Syncretic Traditions'
                          );
                               
                               ?>
                               
                               
                               
                               
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['7']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'7.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>122
                                        
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.7.EthnicSectionA2.question', array('type'=>'hidden','value'=>122));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.7.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                    
                                    </td><td>How old were you at your last birthday? </td><td><?php echo $this ->Form->input('EthnicSectionA2.7.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['8']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'8.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.8.EthnicSectionA2.question', array('type'=>'hidden','value'=>123));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.8.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                        
                                        123</td><td>Where were you born? </td><td><?php echo $this ->Form->input('EthnicSectionA2.8.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['9']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'9.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.9.EthnicSectionA2.question', array('type'=>'hidden','value'=>124));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.9.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                        
                                        124</td><td>What is your religion? </td><td><?php echo $this ->Form->input('EthnicSectionA2.9.EthnicSectionA2.answer', array('type' => 'select', 'class' => 'form-control','options'=>$religion_list,'empty'=>'Choose One','label' => false, 'style' => 'margin-top:3px'));?></td></tr>

                                  <tr>
                                      
                                      <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['10']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'10.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.10.EthnicSectionA2.question', array('type'=>'hidden','value'=>125));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.10.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                        125</td>
                                    <td>What is the highest level of schooling you attended?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.10.EthnicSectionA2.answer', array('type'=>'select','options' =>$schooling, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr>  
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['11']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'11.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.11.EthnicSectionA2.question', array('type'=>'hidden','value'=>126));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.11.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                        
                                        126</td><td>What is your ethnic identity? (In your own language) </td><td><?php echo $this ->Form->input('EthnicSectionA2.11.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>

                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['12']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'12.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.12.EthnicSectionA2.question', array('type'=>'hidden','value'=>127));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.12.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                        
                                        127</td><td>What is the name of your ethnic group in government records?</td><td><?php echo $this ->Form->input('EthnicSectionA2.12.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr>
                                    <?php
                                       
                                       
                                if (!empty($this->request->data['EthnicSectionA2']['13']['EthnicSectionA2']['id'])) {
                                    echo $this->Form->input('EthnicSectionA2.'.'13.EthnicSectionA2.id', array('type' => 'hidden'));
                                }
                                ?> 
                                    <td>
                                        
                                        <?php  echo $this ->Form ->input('EthnicSectionA2.13.EthnicSectionA2.question', array('type'=>'hidden','value'=>128));?>
                                       <?php  echo $this ->Form ->input('EthnicSectionA2.13.EthnicSectionA2.ethnic_interview_id', array('type'=>'hidden','value'=>$pid));?>
                                        
                                        128</td><td>Is there any other given names of your ethnic group by which other ethnic groups of your neighborhood address you? </td><td><?php echo $this ->Form->input('EthnicSectionA2.13.EthnicSectionA2.answer', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>                                                                                              
                                  
                            </tbody>
                        </table>
                         
                         
                         
                                            <br>
                                            <center><button class="btn btn-info">Submit</button></center>
                                      <?php echo $this->Form->end();?>      
                                            
				</div>
			</div>
		</div>
	</div>
</div>
  
 </div>   