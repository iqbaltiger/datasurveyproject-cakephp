<?php

echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function () {


       for(j=0;j<15;j++){     
       
            $('#SectionHouseholdArray'+j+'SectiondHouseholdinfoPrimaryOccupationOther').hide();
            $('#SectionHouseholdArray'+j+'SectiondHouseholdinfoSecondaryOccupationOther').hide();
            $('#SectionHouseholdArray'+j+'SectiondHouseholdinfoOtherOccupationOther').hide();
         
         
         
        
        // alert(checkValue);
         
        }
         
        for (i = 0; i < 40; i++) {
            $('#' + i + 'mytest').hide();

        }
        
//        for(j=0;j<10;j++){
//            
//            $('#SectionHouseholdArray'+j+'SectiondHouseholdinfoPrimaryOccupationOther').hide();
//            // $('SectionHouseholdArray1SectiondHouseholdinfoPrimaryOccupationOther').hide();
//            
//            
//        }

        $('#other_1').hide();
        $('#other_2').hide();
        $('#other_14_1').hide();
        $('#other_14_2').hide();
        $('#16mytest').hide();
        $('#17mytest').hide();
        $('#18mytest').hide();
        $('#10SectionQuestionAnswerCulturalAnswer').on('change', function () {
            var selectboxValue = $('#10SectionQuestionAnswerCulturalAnswer').val();
            if (selectboxValue == 99) {
                $('#other_1').show();
                $('#other_2').show();
            }

            else {

                $('#other_1').hide();
                $('#other_2').hide();
            }
        });

        $('#14SectionQuestionAnswerCulturalAnswer').on('change', function () {

            var selectboxValue = $('#14SectionQuestionAnswerCulturalAnswer').val();
            if (selectboxValue == 99) {
                $('#other_14_1').show();
                $('#other_14_2').show();
            }
            else {

                $('#other_14_1').hide();
                $('#other_14_2').hide();
            }
        });

          

        $('#16SectionQuestionAnswerCulturalAnswer').change(function () {

            var selectboxValue = $('#16SectionQuestionAnswerCulturalAnswer').val();
            if (selectboxValue == 99) {
                $('#16mytest').show();
            }

            else {

                $('#16mytest').hide();
            }
        })
        
        $('#17SectionQuestionAnswerCulturalAnswer').change(function () {

            var selectboxValue = $('#16SectionQuestionAnswerCulturalAnswer').val();
            if (selectboxValue == 99) {
                $('#17mytest').show();
            }

            else {

                $('#17mytest').hide();
            }
        })
        
        $('#18SectionQuestionAnswerCulturalAnswer').change(function () {

            var selectboxValue = $('#16SectionQuestionAnswerCulturalAnswer').val();
            if (selectboxValue == 99) {
                $('#18mytest').show();
            }

            else {

                $('#18mytest').hide();
            }
        })


    })
