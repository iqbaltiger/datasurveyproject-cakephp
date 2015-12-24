<style>
    
    .radio-test{padding-left:20px;}
    .radio_question_section{}
    
    .radio_question_section label{padding:0px 10px;}
    
    .radio_question_section > span{float: left;margin-left: 10px;font-weight: bold;}
</style>   
<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                  <?php     $personnel_information_id =  $this->Session->read('personnel_information_id'); ?>
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Question Type'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                             <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'].' '.$personalInfo['PersonnelInformation']['last_name'];  ?></b></p>

                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id'];  ?></b></p>

                                                </div>
                                            </div> 
                                             
						<?php echo $this->Form->create('QuestionType',array('class'=>'')) ?>
                                            <?php echo $this->Form->input('QuestionType.personnel_information_id',array('type'=>'hidden','value'=>$id)) ?>
   <p>14. Order in yes/no questions:</p>

                        <p>a. Exemplify the normal order in yes/no questions.</p>

                                          <?php echo $this->Form->input('QuestionType.question_20a', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>

                        <p>b. If   there   are   alternative   orders   (other   than   those   involving   echo- questions, (see (16) below) exemplify them.</p>               

                                         <?php echo $this->Form->input('QuestionType.questioin_20b', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>
										 
										 
											 

						<p>15. Order in question-word (q-word) question:  </p>	
                        <p>a. What is the normal order in q-word questions?  Provide an example. </p>	

                        <?php echo $this->Form->input('QuestionType.question_21a', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>	 					
										 
                        <p>b. What is the location of the q-word/phrase?</p> 

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th></th>
                                        <th>YES/NO</th>
                                        <th>Bangla Gloss EX</th>

                                        <th>Transcription in IPA</th>

                                    </tr>

                                </thead>

                                <tbody>

                                  
                            	<?php 
                                $qwordlocation = array('i. initial','ii. immediately preverbal position','iii. in situ','iv. other');
                                for($i=0; $i<count($qwordlocation); $i++): ?>
                                    
                                    <?php
                                  
                                    
                                      //pr($this->data); exit;
                                    
                                  //echo  $this->data['Number_Marker'][$i]['ComparaisonMarker']['id']; exit;
                                    
                                      if(!empty($this->data['Number_Marker'][$i]['ComparaisonMarker']['id'])){
                                                                    echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.id',array('type'=>'hidden')); 
                                                                }
                                ?>
                            		<tr>
                            			<td> <?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.attribute_values',array('type'=>'hidden','value'=>$qwordlocation[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $qwordlocation[$i] ?></td>
                                                  <?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.table_attribute_type',array('type'=>'hidden','value'=>'location_marker','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			  <?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                                
                            			<td><?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                            			<td><?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.bangla_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						
						<td><?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.target_ipa', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                            		</tr>
                            	<?php endfor; ?>


                                </tbody>
                            </table>
                        </div>   

                        </hr><br/>
						<center><button class="btn btn-info">Finish</button></center>
						<?php echo $this->Form->end(); ?>
                    </div>  
						
					</div>
                      </div>
                         </div>
                             </div>   						 