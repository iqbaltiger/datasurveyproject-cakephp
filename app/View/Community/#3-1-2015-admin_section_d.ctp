<?php echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function() {

        for(i=0;i<20;i++){
            
            $('#dropdownanswerlistQuestion'+i+'Other').hide();
        }


       
        


        $('#dropdownanswerlistQuestion41Other').hide();
        $('#dropdownanswerlistQuestion401').on('change', function() {
            var selectboxValue = $('#dropdownanswerlistQuestion401').val();
            if (selectboxValue == 99) {
                $('#dropdownanswerlistQuestion41Other').show();

            }
            else {

                $('#dropdownanswerlistQuestion41Other').hide();

            }
        });
        
        
        
        
    })
</script>

<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Community'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <h4>SECTION – D: ECONOMIC ACTIVITY</h4>
                        <h5>D-1: MODE OF SUBSISTENCE</h5>

                        <?php
                        $drop_text_401 = array(
                            'Extensive agriculture contributes most', 'Intensive agriculture contributes most', 'Casual agriculture contributes most',
                            'Extensive shifting agriculture contributes most', 'Horticulture contributes most', 'Fishing contributes most',
                            'Gathering contributes most (Forest dependent)', 'Handicrafts contribute most', 'Service or labor selling contribute most',
                            'Two or more sources contribute equally','99'=>'Others- (Please specify below)'
                        );
                        ?>
                        
                        <?php 
                        
                        $drop_box_403 = array(
                             
                               'Casual agriculture, incidental to other subsistence modes','Extensive or shifting agriculture, long fallow, and new fields cleared annually',
                              'Horticulture, vegetal gardens or groves of fruit trees','Intensive agriculture, using fertilization, crop rotation, or other techniques to shorten or eliminate fallow period',
                             'Intensive irrigated agriculture','99'=>'Others- (Please specify below)'
                        ); 
                        
                        $week_list = array(
                            'First Week','Second Week','Third Week','Fourth Week'
                            
                        );
                        
                        $year_list  = array(
                            
                            'January','February','March','April','May','June','July','August','September','October','November','December'
                        );
                        
                        ?> 
                        
                        <?php echo $this->Form->create('CommunitySectionD',array('class'=>'')) ?>
                        
                        
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td>401</td> 
                                    <td>What is the mode of subsistence economy? </td> 
                                    <?php
                                    
                                   // pr($this->data); exit;
                                    
                                    if (!empty($this->data['dropdownanswerlist']['CommSectionDDropdown']['id'])) {
                                        echo $this->Form->input('dropdownanswerlist.CommSectionDDropdown.id', array('type' => 'hidden'));
                                    }
                                    
                                  echo $this->form->input('dropdownanswerlist.CommSectionDDropdown.interview_id',array('type'=>'hidden','value'=>$interview_id));
                                    
                                    ?>
                                    
                                    <td>
                                        <?php echo $this->form->input('dropdownanswerlist.CommSectionDDropdown.question_401', array('options' => $drop_text_401, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)) ?>  
                                        <?php echo $this->form->input('dropdownanswerlist.CommSectionDDropdown.question_41_other', array('type' =>'text', 'class' => 'form-control','label' => false,'style'=>'margin-top:3px;')) ?>  
                                    </td> 
                                </tr>
                            </tbody>
                        </table>

                        <?php
                        
                           $depedence_list = array('0 - 5%','6 - 15%','16 - 25%','36 - 45%','46 - 55%','56 - 65%','66 - 75%','76 - 85%','86 - 100%');

                           $code_list  = array('01','02','02','02','02','02','02','02','02');
                           
                           $table_field_name = array('agriculture','service_labor_selling','handicrafts','horticulture','fishing_animal');
                           
                           $table_row_values = array('Agriculture','Service or Labor Selling','Handicrafts','Horticulture','Fishing & Animal Husbandry');
                        ?>
                        
                        
                        
                        <table class="table table-bordered table-striped">
                            <thead> 
                            <th>&nbsp;</th>
                            <th>Code</th>
                            <th>Dependence</th>
                            <th>Agriculture</th>
                            <th>Service or Labor Selling</th>
                            <th>Handicrafts</th>
                            <th>Horticulture</th>
                            <th>Fishing & Animal Husbandry</th>
                            </thead>

                            <tbody>
                                
                                <tr>
                                    
                                  <th rowspan="10">402</th>   
                                </tr>
                                
                                <?php for($j=0;$j<count($code_list);$j++): ?> 
                                
                                  <?php
                               
  
      if(!empty($this->data['SectionD402'][$j]['ComSectionD402']['id'])){
                                     echo $this->Form->input('SectionD402.'.$j.'.ComSectionD402.id',array('type'=>'hidden')); 
                                        }
  
  ?>
                                
                               <?php echo $this->form->input('SectionD402.'.$j.'.ComSectionD402.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                
                                <tr>
                                    <td><?php echo $this->form->input('SectionD402.'.$j.'.ComSectionD402.code',array('type'=>'hidden','value'=>$code_list[$j])); ?><?php echo $code_list[$j]; ?></td>
                                    <td><?php echo $this->form->input('SectionD402.'.$j.'.ComSectionD402.dependencies',array('type'=>'hidden','value'=>$code_list[$j])); ?><?php echo $depedence_list[$j]; ?></td>
                                    <?php for($i=0;$i<5;$i++): ?>
                                    <td><?php
                                        echo $this->form->input('SectionD402.'.$j.'.ComSectionD402.'.$table_field_name[$i], array(
                                            'label' => false,
//                                            'name'=>$table_field_name[$i],
                                            'value'=>$table_row_values[$i],
                                            'type' => 'checkbox','div' => false
                                        ));
                                        ?></td>
                                   <?php endfor; ?> 
                                    
                                    
                                </tr>
                                 
                                <?php endfor; ?> 
                                
                                <tr>
                                    <td>403</td> 
                                    <td>What is the intensity of agriculture practice by the community?</td>
                                    <td colspan="8">
                                      <?php foreach($drop_box_403 as $key=>$value): ?>  
                                        <?php
                                        echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                              'id'=>'403'.'_'.$key,
                                            'class'=>'click_checkbox',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                        
                                        
                                        
                                      <?php endforeach; ?>  
                                        
                                        <p id="test"></p>
                                        <?php echo $this->form->input('question_403_other',array('type'=>'text','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Please Type Here:')); ?>
                                        
                                    </td>
                                    
                                </tr>
                                
                                <?php $two_drop_down_row = array(
                                       'What is the predominant type of animal husbandry? ','What are the major crop type produced by the community?'
                                    
                                ); 
                                
                                  $drop_text_two_row[0] = array(
                                      'Absence or near absence of large domestic animals','Pigs the only large domestic animals','Sheep and/or goats without larger domestic animals',
                                      'Equine animals (horses, donkeys)','Deer (reindeer)','Bovine animals (Cattle, Goyal, Water Buffalo, Yaks)',
                                     '99'=>'Others- (Please specify below)'
                                      
                                  );
                                  
                                   $drop_text_two_row[1] = array(
                                       'None or none specified','Non-food crops only, such as cotton or tobacco ','Vegetables',
                                       'Tree fruits','Roots or tubers','Cereal grains',
                                      '99'=>'Others- (Please specify below)'
                                       
                                   );
                                
                                
                                ?>
                                
                                
                                   
                                  <?php for($i=0;$i<count($two_drop_down_row);$i++): ?>
                                    <?php
                                    if (!empty($this->data[$i]['CommSectionDDropdown']['id'])) {
                                        echo $this->Form->input($i.'.CommSectionDDropdown.id', array('type' => 'hidden'));
                                    }
                                    ?>
                                
                                
                                   <tr> 
                                     <td><?php echo $i+404; ?></td>
                                    <td><?php echo $two_drop_down_row[$i];?></td>
                                    <td colspan="8">
                                      <?php echo $this->form->input('dropdownanswerlist.CommSectionDDropdown.question_'.$i,array('type'=>'select','options'=>$drop_text_two_row[$i],'div'=>false,'class'=>'form-control','label'=>false)); ?>  
                                      <?php echo $this->form->input('dropdownanswerlist.CommSectionDDropdown.question_'.$i.'_other', array('type' =>'text', 'class' => 'form-control','label' => false,'style'=>'margin-top:3px;')) ?>    
                                    </td>
                                    </tr>
                                    
                                    <script>
                                        $('#dropdownanswerlistQuestion'+<?php echo $i; ?>).change(function () {
                                          
                                     
                                                var selectboxValue = $('#dropdownanswerlistQuestion'+'<?php echo $i; ?>').val();
                                                if (selectboxValue == 99) {
                                                    $('#dropdownanswerlistQuestion'+<?php echo $i?>+'Other').show();
                                                }
                                                
                                                else{
                                                    
                                                      $('#dropdownanswerlistQuestion'+<?php echo $i?>+'Other').hide();
                                                }
            })
            
       
        
        
                            </script>
                                    
                                    
                                    
                                  <?php endfor; ?>  
                                   
                                  <?php
                                  
                                    $multiple_drop_box_row = array(
                                        
                                        'What are the major Cereals grains produced by the community?','What are the major Fruits produced by the community? ',
                                        'What are the major Vegetables by the community?','What are the major Pulses produced by the community?',
                                        'What are the major Pulses produced by the community?','What are the other cash crops produced by the community?'
                                    );
                                    
                                    $multiple_drop_box_406 = array(
                                        'Rice','Maize','Wheat','Millet','Kaon','Others- (Please specify below)'
                                        
                                    );
                                    
                                    $multiple_drop_box_407 = array(
                                        'Mango (Aam)','Banana (Kola)','Papaya (Pepe)','Orange (Komola)','Watermelon (Tormuj)','Coconut (Narikel)',
                                        'Jackfruit (Kathal)','Lichie(Lichu)','Berries (Jaam)','Lemon (Lebu','Olive (Jolpai)','Guava (Peyara)',
                                        'Tamarind (Tetul)','Coconut (Narikel)','Indian plum (Boroi)','Hog plum (Amra)','Rose apple (Jamrul)',
                                        'Wood apple (Bel/Kot-bel)','Ice apple (Tal)','Custard apple (Ata)','Indian gooseberry (Amloki)','Grapefruit (Jambura)',
                                        'Sapodilla (Shofeda)','Pomegranate (Dalim','Fig (Dumur)','Starfruit (Kamranga)'
                                    );
                                    
//                                    $multiple_drop_box_408 = array(
//                                        'Pumpkin','Bitter gourd','Bottle gourd','Cucumber','Tomato','Snake gourd','Red amaranth','Green amaranth',
//                                        'Spinach','Cabbage','Mustard','Potato','Pointed gourd','Ash gourd','Bamboo shoot','Coriander leaves',
//                                        'Drumstick leaves','Jute leaves','Carrot','Radish','Turnip','Eggplant','Okra','Cauliflower','Others- (Please specify below)'
//                                        
//                                    );
                                    
                                    $multiple_drop_box_408 = array(
                                        'Pumpkin (Kumra)','Bitter gourd (Korola)','Bottle gourd (Lau)','Cucumber (Shosha)','Tomato','Snake gourd (Chichinga)',
                                        'Red amaranth (Laal shak)','Green amaranth (Note shak)','Spinach (Palong shak)','Cabbage (Badhakopi)',
                                        'Mustard (Shorisha)','Potato (Aalu)','Pointed gourd (Potol)','Ash gourd (Chalkumra)','Bamboo shoot (Basher ongkur)',
                                        'Coriander leaves (Dhone pata)','Drumstick leaves (Shojne data/ pata)','Jute leaves (Paat shak)','Carrot (Gajor)',
                                        'Radish (Mulo)','Turnip (Olkopi)','Eggplant (Begun)','Okra (Dharosh)','Cauliflower (Fulkopi)',
                                        'Chinese okra (Jhinge)','Cluster beans (Borboti)','Horseradish (Shojina)','Plantain flower (Kolar mocha)','Onion (Peyaj)','Garlic(Rosun)','Ginger(Ada)',
                                        
                                        
                                    );
                                    
                                    $multiple_drop_box_409 = array(
                                        'Split beans','Chickpea','Pigeon pea','Black eyed pea','Red lentils','Mung bean','Sesame','Peas',
                                        'Others- (Please specify below)'
                                        
                                    );
                                    
                                    $multiple_drop_box_410 = array(
                                        
                                        'Cotton (Tula)','Tobacco (Tamak)','Mustard (Shorisha)','Sugarcane (Akh)','Jute (Paat)','Bamboo (Bash)',
                                        'Turmeric (Holud)','Jinzer (Ada)','Onion (Peyaj)','Flowers (Ful)','Others- (Please specify below)'
                                    );
                                  ?>  
                                    
                                     <tr>
                                    <td>406</td> 
                                    <td>What are the major Cereals grains produced by the community? </td>
                                    <td colspan="8">
                                      <?php foreach($multiple_drop_box_406 as $key=>$value): ?>  
                                        <?php
                                        echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                        
                                        <?php echo $this->form->input('question_406_other',array('type'=>'text','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Please Type Here:')); ?>
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>407</td>  
                                    <td>What are the major Fruits produced by the community? </td>  
                                     
                                    <td colspan="8">    
                                        <?php  sort($multiple_drop_box_407); array_push($multiple_drop_box_407,'Others- (Please specify below)');  foreach($multiple_drop_box_407 as $key=>$value): ?>  
                                        <?php echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                       <?php echo $this->form->input('question_407_other',array('type'=>'text','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Please Type Here:')); ?>  
                                        
                                    </td>    
                                 </tr>
                                 
                                 <tr>
                                    <td>408</td>  
                                    <td>What are the major Vegetables  produced by the community? </td>  
                                     
                                    <td colspan="8">    
                                        <?php  sort($multiple_drop_box_408); array_push($multiple_drop_box_408,'Others- (Please specify below)'); foreach($multiple_drop_box_408 as $key=>$value): ?>  
                                        <?php echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                        
                                        <?php echo $this->form->input('question_408_other',array('type'=>'text','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Please Type Here:')); ?>   
                                    </td>    
                                 </tr>
                                 
                                 <tr>
                                    <td>409</td>  
                                    <td>What are the major Pulses produced by the community?  </td>  
                                     
                                    <td colspan="8">    
                                        <?php foreach($multiple_drop_box_409 as $key=>$value): ?>  
                                        <?php echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                        <?php echo $this->form->input('question_409_other',array('type'=>'text','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Please Type Here:')); ?>   
                                    </td>    
                                 </tr>
                                 
                                  <tr>
                                    <td>410</td>  
                                    <td>What are the other cash crops produced by the community?  </td>  
                                     
                                    <td colspan="8">    
                                        <?php foreach($multiple_drop_box_410 as $key=>$value): ?>  
                                        <?php echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'value'=>$value,
                                            'id'=>$value.'410',
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                        
                                        <?php echo $this->form->input('question_410_other',array('type'=>'text','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Please Type Here:')); ?>   
                                    </td>    
                                 </tr>
                                 
                                 <tr>
                                     <td>411</td>
                                     <td colspan="6">Prepare a Seasonal Calendar for Major Crops </td>
                                 </tr>
                                
                                
                            </tbody>
                        </table>
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>Name of Crop</th>
                                <th colspan="2">Beginning of Soil Preparation</th>
                                <th colspan="2">Beginning of Planting, Weeding & Irrigation</th>
                                <th colspan="2">Beginning of Harvesting& Processing </th>
                                <th colspan="2">Beginning of Storage& Marketing</th>
                            </thead>
                            <tbody>
                                
                                <?php for($i=0;$i<12;$i++): ?>
                               <tr>
                                <td> <?php echo $this -> Form -> input($i.'.SectionQuestionAnswerCultural.answer', array('type' => 'text','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                <td><?php echo $this->Form->input('weekly',array('type'=>'select','options'=>$week_list,'div'=>false,'label'=>false,'class'=>'form-control','empty'=>'select week')) ?></td>
                                <td><?php echo $this->Form->input('weekly',array('type'=>'select','options'=>$year_list,'div'=>false,'label'=>false,'class'=>'form-control','empty'=>'Select Month')) ?></td>
                                <td><?php echo $this->Form->input('weekly',array('type'=>'select','options'=>$week_list,'div'=>false,'label'=>false,'class'=>'form-control','empty'=>'select week')) ?></td>
                                <td><?php echo $this->Form->input('weekly',array('type'=>'select','options'=>$year_list,'div'=>false,'label'=>false,'class'=>'form-control','empty'=>'Select Month')) ?></td>
                                <td><?php echo $this->Form->input('weekly',array('type'=>'select','options'=>$week_list,'div'=>false,'label'=>false,'class'=>'form-control','empty'=>'select week')) ?></td>
                                <td><?php echo $this->Form->input('weekly',array('type'=>'select','options'=>$year_list,'div'=>false,'label'=>false,'class'=>'form-control','empty'=>'Select Month')) ?></td>
                                <td><?php echo $this->Form->input('weekly',array('type'=>'select','options'=>$week_list,'div'=>false,'label'=>false,'class'=>'form-control','empty'=>'select week')) ?></td>
                                <td><?php echo $this->Form->input('weekly',array('type'=>'select','options'=>$year_list,'div'=>false,'label'=>false,'class'=>'form-control','empty'=>'Select Month')) ?></td>
                               </tr>
                               <?php endfor; ?>
                               
                            </tbody>
                        </table>
                        
                        <h4>D- 02: GENDER ROLE AND DIVISION OF LABOR</h4>
                        
                        <?php
                        
                          $drop_down_list = array(
                              'Males only or almost alone','Males appreciably more','Differentiated but equal participation','Equal participation, no marked differentiation',
                              'Females appreciably more','Females only or almost alone','Activity present: Sex participation unspecified','Task Absent or unimportant activity '
                              
                          );
                          
                          $drop_down_list_children = array(
                              'Boys (< 14 years) only or almost alone','boys (< 14 years) appreciably more','Differentiated but equal participation',
                              'Equal participation, no marked differentiation ','Girls (< 14 years) appreciably more','Girls (< 14 years) only or almost alone',
                              'Activity present: Sex participation unspecified','Task Absent or unimportant activity '
                          );
                          
                          $productive_work = array(
                              '1. Agriculture for consumption and trade','2. Capture fishing','3. Culture fishing',
                              '4. Weaving Fabrics for Market','5. Homestead gardening','6. Collection and gathering of forest products',
                              '7. Animal Husbandry','8.	Take care of Poultry','9. Prepare and store seeds for cultivation',
                              '10. Honey','11. Trapping','12. Hunting','13. Pottery Making','14. Matmaking','15. Netmaking',
                              '16. Basketmaking','17. Rope or cordage','18. Wood Works','19. Metal Works','20. Musical Instruments'
                              
                              
                          );
                          
                          $food_preparation = array(
                              
                              '1. Food Preparation and Cooking','2. Preservation of Food Items','3. Preparation of Liquor',
                              '4. Preparation of Rice Beer','5.	Collect/ fetch water for domestic use','6. Collect fuel (firewood & biomass energy)',
                              '7. Go to market '
                          );
                          
                          $reproductive_work = array(
                              
                              '1. Care & maintenance of household members','2. Care for children','3. Clean house & clothes',
                              '4. Take care of sick person','5.	House Construction, repair and maintenance','6.	Weaving Fabrics for domestic use'
                          );
                          
                          $community_work = array(
                              '1. Collective organization of social events','2.	Community Development Programmes','3. Member of NGO Credit groups',
                              '4. Voluntary Association/ Clubs','5. School Committee'
                          );
                        
                        ?>
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                              <th></th>
                              <th>ROLE</th>
                              <th>Adult (15 +)
                              </th>
                              <th>Children (<14)</th>
                            </thead>
                            
                            <tbody>
                                <tr><td colspan="6"><b>PRODUCTIVE WORK</b></td></tr>
                                <?php for($i=0;$i<count($productive_work);$i++): ?>
                                <tr>
                                    <td>&nbsp;</td>
                                 <td><?php echo $productive_work[$i]; ?></td>
                                 <td><?php echo $this->form->input('drop_list',array('type'=>'select','options'=>$drop_down_list,'label'=>false,'div'=>true,'class'=>'form-control')); ?></td>
                                 <td><?php echo $this->form->input('drop_list',array('type'=>'select','options'=>$drop_down_list_children,'label'=>false,'div'=>true,'class'=>'form-control')); ?></td>
                                </tr> 
                                <?php endfor; ?>
                                
                                 <tr><td colspan="6"><b>FOOD PREPARATION</b></td></tr>
                                <?php for($i=0;$i<count($food_preparation);$i++): ?>
                                <tr>
                                    <td>&nbsp;</td>
                                 <td><?php echo $food_preparation[$i]; ?></td>
                                 <td><?php echo $this->form->input('drop_list',array('type'=>'select','options'=>$drop_down_list,'label'=>false,'div'=>true,'class'=>'form-control')); ?></td>
                                 <td><?php echo $this->form->input('drop_list',array('type'=>'select','options'=>$drop_down_list_children,'label'=>false,'div'=>true,'class'=>'form-control')); ?></td>
                                </tr> 
                                <?php endfor; ?>
                                
                                 <tr><td colspan="6"><b>REPRODUCTIVE WORK</b></td></tr>
                                <?php for($i=0;$i<count($reproductive_work);$i++): ?>
                                <tr>
                                    <td>&nbsp;</td>
                                 <td><?php echo $reproductive_work[$i]; ?></td>
                                 <td><?php echo $this->form->input('drop_list',array('type'=>'select','options'=>$drop_down_list,'label'=>false,'div'=>true,'class'=>'form-control')); ?></td>
                                 <td><?php echo $this->form->input('drop_list',array('type'=>'select','options'=>$drop_down_list_children,'label'=>false,'div'=>true,'class'=>'form-control')); ?></td>
                                </tr> 
                                <?php endfor; ?>
                                
                                 <tr><td colspan="6"><b>COMMUNITY WORK</b></td></tr>
                                <?php for($i=0;$i<count($community_work);$i++): ?>
                                <tr>
                                    <td>&nbsp;</td>
                                 <td><?php echo $community_work[$i]; ?></td>
                                 <td><?php echo $this->form->input('drop_list',array('type'=>'select','options'=>$drop_down_list,'label'=>false,'div'=>true,'class'=>'form-control')); ?></td>
                                 <td><?php echo $this->form->input('drop_list',array('type'=>'select','options'=>$drop_down_list_children,'label'=>false,'div'=>true,'class'=>'form-control')); ?></td>
                                </tr> 
                                <?php endfor; ?>
                            </tbody>
                        </table>
                        
                          <hr/>              
                    <center><button class="btn btn-info">Submit</button></center>
                       <?php echo $this -> Form -> end(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    