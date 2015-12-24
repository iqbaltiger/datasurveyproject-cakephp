<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Noun/Body Parts'); ?></h3>
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
                                                    <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'] . ' ' . $personalInfo['PersonnelInformation']['last_name']; ?></b></p>

                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id']; ?></b></p>

                                                </div>
                                            </div> 
						<?php echo $this->Form->create('Morphology',array('class'=>'')) ?>
<!--						<p><span class="parts_of_speechName"><b>Noun</b></span> / <span class="claasification_of_speech"><b>Body Parts</b></span></p>                      -->
						<?php 
							$body_parts = array(
			                      'body','head','hand','leg','finger','nail','mouse','nose','ear','forhead','lip',
								  'tooth','tongue','eye','Throat','belly','blood','breast','sex organ','sex organ',
								  'hips','hair'
							);
                                                        
                                                        $body_parts_bangla_list = array(
                                                            
                                                            'শরীর','মাথা','হাত','পা','আঙুল','নখ','মুখ','নাক','কান','কপাল','ঠোঁট','দাঁত',
                                                            'জিব','চোখ','গলা','পেট',
                                                            'রক্ত','স্তন',
                                                            'যৌনাঙ্গ (স্ত্রী)',
                                                            'যৌনাঙ্গ(পুং)',
                                                            'পশ্চাৎ দেশ','চুল',
                                                            );;
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
                               
                            	<?php for($i=0; $i<count($body_parts); $i++): ?>
                            		<?php
                                            if (!empty($this->data[$i]['Morphology']['id'])) {
                                                echo $this->Form->input($i . '.Morphology.id', array('type' => 'hidden'));
                                            }
                                ?>
                                    <tr>
                                        <td><?php echo $body_parts_bangla_list[$i]; ?></td>
                                    <?php echo $this->Form->input($i . '.Morphology.personnel_information_id', array('type' => 'hidden', 'value' => $id, 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                    <?php echo $this->Form->input($i . '.Morphology.morphology_type', array('type' => 'hidden', 'value' => 'noun_body_parts', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        <td><?php echo $this->Form->input($i . '.Morphology.english_word', array('type' => 'hidden', 'value' => $body_parts[$i], 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $body_parts[$i]; ?></td>
                                        <td><?php echo $this->Form->input($i . '.Morphology.target_bangla_script', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input($i . '.Morphology.transcription_ipa', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                    </tr>
                            	<?php endfor; ?>
                            </tbody>
                        </table>
						</hr>
                                                <p>&nbsp;</p>
                                                <center><button class="btn btn-info">Next>></button></center>
                                                <p>&nbsp;</p>
						<?php echo $this->Form->end(); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>