<style type="text/css">
    .gap_right_first{padding-right: 108px;}
    .gap-right{padding-right: 50px;}
    
  
    
    .radio-test{padding-left:20px;}
    .radio_question_section{}
    
    .radio_question_section label{padding:0px 10px;}
    
    .radio_question_section > span{float: left;margin-left: 10px;font-weight: bold;}

</style>

<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Vowel Sound Samples'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
						
						<p>1.  As far as the manner of articulation is concerned, the following categories should be recognized: for syllabics</p>
                                                <p><span class="gap_right_first">a)  vowel</span>
				        <span>b)  syllabic nasal</span></p>
                                                <p><span class="gap-right">c) syllabic fricative</span>
				        <span>d)  etc.</span></p>
				
				        <p><b>For all VOWEL sound samples, please fill out the following table:</b></p>
				
				        <p class="pronounce_the_given"><b><i> Note: pronounce the given word. If yes with pronunciation, then instruct the participant to  utter a word containing concerned sound within a word of target language. Additionally, provide a Bangla equivalent of the target word.</i></b></p>
					
                                        <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'].' '.$personalInfo['PersonnelInformation']['last_name'];  ?></b></p>
                                            
                                        </div>
                                        
                                         <div class="col-lg-6 col-md-6">
                                             <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id'];  ?></b></p>
                                            
                                        </div>
                                        
                                            </div>
                                         <?php echo $this->Form->create('PhoneticSoundSample',array('class'=>'')); ?>
                                         <div class="table-responsive">
                                           <table class="table table-bordered table-hover">
                                               
                                                
							<tr>
								<th colspan="7" class="text-center"> Vowels </th>
							</tr>
							<tr>
								<th>IPA symbol</th>
								<th>Bangla</th>
<!--								<th>Bangla Word</th>
								<th>IPA word</th>-->
								<th>YES/NO</th>
								<th>Target Word in IPA</th>
								<th>Bangla Gloss</th>
							</tr>
                                                 
                                                    
                                                           <?php $ipa_symbol_list = array(
                                                               
                                                                    'i','e','æ','a','ɔ','o','u'
                                                           ); 
                                                           
                                                               $bangla_symbol_list = array('ই','এ','অ্যা','আ','অ','ও','উ');
                                                           ?>
                                                        
                                                        
                                                        
                                              
							<?php for($i=0; $i<=6; $i++): ?>
                                                            <?php 
                                                                if(!empty($this->data[$i]['PhoneticSoundSample']['id'])){
                                                                    echo $this->Form->input($i.'.PhoneticSoundSample.id',array('type'=>'hidden')); 
                                                                }
                                                            ?>
                                                            <?php echo $this->Form->input($i.'.PhoneticSoundSample.personnel_information_id',array('type'=>'hidden','value'=>$id)) ?>
							
                                               
                                               <tr>
								<td align="center"><?php echo $this->Form->input($i.'.PhoneticSoundSample.ipa_symbol',array('type'=>'hidden','value'=>$ipa_symbol_list[$i])).$ipa_symbol_list[$i];  ?></td>
								<td align="center"><?php echo $this->Form->input($i.'.PhoneticSoundSample.bangla',array('type'=>'hidden','value'=>$bangla_symbol_list[$i])).$bangla_symbol_list[$i];  ?></td>
<!--								<td>&nbsp;</td>
								<td>&nbsp;</td>-->
                                                         <?php  echo $this->Form->input($i.'.PhoneticSoundSample.phonetic_type',array('type'=>'hidden','value'=>'vowel')) ; ?>
                                                                
                                                                <td><?php echo $this->Form->input($i.'.PhoneticSoundSample.answer_choice',array('type'=>'radio','options'=>array('1'=> 'Yes','0'=>'No'),'div'=>true,'label'=>false,'legend'=>false)) ?></td>

								<td><?php echo $this->Form->input($i.'.PhoneticSoundSample.ipa_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
								<td><?php echo $this->Form->input($i.'.PhoneticSoundSample.bangla_equivalent',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
							</tr>
                                                      <?php endfor; ?>  
                                                 
						</table>
                                         </div>
                                        
                                        <table class="table table-bordered table-hover">
                                            <tr>
                                                <td colspan="4"><center><b>Other Vowel(If any)</b></center></td>  
                                            </tr>
                                            
                                            <tr>
								<th>IPA symbol</th>
								<th>Bangla</th>
                                                                <th>Target Word in IPA</th>
								<th>Bangla Gloss</th>
							</tr>
                                            
                                            <?php for($i=7;$i<10;$i++): ?>
                                                     <?php 
                                                                if(!empty($this->data[$i]['PhoneticSoundSample']['id'])){
                                                                    echo $this->Form->input($i.'.PhoneticSoundSample.id',array('type'=>'hidden')); 
                                                                }
                                                            ?>
                                                            <?php echo $this->Form->input($i.'.PhoneticSoundSample.personnel_information_id',array('type'=>'hidden','value'=>$id)) ?>         
                                                            <?php  echo $this->Form->input($i.'.PhoneticSoundSample.phonetic_type',array('type'=>'hidden','value'=>'vowel')) ; ?>
                                               <tr>
                                                <td><?php echo $this->Form->input($i.'.PhoneticSoundSample.ipa_symbol',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                                <td><?php echo $this->Form->input($i.'.PhoneticSoundSample.bangla',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                                <td><?php echo $this->Form->input($i.'.PhoneticSoundSample.ipa_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>  
                                                <td><?php echo $this->Form->input($i.'.PhoneticSoundSample.bangla_equivalent',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td> 
                                                
                                            </tr>
                                           <?php endfor; ?>
                                        </table>
                                        
						<hr></hr>
						
						  <div class="form-group col-md-12">
                                                      <center><button type="submit" class="btn btn-info">Next>></button></center>
				          </div>
				        <?php echo $this->Form->end() ?> 
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>