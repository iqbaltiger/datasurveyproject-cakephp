<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Others'); ?></h3>
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
						<p><span class="parts_of_speechName"><b>Verbal Adjective</b></span></p>                      
						<?php 
							$conjunction_list = array(
	                           'and','and','so','or','or','or','Otherwise','or',
							   'Or','but','moreover','So'
							);
                                                        
							$verbal_adjective_list = array(
                                       'Open','hurry','slow','Little','Later','sleeping','More than hundred',
								  'Listen Up'
							);
                                                        
//                                                        pr($verbal_adjective_list);
                                                        $verbal_adjective_bangla_list = array(
                                                            
                                                            'খোলা','তাড়াতাড়ি','ধীরে','সামান্য','পরে','ঘুমন্ত','শতাধিক','শুনে রাখ',
                                                            
                                                        );
	
							 $quantifier_list = array(
		                           '8'=>'Many','Some','Little','Some','Plenty','A Piece','full'
							 );
                                                         
                                                       
                                                         
                                                         $quantifier_bangla_list = array(
                                                            '8'=>'অনেক','কয়েক','সামান্য','কতিপয়','প্রচুর',
                                                             'এক টুকরা','একডেলা'
                                                             
                                                         );
                                                         
                                                        // pr($quantifier_bangla_list);
							
							$demonstrative_articles_list = array(
                                   '15'=>'that','That','One Object','One Object','Some Objects',
								   'Some Objects','All','All'
							);
                                                        
                                                        $demonstrative_articles_bangla_list = array(
                                                            
                                                            '15'=>'টি','টা','খানা','খানি','গাছা','গাছি',
                                                            'গুলি','গুলা'
                                                        );
							
							$reduplicated_words_list = array(
                                    '23'=>'Riches','Feeling Fever','Many','Jingle','Market'
							);
                                                        
                                                        $reduplicated_bangla_list = array(
                                                          '23'=>'ধন-দৌলত','জ্বরজ্বর','রাশিরাশি','ঝম ঝম','হাট-বাজার'  
                                                            
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
                               
                            	<?php for($i=0; $i<count($verbal_adjective_list); $i++): ?>
                                         <?php
                                  
                                      if(!empty($this->data[$i]['Morphology']['id'])){
                                                                    echo $this->Form->input($i.'.Morphology.id',array('type'=>'hidden')); 
                                                                }
                                ?>
                            		<tr>
                            			<td><?php echo $verbal_adjective_bangla_list[$i]; ?></td>
                                                <?php echo $this->Form->input($i.'.Morphology.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<?php echo $this->Form->input($i.'.Morphology.morphology_type',array('type'=>'hidden','value'=>'verbal_adjective','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input($i.'.Morphology.english_word',array('type'=>'hidden','value'=>$verbal_adjective_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $verbal_adjective_list[$i]; ?></td>
                            			<td><?php echo $this->Form->input($i.'.Morphology.target_bangla_script',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input($i.'.Morphology.transcription_ipa',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            		</tr>
                            	<?php 
                                $count = $i+1;
                                endfor;
                                  
                                     
                                ?>
                            </tbody>
                        </table>
						<hr></hr>
                                                

                       
                         <p><span class="parts_of_speechName"><b>Quantifiers</b></span></p> 
                       
                                                
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
                            	<?php for($i=$count; $i<$count+count($quantifier_list); $i++): ?>
                            		<tr>
                            			<td><?php echo $quantifier_bangla_list[$i]; ?></td>
                                                <?php echo $this->Form->input($i.'.Morphology.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<?php echo $this->Form->input($i.'.Morphology.morphology_type',array('type'=>'hidden','value'=>'qunatifiers','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input($i.'.Morphology.english_word',array('type'=>'hidden','value'=>$quantifier_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $quantifier_list[$i]; ?></td>
                            			<td><?php echo $this->Form->input($i.'.Morphology.target_bangla_script',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input($i.'.Morphology.transcription_ipa',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            		</tr>
                            	<?php 
                                
                                endfor;
                               $count = $i; 
                                ?>
                            </tbody>
                        </table>
                       <hr></hr>
                       <p><span class="parts_of_speechName"><b>Demonstrative Articles</b></span></p> 

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
                            	<?php for($i=$count; $i<$count+count($demonstrative_articles_list); $i++): ?>
                            		<tr>
                            			<td><?php echo $demonstrative_articles_bangla_list[$i]; ?></td>
                                                <?php echo $this->Form->input($i.'.Morphology.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<?php echo $this->Form->input($i.'.Morphology.morphology_type',array('type'=>'hidden','value'=>'demonstrative_articles','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input($i.'.Morphology.english_word',array('type'=>'hidden','value'=>$demonstrative_articles_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $demonstrative_articles_list[$i]; ?></td>
                            			<td><?php echo $this->Form->input($i.'.Morphology.target_bangla_script',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input($i.'.Morphology.transcription_ipa',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            		</tr>
                            	<?php endfor; 
                                
                                    $count = $i;
                                   
                                ?>
                            </tbody>
                        </table>
                       <hr></hr>  
                       
                       <p><span class="parts_of_speechName"><b> Reduplicated 
Words</b></span></p> 
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
                            	<?php for($i=$count; $i<$count+count($reduplicated_words_list); $i++): ?>
                            		<tr>
                            			<td><?php echo $reduplicated_bangla_list[$i]; ?></td>
                                                <?php echo $this->Form->input($i.'.Morphology.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<?php echo $this->Form->input($i.'.Morphology.morphology_type',array('type'=>'hidden','value'=>'reduplicated_word_list','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input($i.'.Morphology.english_word',array('type'=>'hidden','value'=>$reduplicated_words_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $reduplicated_words_list[$i]; ?></td>
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