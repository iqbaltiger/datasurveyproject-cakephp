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
        
        for(i=0;i<9;i++){
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
				<h3 class="box-title"><?php echo __('Cultural'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                            <h4>SECTION – A: REFERENCE INFORMATION</h4>
                                            <h5><b>A-1: DATA COLLECTION AND PROCESSING</b> <span>(NOTE: SEE THE TECHNICAL GUIDELINES)</span></h5>
                       <?php echo $this->Form->create('Cultural',array('class'=>'')) ?>
                                            
                                            <?php $task_list_a = array('Interviewer',
                                                'Supervision, Checking and Submission','Reviewing and Finalize','Error Checking & Probing','Accepted for Processing',
                                                'Key Informant','Audio Recordings','Photographs','Video Footage'
                                                
                                                
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
			                                            if (!empty($this->request->data['Reference'][$i]['HouseholdSectionAReferenceInformation']['id'])) {
			                                                echo $this->Form->input('Reference.'.$i.'.HouseholdSectionAReferenceInformation.id', array('type' => 'hidden'));
			                                            }
                              						?>
                                                 	
                                                         <?php if($i==0){echo $this->Form->input('Reference.'.$i.'.HouseholdSectionAReferenceInformation.interview_key',array('type'=>'hidden','value'=>'1'));} ?>
                                                    
                                                 	<?php
                                                        echo '<tr><td>'.$task_list_a[$i].'</td>';
														echo $this ->Form->input('Reference.'.$i.'.HouseholdSectionAReferenceInformation.task', array('type' => 'hidden','value'=>$task_list_a[$i]));
														echo $this ->Form->input('Reference.'.$i.'.HouseholdSectionAReferenceInformation.household_interview_id', array('type' => 'hidden','value'=>$pid));
                                                        echo '<td>'.$this ->Form->input('Reference.'.$i.'.HouseholdSectionAReferenceInformation.date', array('type' => 'text','id'=>'check_in_date_'.$i, 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                        echo '<td>'.$this -> Form -> input('Reference.'.$i.'.HouseholdSectionAReferenceInformation.by_whom', array('type' => 'select','options'=>$users,'empty'=>'Select One', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                         echo '<td>'.$this -> Form -> input('Reference.'.$i.'.HouseholdSectionAReferenceInformation.status', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                       endfor;
                                                      ?>
                                                   </tr>
                                                    
                                                </tbody>
                                            </table>
                                            
                                            <h4>A-2: DATA FILE REFERENCE INFORMATION (NOTE: SEE THE TECHNICAL GUIDELINES)</h4>
                                            
                                             <?php
                                               
                                               $table_head_list = array('File Type','Subject matter/ Theme/ Topic','File Name(s)','Location/ Folder Names');
                                               
                                               $recording_system = array('Audio Recordings','Video Footage','Photographs');
                                            ?>
                                            
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                       <?php for($i=0;$i<count($table_head_list);$i++): ?> 
                                                       	
                                                       	
                                                       	
                                                        <th><?php echo $table_head_list[$i]; ?></th>
                                                        <?php endfor;?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php for($j=0;$j<count($recording_system);$j++): ?>
                                                    	
                                                     <?php
			                                            if (!empty($this->data['DataFile'][$j]['HouseholdSectionADataFile']['id'])) {
			                                                echo $this->Form->input('DataFile.'.$j . '.HouseholdSectionADataFile.id', array('type' => 'hidden'));
			                                            }
                              						?> 	
                                                    	
                                                   <tr>
                                                        <td rowspan="3"><b><?php echo $recording_system[$j]; ?></b></td>
                                                        
                                                        <?php 
                                                        	echo $this ->Form->input('DataFile.'.$j.'.HouseholdSectionADataFile.file_type',array('type' => 'hidden','value'=>$recording_system[$j]));
                                                        	 echo $this ->Form->input('DataFile.'.$j.'.HouseholdSectionADataFile.household_interview_id', array('type' => 'hidden','value'=>$pid));
                                                        ?>
                                                        
                                                        <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.topic_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.file_name_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.folder_name_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                      <tr>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.topic_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.file_name_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.folder_name_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                      <tr>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.topic_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.file_name_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('DataFile.'.$j.'.HouseholdSectionADataFile.folder_name_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                    
                                                    <?php endfor; ?>  
                                                      
                                                </tbody>
                                            </table>
                                            
                                            <h5>Please read out the following section to the household head /respondent (s) and start the interview with his/her consent. </h5>
                                            <div class="border-radius">
                                                <p>My name is ___________________________________. I have come from an institution named IMLI of the Ministry of Education. At present, we have been conducting a survey on behalf of the Government of Bangladesh to know the linguistic and ethnic features of the people of Bangladesh. We appreciate your willing participation in this survey. This interview might take one hour.</p>
                                                <p>The information collected from you and your household member(s) would remain strictly confidential and would only be used for research purpose. You will not be paid either in cash or kind for this interview. If you wish, you may not answer all the questions and may postpone the interview any time. May I start the interview?</p>
                                            </div> 
                                            
                                            <br>
                                            <center><button class="btn btn-info">Next>></button></center>
                                      <?php echo $this->Form->end();?>   
				</div>
			</div>
		</div>
	</div>
</div>
  
 </div>   