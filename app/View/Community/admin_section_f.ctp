<?php

echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function () {

        for (i = 0; i <40; i++) {
            $('#' + i + 'answer_other').hide();

        } })
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
                        <h4>SECTION – F: POLITICAL ORGANIZATION</h4>
                        <h5><b>F-1: ADMINISTRATIVE HIERARCHY</b></h5>
                        
                        <?php $f1_administrative_hierarchy = 
                                array(
                                       'What are the types of <b>Jurisdictional Hierarchy</b> within and beyond local community?',
                                    'What is the type of <b>Administrative Hierarchy</b> in the ethnic specific political system? '
                            
                                   ); 
                        
                               $ans_f1[0] = array(
                                   'No level (no political authority beyond community)','One level (e.g. Village, para, hamlet i.e. co-residential level)',
                                   'Two levels (e.g., Union or Mouza level)','Three levels (e.g., District or Upazilla  i.e. Regional level)',
                                   'Four levels (e.g., Division  i.e. Larger regional level)','99'=>'Others- (Please specify below)'
                                   
                               );
                               
                               $ans_f1[1] = array(
                                   
                                   'Absent','Popular Assemblies','Heads of decentralized territorial divisions (Union, Mouza, Upazilla, District etc.)',
                                   'Heads of centralized territorial divisions (Union, Mouza, Upazilla, District etc.)','Part of centralized system',
                                  '99'=>'Others- (Please specify below)'
                               );
                               
                              
                        ?>
                        <?php echo $this->Form->create('CommSectionF');?>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                
                                <?php for($i=0;$i<count($f1_administrative_hierarchy);$i++): ?>
                                	
                                	
                                   <?php
                                        if (!empty($this->data['CommSectionF'][$i]['CommSectionF']['id'])) {
                                            echo $this->Form->input('CommSectionF.'.$i . '.CommSectionF.id', array('type' => 'hidden'));
                                        }
              						?> 	                                	
                                	
                                <tr>
                                    <td><?php echo $i+601;?></td>  
                                    <td><?php echo $f1_administrative_hierarchy[$i]; ?></td>
                                    <td>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.question_no', array('value' =>$i+601,'type'=>'hidden')); ?>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.question', array('value' =>$f1_administrative_hierarchy[$i],'type'=>'hidden')); ?>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.personal_information_id', array('value' =>$pid,'type'=>'hidden')); ?>
                                        <?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.answer', array('options' =>$ans_f1[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php echo $this -> Form -> input('CommSectionF.'.$i.'.CommSectionF.answer_other', array('type' => 'text','id'=>$i.'answer_other','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                     </td>
                                </tr> 
                                
                                <script>
                                    
                                  $('#CommSectionF'+<?php echo $i; ?>+'CommSectionFAnswer').change(function () {
                            
                                            var selectboxValue = $('#CommSectionF'+<?php echo $i; ?>+'CommSectionFAnswer').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $i; ?>+'answer_other').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $i; ?>+'answer_other').hide();
                                            }
        })
                            </script>
                                <?php
                                  
                                   endfor;
                                
                                ?>
                            </tbody>
                        </table>
                     
                        <h4>F-02: SUCCESSION</h4>
                        
                        <?php 
                        
                          $succession_row_list = array(
                             '2'=>'What is the Succession to the Office of Local Village head? (Lowest Level Co-residential Unit)',
                              'What is the <b>Type of Hereditary Succession</b> to the Office of Local Village head? (Lowest Level Co-residential Unit)',
                              'What is the Succession to the Office of the Mouza Head/ Headman? (Secondary Level Unit)',
                              'What is the <b>Type of Hereditary Succession</b> to the Office of the Union/ Pargana/ Mouza Head/ Headman? (Secondary Level Unit'
                          );
                          
                        
                          
                          $succession_answer[2] = array(
                              'Patrilineal heir','Matrilineal heir','Appointment by higher authority, nonhereditary','Seniority or age, nonhereditary',
                              'Influence, wealth or social status, nonhereditary','Election or other formal consensus, nonhereditary',
                              'Informal consensus, nonhereditary','Absence of any such office','99'=>'Others- (Please specify below)'
                              
                          );
                          
                          $succession_answer[] = array(
                              
                              'Hereditary by son (patrilineal)','Hereditary by other patrilineal heir (e.g., younger brother)',
                              'Hereditary by a sister’s son (matrilineal)','Hereditary by other matrilineal heir (e.g., younger brother)',
                              'Nonhereditary','Absence of any such office','99'=>'Others- (Please specify below)'
                          );
                          
                          $succession_answer[] = array(
                              'Patrilineal heir','Matrilineal heir','Appointment by higher authority, nonhereditary',
                              'Seniority or age, nonhereditary','Influence, wealth or social status, nonhereditary','Election or other formal consensus, nonhereditary',
                              'Informal consensus, nonhereditary','Absence of any such office','99'=>'Others- (Please specify below)'
                          );
                          
                          $succession_answer[] = array(
                              
                              'Hereditary by son (patrilineal)','Hereditary by other patrilineal heir (e.g., younger brother)',
                              'Hereditary by a sister’s son (matrilineal)','Hereditary by other matrilineal heir (e.g., younger brother)',
                              'Nonhereditary','Absence of any such office','99'=>'Others- (Please specify below)'
                          );
                          
                          
                          
                        ?>
                         <table class="table table-bordered table-striped">
                            <tbody>
                                
                                <?php for($i=2;$i<2+count($succession_row_list);$i++): ?>
                                	
                                    <?php
                                        if (!empty($this->data['CommSectionF'][$i]['CommSectionF']['id'])) {
                                            echo $this->Form->input('CommSectionF.'.$i . '.CommSectionF.id', array('type' => 'hidden'));
                                        }
              						?> 	                               	
                                	
                                <tr>
                                    <td><?php echo $i+609;?></td>  
                                    <td><?php echo $succession_row_list[$i]; ?></td>
                                    <td>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.question_no', array('value' =>$i+609,'type'=>'hidden')); ?>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.question', array('value' =>$succession_row_list[$i],'type'=>'hidden')); ?>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.personal_information_id', array('value' =>$pid,'type'=>'hidden')); ?>
                                        <?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.answer', array('options' =>$succession_answer[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php echo $this -> Form -> input('CommSectionF.'.$i.'.CommSectionF.answer_other', array('type' => 'text','id'=>$i.'answer_other','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                     </td>                                    
                                    
                                    
                                    
                                    <!---<td>
                                        <?php 
                                        echo $this ->Form ->input($i.'.SectionQuestionAnswerF.answer_list', array('options' =>$succession_answer[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>                               
 										<?php echo $this -> Form -> input($i.'.SectionQuestionAnswerF.answer', array('type' => 'text','id'=>$i.'answer_other','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    </td>---->
                                </tr> 
                                
                                <script>
                                    
                                  $('#CommSectionF'+<?php echo $i; ?>+'CommSectionFAnswer').change(function () {
                            
                                            var selectboxValue = $('#'+<?php echo $i; ?>+'CommSectionFAnswer').val();
                                            if (selectboxValue == 99) {
                                                $('#CommSectionF'+<?php echo $i; ?>+'answer_other').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $i; ?>+'answer_other').hide();
                                            }
        })
                            </script>
                                <?php
                                  
                                   endfor;
                                
                                ?>
                            </tbody>
                        </table>
                          
                        <h4>F-03: LEADER AND LEADERSHIP</h4> 
                        <?php
                        
                          $leader_and_leadership = array(
                              '6'=>'Political Role Differentiation: Full Time Specialists and their Differentiation from Others in the Society',
                              'Political and Religious Differentiation','Perceptions of Political Leaders Benevolence as seen by Society',
                              'Removal of Leaders who are incompetent or disliked','Decision Making Bodies: How most decisions are made',
                              'Political Participation: Range of Community Decision Making, which may be of a formal or informal nature',
                              'Conflict (Social or Political) in the Local Community','Dominant Mode of Conflict Management in Local Community (Lowest Level Co-residential Unit)',
                              'Dominant Mode of Conflict Management in Local Community (Secondary Level regional Unit)','Conflict (Social or Political) between members of different indigenous ethnic groups',
                              'Dominant Mode of Conflict Management between members of different indigenous ethnic groups.','Formal Sanctions and Enforcement Specialists for Community Decisions (e.g., Police)',
                              'Conflict (Social or Political) between members of indigenous ethnic groups and Majority (Bangali) People',
                              'Dominant Mode of Conflict Management between members of indigenous ethnic groups and Majority (Bangali) Ethnic group','Attitude towards the members of other indigenous ethnic groups',
                              'Attitude towards the members of Majority (Bangali) Ethnic Group','Contact with the members of other indigenous ethnic groups',
                              'Contact with the members of Majority (Bangali) Ethnic Group','Female Participation in Public Political Arenas, Relative to Males'
                              
                          );
                          
                          $leadership_drop_text[6] = array(
                              'Highly differentiated by wealth, special titles or life style','Moderately differentiated','Somewhat wealthier but share much of life style by age, gender',
                              'Same life style, may be older and have somewhat more prestige','Few exist but leadership roles present, wealthier than others','Few exist but leadership roles present, same life style',
                              'None exist, no permanent leadership roles','99'=>'Others- (Please specify below)'
                          );
                          
                          $leadership_drop_text[] = array(
                              'Considerable overlap between political and religious leaders','Some overlap','Distinct',
                              '99'=>'Others- (Please specify below)'
                          );
                          
                          $leadership_drop_text[] = array(
                              'Capricious and arbitrary, power used to further own interests','Neither particularly malevolent nor benevolent in use of power',
                              'Basically benevolent, working in interest of entire community','99'=>'Others- (Please specify below)'
                          );
                          
                          $leadership_drop_text[] = array(
                              'No way other than rebellion or popular uprisings','Institutionalized means invoked occasionally, possibly by elites',
                              'Institutionalized means invoked occasionally, possibly by elites','Not removed in formal manner but lose influence and are ignored',
                              'No formal leadership, loss of power when support diminishes','99'=>'Others- (Please specify below)'
                          );
                          
                          $leadership_drop_text[] = array(
                              'Individual(s), perhaps with advice of few advisors','Individual(s), working with an elite council','Individual(s), working with a broad based council',
                              'Broad based community council','Few explicit decisions, some made by community at large','99'=>'Others- (Please specify below)'
                          );
                          
                          $leadership_drop_text[] = array(
                              "Collective decisions impinge on many aspects of people's lives",'Collective decisions impinge on a moderate number of areas',
                              "Collective decisions impinge on few aspects of people's lives","Minimal collective decisions which impinge on people's lives",
                              '99'=>'Others- (Please specify below)'
                          );
                          
                          $leadership_drop_text[] = array(
                              'Endemic: a reality of daily existence (e.g., physical violence, feuding, bitter factionalism)','High: Conflict present but not a pervasive aspect of daily life',
                              'Moderate: Disagreements and differences do not result in high violence or severe disruption','Mild or rare','99'=>'Others- (Please specify below)'
                          );
                          
                           $leadership_drop_text[] = array(
                               'Conflicting parties encouraged to find a solution on their own','Pressures for resolving disputes using informal mechanisms',
                               'Village Court','Union Parishod/ Local Government','Resolved by Traditional Leadership','Authorities often get involved and work to achieve a settlement',
                               'Physical Force in settling disputes by Police or institutionalized force/ Court','99'=>'Others- (Please specify below)'
                           );
                           
                           $leadership_drop_text[] = array(
                               'Conflicting parties encouraged to find a solution on their own','Pressures for resolving disputes using informal mechanisms',
                               'Village Court','Union Parishod/ Local Government Institution','Resolved by Traditional Leadership','Authorities often get involved and work to achieve a settlement',
                               'Physical Force in settling disputes by Police or institutionalized force','99'=>'Others- (Please specify below)'
                           );
                           
                           $leadership_drop_text[] = array(
                               'Endemic: a reality of daily existence (e.g., physical violence, feuding, bitter factionalism)','High: Conflict present but not a pervasive aspect of daily life',
                               'Moderate: Disagreements and differences do not result in high violence or severe disruption','Mild or rare','99'=>'Others- (Please specify below)'
                           );
                           
                           $leadership_drop_text[] = array(
                               
                              'Conflicting parties encouraged to find a solution on their own','Pressures for resolving disputes using informal mechanisms',
                               'Village Court','Union Parishod/ Local Government Institution','Resolved by Traditional Leadership','Authorities often get involved and work to achieve a settlement',
                               'Physical Force in settling disputes by Police or institutionalized force','99'=>'Others- (Please specify below)'
                           );
                           
                           $leadership_drop_text[] = array(
                               'Present','Not specialized but done by leaders who do other things as well','Absent, or carried out by social pressure of wider community',
                              '99'=>'Others- (Please specify below)'
                           );
                           
                           $leadership_drop_text[] = array(
                               'Majority (Bangali) People absent in the neighborhood','Endemic: a reality of daily existence (e.g., physical violence, feuding, bitter factionalism)',
                               'High: Conflict present but not a pervasive aspect of daily life','Moderate: Disagreements and differences do not result in high violence or severe disruption',
                               'Mild or rare','99'=>'Others- (Please specify below)'
                           );
                           
                           $leadership_drop_text[] = array(
                               'Majority (Bangali) People absent in the neighborhood','Conflicting parties encouraged to find a solution on their own',
                               'Pressures for resolving disputes using informal mechanisms','Village Court','Union Parishod/ Local Government',
                               'Resolved by Traditional Leadership','Authorities often get involved and work to achieve a settlement',
                               'Physical Force in settling disputes by Police or institutionalized force','99'=>'Others- (Please specify below)'
                           );
                           
                           $leadership_drop_text[] = array(
                               'Hostile attitude or Extensive Hostility: bitter feelings toward almost all outsiders','High Hostility: bitter feelings toward outsiders, but not always',
                               'Moderate Hostility: sometimes bitter feelings, but much differentiation','Low: little hostility toward outsiders','99'=>'Others- (Please specify below)'
                           );
                           
                           $leadership_drop_text[] = array(
                               'Majority (Bangali) People absent in the neighborhood','Hostile attitude or Extensive Hostility: bitter feelings toward almost all outsiders',
                               'High Hostility: bitter feelings toward outsiders, but not always','Moderate Hostility: sometimes bitter feelings, but much differentiation',
                               'Low: little hostility toward Majority (Bangali) Ethnic Group','Friendly Attitude toward Majority (Bangali) Ethnic Group',
                               '99'=>'Others- (Please specify below)'
                           );
                           
                            $leadership_drop_text[] = array(
                                'Frequent & free social interaction in all spheres of life, i.e. economic & marital exchange, ritual participation etc.','Moderate or Friendly social interaction, i.e. economic exchange & ritual participation exist but marital exchange is prohibited.',
                                'Restricted Social interactions Limited to economic relations through trade & employment','99'=>'Others- (Please specify below)'
                            );
                            
                            $leadership_drop_text[] = array(
                                'Frequent & free social interaction in all spheres of life, i.e. economic & marital exchange, ritual participation etc.',
                                'Moderate or Friendly social interaction, i.e. economic exchange & ritual participation exist but marital exchange is prohibited.',
                                'Restricted Social interactions Limited to economic relations through trade & employment','99'=>'Others- (Please specify below)'
                            );
                            
                            $leadership_drop_text[] = array(
                                'High: in some situations equal to or greater than that of men','Significant but not as high as male involvement','Not great but clearly some role for women in public aspects of political life',
                                'Women generally excluded from public aspects of politics','99'=>'Others- (Please specify below)'
                            );
                        ?>
                        
                         <table class="table table-bordered table-striped">
                            <tbody>
                                
                                <?php for($i=6;$i<6+count($leader_and_leadership);$i++): ?>
                                	
                                   <?php
                                        if (!empty($this->data['CommSectionF'][$i]['CommSectionF']['id'])) {
                                            echo $this->Form->input('CommSectionF.'.$i . '.CommSectionF.id', array('type' => 'hidden'));
                                        }
              						?> 	                                	
                                	
                                <tr>
                                   <?php
                                        if (!empty($this->request->data['CommSectionF'][$i]['CommSectionF']['id'])) {
                                            echo $this->Form->input('CommSectionF.'.$i . '.CommSectionF.id', array('type' => 'hidden'));
                                        }
              						?>                                	
                                	
                                    <td><?php echo $i+615;?></td>  
                                    <td><?php echo $leader_and_leadership[$i]; ?></td>
                                    <td>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.question_no', array('value' =>$i+615,'type'=>'hidden')); ?>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.question', array('value' =>$leader_and_leadership[$i],'type'=>'hidden')); ?>
                                    	<?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.personal_information_id', array('value' =>$pid,'type'=>'hidden')); ?>
                                        <?php  echo $this ->Form ->input('CommSectionF.'.$i.'.CommSectionF.answer', array('options' =>$leadership_drop_text[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php echo $this -> Form -> input('CommSectionF.'.$i.'.CommSectionF.answer_other', array('type' => 'text','id'=>$i.'answer_other','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                     </td>                                     
                                    
                                    
                                    
                                    <!---<td>
                                        <?php  
                                        echo $this ->Form ->input($i.'.SectionQuestionAnswerF.answer_list', array('options' =>$leadership_drop_text[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
 <?php echo $this -> Form -> input($i.'.SectionQuestionAnswerF.answer', array('type' => 'text','id'=>$i.'answer_other','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    </td> --->
                                </tr> 
                                
                                <script>
                                    
                                  $('#CommSectionF'+<?php echo $i; ?>+'CommSectionFAnswer').change(function () {
                            
                                            var selectboxValue = $('#CommSectionF'+<?php echo $i; ?>+'CommSectionFAnswer').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $i; ?>+'answer_other').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $i; ?>+'answer_other').hide();
                                            }
        })
                            </script>
                                <?php
                                  
                                   endfor;
                                
                                ?>
                            </tbody>
                        </table>
                        <hr></hr>
                        <button class="btn btn-info">Submit</button>
                        <?php echo $this->Form->end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    