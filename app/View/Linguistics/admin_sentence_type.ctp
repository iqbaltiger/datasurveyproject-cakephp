<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Sentence Type'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                             <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'] . ' ' . $personalInfo['PersonnelInformation']['last_name']; ?></b></p>

                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id']; ?></b></p>

                                                </div>
                                            </div> 
						<?php echo $this->Form->create('SentenceType',array('class'=>'')) ?>

<p>13. These sentences are designed to elicit data to give a typological sketch of a language. One 

                        has to build on further on each of these sentences to get full paradigms of a verb or a noun. You 

                        might find some of these sentences funny or ungrammatical in English, however, when 

                        translated in the contact language and the target language they will appear all right.</p>



                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Sentence Type</th>
<!--                                    <th>Bangla Sentence</th>-->
                                    <th>English Gloss</th>
                                    <th>Sentence of Target language(First: In Bangla script & Second: in IPA)</th>

                                </tr>
                            </thead>

                            
                            <?php 
                            
                            $question_list = array(
                               '1'=>'Simple Sentence','Compound Sentence','Complex Sentence','Declarative Sentence','Interrogative Sentence','Exclamatory Sentence',
                                'Imperative Sentence','Conditional Sentence','positive sentence','Negative sentence'
                                
                            );
                            
                            
                            $answerArr = array('ans_a','ans_b','ans_c','ans_d'); ?>
                            
                            <tbody>
                                <tr>
                                    <td>সরল বাক্য
