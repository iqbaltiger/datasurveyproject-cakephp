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
				<h3 class="box-title"><?php echo __('Community'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                            <h4>SECTION – A: REFERENCE INFORMATION</h4>
                                            <h5><b>A-1: INTERVIEW AND INTERVIEWERS’ INFORMATION(NOTE: SEE THE TECHNICAL GUIDELINES)</span></h5>
                       <?php echo $this->Form->create('CommSectionAReferenceInformation',array('class'=>'')) ?>
                                            
                                            <?php $task_list_a = array(
                                                
                                                'Interview with GO Officials','Interview with NGO Officials','Interview with LGI Representatives',
                                                'Village Level Group Discussion','Key Informant Interviews','Audio Recordings',
                                                'Photographs','Video Footage'
                                                
                                                
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
                                                 	
                                                 
                                            if (!empty($this->data[$i]['CommSectionAReferenceInformation']['id'])) {
                                            	
											
                                                echo $this->Form->input($i . '.CommSectionAReferenceInformation.id', array('type' => 'hidden'));
                                            }
                                ?>
                                                 	
                                                 	<?php
                                                        echo '<tr><td>'.$task_list_a[$i].'</td>';
														echo $this ->Form->input('alada.'.$i.'.CommSectionAReferenceInformation.task', array('type' => 'hidden','value'=>$task_list_a[$i]));
                                                        echo '<td>'.$this ->Form->input('alada.'.$i.'.CommSectionAReferenceInformation.date', array('type' => 'text','id'=>'check_in_date_'.$i, 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                        echo '<td>'.$this -> Form -> input('alada.'.$i.'.CommSectionAReferenceInformation.by_whom', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                         echo '<td>'.$this -> Form -> input('alada.'.$i.'.CommSectionAReferenceInformation.status', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                       endfor;
                                                      
                                                      ?>
                                                   </tr>
                                                    
                                                </tbody>
                                            </table>
                                            
                                            <h4>A-2: RESPONDENTS’ INFORMATION (NOTE: SEE THE TECHNICAL GUIDELINES)</h4>
                                            
                                            <?php
                                               
                                               $table_head_list = array('Category','Name of the Respondents/ Participants','Designation/ Location/ Address ','Phone Number');
                                               
                                               $recording_system = array('GO Officials','NGO Officials','Local Government','Group Discussion','Community Key Informants');
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
                                                   <tr>
                                                        <td rowspan="3"><b><?php echo $recording_system[$j]; ?></b></td>
                                                        <?php echo $this ->Form->input('Respond.'.$j.'.CommSectionARespondentInformation.category',array('type' => 'hidden','value'=>$recording_system[$j]));?>
                                                        <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.participant_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.designation_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.phone_number_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                      <tr>
                                                         <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.participant_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                         <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.designation_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.phone_number_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                      <tr>
                                                        <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.participant_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.designation_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('Respond.'.$j.'.CommSectionARespondentInformation.phone_number_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                    
                                                    <?php endfor; ?>  
                                                      
                                                </tbody>
                                            </table>
                                            
                                             <h4>A-3: DATA FILE REFERENCE INFORMATION(NOTE: SEE THE TECHNICAL GUIDELINES)</h4>
                                            
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
                                                   <tr>
                                                        <td rowspan="3"><b><?php echo $recording_system[$j]; ?></b></td>
                                                        
                                                        <?php echo $this ->Form->input('DataFile.'.$j.'.CommSectionADataFile.file_type',array('type' => 'hidden','value'=>$recording_system[$j]));?>
                                                        
                                                        <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.topic_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.file_name_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.folder_name_a', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                      <tr>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.topic_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.file_name_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.folder_name_a_1', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                      <tr>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.topic_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                         <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.file_name_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                        <td><?php echo $this -> Form -> input('DataFile.'.$j.'.CommSectionADataFile.folder_name_a_2', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                                      </tr>
                                                    
                                                    <?php endfor; ?>  
                                                      
                                                </tbody>
                                            </table>
                                             
                                             
                                             
                                
                                            <h5><b>A-4: QUALITY CONTROL AND VERIFICATION INFORMATION (NOTE: SEE THE TECHNICAL GUIDELINES)</span></h5>
                       
                                            
                                            <?php $task_list_a = array(
                                                
                                                 '9'=>'Field Supervision ','Checking and Submission','Reviewing and Finalize ',
                                                'Error Checking & Probing ','Accepted for Processing'
                                                
                                                
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
                                                     
                                                    <?php //echo '<tr><td>'.$this ->Form->input('collector_name', array('type' => 'text','id'=>'check_in_date', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td></tr>'; ?>
                                                     
                                                        <?php for($i=9;$i<=count($task_list_a)+8;$i++):
                                                        
                                                        echo '<tr><td>'.$task_list_a[$i].'</td>';
														echo $this ->Form->input('Qc.'.$i.'.CommSectionAQualityControl.task', array('type' => 'hidden','value'=>$task_list_a[$i]));
                                                        echo '<td>'.$this ->Form->input('Qc.'.$i.'.CommSectionAQualityControl.date', array('type' => 'text','id'=>'check_in_date_'.$i, 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                        echo '<td>'.$this -> Form -> input('Qc.'.$i.'.CommSectionAQualityControl.by_whom', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                         echo '<td>'.$this -> Form -> input('Qc.'.$i.'.CommSectionAQualityControl.status', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')).'</td>';
                                                       endfor;
                                                      
                                                      ?>
                                                   </tr>
                                                    
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