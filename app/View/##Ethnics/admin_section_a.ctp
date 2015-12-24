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
				<h3 class="box-title"><?php echo __('Ethnic'); ?></h3>
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
                                                    	<th></th>
                                                        <th>Task</th> 
                                                        <th>Date(s)</th>
                                                        <th>By whom?</th>
                                                        <th>Status OK? If not, give comments</th>
                                                        
                                                    </tr> 
                                                    
                                                </thead>
                                                <tbody>
                                                     
                                                 <?php for($i=0;$i<count($task_list_a);$i++):?>
                                                 	
                                                 	<?php
			                                            if (!empty($this->request->data['Reference'][$i]['CommSectionAReferenceInformation']['id'])) {
			                                                echo $this->Form->input('Reference.'.$i.'.CommSectionAReferenceInformation.id', array('type' => 'hidden'));
			                                            }
                              						?>
                                                 	
                                                 	
                                                 		<tr><td><?php echo $i+101 ?></td>
                                                 		<?php	
                                                        echo '<td>'.$task_list_a[$i].'</td>';
														echo $this ->Form->input('Reference.'.$i.'.CommSectionAReferenceInformation.task', array('type' => 'hidden','value'=>$task_list_a[$i]));
														echo $this ->Form->input('Reference.'.$i.'.CommSectionAReferenceInformation.personal_information_id', array('type' => 'hidden','value'=>$pid));
                                                        echo '<td>'.$this ->Form->input('Reference.'.$i.'.CommSectionAReferenceInformation.date', array('type' => 'text','id'=>'check_in_date_'.$i, 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                        echo '<td>'.$this -> Form -> input('Reference.'.$i.'.CommSectionAReferenceInformation.by_whom', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                         echo '<td>'.$this -> Form -> input('Reference.'.$i.'.CommSectionAReferenceInformation.status', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
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
							  'Diploma',
                              'HSC Passed',
                              'Graduate',
                              'Post Graduate'
                          );						  
						  
						  $divisions = array('Dhaka','Rajshahi','Ranpur');	
						  $districts = array('Dhaka','Rajshahi','Ranpur','Pabna','Jessore');						  
						  $upazila = array('Mirpur','Gulshan','Dhanmondhi');
						  
                        ?> 
                       
                        <?php echo $this->Form->create('CommSectionAConstruction');?>
                        
                        
                         <h4>A-02: LOCATION OF THE INTERVIEW</h4>
                       <table class="table table-bordered table-striped">
                            <tbody>                         
                                  <tr>
                                    <td>131</td>
                                    <td>What is the name of the Division?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('houseold', array('type'=>'select','options' =>$divisions, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr> 
                                
                                  <tr>
                                    <td>132</td>
                                    <td>What is the name of the District?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('houseold', array('type'=>'select','options' =>$districts, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr> 
                                  <tr>
                                    <td>133</td>
                                    <td>What is the name of the Upazila?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('houseold', array('type'=>'select','options' =>$upazila, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr>                                                                                                   
                                <tr><td>134</td><td>What is the name of the Union/ Municipality?</td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr><td>135</td><td>What is the local name of the settlement unit/ locality?</td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr><td>136</td><td>Comments based on observation (if any)</td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                            </tbody>
                        </table>                         
                         
                          <h4>A-03: INFORMATION OF THE RESPONDENT</h4>                    
                        <table class="table table-bordered table-striped">
                            <tbody>
                               <tr><td>111</td><td>What is your name? </td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
<!--                                <tr>
                                    <td>112</td>
                                    <td>How long ago was your household formed?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('houseold', array('type'=>'select','options' =>$household_formed, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr> -->
                                
<!--                                 <tr>
                                    <td>113</td>
                                    <td>How long have you been living continuously in this settlement unit/ locality?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('houseold', array('type'=>'select','options' =>$settlement_unit, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr> -->
                                
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
                               
                                <tr><td>112</td><td>How old were you at your last birthday? </td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr><td>113</td><td>Where were you born? </td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr><td>114</td><td>What is your religion? </td><td><?php echo $this ->Form->input('name', array('type' => 'select', 'class' => 'form-control','options'=>$religion_list,'empty'=>'Choose One','label' => false, 'style' => 'margin-top:3px'));?></td></tr>
<!--                                <tr><td>117</td><td>Where did your parents live? </td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>-->
                                                               
<!--                                 <tr>
                                    <td>118</td>
                                    <td>How long have you been living continuously in this settlement unit/ locality?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('houseold', array('type'=>'select','options' =>$shifted, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr> -->
                                
                                  <tr>
                                    <td>115</td>
                                    <td>What is the highest level of schooling you attended?</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('houseold', array('type'=>'select','options' =>$schooling, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr>  
                                <tr><td>116</td><td>What is your ethnic identity? (In your own language) </td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
<!--                                <tr><td>121</td><td>What is the name of your ethnic group in your own language? </td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>-->
                                <tr><td>117</td><td>What is the name of your ethnic group in government records?</td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>
                                <tr><td>118</td><td>Is there any other given names of your ethnic group by which other ethnic groups of your neighborhood address you? </td><td><?php echo $this ->Form->input('name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?></td></tr>                                                                                              
                                  
                            </tbody>
                        </table>
                         
                         
                         
                                            <br>
                                            <button class="btn btn-info">Submit</button>
                                      <?php echo $this->Form->end();?>      
                                            
				</div>
			</div>
		</div>
	</div>
</div>
  
 </div>   