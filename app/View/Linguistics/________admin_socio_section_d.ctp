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
                        
                        <p>

                            31.	 If yes, how?
                        </p>

                        <?php
                        
                          $difference_list = array(
                              
                              'Pronunciation','Vocabulary','Use of specific type of sentences','Mixing of other language','Way of speaking','Other',
                              
                          );
                        
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>Difference</th>

                                        <th>Yes/No</th>
                                        <th>Past</th>
                                        <th>Present</th>
                                    </tr>


                                </thead>


                                <tbody>


                                                                       <?php for($i=0;$i<count($difference_list);$i++): ?>
                                    <tr>
                                                                            <?php 
                                                                if(!empty($this->data['Difference_Marker'][$i]['DifferenceList']['id'])){
                                                                    echo $this->Form->input('Difference_Marker.'.$i.'.DifferenceList.id',array('type'=>'hidden')); 
                                                                }
                                                            ?>
                                        <td><?php echo $this->Form->input('Difference_Marker.'.$i.'.DifferenceList.difference_name',array('type'=>'hidden','value'=>$difference_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $difference_list[$i]; ?></td>  
                                       <td><?php echo $this->Form->input('Difference_Marker.'.$i.'.DifferenceList.choice',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                                        <td><?php echo $this->Form->input('Difference_Marker.'.$i.'.DifferenceList.past', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this->Form->input('Difference_Marker.'.$i.'.DifferenceList.present', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                                                             <?php echo $this->Form->input('Difference_Marker.'.$i.'.DifferenceList.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                    </tr>
                                                                        <?php endfor; ?>








                                <tbody>


                                </tbody>

                            </table>   
                        </div>
                        
                        <h5><b>LANGUAGE VARIATION</b></h5>

                       <p> 32.Do any people of your language community speak differently than you?   </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[0]['SocioCulture']['id'])){
                                     echo $this->Form->input('0.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('0.SocioCulture.question_no', array('type' => 'hidden','value'=>'28')); ?></span> 
                            <span><?php echo $this->form->input('0.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('0.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('0.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <p> 33.Where do they live?   </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[1]['SocioCulture']['id'])){
                                     echo $this->Form->input('1.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('1.SocioCulture.question_no', array('type' => 'hidden','value'=>'29')); ?></span> 
                            <span><?php echo $this->form->input('1.SocioCulture.ans_a',array('type' => 'text', 'label' => false, 'div' => false)); ?></span>
                            <?php echo $this->Form->input('1.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <p>34.In which name they identify their language?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[2]['SocioCulture']['id'])){
                                     echo $this->Form->input('2.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('2.SocioCulture.question_no', array('type' => 'hidden','value'=>'30')); ?></span> 
                            <span><?php echo $this->form->input('2.SocioCulture.ans_a',array('type' => 'text', 'label' => false, 'div' => false,)); ?></span>
                            <?php echo $this->Form->input('2.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <p>35.	Can you understand that language?</p>
                        <p>
                            <?php 
                                  if(!empty($this->data[3]['SocioCulture']['id'])){
                                     echo $this->Form->input('3.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('3.SocioCulture.question_no', array('type' => 'hidden','value'=>'31')); ?></span> 
                            <span><?php echo $this->form->input('3.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('3.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('3.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <h5><b>IMPLICATION FOR INCLUSION/EXCLUSION</b></h5>
                          <p>36.Has any word/words from your next/ Neighbor/ other language included into your mother tongue?  </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[4]['SocioCulture']['id'])){
                                     echo $this->Form->input('4.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('4.SocioCulture.question_no', array('type' => 'hidden','value'=>'32')); ?></span> 
                            <span><?php echo $this->form->input('4.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('4.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('4.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>37.	Have you accepted those words?   </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[5]['SocioCulture']['id'])){
                                     echo $this->Form->input('5.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('5.SocioCulture.question_no', array('type' => 'hidden','value'=>'33')); ?></span> 
                            <span><?php echo $this->form->input('5.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('5.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('5.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>38.	Do you have Alternative word for those included words in your language?  </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[6]['SocioCulture']['id'])){
                                     echo $this->Form->input('6.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('6.SocioCulture.question_no', array('type' => 'hidden','value'=>'34')); ?></span> 
                            <span><?php echo $this->form->input('6.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('6.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('6.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                         <p>39.	Do your family members use those alternative words?  </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[7]['SocioCulture']['id'])){
                                     echo $this->Form->input('7.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('7.SocioCulture.question_no', array('type' => 'hidden','value'=>'35')); ?></span> 
                            <span><?php echo $this->form->input('7.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('7.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('7.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        <h5><b> WRITING SYSTEM</b></h5>
                        
                         <p>40.	Does your language have own writing system? </p>
                        <p>
                            <?php 
                                  if(!empty($this->data[8]['SocioCulture']['id'])){
                                     echo $this->Form->input('8.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                            <span><?php echo $this->Form->input('8.SocioCulture.question_no', array('type' => 'hidden','value'=>'36')); ?></span> 
                            <span><?php echo $this->form->input('8.SocioCulture.ans_a',array('type'=>'checkbox','value'=>'Yes','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">a)Yes</span>

                            <span><?php echo $this->form->input('8.SocioCulture.ans_b',array('type'=>'checkbox','value'=>'No','label'=>false,'div'=>false)); ?></span><span class="checkbox_label">b)No</span>
                             <?php echo $this->Form->input('8.SocioCulture.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </p>
                        
                        
                        
                    </div>


                </div>


            </div>  
            </hr>
            <center><button class="btn btn-info">Next>></button></center>
            <p>&nbsp;</p>
						<?php echo $this -> Form -> end(); ?>

        </div>
    </div>
</div>
</div>
</div>
</div>