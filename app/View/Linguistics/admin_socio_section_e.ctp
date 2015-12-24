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
                            PART C: SOCIO-CULTURAL ASPECTS OF LANGUAGE--->Section 41-56
                        </h4>

                      <p> 41.	 If no what script(s) is your language written in?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[0]['SocioCulture']['id'])){
                                     echo $this->Form->input('0.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('0.SocioCulture.question_no', array('type' => 'hidden','value'=>'37')); ?></span> 
                            <span><?php echo $this->form->input('0.SocioCulture.ans_a',array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                            <?php echo $this->Form->input('0.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                       <p>42.	Do you and other people of your language community accept that script?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[1]['SocioCulture']['id'])){
                                     echo $this->Form->input('1.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('1.SocioCulture.question_no', array('type' => 'hidden','value'=>'38')); ?></span> 
                            <span><?php echo $this->form->input('1.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('1.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('1.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <p>43.	Can you read and write in your language?(common question for all)</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[1]['SocioCulture']['id'])){
                                     echo $this->Form->input('1.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('1.SocioCulture.question_no', array('type' => 'hidden','value'=>'39')); ?></span> 
                            <span><?php echo $this->form->input('1.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('1.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('1.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        
                        <p>44.	What is the name of your script? (if the language has script)</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[2]['SocioCulture']['id'])){
                                     echo $this->Form->input('2.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('2.SocioCulture.question_no', array('type' => 'hidden','value'=>'40')); ?></span> 
                            <span><?php echo $this->form->input('2.SocioCulture.ans_a',array('type' => 'text', 'label' => false, 'div' => false)); ?></span>

                             <?php echo $this->Form->input('2.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <p>45.	Do you know how many  alphabets in your script?(own or adopted)</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[3]['SocioCulture']['id'])){
                                     echo $this->Form->input('3.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('3.SocioCulture.question_no', array('type' => 'hidden','value'=>'41')); ?></span> 
                            <span><?php echo $this->form->input('3.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('3.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('3.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <p>46.	How many alphabets are in that script?(own or adopted)</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[4]['SocioCulture']['id'])){
                                     echo $this->Form->input('4.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('4.SocioCulture.question_no', array('type' => 'hidden','value'=>'42')); ?></span> 
                            <span><?php echo $this->form->input('4.SocioCulture.ans_a',array('type' => 'text', 'label' => false, 'div' => false)); ?></span>

                             <?php echo $this->Form->input('4.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>47.	Does your script have alphabets to write down all sound you utter?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[5]['SocioCulture']['id'])){
                                     echo $this->Form->input('5.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('5.SocioCulture.question_no', array('type' => 'hidden','value'=>'43')); ?></span> 
                            <span><?php echo $this->form->input('5.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('5.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('5.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>48.	Do you think you can write all sound of your language in Bangla alphabet?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[6]['SocioCulture']['id'])){
                                     echo $this->Form->input('6.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('6.SocioCulture.question_no', array('type' => 'hidden','value'=>'44')); ?></span> 
                            <span><?php echo $this->form->input('6.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('6.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('6.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>49.	Do you think you can write all sound of your language in Roman alphabet?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[7]['SocioCulture']['id'])){
                                     echo $this->Form->input('7.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('7.SocioCulture.question_no', array('type' => 'hidden','value'=>'45')); ?></span> 
                            <span><?php echo $this->form->input('7.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('7.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('7.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>50.What do you think is it easy to learn that own script for school going children?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[8]['SocioCulture']['id'])){
                                     echo $this->Form->input('8.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('8.SocioCulture.question_no', array('type' => 'hidden','value'=>'46')); ?></span> 
                            <span><?php echo $this->form->input('8.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('8.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('8.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>51.	Is there any punctuation mark in your writing system?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[9]['SocioCulture']['id'])){
                                     echo $this->Form->input('9.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('9.SocioCulture.question_no', array('type' => 'hidden','value'=>'47')); ?></span> 
                            <span><?php echo $this->form->input('9.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('9.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('9.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>52.	If yes, is it unique?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[10]['SocioCulture']['id'])){
                                     echo $this->Form->input('10.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('10.SocioCulture.question_no', array('type' => 'hidden','value'=>'48')); ?></span> 
                            <span><?php echo $this->form->input('10.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('10.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('10.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>53.	Do you have text book written in your language?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[11]['SocioCulture']['id'])){
                                     echo $this->Form->input('11.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('11.SocioCulture.question_no', array('type' => 'hidden','value'=>'49')); ?></span> 
                            <span><?php echo $this->form->input('11.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('11.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('11.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <p>54.	If yes, which alphabet it is written in?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[12]['SocioCulture']['id'])){
                                     echo $this->Form->input('12.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('12.SocioCulture.question_no', array('type' => 'hidden','value'=>'50')); ?></span> 


                            <span><?php echo $this->form->input('12.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Bangla</span>         

                            <span><?php echo $this->form->input('12.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Roman','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Roman</span> 
                             <span><?php echo $this->form->input('12.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'Roman','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)Own</span>                     
                              <span><?php echo $this->form->input('12.SocioCulture.ans_d',array('type'=>'checkbox','value'=>'Roman','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">d)Other</span>                     
                            <span><?php echo $this->Form->input('12.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                                <?php echo $this->Form->input('12.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>55.	Do you think your language should be written? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[13]['SocioCulture']['id'])){
                                     echo $this->Form->input('13.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('13.SocioCulture.question_no', array('type' => 'hidden','value'=>'51')); ?></span> 
                            <span><?php echo $this->form->input('13.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('13.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('13.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        
                        <p>56.	If your language does not have any alphabets, which alphabets will you use? </p>

                        <p>
                            <?php 
                                  if(!empty($this->data[14]['SocioCulture']['id'])){
                                     echo $this->Form->input('14.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('14.SocioCulture.question_no', array('type' => 'hidden','value'=>'52')); ?></span> 


                            <span><?php echo $this->form->input('14.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Bangla</span>         

                            <span><?php echo $this->form->input('14.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Roman','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Roman</span> 
                             <span><?php echo $this->form->input('14.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'Roman','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">c)newly developed alphabet</span>                     
                             <?php echo $this->Form->input('14.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

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