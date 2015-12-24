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

                        <h5><b>MOTHER TONGUE PROFICIENCY AND MULTILINGUALISM</b></h5>
                        
                        <p>11. What language should your children speak first?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[0]['SocioCulture']['id'])){
                                     echo $this->Form->input('0.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('0.SocioCulture.question_no', array('type' => 'hidden','value'=>'9')); ?></span> 
                            <span><?php echo $this->form->input('0.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'mother_tongue','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Mother tongue</span>

                            <span><?php echo $this->form->input('0.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Bangla</span>         

                            <span><?php echo $this->form->input('0.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)Other</span>                     
                            <span><?php echo $this->Form->input('0.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                                <?php echo $this->Form->input('0.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>


                        <p>12. How many languages do you know except your mother tongue?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[1]['SocioCulture']['id'])){
                                     echo $this->Form->input('1.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('1.SocioCulture.question_no', array('type' => 'hidden','value'=>'10')); ?></span> 
                            <span><?php echo $this->form->input('1.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'One','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)One</span>

                            <span><?php echo $this->form->input('1.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Two','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Two</span>         

                            <span><?php echo $this->form->input('1.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'Three','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)Three</span>                     
                            <span><?php echo $this->form->input('1.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'More','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)More</span>

                                <?php echo $this->Form->input('1.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>


                        <p>13. If you know (other languages), which languages do you know?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[2]['SocioCulture']['id'])){
                                     echo $this->Form->input('2.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('2.SocioCulture.question_no', array('type' => 'hidden','value'=>'11')); ?></span> 
                            <span><?php echo $this->form->input('2.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Cakma','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Cakma</span>

                            <span><?php echo $this->form->input('2.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Marma','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Marma</span>         

                            <span><?php echo $this->form->input('2.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'Mro','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)Mro</span>                     
                            <span><?php echo $this->form->input('2.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'More','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)Bangla</span>
                            <span><?php echo $this->form->input('2.SocioCulture.ans_e',array('type'=>'checkbox','value'=>'English','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">e)English</span>
                            <span><?php echo $this->form->input('2.SocioCulture.ans_f',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">e)Other</span>
                            <span><?php echo $this->Form->input('2.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span> 
                                <?php echo $this->Form->input('2.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p>14.	Except mother tongue, in which language do you feel comfortable for use?</p>   

                        <p>
                            <?php 
                                  if(!empty($this->data[3]['SocioCulture']['id'])){
                                     echo $this->Form->input('3.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>

                            <span><?php echo $this->Form->input('3.SocioCulture.question_no', array('type' => 'hidden','value'=>'12')); ?></span> 
                            <span><?php echo $this->form->input('3.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Bangla</span>
                            <span><?php echo $this->form->input('3.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Chakma','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Chakma</span>
                            <span><?php echo $this->form->input('3.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'Mro','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Mro</span>      
                            <span><?php echo $this->form->input('3.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">e)Other</span>
                            <span><?php echo $this->Form->input('3.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                         <?php echo $this->Form->input('3.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>
                        </p> 

                        <p>15.How do you communicate with other language speaker?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[4]['SocioCulture']['id'])){
                                     echo $this->Form->input('4.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('4.SocioCulture.question_no', array('type' => 'hidden','value'=>'13')); ?></span> 
                            <span><?php echo $this->form->input('4.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'mother_tongue','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Mother tongue</span>

                            <span><?php echo $this->form->input('4.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Bangla</span>         

                            <span><?php echo $this->form->input('4.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'English','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)English</span>                     
                            <span><?php echo $this->form->input('4.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'their_language','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)in their language</span>

                            <span><?php echo $this->form->input('4.SocioCulture.ans_e',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">e)Other</span>
                            <span><?php echo $this->Form->input('4.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span> 
                                <?php echo $this->Form->input('4.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <h5><b>DOMAIN OF LANGUAGE USE</b></h5>
                        <p>16.From where did you learn /acquire the language?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[5]['SocioCulture']['id'])){
                                     echo $this->Form->input('5.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('5.SocioCulture.question_no', array('type' => 'hidden','value'=>'14')); ?></span> 
                            <span><?php echo $this->form->input('5.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'mother_tongue','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Family</span>

                            <span><?php echo $this->form->input('5.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Village</span>         

                            <span><?php echo $this->form->input('5.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'English','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)School</span>                     

                            <span><?php echo $this->form->input('5.SocioCulture.ans_e',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">e)Other</span>
                            <span><?php echo $this->Form->input('5.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span> 
                                <?php echo $this->Form->input('5.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p>

                            17.  What are the major kinds of oral literature/resources available in your language?

                            Instruction:   Only ask literate person and Mark the right box 
                        </p>

                        <?php
                        
                          $domain_list = array(
                              
                              'Counting','Singing','joking','Shopping','Story telling','Discussing','praying','Quarrelling','Abusing/scolding',
                              'Family gathering','Village meeting'
                              
                          );
                        
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>Domain</th>

                                        <th>Mother tongue</th>
                                        <th>Language-2 &3</th>

                                    </tr>


                                </thead>


                                <tbody>


                                                                       <?php for($i=0;$i<count($domain_list);$i++): ?>
                                    <tr>
                                                                            <?php 
                                                                if(!empty($this->data['Domain_Marker'][$i]['DomainLanguageTongue']['id'])){
                                                                    echo $this->Form->input('Domain_Marker.'.$i.'.DomainLanguageTongue.id',array('type'=>'hidden')); 
                                                                }
                                                            ?>
                                        <td><?php echo $this->Form->input('Domain_Marker.'.$i.'.DomainLanguageTongue.domain_name',array('type'=>'hidden','value'=>$domain_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $domain_list[$i]; ?></td>  
                                        <td><?php echo $this->Form->input('Domain_Marker.'.$i.'.DomainLanguageTongue.mother_tongue',array('type' => 'text', 'label' => false, 'div' => false,'class'=>'form-control')) ?></td>
                                        <td><?php echo $this->Form->input('Domain_Marker.'.$i.'.DomainLanguageTongue.language_2_3', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                                                             <?php echo $this->Form->input('Domain_Marker.'.$i.'.DomainLanguageTongue.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                    </tr>
                                                                        <?php endfor; ?>








                                <tbody>


                                </tbody>

                            </table>   
                        </div>





                        <p>18.	When you use mobile phone, which language is preferable to you? </p>

                        <p>
                         <?php 
                                  if(!empty($this->data[6]['SocioCulture']['id'])){
                                     echo $this->Form->input('6.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?> 

                            <span><?php echo $this->Form->input('6.SocioCulture.question_no', array('type' => 'hidden','value'=>'15')); ?></span> 
                            <span><?php echo $this->form->input('6.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'mother_tongue','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Mother Tongue</span>

                            <span><?php echo $this->form->input('6.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Bangla</span>         

                            <span><?php echo $this->form->input('6.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'English','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)English</span>  
                           <?php echo $this->Form->input('6.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p>19.	When you watch television or listen to radio, which language medium is easy to understanding for you?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[7]['SocioCulture']['id'])){
                                     echo $this->Form->input('7.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('7.SocioCulture.question_no', array('type' => 'hidden','value'=>'16')); ?></span> 
                            <span><?php echo $this->form->input('7.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Bangla</span>

                            <span><?php echo $this->form->input('7.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Hindi','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Hindi</span>         

                            <span><?php echo $this->form->input('7.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'English','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)English</span>                     
                            <span><?php echo $this->form->input('7.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'mother_tongue','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)Mother Tongue</span>

                            <span><?php echo $this->form->input('7.SocioCulture.ans_e',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">e)Other</span>
                            <span><?php echo $this->Form->input('7.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span> 
                                <?php echo $this->Form->input('7.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <h5><b>LANGUAGE VITALITY</b></h5>
                        <p>20. Does any child of your language community gain the ability to speak in other languages before his/her schooling? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[8]['SocioCulture']['id'])){
                                     echo $this->Form->input('8.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('8.SocioCulture.question_no', array('type' => 'hidden','value'=>'17')); ?></span> 
                            <span><?php echo $this->form->input('8.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('8.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('8.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>


                    </div>


                </div>


            </div>  
            <hr></hr>
            <center><button class="btn btn-info">Next>></button></center>
						<?php echo $this -> Form -> end(); ?>

        </div>
    </div>
</div>
</div>
</div>
</div>