</script>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Household'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                       <?php echo $this->Form->create('SectionQuestionAnswerCultural',array('class'=>'')) ?>
                           <?php
                        $question_sets = array(
                              'What is your name?','How long ago was this household formed (see definition of household)?','How long have you been living continuously in this para/ village?',
                                      'To which ethnic group do you belong?','What is your religion?','In what month and year were you born?','How old were you at your last birthday?',
                                      'Where were you born?','Where did your parents live?','How many times have you shifted/ relocated/migrated your residence since the place you were born?',
                                      'If they had lived elsewhere then reasons of migration?','Have you ever attended school?','What is the highest level of school you attended?',
                                      'What is your occupation, that is, what kind of work do you mainly do?'
                            );
                        $question_sets_C = array(
                            'Location of the house of the respondent','Type of ownership of the house','What is the roof of the main house made up of? (Please circle the specific code after observation)',
                            'What is the wall of the main house made up of? (Please circle the specific code after observation','What is the floor of the main house made up of? (Please circle the specific code after observation)',
                            'How many houses/rooms are there in the household'    
                        );
                        
                       $occupation_list = array(
                                                  
                                                  '01'=>'Agriculture (own land)','02'=>'-(only mortgaged/borrowed or rented / bargha land)','03'=>'Agricultural labour (day labourer/agricultural labourer/assists in household agricultural activities)',
                                                  '04'=>'Non agriculturallabourer (mason/weaver/potter/blacksmith/cobbler/tailor/assistant to  mason/weaver/ worker in a rice mill)',
                                                  '05'=>'Rickshaw/Van/ puller Pushing cart man/boatman',
                                                  '06'=>'Driver of motor vehicle','07'=>'Government/ Nongovernment employee',
                                                  '07'=>'Government/ Nongovernment employee',
                                                  '08'=>'Professional (Teacher/ Lawyer/Doctor/ Engineer)',
                                                  '09'=>'Big/ Middle Businessman',
                                                  '10'=>'Petty business',
                                                  '11'=>'Housekeeping in others household',
                                                  '12'=>'Garments’ worker',
                                                  '13'=>'Unemployed',
                                                  '14'=>'Student',
                                                  '15'=>'Not applicable (<6 years)',
                                                  '77'=>'Others (please mention the details) '
                                                  );
                     ?>                      

                        <h4>SECTION B: HOUSEHOLD HEAD’S BACKGROUND</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Question No.</th>
                                    <th>Question</th>
                                    <th>Answer and code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-----first row-----> 
                                <tr>
                                    <td>201.</td>
                                    <td><?php echo $this ->Form ->input('0.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[0],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[0]; ?></td>  
                                    <td><?php echo $this -> Form -> input('0.SectionQuestionAnswerCultural.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>202.</td>
                                    <td><?php echo $this ->Form ->input('1.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[1],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[1]; ?></td>  
                                    <td>
			                        	<?php
                                                            $options = array('01' => '00 – 03 Year(s)', '02' => '03 – 06 Year(s)', '03' => '06 – 09 Year(s)', '04' => '09 – 12 Years', '05' => '12 or More Years');
                                                            echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 			       ?>
                                    </td>  
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>203.</td>
                                    <td><?php echo $this->Form->input('2.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[2],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[2]; ?></td>  
                                    <td>
			                        	<?php  $options = array('01' => '00 – 03 Year(s)', '02' => '03 – 06 Year(s)', '03' => '06 – 09 Year(s)', '04' => '09 – 12 Years', '05' => '12 or More Years');
								echo $this -> Form -> input('2.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 				 ?>
                                    </td>  
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>204.</td>
                                    <td><?php echo $this->Form->input('3.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[3],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[3]; ?></td>
                                    <td><?php echo $this->Form->input('3.SectionQuestionAnswerCultural.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>205.</td>
                                    <td><?php echo $this ->Form ->input('4.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[4],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[4]; ?></td>
                                    <td><?php echo $this -> Form -> input('4.SectionQuestionAnswerCultural.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>206.</td>
                                    <td><?php echo $this ->Form ->input('5.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[5],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[5]; ?></td>
                                    <td><?php echo $this -> Form -> input('5.SectionQuestionAnswerCultural.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>207.</td>
                                    <td><?php echo $this ->Form ->input('6.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[6],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[6]; ?></td>
                                    <td><?php echo $this -> Form -> input('6.SectionQuestionAnswerCultural.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>208.</td>
                                    <td><?php echo $this ->Form ->input('7.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[7],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[7]; ?></td>
                                    <td><?php echo $this -> Form -> input('7.SectionQuestionAnswerCultural.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>209.</td>
                                    <td><?php echo $this ->Form ->input('8.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[8],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[8]; ?></td>
                                    <td><?php echo $this -> Form -> input('8.SectionQuestionAnswerCultural.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>210.</td>
                                    <td><?php echo $this ->Form ->input('9.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[9],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[9]; ?></td>
                                    <td>
			                           <?php
									$options = array('01' => 'Once', '02' => 'Two Times', '03' => 'Three Times', '04' => 'More than three times');
									echo $this -> Form -> input('9.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 							?>  
                                    </td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>211.</td>
                                    <td><?php echo $this ->Form ->input('10.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[10],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[10]; ?></td>
                                    <td>
			                            <?php
										$options = array('01' => 'Employment Opportunities', 'production' => 'Production Possibility', 'forced' => 'Forced Migration for Credit and Debt', '02' => 'Pauperization and Loss of Land Ownership', 'impact' => 'Impacts of Natural Disasters & Coping', '03' => 'Political Conflict, Crisis or Terrorism', '04' => 'Family Reunification', '05' => 'Communalism and Communal Tension', '99' => 'Other (Please specify)');
										echo $this -> Form -> input('10.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
                                                                                echo $this->Form->input('10.SectionQuestionAnswerCultural.answer9', array('type' => 'text','placeholder'=>'Other– 01:','id'=>'other_1','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                                                                echo $this->Form->input('10.SectionQuestionAnswerCultural.answer9', array('type' => 'text','placeholder'=>'Other– 02:','id'=>'other_2','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
			 		            ?>


                                    </td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>212.</td>
                                    <td><?php echo $this ->Form ->input('11.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[11],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[11]; ?></td>
                                    <td>
			                            <?php
										$options = array('01' => 'Yes', '02' => 'No');
										echo $this -> Form -> input('11.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 							?>  
                                    </td>
                                </tr>
                                <!-----first row-----> 
                                <tr>
                                    <td>213.</td>
                                    <td><?php echo $this ->Form ->input('12.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[12],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[12]; ?></td>
                                    <td>
			                        <?php
									$options = array('01' => 'Illiterate', '02' => 'Can Read and Write', '03' => 'Class 01 - 05', '04' => 'Primary Passed (Class 05 – 07)', '05' => 'Secondary (Class 8/ 9/ 10)', '06' => 'SSC Passed', '07' => 'HSC Passed', '08' => 'graduate', '09' => 'Post Graduate', );
									echo $this -> Form -> input('12.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 						?>  

                                    </td>
                                </tr>
                                <!-----first row-----> 
<!--                                <tr>
                                    <td>214.</td>
                                    <td><?php echo $this ->Form ->input('13.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets[13],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets[13]; ?></td>
                                    <td>
			                           <?php
									$options = array('01' => 'Primary Occupation', '02' => 'Secondary Occupation', '03' => 'Tertiary Occupation', );
									echo $this->Form ->input('13.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 							?>
                                    </td>
                                </tr>-->
                                <!----------------------Customized Row For Occupation---------------------------------->
                                
                                <tr>
                                    <td>214.</td>
                                    <td colspan="2"> What is your occupation, that is, what kind of work do you mainly do?</td>
                                </tr>    
                                
                                
                                <!------Second Row----->
                                
                                 <tr>
                                <td>
                                    <p><b>Primary Occupation</b></p>
                                    <?php echo $this->Form->input('SectiondHouseholdinfo.primary_occupation',array('type'=>'select','options'=>$occupation_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                </td>  
                                <td>
                                    
                                  <p><b>Secondary Occupation</b></p>
                                    <?php echo $this->Form->input('SectiondHouseholdinfo.primary_occupation',array('type'=>'select','options'=>$occupation_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>  
                                </td>  
                                <td>
                                  <p><b>Tertiary Occupation</b></p>
                                    <?php echo $this->Form->input('SectiondHouseholdinfo.primary_occupation',array('type'=>'select','options'=>$occupation_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>  
                                    
                                </td>  
                            </tr>
                                
                                


                            </tbody>
                        </table>
                        <hr></hr>
                        <h4>SECTION C: LIVING CONDITION AND LOCATION</h4>
                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Question No.</th>
                                    <th>Question</th>
                                    <th>Answer and code</th>
                                </tr>

                            </thead>

                            <tbody>

                                <!--------------Section C 300 Row---------------------->

                                <tr>
                                    <td>301</td>
                                    <td><?php echo $this ->Form ->input('14.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets_C[0],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets_C[0]; ?></td>
                                    <td>
                                        <?php $options = array('01' => 'Plain land', '02' => 'Small hills', '03' => 'Hill top', '04' => 'Feet of the hills', '05' => 'Edge of a river or watershed', '06' => 'Floating/ Temporary Settlement', '07' => 'Tea garden', '08' => 'Forest', '09' => 'Reserved forest', '10' => 'Terrace and Uneven Prefecture','99'=>'Others (Please specify below)');
			
				             echo $this ->Form->input('14.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
                                             echo $this->Form->input('14.SectionQuestionAnswerCultural.answer9', array('type' => 'text','placeholder'=>'Other– 01:','id'=>'other_14_1','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                             echo $this->Form->input('14.SectionQuestionAnswerCultural.answer9', array('type' => 'text','placeholder'=>'Other– 02:','id'=>'other_14_2','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                        ?>   

                                    </td>
                                </tr>


                                <!--------------Section C 300 Row---------------------->

                                <tr>
                                    <td>302</td>
                                    <td><?php echo $this ->Form ->input('15.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets_C[1],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets_C[1]; ?></td>
                                    <td>

			                <?php	$options = array('01' => 'Own home at own land', '02' => 'Government house', '03' => 'Rented house', '04' => 'Own home at others’ land', '05' => 'Own home at Government land', '99' => 'Others (Please specify) ________________', );
			                        echo $this->Form->input('15.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			                ?>  

                                        <?php echo $this -> Form -> input('SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>'15mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>

                                    </td>

                            <script>

                                $('#15SectionQuestionAnswerCulturalAnswer').change(function () {

                                    var selectboxValue = $('#15SectionQuestionAnswerCulturalAnswer').val();
                                    if (selectboxValue == 99) {
                                        $('#15mytest').show();
                                    }

                                    else {

                                        $('#15mytest').hide();
                                    }
                                })
                            </script>
                            </tr>


                            <!--------------Section C 300 Row---------------------->

                            <tr>
                                <td>303</td>
                                <td><?php echo $this ->Form ->input('16.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets_C[2],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets_C[2]; ?></td>
                                <td>
                                       <?php
			                $options = array('01' => 'Straw/ Chan/ Bamboo leaf/ Palm leaf/ Golpata', '02' => 'Plastic sheet/ Polythene', '03' => 'Tiled', '04' => 'Metal/ Tin/ Steel', '05' => 'Wood', '06' => 'Cement', '99' => 'Others (Please specify) ________________', );
			
					echo $this -> Form -> input('16.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			               ?>   
                                        <?php echo $this -> Form -> input('SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>'16mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                </td>
                            </tr>


                            <!--------------Section C 300 Row---------------------->

                            <tr>
                                <td>304</td>
                                <td><?php echo $this ->Form ->input('17.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets_C[3],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets_C[3]; ?></td>
                                <td>

			              <?php
                                      $options = array('01' => 'Cane/ Straw/ Leaf/ Jute sticks', '02' => 'Mud', '03' => 'Bamboo/ Bamboo with mud', '04' => 'Stones with mud/ Bricks with mud', '05' => 'Wood', '06' => 'Tin sheet', '07' => 'Brick/ Cement', '99' => 'Others (Please specify) ________________', );
                                      echo $this -> Form -> input('17.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 ?>   
                                    <?php echo $this->Form->input('SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>'17mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                </td>
                            </tr>



                            <!--------------Section C 300 Row---------------------->

                            <tr>
                                <td>305</td>
                                <td><?php echo $this ->Form ->input('18.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets_C[4],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets_C[4]; ?></td>
                                <td>
                                    <?php
			                $options = array('01' => 'Mud', '02' => 'Bamboo/ Betel nut leaf', '03' => 'Wood/ Palm tree leaf', '04' => 'Cement', '05' => 'Ceramic tiles/ Mosaic', '99' => 'Others (Please specify) ________________', );
                                        echo $this -> Form -> input('18.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 ?>   
                                    <?php echo $this->Form->input('SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>'18mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                </td>
                            </tr>


                            <!--------------Section C 300 Row---------------------->

                            <tr>
                                <td>306</td>
                                <td><?php echo $this ->Form ->input('19.SectionQuestionAnswerCultural.question', array('type' => 'hidden','value'=>$question_sets_C[5],'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $question_sets_C[5]; ?></td>  
                                
                                
                                <td><?php echo $this -> Form -> input('19.SectionQuestionAnswerCultural.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                            </tr>
                            
                           

                            </tbody>
                        </table>
                        <hr></hr>
                        <h4>SECTION D: HOUSEHOLD INFORMATION</h4>
                        <p>401. Household structure (Description of the household members)</p>
                        <div class="table-responsive">
				            <?php
				              $gender = array(
				                  '01'=>'male',
				                  '02'=>'female'
				              );
				              
				              $maritial_status = array(
				                  '01'=>'Unmarried',
				                  '02'=>'Married',
				                  '03'=>'Widow/ Widower',
				                  '04'=>'Divorced/ Separated/ Deserted',
				                  '05'=>'Child',
				              );
				              
				              $educational_level = array(
				                      '80'=>'Illiterate',
				                      '81'=>'Can do signature',
				                      '82'=>'Can read and write',
				                      '83'=>'Primary/ Ongoing Year of Passing: (Mention the last Passed Degree/ Class/ Level ',
				                      );
                                              
                                              
				            ?>

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="89" rowspan="2">No of HHMm</th>
                                        <th width="144" rowspan="2"><p>Names of Household Members </p> (Start from Household Head)</th>
                                <th width="69" rowspan="2">Start with Household Head </th>
                                <th width="78" rowspan="2">Gender</th>
                                <th width="132" colspan="2">Age</th>
                                <th width="4" rowspan="2">Marital Status &nbsp;&nbsp;</th>
                                <th width="4" rowspan="2">Educational Level </th>
                                <th width="7" colspan="3">Occupation </th>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <th>Month</th>
                                    <th width="5">Primary Occupation</th>
                                    <th width="5">Secondary  Occupation </th>
                                    <th width="7"><p align="center">Tertiary Occupation</p>
                                </th>
                                </tr>
                                </thead>
                                <tbody>
				                    <?php for($i=0;$i<=11;$i++): ?>
                                    <tr>
                                        <td><?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.number_hhm',array('type'=>'hidden','value'=>$i,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo ($i+1); ?></td>
                                        <td><?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.name_household_head',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                        <td>
				            <?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.start_with_household_head',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>  

                                        </td>
                                        <td><?php  echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.gender', array('options' => $gender,'class'=>'form-control','empty' => '(choose one)','label'=>false)); ?>    </td>
                                        <td><?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.year',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.month',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                        <td>

				                          <?php
				                            echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.maritial_status', array('options' => $maritial_status,'class'=>'form-control','empty' => '(choose one)','label'=>false)); ?>    


                                        </td>
                                        <td>
                                            <?php
				             echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.education_level', array('options' => $educational_level,'class'=>'form-control','empty' => '(choose one)','label'=>false)); ?>    


                                        </td>
                                        <td>
                                            <?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.primary_occupation',array('type'=>'select','options'=>$occupation_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                            <?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.primary_occupation_other',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.secondary_occupation',array('type'=>'select','options'=>$occupation_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                            <?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.secondary_occupation_other',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.other_occupation',array('type'=>'select','options'=>$occupation_list,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                            <?php echo $this->Form->input('SectionHouseholdArray.'.$i.'.SectiondHouseholdinfo.other_occupation_other',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                        </td>

                                    </tr>
                                    
                                <script type="text/javascript">
                                    $('#SectionHouseholdArray'+<?php echo $i; ?>+'SectiondHouseholdinfoPrimaryOccupation').change(function () {
                                               var selectboxValue = $('#SectionHouseholdArray'+<?php echo $i; ?>+'SectiondHouseholdinfoPrimaryOccupation').val();
                                            if (selectboxValue == 77) {
                                                $('#SectionHouseholdArray'+<?php echo $i; ?>+'SectiondHouseholdinfoPrimaryOccupationOther').show();
                                            }
                                            else {

                                                $('#SectionHouseholdArray'+<?php echo $i; ?>+'SectiondHouseholdinfoPrimaryOccupationOther').hide();
                                            }
                                        })
                                       
                                        
                                       $('#SectionHouseholdArray'+<?php echo $i; ?>+'SectiondHouseholdinfoSecondaryOccupation').change(function () {
                                               var selectboxValue = $('#SectionHouseholdArray'+<?php echo $i; ?>+'SectiondHouseholdinfoPrimaryOccupation').val();
                                            if (selectboxValue == 77) {
                                                $('#SectionHouseholdArray'+<?php echo $i; ?>+'SectiondHouseholdinfoPrimaryOccupationOther').show();
                                            }
                                            else {

                                                $('#SectionHouseholdArray'+<?php echo $i; ?>+'SectiondHouseholdinfoPrimaryOccupationOther').hide();
                                            }
                                        }) 

                                
                                </script>
                                    
                                    
                                    

				                <?php endfor; ?> 
                                </tbody>

                            </table>
                            <hr></hr>
                           <center> <button class="btn btn-info">Next>></button></center>
                       <?php echo $this -> Form -> end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>