<style>

    .radio-test{padding-left:20px;}
    .radio_question_section{}

    .radio_question_section label{padding:0px 10px;}

    .radio_question_section > span{float: left;margin-left: 10px;font-weight: bold;}
    .checkbox_label{padding-right: 10px;margin-left: 3px;}

</style>


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
						<?php echo $this->Form->create('SocioCulture',array('class'=>'')) ?>
                                                 <?php
                                                    if(!empty($this->data['SocioCulture']['id'])){
                                                        echo $this->Form->input('SocioCulture.id',array('type'=>'hidden')); 
                                                    }
                                                ?>

                                                  

                        <h4>
                            PART C: SOCIO-CULTURAL ASPECTS OF LANGUAGE
                        </h4>

                        <h5><b>SPEAKER'S ATTITUDE</b></h5>
                        <p>1. What should be the language medium of conversation among family member?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[0]['SocioCulture']['id'])){
                                     echo $this->Form->input('0.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('0.SocioCulture.question_no', array('type' => 'hidden','value'=>'1')); ?></span> 
                            <span><?php echo $this->form->input('0.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'mother_tongue','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Mother tongue</span>

                            <span><?php echo $this->form->input('0.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Bangla</span>         
                            <span><?php echo $this->form->input('0.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'English','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)English
                                <span><?php echo $this->form->input('0.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)Other</span>                     
                                <span><?php echo $this->Form->input('0.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                                <?php echo $this->Form->input('0.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>


                        <p>2. What should be the language medium of education?</p>

                        <p>

                            <?php 
                                  if(!empty($this->data[1]['SocioCulture']['id'])){
                                     echo $this->Form->input('1.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            
                            <span><?php echo $this->Form->input('1.SocioCulture.question_no', array('type' => 'hidden','value'=>'2')); ?></span>        
                            <span><?php echo $this->form->input('1.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'ans_a','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Mother tongue</span>

                            <span><?php echo $this->form->input('1.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Bangla</span>         
                            <span><?php echo $this->form->input('1.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'English','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)English
                                <span><?php echo $this->form->input('1.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)Other</span>                     
                                <span><?php echo $this -> Form -> input('1.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                                <?php echo $this->Form->input('1.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>
                        </p>

                        <p>
                            3. What language should be use in temple /prayer house?</p>
                        <p>
                             <?php 
                                  if(!empty($this->data[2]['SocioCulture']['id'])){
                                     echo $this->Form->input('2.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            
                            <span><?php echo $this->Form->input('2.SocioCulture.question_no', array('type' => 'hidden','value'=>'3')); ?></span>     
                            <span><?php echo $this->form->input('2.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'ans_a','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Mother tongue</span>

                            <span><?php echo $this->form->input('2.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Bangla</span>         
                            <span><?php echo $this->form->input('2.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'English','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)English
                                <span><?php echo $this->form->input('2.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)Other</span>                     
                                <span><?php echo $this -> Form -> input('2.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                                <?php echo $this->Form->input('2.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>
                        </p>


                        <p>

                            4. Will you send your child if in a new school provide mother tongue based education at 

                            first and then switched into Bangla and English language medium ? </p>

                        <p>
                             <?php 
                                  if(!empty($this->data[3]['SocioCulture']['id'])){
                                     echo $this->Form->input('3.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('3.SocioCulture.question_no', array('type' => 'hidden','value'=>'4')); ?></span> 
                            <span><?php echo $this->Form->input('3.SocioCulture.ans_a',array('type'=>'radio','options'=>array(' Yes'),'div'=>false,'label'=>false,'legend'=>false)) ?></span>     
                            <span><?php echo $this->Form->input('3.SocioCulture.ans_b',array('type'=>'radio','options'=>array(' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></span>     
                            <?php echo $this->Form->input('3.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>
                        </p>

                        <p>

                            5. When you speak your mother tongue in presence of the speaker of the dominant/ bangle 

                            language what do you feel?   
                        </p>

                        <p>
                              <?php 
                                  if(!empty($this->data[4]['SocioCulture']['id'])){
                                     echo $this->Form->input('4.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            
                             <span><?php echo $this->Form->input('4.SocioCulture.question_no', array('type' => 'hidden','value'=>'5')); ?></span> 
                            <span><?php echo $this->form->input('4.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Prestigious','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Prestigious
                            <span><?php echo $this->form->input('4.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Embarrassed','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Embarrassed
                            <span><?php echo $this->form->input('4.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'Normal','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)Normal
                           <?php echo $this->Form->input('4.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p>

                            6. How would you feel if your son or daughter married someone who does not know your

                            language?  
                        </p>

                        <p>
                             <?php 
                                  if(!empty($this->data[5]['SocioCulture']['id'])){
                                     echo $this->Form->input('5.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                             <span><?php echo $this->Form->input('5.SocioCulture.question_no', array('type' => 'hidden','value'=>'6')); ?></span> 
                            <span><?php echo $this->form->input('5.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Good','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Good
                            <span><?php echo $this->form->input('5.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'indifferent /not so good','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)indifferent /not so good
                            <span><?php echo $this->form->input('5.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'Bad','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)Bad
                           <?php echo $this->Form->input('5.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>


                        </p>

                        <h5><b>LANGUAGE RESOURCES</b></h5>
                        
                        <p>

                            7.  What are the major kinds of oral literature/resources available in your language?

                            Instruction:   Only ask literate person and Mark the right box 
                        </p>

                        <?php
                        
                          $oralLiteraure_list = array(
                              
                              'Folk tales','Songs','Religious literature','Radio literature','Film /short film literature','other literature'
                              
                          );
                        
                        ?>
                        
                        
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                        
                                                                        <tr>
                                                                            <th>Oral literature</th>
<!--                                                                            <th>Yes</th>-->
                                                                            <th>Choice</th>
                                                                            <th>Remark</th>
                        
                                                                        </tr>
                        
                        
                                                                    </thead>
                        
                        
                                                                    <tbody>
                        
                                                                      
                                                                       <?php for($i=0;$i<count($oralLiteraure_list);$i++): ?>
                                                                        <tr>
                                                                            <?php 
                                                                if(!empty($this->data['Oral_Marker'][$i]['OralLiterature']['id'])){
                                                                    echo $this->Form->input('Oral_Marker.'.$i.'.OralLiterature.id',array('type'=>'hidden')); 
                                                                }
                                                            ?>
                                                                            <td><?php echo $this->Form->input('Oral_Marker.'.$i.'.OralLiterature.oral_literature_value',array('type'=>'hidden','value'=>$oralLiteraure_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $oralLiteraure_list[$i]; ?></td>  
                                                                            <td><?php echo $this->Form->input('Oral_Marker.'.$i.'.OralLiterature.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                                                                            <td><?php echo $this->Form->input('Oral_Marker.'.$i.'.OralLiterature.remark', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                                                             <?php echo $this->Form->input('Oral_Marker.'.$i.'.OralLiterature.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                                                        </tr>
                                                                        <?php endfor; ?>
                        
                                                                       
                        

                        
                        
                        
                        
                                                                    <tbody>
                        
                        
                                                                    </tbody>
                        
                                                                </table>   
                                                            </div>
                        
                                                  <p>8.  What materials written about your language?</p>
                                    <p>Instruction:  Only ask literate person and Mark the right box.</p>

                                    
                                    <?php $material_name_list = array(
                                        
                                        'Grammar','Dictionary','Textbook','Newspaper','Magazine','Written literature','folklore','Literacy material','other'
                                        
                                        
                                    ); ?>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>

                                                <tr>
                                                    <th>Material</th>
                                                    <th>Choice</th>
                                                   
                                                    <th>Name</th>
                                                    <th>Year of

                                                        publication(If 

                                                        applicable)</th>

                                                    <th>Remark</th>

                                                </tr>


                                            </thead>


                                            <tbody>

                                              <?php for($i=0;$i<count($material_name_list);$i++): ?>

                                                <tr>
                                                    <?php 
                                                                if(!empty($this->data['Material_Marker'][$i]['MaterialLanguage']['id'])){
                                                                    echo $this->Form->input('Material_Marker.'.$i.'.MaterialLanguage.id',array('type'=>'hidden')); 
                                                                }
                                                            ?>
                                                    
                                                    
                                                     <td><?php echo $this->Form->input('Material_Marker.'.$i.'.MaterialLanguage.material_laguage_value',array('type'=>'hidden','value'=>$material_name_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $material_name_list[$i]; ?></td>    
                                                    <td><?php echo $this->Form->input('Material_Marker.'.$i.'.MaterialLanguage.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                                                    <td><?php echo $this->Form->input('Material_Marker.'.$i.'.MaterialLanguage.remark',array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                                    <td><?php echo $this->Form->input('Material_Marker.'.$i.'.MaterialLanguage.material_name',array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                                    <td><?php echo $this->Form->input('Material_Marker.'.$i.'.MaterialLanguage.material_year',array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                                     <?php echo $this->Form->input('Material_Marker.'.$i.'.MaterialLanguage.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                                </tr>
                                               <?php endfor; ?> 
                                                
                                            </tbody>
                                        </table>

                                        <p>9.Instruction: Only ask literate person and Mark the right box.</p>

                                        <div class="radio_question_section">


                             <p>
                               <?php 
                                  if(!empty($this->data[6]['SocioCulture']['id'])){
                                     echo $this->Form->input('6.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>   
                                 
                            <span><?php echo $this->Form->input('6.SocioCulture.question_no', array('type' => 'hidden','value'=>'7')); ?></span> 
                            <span><?php echo $this->Form->input('6.SocioCulture.ans_a',array('type'=>'radio','options'=>array(' Yes'),'div'=>false,'label'=>false,'legend'=>false)) ?></span>     
                            <span><?php echo $this->Form->input('6.SocioCulture.ans_b',array('type'=>'radio','options'=>array(' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></span>     
                            <?php echo $this->Form->input('6.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>
                        </p>


                                            <p>10. Name some organizations which promote your language__________ </p>
                                            
                                             <?php 
                                  if(!empty($this->data[7]['SocioCulture']['id'])){
                                     echo $this->Form->input('7.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?> 
                                            <div><?php echo $this -> Form -> input('7.SocioCulture.ans_a', array('type' => 'text', 'class' => 'form-control', 'label' => false,'style' => 'margin-top:3px')); ?></div>
                                             <span><?php echo $this->Form->input('7.SocioCulture.question_no', array('type' => 'hidden','value'=>'8')); ?></span> 
                                            <?php echo $this->Form->input('7.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                                        </div> 
                                    </div>
                                    </div>

                       
                    </div>


                </div>  
                </hr>
                <center> <button class="btn btn-info">Next>></button></center>
                <p>&nbsp;</p>
						<?php echo $this -> Form -> end(); ?>

            </div>
        </div>
    </div>
</div>
</div>
</div>