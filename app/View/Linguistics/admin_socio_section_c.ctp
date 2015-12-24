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
                            PART C: SOCIO-CULTURAL ASPECTS OF LANGUAGE--->Section 11-20
                        </h4>

                        <p>21. What language should your children speak first?</p>

                        <p>
                            <?php 
                                  if(!empty($this->data[0]['SocioCulture']['id'])){
                                     echo $this->Form->input('0.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('0.SocioCulture.question_no', array('type' => 'hidden','value'=>'18')); ?></span> 


                            <span><?php echo $this->form->input('0.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Bangla</span>         

                            <span><?php echo $this->form->input('0.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'Other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Other</span>                     
                            <span><?php echo $this->Form->input('0.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                                <?php echo $this->Form->input('0.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p> 22.	Do young people in your village/ town speak your mother tongue well, the way it ought to be spoken? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[1]['SocioCulture']['id'])){
                                     echo $this->Form->input('1.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('1.SocioCulture.question_no', array('type' => 'hidden','value'=>'19')); ?></span> 
                            <span><?php echo $this->form->input('1.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('1.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('1.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>


                        <p> 23. Do you think your next generation could speak in your language? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[2]['SocioCulture']['id'])){
                                     echo $this->Form->input('2.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('2.SocioCulture.question_no', array('type' => 'hidden','value'=>'20')); ?></span> 
                            <span><?php echo $this->form->input('2.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('2.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('2.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p>24.	What language do most parents in your village usually speak with their children?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[3]['SocioCulture']['id'])){
                                     echo $this->Form->input('3.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('3.SocioCulture.question_no', array('type' => 'hidden','value'=>'21')); ?></span> 


                            <span><?php echo $this->form->input('3.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'mother_tongue','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Mother Tongue</span>         

                            <span><?php echo $this->form->input('3.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'bangla','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Bangla</span>  
                            <span><?php echo $this->form->input('3.SocioCulture.ans_c',array('type'=>'checkbox','value'=>'other','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)Other</span>                     
                            <span><?php echo $this->Form->input('3.SocioCulture.other_box_text', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                                <?php echo $this->Form->input('3.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p>25.	Do you know anyone from your community who do not want to speak in own language? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[4]['SocioCulture']['id'])){
                                     echo $this->Form->input('4.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('4.SocioCulture.question_no', array('type' => 'hidden','value'=>'22')); ?></span> 
                            <span><?php echo $this->form->input('4.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('4.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('4.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p> 26.	Do you know anyone who cannot speak own mother tongue? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[5]['SocioCulture']['id'])){
                                     echo $this->Form->input('5.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('5.SocioCulture.question_no', array('type' => 'hidden','value'=>'23')); ?></span> 
                            <span><?php echo $this->form->input('5.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('5.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('5.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <h5><b>LANGUAGE MAINTENANCE</b></h5>
                        <p> 27.Is there intermarriage in your community? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[6]['SocioCulture']['id'])){
                                     echo $this->Form->input('6.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('6.SocioCulture.question_no', array('type' => 'hidden','value'=>'24')); ?></span> 
                            <span><?php echo $this->form->input('6.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('6.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('6.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p> 28.If yes which other language groups have common marital relationship with you? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[7]['SocioCulture']['id'])){
                                     echo $this->Form->input('7.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('7.SocioCulture.question_no', array('type' => 'hidden','value'=>'25')); ?></span> 
                            <span>1. <?php echo $this->form->input('7.SocioCulture.ans_a', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                            <span>2. <?php echo $this->form->input('7.SocioCulture.ans_b', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                            <span>3.<?php echo $this->form->input('7.SocioCulture.ans_c', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                             <?php echo $this->Form->input('7.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p> 29.Is there intermarriage in your community? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[8]['SocioCulture']['id'])){
                                     echo $this->Form->input('8.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('8.SocioCulture.question_no', array('type' => 'hidden','value'=>'26')); ?></span> 
                            <span><?php echo $this->form->input('8.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('8.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('8.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                        <p> 30.Do you think that the language spoken by you is different from your grandparents? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[9]['SocioCulture']['id'])){
                                     echo $this->Form->input('9.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('9.SocioCulture.question_no', array('type' => 'hidden','value'=>'27')); ?></span> 
                            <span><?php echo $this->form->input('9.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('9.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('9.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>

                    </div>


                </div>


            </div>  
            <hr></hr>
            <center><button class="btn btn-info">Next>></button></center>
            <p>&nbsp;</p>
						<?php echo $this -> Form -> end(); ?>

        </div>
    </div>
</div>
</div>
</div>
</div>