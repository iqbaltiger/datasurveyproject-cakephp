<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Special features(Vowel):'); ?></h3>
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
						<?php echo $this->Form->create('SemiVowel',array('class'=>'')) ?>
                        <p>
                            5. Determine Nasalization of Vowels of the Target language as per given instructions comparing to Bengali Language. Pronounce the word and ask covertly whether this word is familiar in target language or not. If YES, write down the word in Bengali and then transcribe in IPA. Finally add the meaning in English.  
                        </p>
                        
                        <?php
                        
                           $nasalized_vowels_list = array(
                               'ĩ','ẽ','æ̃','ã','ɔ̃','õ','ũ'
                               
                           );
                        
                        ?>
                        
                        
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nasalized vowels in  Bengali</th>
<!--                                    <th>Bengali Example</th>
                                    <th>IPA of Bengali Word</th>-->
                                    <th>YES/NO</th>
                                    <th>Similar Target Word in Bangla Script</th>
                                    <th>Transcription in IPA</th>
                                    <th>Meaning of the Target Word</th>
                                </tr>
                            </thead>
                            <tbody>
                                         <?php //echo $this->Form->input('Common.personnel_information_id',array('type'=>'hidden','value'=>$id)) ?>
		                    	<?php for($i=0; $i<=6; $i++): 
                                               
                                               if(!empty($this->data[$i]['SemiVowel']['id'])){
                                                                    echo $this->Form->input($i.'.SemiVowel.id',array('type'=>'hidden')); 
                                                                }
                                            ?>
                                <tr>
                                    <td align="center"><?php echo $this->Form->input($i.'.SemiVowel.vowels_sign',array('type'=>'hidden','value'=>$nasalized_vowels_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')).$nasalized_vowels_list[$i]; ?></td>
<!--                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>-->
                                                                                <?php echo $this->Form->input($i.'.SemiVowel.vowels_sign',array('type'=>'hidden','value'=>$i,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')) ?>
                                                                                <?php echo $this->Form->input($i.'.SemiVowel.type_of_vowels',array('type'=>'hidden','value'=>'nasalized_vowels','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')) ?>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.similar_bangla_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.ipa_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.meaning',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                     <?php echo $this->Form->input($i.'.SemiVowel.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>
                                </tr>
									<?php 
                                                                        
                                                                        endfor;
                                                                        $count=$i;
                                                                       
                                                                        ?>
                            </tbody>
                        </table>
                        
                         <table class="table table-bordered table-hover">
                                            <tr>
                                                <td colspan="4"><center><b>Other Nasalization(If any)</b></center></td>  
                                            </tr>
                                            
                                    <th>Nasalized vowels in  Bengali</th>
                                    <th>Similar Target Word in Bangla Script</th>
                                    <th>Transcription in IPA</th>
                                    <th>Meaning of the Target Word</th>
                                            
                                            <?php for($i=7;$i<10;$i++): 
                                                
                                                   if(!empty($this->data[$i]['SemiVowel']['id'])){
                                                                    echo $this->Form->input($i.'.SemiVowel.id',array('type'=>'hidden')); 
                                                                }
                                                ?>
                                            <tr>
                                                <td><?php echo $this->Form->input($i.'.SemiVowel.vowels_sign',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                                <td><?php echo $this->Form->input($i.'.SemiVowel.similar_bangla_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                                <td><?php echo $this->Form->input($i.'.SemiVowel.ipa_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>  
                                                <td><?php echo $this->Form->input($i.'.SemiVowel.meaning',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td> 
                                                 <?php echo $this->Form->input($i.'.SemiVowel.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>
                                            </tr>
                                           <?php endfor; ?>
                                        </table>
                        
                        <hr></hr>

                        <hr></hr>
                        <p>
                            6. Determine Semi-vowels as per given instructions comparing to Bengali Language. Pronounce the word and ask covertly whether this word is familiar in target language or not. If YES, write down the word in Bengali and then transcribe in IPA. Finally add the meaning in English. 
                        </p>
           				 <?php
           				 	$vowels = array('10'=>'ai','ae','au','ao');
							$ipa = array('10'=>'jai','jae','Jau','jao');
           				 ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Semi-vowels</th>  
<!--                                    <th>Bengali Example</th>  
                                    <th>IPA</th>  -->
                                    <th>YES/NO</th>  
                                    <th>Similar Target Word in BANGLA SCRIPT</th>  
                                    <th>Transcription in IPA</th>
                                    <th>Meaning</th>  
                                </tr>   
                            </thead>
                            <tbody>
		                    	<?php
                                     
                                         
                                        for($i=$count+3; $i<$count+7; $i++): 
                                            
                                            
                                                                if(!empty($this->data[$i]['SemiVowel']['id'])){
                                                                    echo $this->Form->input($i.'.SemiVowel.id',array('type'=>'hidden')); 
                                                                }
                                                   
                                                              
                                         
                                            ?>
                                <tr>
                                                     <?php echo $this->Form->input($i.'.SemiVowel.vowels_sign',array('type'=>'hidden','value'=>$vowels[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')) ?>     
                                                    <?php echo $this->Form->input($i.'.SemiVowel.type_of_vowels',array('type'=>'hidden','value'=>'semi_vowels','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')) ?>
                                    <td><?php echo $vowels[$i]; ?></td>
<!--                                    <td></td>
                                    <td><?php //echo $ipa[$i]; ?></td>-->
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.similar_bangla_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.ipa_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.meaning',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                     <?php echo $this->Form->input($i.'.SemiVowel.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>
                                </tr>
		                    	<?php endfor; 
                                        
                                             $count=$i; 
                                         
                                        ?>
                            </tbody>
                        </table>
                        <hr></hr>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">

<!--                        <p>
                            8. Use of Suprasegmentals:
                            Note: Identify the proccess with the availability of the possible sound types. If found then write YES and provide example of target language in IPA
                        </p>
                        <p><b>Are there distinctive degrees found in:</b></p>
                		<?php
                			$suprasegmentals = array('15'=>'Tones','16'=>'Pitch','17'=>'Juncture');
                		?>
                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Types of Suprasegmentals</th> 
                                    <th>YES/NO</th> 
                                    <th>Description</th> 
                                    <th>Target Word in IPA</th> 
                                    <th>Bangla Equivalent</th> 
                                </tr>

                            </thead>
                            <tbody>
	                        	<?php for($i=$count; $i<=$count+2; $i++): ?>
                                <tr>
                                                <?php echo $this->Form->input($i.'.SemiVowel.vowels_sign',array('type'=>'hidden','value'=>$suprasegmentals[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')) ?>     
                                                 <?php echo $this->Form->input($i.'.SemiVowel.type_of_vowels',array('type'=>'hidden','value'=>'suprasegments','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')) ?>
                                    <td><?php echo $suprasegmentals[$i];  ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.similar_bangla_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.ipa_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                    <td><?php echo $this->Form->input($i.'.SemiVowel.meaning',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                </tr>
	                        	<?php endfor; ?>
                            </tbody>
                        </table>-->
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