(Simple Sentence)
</td>  
<!--                                    <td></td>  -->
                                    <td><p>I eat rice</p> <p>Summon plays football at every evening.</p> <p>Mother loves her child</p></td>  
                                    <td>
                                        
                                       
                                      <?php for($i=0;$i<3;$i++):
                                          ?>
                                        
                                        <?php
                                        if(!empty($this->data[0]['SentenceType']['id'])){
                                                                    echo $this->Form->input('0.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                        
                                        <?php echo $this->Form->input('0.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                        <?php echo $this->Form->input('0.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[1])); ?>
                                        <?php echo $this->Form->input('0.SentenceType.'.$answerArr[$i], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        
                                      <?php endfor; ?>  
                                        
                                    </td>  


                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td>যৌগিক বাক্য
(Compound Sentence)
</td>  
<!--                                    <td></td>  -->
                                    <td><p>What time does it take to go

                                        from Bandarban to 

                                        Rangamati?</p>

                                        <p>
                                        The sun rises in the east and 

                                        sets in west</p>

                                        <p>
                                        He is very powerful and 

                                        intelligent.
                                        </p>
                                    </td>  
                                        <td>
                                       
                                      <?php for($i;$i<6;$i++): ?>
                                            <?php
                                        if(!empty($this->data[1]['SentenceType']['id'])){
                                                                    echo $this->Form->input('1.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                        
                                       <?php echo $this->Form->input('1.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('1.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[2])); ?> 
                                        <?php echo $this -> Form -> input('1.SentenceType.'.$answerArr[($i-3)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                         <?php endfor; ?>  
                                       
                                    </td>  

                                </tr>


                                <!---15 row start--->

                                <tr>
                                    <td>জটিল বাক্য
(Complex Sentence)
</td>  
<!--                                    <td></td>  -->
                                    <td>After eating rice, I go to school</td>  
                                    <td>
                                        
                                      <?php for($i;$i<7;$i++): ?>
                                        <?php
                                        if(!empty($this->data[2]['SentenceType']['id'])){
                                                                    echo $this->Form->input('2.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                        <?php echo $this->Form->input('2.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('2.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[3])); ?>
                                        <?php echo $this -> Form -> input('2.SentenceType.'.$answerArr[($i-6)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                      <?php endfor; ?>  
                                    </td>  

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td>ঘোষণামূলক বাক্য
(Declarative Sentence)
</td>  
<!--                                    <td></td>  -->
                                    <td><p>Dhaka is the capital of 

                                        Bangladesh.</p>

                                        <p>I like cats.</p>

                                        <p>Jamal is a Farmer.</p></td>  
                                 <td>
                                        
                                      <?php for($i;$i<10;$i++): ?>
                                     <?php
                                        if(!empty($this->data[3]['SentenceType']['id'])){
                                                                    echo $this->Form->input('3.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                     <?php echo $this->Form->input('3.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('3.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[4])); ?>
                                        <?php echo $this -> Form -> input('3.SentenceType.'.$answerArr[($i-7)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                      <?php endfor; ?>  
                                    </td>  


                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td>প্রশ্নবোধক বাক্য (Interrogative Sentence)</td>  
<!--                                    <td></td>  -->
                                    <td><p>How are you?</p>

                                        <p>Where Are You going?</p>

                                        <p>Why have you come here?</p></td>  
                                    <td>
                                        
                                      <?php for($i;$i<13;$i++): ?>
                                        <?php
                                        if(!empty($this->data[4]['SentenceType']['id'])){
                                                                    echo $this->Form->input('4.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                        <?php echo $this->Form->input('4.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('4.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[5])); ?>
                                        <?php echo $this -> Form -> input('4.SentenceType.'.$answerArr[($i-10)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                      <?php endfor; ?>  
                                    </td> 

                                </tr>



                                <!---15 row start--->

                                <tr>
                                    <td>বিস্ময়সূচক/ আবেগ বাক্য
(Exclamatory Sentence)
</td>  
<!--                                    <td></td>  -->
                                    <td><p>What a Beautiful flower!</p>
<p>What a surprise!</p>
<p>What a nice evening!</p>
<p>What a shame!</p>
</td>  
                                  <td>
                                        
                                      <?php for($i;$i<17;$i++): ?>
                                      <?php
                                        if(!empty($this->data[5]['SentenceType']['id'])){
                                                                    echo $this->Form->input('5.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                      <?php echo $this->Form->input('5.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('5.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[6])); ?>
                                        <?php echo $this -> Form -> input('5.SentenceType.'.$answerArr[($i-13)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                      <?php endfor; ?>  
                                    </td> 

                                </tr>


                                <!---15 row start--->

                                <tr>
                                    <td>অনুজ্ঞাসূচক বাক্য
(Imperative Sentence)
</td>  
<!--                                    <td></td>  -->
                                    <td><p>Give me a glass of water.</p>
                                        <p>Have a good day.</p>
</td>  
                                    <td>
                                        
                                      <?php for($i;$i<19;$i++): ?>
                                        <?php
                                        if(!empty($this->data[6]['SentenceType']['id'])){
                                                                    echo $this->Form->input('6.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                        <?php echo $this->Form->input('6.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('6.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[7])); ?>
                                        <?php echo $this -> Form -> input('6.SentenceType.'.$answerArr[($i-17)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                      <?php endfor; ?>  
                                    </td> 

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td>শর্তাধীন বাক্য (Conditional Sentence )</td>  
<!--                                    <td></td>  -->
                                    <td><p>It you come, then I will go.</p>
<p>I would be angry, if you are unwilling to eat.</p>
</td>  
                                    <td>
                                        
                                      <?php for($i;$i<21;$i++): ?>
                                        <?php
                                        if(!empty($this->data[7]['SentenceType']['id'])){
                                                                    echo $this->Form->input('7.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                        <?php echo $this->Form->input('7.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('7.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[8])); ?>
                                        <?php echo $this -> Form -> input('7.SentenceType.'.$answerArr[($i-19)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                      <?php endfor; ?>  
                                    </td> 

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td>অস্তিবাচক বা ইতিবাচক/হ্যাঁ –সূচক বাক্য (positive sentence)</td>  
<!--                                    <td></td>  -->
                                    <td><p>I have ate meat.</p>
<p>Come tomorrow.</p>
<p>I will go your home this evening.</p>
</td>  
                                    <td>
                                        
                                      <?php for($i;$i<24;$i++): ?>
                                        <?php
                                        if(!empty($this->data[8]['SentenceType']['id'])){
                                                                    echo $this->Form->input('8.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                        <?php echo $this->Form->input('8.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('8.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[9])); ?>
                                        <?php echo $this -> Form -> input('8.SentenceType.'.$answerArr[($i-21)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                      <?php endfor; ?>  
                                    </td> 

                                </tr>


                                <!---15 row start--->

                                <tr>
                                    <td>নেতিবাচক বাক্য
(Negative sentence)
</td>  
<!--                                    <td></td>  -->
                                    <td></p>I am not a thief.</p>
<p>They aren't coming</p>
<p>I cannot speak Bengali.</p>
</td>  
                                    <td>
                                        
                                      <?php for($i;$i<27;$i++): ?>
                                        <?php
                                        if(!empty($this->data[9]['SentenceType']['id'])){
                                                                    echo $this->Form->input('9.SentenceType.id',array('type'=>'hidden')); 
                                                                }
                                        ?>
                                        <?php echo $this->Form->input('9.SentenceType.personnel_information_id', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$id)); ?>
                                         <?php echo $this->Form->input('9.SentenceType.question', array('type' => 'hidden', 'class' => 'form-control','style' => 'margin-top:3px','value'=>$question_list[10])); ?>
                                        <?php echo $this -> Form -> input('9.SentenceType.'.$answerArr[($i-24)], array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                      <?php endfor; ?>  
                                    </td> 

                                </tr>


                                <!---15 row start--->

<!--                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>It you come, then I will go.

                                        I would be angry, if you are 

                                        unwilling to eat.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                -15 row start-

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>I have ate meat.

                                        Come tomorrow.

                                        I will go your home this 

                                        evening.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                -15 row start-

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>I am not a thief.

                                        They aren't coming

                                        I cannot speak Bengali.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>-->




                            </tbody>
                        </table>  
                        
                        <p></p>
						  <hr></hr>
						<center><button class="btn btn-info">Next>></button></center>
						<?php echo $this->Form->end(); ?>
					</div>	
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
