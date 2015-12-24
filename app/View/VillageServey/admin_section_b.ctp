<?php  echo $this->Html->script('admin/jquery.min'); ?>
<script type="text/javascript">
     $('#district0').change(function(){
         
      
                                       
    var district_val = this.value;
    alert(district_val); exit;

    if(district_val==0){

                $('#district1').empty();

                 var upazilla_value = {
                                             l  : 'লাকসাম',
                                             d : 'দেবিদ্বার '
                                         };
                                         $.each(upazilla_value, function(val, text) {
                                             $('#district1').append( new Option(text,val) );
                                         });


                }

                if (district_val == 1) {


                  $('#district1').empty();


                    var upazilla_value = {
                        l: 'কসবা',
                        d: 'সরাইল'
                    };
                    $.each(upazilla_value, function (val, text) {
                        $('#district1').append(new Option(text, val));
                    });


                }


//            })



}) 
    </script>



<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Village'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <?php echo $this->Form->create('CommunitySectionB', array('class' => '')) ?>
                        <?php
                        $location_by_unitlist = array('What is the name of the Division?', 'What is the name of the District?', 'What is the name of the Upazila?',
                        );
                        ?>
                        <?php
                        $options[0] = $divisions;
                        $options[1] = $districts;
                        $options[2] = $upazilas;
                        
                        
                        
                        ?>


                        <table class="table table-bordered table-striped">

                            <tbody>
                                <?php for ($i = 0; $i < count($location_by_unitlist); $i++): ?>
                                    <?php
                                    if (!empty($this->request->data['VillageSectionBFirstPart'][$i]['VillageSectionBFirstPart']['id'])) {
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $i . '.VillageSectionBFirstPart.id', array('type' => 'hidden'));
                                    }
                                    ?>                              	

                                    <tr>
                                        <td><?php echo $i + 201; ?></td>
                                        <td><?php echo $location_by_unitlist[$i]; ?></td>  
                                        <td>
                                            <?php
                                            echo $this->Form->input('VillageSectionBFirstPart.' . $i . '.VillageSectionBFirstPart.question_no', array('type' => 'hidden', 'value' => $i + 201));
                                            echo $this->Form->input('VillageSectionBFirstPart.' . $i . '.VillageSectionBFirstPart.question', array('type' => 'hidden', 'value' => $location_by_unitlist[$i]));
                                            echo $this->Form->input('VillageSectionBFirstPart.' . $i . '.VillageSectionBFirstPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                            echo $this->Form->input('VillageSectionBFirstPart.' . $i . '.VillageSectionBFirstPart.answer', array('options' => $options[$i], 'class' => 'form-control','id'=>'district'.$i, 'empty' => '(choose one)', 'label' => false));
                                            ?>
                                        </td>
                                    </tr>         
                                <?php endfor; ?>

                                <?php
                                $array_first = array(
                                    'What is the name of the Union/ Municipality?',
                                    'What is the local name of the settlement unit/ locality?',
                                    'Comments based on observation (if any)'
                                );
                                ?>

                                <?php
                                for ($i = 0; $i < count($array_first); $i++):
                                    $p = $i + 3;
                                    ?>
                                    <tr>
                                        <td><?php echo $i + 204; ?></td>
                                        <td><?php echo $array_first[$i]; ?></td> 
                                        <td>
                                            <?php
                                            if (!empty($this->request->data['VillageSectionBFirstPart'][$p]['VillageSectionBFirstPart']['id'])) {
                                                echo $this->Form->input('VillageSectionBFirstPart.' . $p . '.VillageSectionBFirstPart.id', array('type' => 'hidden'));
                                            }

                                            echo $this->Form->input('VillageSectionBFirstPart.' . $p . '.VillageSectionBFirstPart.question_no', array('type' => 'hidden', 'value' => $i + 204));
                                            echo $this->Form->input('VillageSectionBFirstPart.' . $p . '.VillageSectionBFirstPart.question', array('type' => 'hidden', 'value' => 'What is the name of the Union/ Municipality?'));
                                            echo $this->Form->input('VillageSectionBFirstPart.' . $p . '.VillageSectionBFirstPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                            echo $this->Form->input('VillageSectionBFirstPart.' . $p . '.VillageSectionBFirstPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                endfor;
                                ?>
                            </tbody>
                        </table>   

                        <h4>B-2: LOCATION BY TYPES AND PATTERNS OF SETTLEMENTS </h4>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>211</td>
                                <td>Major settlement type </td>  
                                <td>
                                    <?php
                                    if (!empty($this->request->data['VillageSectionBFirstPart'][6]['VillageSectionBFirstPart']['id'])) {
                                        echo $this->Form->input('VillageSectionBFirstPart.6.VillageSectionBFirstPart.id', array('type' => 'hidden'));
                                    }
                                    $options = array('Rural Settlement', 'Urban Settlement');
                                    echo $this->Form->input('VillageSectionBFirstPart.6.VillageSectionBFirstPart.question_no', array('type' => 'hidden', 'value' => 211));
                                    echo $this->Form->input('VillageSectionBFirstPart.6.VillageSectionBFirstPart.question', array('type' => 'hidden', 'value' => 'Major settlement type'));
                                    echo $this->Form->input('VillageSectionBFirstPart.6.VillageSectionBFirstPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                    echo $this->Form->input('VillageSectionBFirstPart.6.VillageSectionBFirstPart.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
                                    ?>
                                </td>  
                            </tr>

                            <tr>
                                <td>212</td>
                                <td>If rural settlement, what is the type and pattern?</td>  
                                <td>
                                    <?php
                                    if (!empty($this->request->data['VillageSectionBFirstPart'][7]['VillageSectionBFirstPart']['id'])) {
                                        echo $this->Form->input('VillageSectionBFirstPart.7.VillageSectionBFirstPart.id', array('type' => 'hidden'));
                                    }
                                    $options = array('Linear pattern ', 'Rectangular pattern',
                                        'Circular pattern', 'Square pattern', 'Radial pattern',
                                        'Checker board pattern', 'Elongated pattern', 'Fan shaped pattern','Hemleted settlement','Dispersed settlement.');
                                    echo $this->Form->input('VillageSectionBFirstPart.7.VillageSectionBFirstPart.question_no', array('type' => 'hidden', 'value' => 212));
                                    echo $this->Form->input('VillageSectionBFirstPart.7.VillageSectionBFirstPart.question', array('type' => 'hidden', 'value' => 'If rural settlement, what is the type and pattern?'));
                                    echo $this->Form->input('VillageSectionBFirstPart.7.VillageSectionBFirstPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                    echo $this->Form->input('VillageSectionBFirstPart.7.VillageSectionBFirstPart.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
                                    ?>

                                </td>  
                            </tr>
                            <?php
                            $survey_207_211 = array('What is the local name of the settlement unit (village/ para/ punji)?', 'What is the latitude of the center of the settlement unit (village/ para/ punji)?', 'What is the longitude of the center of the settlement unit (village/ para/ punji)?',
                                'What is the altitude (MASL) of the settlement unit (village/ para/ punji)?', 'Comments based on observation (if any)'
                            );
                            ?>

                            <?php for ($i = 0; $i < count($survey_207_211); $i++): ?>
                                <?php
                                $j = $i + 8;
                                if (!empty($this->request->data['VillageSectionBFirstPart'][$j]['VillageSectionBFirstPart']['id'])) {
                                    echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.id', array('type' => 'hidden'));
                                }
                                ?>

                                <tr>
                                    <td><?php echo $i + 213; ?></td>
                                    <td><?php echo $survey_207_211[$i]; ?></td>
                                    <td>
                                        <?php
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.question_no', array('type' => 'hidden', 'value' => $i + 213));
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.question', array('type' => 'hidden', 'value' => $survey_207_211[$i]));
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                        ?>
                                    </td>
                                </tr>
<?php endfor; ?>

                            <tr>
                                <td>218</td>
                                <td>If Urban settlement, what is the type and class of settlement type based on population size?</td>  
                                <td>
                                    <?php
                                    if (!empty($this->request->data['VillageSectionBFirstPart'][13]['VillageSectionBFirstPart']['id'])) {
                                        echo $this->Form->input('VillageSectionBFirstPart.13.VillageSectionBFirstPart.id', array('type' => 'hidden'));
                                    }

                                    $options = array('Town/Class I (Less than 5,000)', 'Town/Class II (5,000 – 9,999)',
                                        'Town/Class III (10,000 – 19,999)', 'Town/Class IV (20,000 – 49,999)',
                                        'Class IV (50,000 – 99,999)', 'City (population between one lakh to one million)',
                                        'Metropolitan City (population in between one million to five million)', 'Mega City (more than 5 million population)'
                                    );

                                    echo $this->Form->input('VillageSectionBFirstPart.13.VillageSectionBFirstPart.question_no', array('type' => 'hidden', 'value' => 218));
                                    echo $this->Form->input('VillageSectionBFirstPart.13.VillageSectionBFirstPart.question', array('type' => 'hidden', 'value' => 'If Urban settlement, what is the type and class of settlement type based on population size?'));
                                    echo $this->Form->input('VillageSectionBFirstPart.13.VillageSectionBFirstPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                    echo $this->Form->input('VillageSectionBFirstPart.13.VillageSectionBFirstPart.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
                                    ?>




                                </td>  
                            </tr>


                            <!-------Gap For Drop DOwn Menu------>

                            <?php
                            $survey_207_211 = array('What is the name of the urban locality (para/ basti/ moholla)?', 'What is the latitude of the center of the urban locality (para/ basti/ moholla)?',
                                'What is the longitude of the center of the urban locality (para/ basti/ moholla)?', 'What is the altitude (MASL) of the urban locality (para/ basti/ moholla)?',
                                'Comments based on observation (if any)'
                            );
                            ?>

                            <?php for ($i = 0; $i < count($survey_207_211); $i++): ?>

                                <?php
                                $j = $i + 14;
                                if (!empty($this->request->data['VillageSectionBFirstPart'][$j]['VillageSectionBFirstPart']['id'])) {
                                    echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.id', array('type' => 'hidden'));
                                }
                                ?>                           	
                                <tr>
                                    <td><?php echo $i + 219; ?></td>
                                    <td><?php echo $survey_207_211[$i]; ?></td>
                                    <td>
                                        <?php
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.question_no', array('type' => 'hidden', 'value' => $i + 219));
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.question', array('type' => 'hidden', 'value' => $survey_207_211[$i]));
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                        echo $this->Form->input('VillageSectionBFirstPart.' . $j . '.VillageSectionBFirstPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                        ?>
                                    </td>
                                </tr>
<?php endfor; ?>

                        </table>

                        <h4>B-3: DEMOGRAPHIC INFORMATION</h4>
                        <table class="table table-bordered table-striped">
                            <?php
                            $array_second = array(
                                'How many households live currently in this primary settlement Unit (village/ punji/ para/ basti/ moholla) center?',
                                'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?',
                                'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?',
                                'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?',
                                'How long ago was the settlement unit (village/ punji/ para/ basti/ moholla) established?'
                            );

                            $options[0] = array(
                                '< 15 HH',
                                '16 HH – 30 HH',
                                '31 HH – 50 HH',
                                '51 HH – 75 HH',
                                '76 HH – 100 HH',
                                '101 HH – 150 HH',
                                '151 HH – 200 HH',
                                '201 HH and Above'
                            );

                            $options[1] = array(
                                '< 15 HH',
                                '16 HH – 30 HH',
                                '31 HH – 50 HH',
                                '51 HH – 75 HH',
                                '76 HH – 100 HH',
                                '101 HH – 150 HH',
                                '151 HH – 200 HH',
                                '201 HH and Above'
                            );

                            $options[2] = array(
                                '01 HH – 10 HH',
                                '11 HH – 20 HH',
                                '21 HH – 30 HH',
                                '31 HH – 40 HH',
                                '41 HH – 50 HH',
                                '51 HH and Above',
                                'No Migration'
                            );

                            $options[3] = array(
                                '01 HH – 10 HH',
                                '11 HH – 20 HH',
                                '21 HH – 30 HH',
                                '31 HH – 40 HH',
                                '41 HH – 50 HH',
                                '51 HH and Above',
                                'No Migration'
                            );

                            $options[4] = array(
                                '00 – 10 Year(s)',
                                '11 – 20 Years',
                                '21 – 30 Years',
                                '31 – 40 Years',
                                '41 – 50 Years',
                                '51 Years or More'
                            );
                            ?>

                            <?php
                            for ($i = 0; $i < count($array_second); $i++):
                                ?>
                                <tr>
                                    <td><?php echo $i + 231; ?></td>
                                    <td><?php echo $array_second[$i]; ?></td>  
                                    <td>
                                        <?php
                                        //$j = $i+20;
                                        if (!empty($this->request->data['VillageSectionBSecondPart'][$i]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.' . $i . '.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        }
                                        echo $this->Form->input('VillageSectionBSecondPart.' . $i . '.VillageSectionBSecondPart.question_no', array('type' => 'hidden', 'value' => $i + 231));
                                        echo $this->Form->input('VillageSectionBSecondPart.' . $i . '.VillageSectionBSecondPart.question', array('type' => 'hidden', 'value' => $array_second[$i]));
                                        echo $this->Form->input('VillageSectionBSecondPart.' . $i . '.VillageSectionBSecondPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                        echo $this->Form->input('VillageSectionBSecondPart.' . $i . '.VillageSectionBSecondPart.answer', array('options' => $options[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            endfor;
                            ?>

                            <?php
                            $array_third = array(
                                'What is the current population of the settlement unit (village/ punji/ para/ basti/ moholla)?',
                                'What was the total population of the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?'
                            );
                            ?>

                            <?php
                            for ($i = 0; $i < count($array_third); $i++):
                                ?>
                                <tr>
                                    <td><?php echo $i + 236; ?></td>
                                    <td><?php echo $array_third[$i]; ?></td>

                                    <?php
                                    //pr($this->request->data); exit;
                                    
                                    if (!empty($this->request->data['VillageSectionBThirdPart'][$i]['VillageSectionBThirdPart']['id'])) {
                                        echo $this->Form->input('VillageSectionBThirdPart.' . $i . '.VillageSectionBThirdPart.id', array('type' => 'hidden'));
                                    }


                                    echo $this->Form->input('VillageSectionBThirdPart.' . $i . '.VillageSectionBThirdPart.question_no', array('type' => 'hidden', 'value' => $i + 236));
                                    echo $this->Form->input('VillageSectionBThirdPart.' . $i . '.VillageSectionBThirdPart.question', array('type' => 'hidden', 'value' => $array_third[$i]));
                                    echo $this->Form->input('VillageSectionBThirdPart.' . $i . '.VillageSectionBThirdPart.village_interview_id', array('type' => 'hidden', 'value' => $village_interview_id));
                                    ?>                                    


                                    <td>Male<?php echo $this->Form->input('VillageSectionBThirdPart.' . $i . '.VillageSectionBThirdPart.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        Female<?php echo $this->Form->input('VillageSectionBThirdPart.' . $i . '.VillageSectionBThirdPart.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?> 
                                        Total<?php echo $this->Form->input('VillageSectionBThirdPart.' . $i . '.VillageSectionBThirdPart.total', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>

                                    </td>
                                </tr>							
                                <?php
                            endfor;
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr></hr>
        <center><button class="btn btn-info">Next>></button></center>
<?php echo $this->Form->end(); ?>        
    </div>
</div>
