<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('WF Process'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                                <div class="col-lg-6 col-md-6">
                            <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'].' '.$personalInfo['PersonnelInformation']['last_name'];  ?></b></p>

                        </div>

                        <div class="col-lg-6 col-md-6">
                            <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id'];  ?></b></p>

                        </div>
<p>7. A productive word formation (WF) process is one which is synchronically used for the formation of new words. The following chart shows that whether the target language formed productively by the following word formation process.</p>
						<?php
							$sl = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t');
							$process = array('Prefixation','Suffixation','Infixation','Circumfixation','Prfixal-Sufixal Derivation','Prefixal-Infixal Derivation','Infixal-Sufixal Derivation','Root-and-Pattern Derivation (Transfixation)','Vowel alternation','Prefixation With Vowel alternation','Suffixation With Vowel alternation','Consonant alternation','Compounding','Incorporation','Reduplication','Conversion','Back formation/Subtraction','Blending','Clipping','Other productive process')
						
						?>

                        <?php echo $this->Form->create('WfProcess',array('class'=>'')) ?>
			<table class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th></th> 
                                    <th>WF Process</th> 
<!--                                    <td>Bangla Example</td>-->
                                    <th>YES Or NO</th> 
                                    <th>Literal Translation of constitunent morpherme in IPA</th> 
                                    <th>Bangla Gloss</th>
                                </tr>
                            </thead>

                            <tbody>
                                 
                            	<?php for($i=0; $i<=19; $i++): ?>
                                <?php
                                  
                                      if(!empty($this->data[$i]['WfProcess']['id'])){
                                                                    echo $this->Form->input($i.'.WfProcess.id',array('type'=>'hidden')); 
                                                                }
                                ?>
                            		<tr>
                            			<td><?php echo $sl[$i]; ?></td>
                                                <?php echo $this->Form->input($i.'.WfProcess.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input($i.'.WfProcess.wf_process_title',array('type'=>'hidden','value'=>$process[$i],'div'=>false,'label'=>false,'legend'=>false)); ?><?php echo $process[$i]; ?></td>
<!--                            			<td></td>-->
                            			<td><?php echo $this->Form->input($i.'.WfProcess.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)); ?></td>
                            			<td><?php echo $this->Form->input($i.'.WfProcess.ipa_word',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
	                    			<td><?php echo $this->Form->input($i.'.WfProcess.bangla_equivalent',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
	                        	
                            		</tr>
                            	<?php endfor; ?>
                            </tbody>
                        </table>
						<hr></hr>
                                                <center><button class="btn btn-info">Next>></button></center>
                                                <p>&nbsp;</p>
						<?php echo $this->Form->end(); ?>

                        </div>
                           </div>
                               </div>
                                   </div> 
                                      </div>
                                         </div>
                                                 