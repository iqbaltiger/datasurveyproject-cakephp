<?php echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function () {

        $('#description_produced_crops_1').hide();
        $('#SectionGADescriptionProducedCrops').on('change', function () {
            var selectboxValue = $('#SectionGADescriptionProducedCrops').val();
            if (selectboxValue == 99) {
                $('#description_produced_crops_1').show();

            }
            else {

                $('#description_produced_crops_1').hide();

            }
        });
    })
</script>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Cultural'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <?php echo $this->Form->create('SectionGA', array('class' => '')) ?>
                        <h4>SECTION- G: INCOME SOURCES (FOR LAST 01 YEAR)</h4>
                        <h5>G- 1: Survey of the agricultural income of the household</h5>
                        <h5>
                            Type of Land Use and Production (What kind of crops do you cultivate in which type of land?)  
                        </h5>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th colspan="3">701:  Do members of this household cultivate any land? </th>
                                    
                                     <?php
                                    if (!empty($this->data['Section_GA_Upper_Marker'][0]['SectionGA']['id'])) {
                                        echo $this->Form->input('Section_GA_Upper_Marker.' . 0 . '.SectionGA.id', array('type' => 'hidden'));
                                    }
                                    ?>
                                    <th colspan="3"> <?php echo $this->form->input('Section_GA_Upper_Marker.0.SectionGA.cultivate_anyland',array('type'=>'select','class'=>'form-control','options'=>array('1'=>'Yes','0'=>'No'),'label'=>false,'div'=>false)); ?></th>
<!--                                    <th><strong>Yes</strong></th>
                                    <th colspan="2">No</th>-->
                                </tr>
                                <tr>
                                    <th rowspan="2"><p align="center">Type  of Land </p></th>
                                <th rowspan="2"><strong>Amount  of Owned Land (In Decimal) </strong></th>
                                <th rowspan="2"><strong>Amount  of Land under Cultivation (In Decimal)</strong></th>
                                <th colspan="3"><strong>Main  crop cultivated in last 12 months<em> (Hint: Description of produced crops) </em></strong></th>
                                </tr>
                                <tr>
                                    <th>Main  Crop </th>
                                    <th>Second  main crop</th>
                                    <th>Other Crops</th>
                                </tr>
                                <tr>
                                    <td><b>Type of Land Use</b></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <?php
                                $options = array(
                                    '01' => 'Aush', '02' => 'Aman', '03' => 'Boro', '04' => 'Wheat', '05' => 'Jute',
                                    '06' => 'Mustard', '07' => 'Vegetables', '99' => 'Others (Please specify)'
                                );
                                ?>
                                <!----Type of row Start---->

                                <?php $section_ga_list_upperPart = array('1. Agricultural land', '2. Domestic land (Homestead and yard)', '3. Horticultural land near the household', '4. Herding pasture', '5. Agricultural forest', '6. Fallow land', '7. Other Khas land (C.P.R- Common property)'); ?>

                                <?php for ($i = 0; $i < count($section_ga_list_upperPart); $i++): ?>
                                    <?php
                                    if (!empty($this->data['Section_GA_Upper_Marker'][$i]['SectionGA']['id'])) {
                                        echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.id', array('type' => 'hidden'));
                                    }
                                    ?>
                                    <tr>
                                        <?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.interview_id', array('type' => 'hidden', 'value' => $interview_id)); ?>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.type_of_land', array('type' => 'hidden', 'value' => $section_ga_list_upperPart[$i])); ?><?php echo $section_ga_list_upperPart[$i]; ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.amount_owned_land', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.amount_land_cultivation', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.main_crop', array('type' => 'select','options'=>$options,'empty'=>'(Choose One)','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.second_main_crop', array('type' => 'select','options'=>$options,'empty'=>'(Choose One)','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.other_crops', array('type' => 'select','options'=>$options,'empty'=>'(Choose One)','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                    </tr>

                                <?php endfor; ?>



                                <!-----Total----->

                                <tr>
                                    <td><b>Total owned land
<!--                                            <span>
                                            (1+2+3+4+5+6+7)
                                            </span>-->
                                        </b></td>  
                                    <td colspan="5"></td>
                                </tr>


                                <?php
                                $type_of_land_2 = array(
                                    '7' => '8. Land given for sharecropping (Including 1-6)',
                                    '9. Land taken for sharecropping (Excluding 1-6)', 
                                    '10. Land mortgaged (Including 1-6)',
                                    '11. Land taken on mortgage (Including 1-6)',
                                    '12. Land leased (Including 1-6)', 
                                    '13. Land taken on lease (Excluding 1-6)'
                                );



                                for ($i = 7; $i < count($section_ga_list_upperPart) + count($type_of_land_2); $i++):
                                    ?>
                                
                                 <?php
                                    if (!empty($this->data['Section_GA_Upper_Marker'][$i]['SectionGA']['id'])) {
                                        echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.id', array('type' => 'hidden'));
                                    }
                                    ?>
                                
                                
                                    <tr>
                                        <?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.interview_id', array('type' => 'hidden', 'value' => $interview_id)); ?>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.type_of_land', array('type' => 'hidden', 'value' => $type_of_land_2[$i])); ?><?php echo $type_of_land_2[$i]; ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.amount_owned_land', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.amount_land_cultivation', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.main_crop', array('type' => 'select','options'=>$options,'empty'=>'(Choose One)','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.second_main_crop', array('type' => 'select','options'=>$options,'empty'=>'(Choose One)','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.other_crops', array('type' => 'select','options'=>$options,'empty'=>'(Choose One)','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                    </tr>

                                <?php endfor; ?>

                                <tr>
                                    <td><b>Structure of Farm

                                            [Total land under cultivation]</b>
                                        
<!--                                        <span>= [Total land under cultivation] = {(1+3+4+ 

                                        5+6+7+10+12+14) - (9+11+13)}](To be decided 

                                        based on discussion)
                                        </span>-->
                                        </td>  
                                    <td colspan="5"></td>
                                </tr>
                                

<!--                                <tr>
                                    <td><b>Description of Produced Crops</b></td>  
                                    <td colspan="5">
                                        <?php echo $this->Form->input('description_produced_crops', array('type' => 'select', 'class' => 'form-control', 'options' => $options, 'empty' => 'Please Select One')); ?>  
                                        <?php echo $this->Form->input('14.SectionQuestionAnswerCultural.answer9', array('type' => 'text', 'placeholder' => 'Plesse write here:', 'id' => 'description_produced_crops_1', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>  

                                    </td>
                                </tr>-->


                            </table>
                        </div>  

                        <hr/>
                        <center><button class="btn btn-info">Next>></button>
                        </center>
                        <?php echo $this->Form->end(); ?>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
