<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Pronoun'); ?></h3>
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
						<?php echo $this->Form->create('Morphology',array('class'=>'')) ?>
<!--						<p><span class="parts_of_speechName"><b>Noun</b></span> / <span class="claasification_of_speech"><b>Name Of Color</b></span></p>                      -->
						<?php 
							$pronoun_list = array(   'I','We','You','You', 'He/She','They','He','You','Own','Self',
		                         'Self','this','this','the','this','that','all','all',
		                         'some','you','that','as','who','who','what','what','whose','where','whereby',
								 'other','another','after'  						 
							);
                                                        
                                                        $pronoun_banglaList = array(
                                                            'আমি','আমরা','তুমি','তোমরা','সে','তারা','তিনি',
                                                            'আপনি','নিজ','খোদ',
                                                            'স্বয়ং','এই','এ','এরা','ইনি','ঐসব',
                                                            'সব','সকল','কিছু','আপনি',
                                                            'যে','যেন','যারা','কে',
                                                            'কি','কী','কার','কোন','কিসে',
                                                            'অন্য','অপর','পর'
                                                            
                                                        );  
                                                        
						?>
						<table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Bangla Word</th>
                                    <th>English Word</th>
                                    <th>Target Word In Bangla Script</th>
                                    <th>Transcription in IPA</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            	<?php for($i=0; $i<count($pronoun_list); $i++): ?>
                                      <?php
                                  
                                      if(!empty($this->data[$i]['Morphology']['id'])){
                                                                    echo $this->Form->input($i.'.Morphology.id',array('type'=>'hidden')); 
                                                                }
                                ?>
                            		 <tr>
                                    <td><?php echo $pronoun_banglaList[$i]; ?></td>
                                    <?php echo $this->Form->input($i.'.Morphology.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                     <?php echo $this->Form->input($i.'.Morphology.morphology_type',array('type'=>'hidden','value'=>'noun_pronoun','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                    <td><?php echo $this->Form->input($i.'.Morphology.english_word',array('type'=>'hidden','value'=>$pronoun_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $pronoun_list[$i]; ?></td>
                                    <td><?php echo $this->Form->input($i.'.Morphology.target_bangla_script',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                    <td><?php echo $this->Form->input($i.'.Morphology.transcription_ipa',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                </tr>
                            	<?php endfor; ?>
                            </tbody>
                        </table>
						<hr></hr>
						<center><button class="btn btn-info">Next>></button></center>
						<?php echo $this->Form->end(); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>