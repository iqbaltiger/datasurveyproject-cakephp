
<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Linguistics Basics'); ?></h3>
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

                        <p>2. &nbsp;As far as the manner of articulation is concerned, the following categories should be recognized: for (consonants)</p>

                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">a) plosive (plain)</div>
                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">b) affricate</div>
                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">c) fricative</div>


                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">d) approximant (approximation of two articulators without producing a turbulent

                            airstream)</div>
                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">e) trill (one articulator vibrating against another)</div>
                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">f) tap (one articulator thrown against another)</div> 
                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">g) flap (one articulator striking another in passing)</div> 
                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">h) nasal</div> 


                        <p><b>For all CONSONANT sound samples, please fill out the following table:</b></p>

                        <p class="pronounce_the_given"><b><i>Note: pronounce the given word. If yes with pronunciation, then instruct the participant to utter a word containing concerned sound within a word of target language. Additionally, provide a Bangla equivalent of the target word.</i></b></p>

                        <table class="table table-bordered table-hover">
                            <tr>
                                <th colspan="7" class="text-center"> CONSONANTS </th>
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

                                                        <?php  
                                                            $conconan_ipa_symbol_list = array('','','','','','','','','ʰ','t','','','','','','','',
                                                                                               '','','','','','','','','','','','','','ɽ');
                                                        
                                                            
                                                            $bangla_symbol_list = array(
                                                                'ক','খ','গ','ঘ','ঙ','চ','ছ','জ','ঝ','ট','ঠ','ড',
                                                                'ঢ','ত','থ','দ','ধ','ন','প','ফ','ব','ভ','ম','র',
                                                                'ল','শ','স','হ','ড়','ঢ়',
                                                                
                                                            );
                                                        ?>




                                                        <?php echo $this->Form->create('PhoneticSoundSample',array('class'=>'')) ?>
                                                         <?php echo $this->Form->input('Common.personnel_information_id',array('type'=>'hidden','value'=>$id)) ?>
							<?php for($i=0; $i<=29; $i++): ?>
                                             <?php 
                                                                if(!empty($this->data[$i]['PhoneticSoundSample']['id'])){
                                                                    echo $this->Form->input($i.'.PhoneticSoundSample.id',array('type'=>'hidden')); 
                                                                }
                                                            ?>
                            <?php echo $this->Form->input($i.'.PhoneticSoundSample.personnel_information_id',array('type'=>'hidden','value'=>$id)) ?>
                            <tr>
                                <td align="center" class="ipastyle"><?php echo $this->Form->input($i.'.PhoneticSoundSample.ipa_symbol',array('type'=>'hidden','value'=>$conconan_ipa_symbol_list[$i])).$conconan_ipa_symbol_list[$i];  ?></td>
                                <td align="center"><?php echo $this->Form->input($i.'.PhoneticSoundSample.ipa_symbol',array('type'=>'hidden','value'=>$bangla_symbol_list[$i])).$bangla_symbol_list[$i];  ?></td>
<!--                                <td>&nbsp;</td>
                                <td>&nbsp;</td>-->
                                                                <?php  echo $this->Form->input($i.'.PhoneticSoundSample.phonetic_type',array('type'=>'hidden','value'=>'consonant')) ; ?>
                                <td align="center">
                                  <?php 
                                    echo $this->Form->input($i.'.PhoneticSoundSample.answer_choice',array('type'=>'radio','options'=>array(1=>'Yes',0=>'No'),'div'=>'input','label'=>false,'legend'=>false)); 
                                  ?>
                                </td>
                                <td><?php echo $this->Form->input($i.'.PhoneticSoundSample.ipa_word',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                <td><?php echo $this->Form->input($i.'.PhoneticSoundSample.bangla_equivalent',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            </tr>
							<?php endfor; ?>
                        </table>

                        <hr></hr>

                        <div class="form-group col-md-12">
                            <center> <button type="submit" class="btn btn-info">Next>></button></center>
                        </div>   




						<?php echo $this->Form->end(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>