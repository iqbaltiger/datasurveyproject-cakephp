<style>
    
    .radio-test{padding-left:20px;}
    .radio_question_section{}
    
    .radio_question_section label{padding:0px 10px;}
    
    .radio_question_section > span{float: left;margin-left: 10px;font-weight: bold;}
</style>   
<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Question Type'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12"> 

<h4>
                            PART C: SOCIO-CULTURAL ASPECTS OF LANGUAGE
                        </h4>

                        <p>1. What should be the language medium of conversation among family member?</p>

                        <p>

                            <span>a) Mother tongue <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) Bangla <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) English <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> d) other  <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>   

                        </p>


                        <p>2. What should be the language medium of education?</p>

                        <p>
                            <span>a) Mother tongue <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) Bangla <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) English <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> d) other  <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>     

                        </p>

                        <p>
                            3. What language should be use in temple /prayer house?</p>
                        <p>
                            <span>a) Mother tongue <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) Bangla <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) English <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> d) other  <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>     

                        </p>

                        <p>

                            4. Will you send your child if in a new school provide mother tongue based education at 

                            first and then switched into Bangla and English language medium ? </p>

                        <p>
                            <span>a) Yes <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) No <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?></span>     

                        </p>

                        <p>

                            5. When you speak your mother tongue in presence of the speaker of the dominant/ bangle 

                            language what do you feel?   
                        </p>

                        <p>
                            <span>a) Prestigious <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) Embarrassed <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) Normal <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?></span>     

                        </p>

                        <p>

                            6. How would you feel if your son or daughter married someone who does not know your

                            language?  
                        </p>

                        <p>
                            <span>a) Good <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) indifferent /not so good <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) Bad <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?></span>     

                        </p>

                        <p>

                            7.  What are the major kinds of oral literature/resources available in your language?

                            Instruction:   Only ask literate person and Mark the right box 
                        </p>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>Oral literature</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                        <th>Remark</th>

                                    </tr>


                                </thead>


                                <tbody>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Folk tales</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>


                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Songs</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Religious 

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Radio 

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Film /short film 

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>other

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>




                                <tbody>


                                </tbody>

                            </table>   
                        </div>

                        <p>8.  What materials written about your language?</p>
                        <p>Instruction:  Only ask literate person and Mark the right box.</p>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>Material</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Year of

                                            publication(If 

                                            applicable)</th>

                                        <th>Remark</th>

                                    </tr>


                                </thead>


                                <tbody>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Grammar</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Dictionary</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Textbook</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Newspaper</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Magazine</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Written

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>


                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            folklore</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>


                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Literacy

                                            material</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            other</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>





                                </tbody>
                            </table>
                            
                            <p>9.Instruction: Only ask literate person and Mark the right box.</p>
                             
                            <div class="radio_question_section">
                                
                             
                             <?php 
                                $options = array('M' => 'Male', 'F' => 'Female');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('gender', $options, $attributes); 
                                  
                              ?> 
                          
                            
                            <p>10. Name some organizations which promote your language__________ </p>
                            <div><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false,'style' => 'margin-top:3px')); ?></div>
                          
                            <p>11. What language should your children speak first?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('M' => 'Mother Tongue', 'B' => 'Bangla');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('spoken_language_child', $options, $attributes); 
                                  
                              ?> 
                            <b> C)Other</b>
                           <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'label' => false, 'div' => false)); ?>
                            </span>
                            </p>
                            
                            <p>12. How many languages do you know except your mother tongue?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('One' => 'One', 'two' => 'Two','Three'=>'Three','More'=>'More');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('language_know', $options, $attributes); 
                                  
                              ?> 
                                
                            </span>
                            </p>
                            
                            <p>13. If you know (other languages), which languages do you know?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('Cakma' => 'Cakma', 'Marma' => 'Marma','Mro'=>'Mro','Bangla'=>'Bangla','English'=>'English');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                                  
                              ?> 
                               
                                <b> E)Other</b>
                                <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>
                                
                            </span>
                             
                            </p>
                            
                            <p>14. Except mother tongue, in which language do you feel comfortable for use?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('Bangla'=>'Bangla','Cakma' => 'Cakma','Mro'=>'Mro');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                                  
                              ?> 
                               
                                <b> E)Other</b>
                                <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>
                                
                            </span>
                             
                            </p>
                            
                            
                           <p>15. How do you communicate with other language speaker?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('Mother Tongue'=>'Mother Tongue','Bangla'=>'Bangla','English' => 'English','in their language'=>'in their language');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                                  
                              ?> 
                               
                                <b> E)Other</b>
                                <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>
                                
                            </span>
                             
                            </p>
                            
                            <p>16.  From where did you learn /acquire the language?</p>
                            
                             <p>
                            <span>
                                <?php 
                                $options = array('Family'=>'Family','Village'=>'Village','School' => 'School');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                                  
                              ?> 
                               
                                <b> E)Other</b>
                                <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>
                                
                            </span>
                             
                            </p>
                            
                            <p>17.  Which language do you use most frequently for the following purpose?</p>
                            <p>Instruction: Mark the right box.</p>
                            
                            <?php
                              $table_head = array('Domain','Mother tongue','Language-2 &3');
                              
                              $table_body = array('Counting','Singing','joking','Shopping','Story telling','Discussing','praying','Quarrelling','Abusing/scolding','Family gathering','Village meeting');
                            
                            ?>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <?php for($i=0;$i<count($table_head);$i++): ?>
                                           
                                           <th><?php echo $table_head[$i]; ?></th>
                                     
                                    <?php endfor;?>
                                     </thead>
                                     
                                     <tbody>
                                       <?php for($i=0;$i<count($table_body);$i++): ?>   
                                         <tr>
                                             <td><?php echo $table_body[$i]; ?></td>  
                                             <td> <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                             <td> <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                         </tr>
                                          <?php endfor;?>
                                     </tbody>
                                     
                                     
                                </table>
                            </div>    
                            
                            <p>18. When you use mobile phone, which language is preferable to you?</p>
                            
                             <p>
                            <span>
                                <?php 
                                $options = array('Mother tongue'=>'Mother tongue','Bangla'=>'Bangla','English' => 'English');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>
                                
                                </span>
                                
                              </p>  
                            
                            
                              <p>19. When you watch television or listen to radio, which language medium is easy to understanding for you?</p>
                            
                             <p>
                            <span>
                                <?php 
                                $options = array('Bangla'=>'Bangla','Hindi'=>'Hindi','English' => 'English','Mother Tongue'=>'Mother Tongue','Other'=>'Other');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>
                                
                                </span>
                                
                              </p>
                              
                              <p>20. Does any child of your language community gain the ability to speak in other languages before his/her schooling?</p>
                              
                              <p>
                                  <span>
                                       <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>
                                  </span>   
                              </p>
                            
                              <p>21. Which language?</p>
                              <p>
                                  <span>
                                        <?php 
                                $options = array('Bangla'=>'Bangla');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>
                                  <b> b)Other</b>
                                <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>    
                                  </span>
                                  
                              </p>
                              
                              <p>22. Do young people in your village/ town speak your mother tongue well, the way it thought to be spoken?</p>
                              <p>
                                  
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                              </p> 
                              
                              <p>23. Do you think your next generation could speak in your language?</p>
                              <p>
                                  
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                              </p>
                              
                              <p>24. What language do most parents in your village usually speak with their children?</p>
                              
                               <p>
                                 <span> 
                                <?php 
                                $options = array('Mother Tongue'=>'Mother Tongue','Bangla'=>'Bangla');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                     
                                    <b> b)Other</b>
                                <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>    
                                
                                 </span>     
                              </p>
                              
                              <p>25. Do you know anyone from your community who do not want to speak in own language?</p>
                              
                               <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p>26. Do you know anyone who cannot speak own mother tongue?</p>
                              
                               <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              
                               <p>27.Is there intermarriage in your community?</p>
                              
                               <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              <p>28. If yes which other language groups have common marital relationship with you?</p>
                              
                              <div class="col-lg-3"> <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>    </div>
                              <div class="col-lg-3"> <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>    </div>
                              <div class="col-lg-3"> <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => ' form-control form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>    </div>
                              
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                               <p>29. Do you like your children study in mother tongue?</p>
                              
                               <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              
                               <p>30. Do you think that the language spoken by you is different from your grandparents?</p>
                              
                               <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              <p>31.  If yes, how?</p>
                              
                              <?php 
                               
                                $table_head = array('Difference','Yes','No','Past','Present');
                                
                                $table_body = array('Pronunciation','Vocabulary','Use of specific type of sentences','Mixing of other language','Way of speaking','Other');
                               
                              ?>
                              <table class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                        <?php for($i=0;$i<count($table_head);$i++):?>  
                                          <th><?php echo $table_head[$i];?></th>  
                                         <?php endfor; ?> 
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php for($i=0;$i<count($table_body);$i++):?>
                                    <tr>  
                                      <td><?php echo $table_body[$i];?></td>
                                      <?php for($j=1;$j<count($table_head);$j++):?>
                                      <td> <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                      <?php endfor;?>
                                     </tr> 
                                      <?php endfor; ?> 
                                  </tbody>
                              </table>
                              
                              <p>&nbsp;</p>
                              <p>32.  Do any people of your language community speak differently than you?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              <p>33.Where do they live?</p>
                              
                              <p><span>Place___  <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></span></p>
                              
                              <p>34. In which name they identify their language?</p>
                              
                              <p><span>Place___  <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></span></p>
                              
                              
                              <p>35. Can you understand that language?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p>36.  Has any word/words from your next/ Neighbor/ other language included into your 

mother tongue?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              
                              <p> 37. Have you accepted those words? </p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              <p> 38. Do you have Alternative word for those included words in your language? </p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p> 39. Do your family members use those alternative words? </p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p> 40. Does your language have own writing system? </p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              <p>41.  If no what script(s) is your language written in?</p>
                              <p><span><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></span></p>
                              
                              <p> 42. Do you and other people of your language community accept that script? </p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p>43. Can you read and write in your language?(common question for all) </p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              <p>44. What is the name of your script? (if the language has script)</p>
                              <p><span><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></span></p>
                              
                               <p>45. Do you know how many  alphabets in your script?(own or adopted) </p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p>46. How many alphabets are in that script?(own or adopted)</p>
                              <p><span><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></span></p>
                              
                                <p>47. Does your script have alphabets to write down all sound you utter? </p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              
                                 <p>48. Do you think you can write all sound of your language in Bangla alphabet?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              <p>49. Do you think you can write all sound of your language in Roman alphabet?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p>50.  What do you think is it easy to learn that own script for school going children?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p>51. Is there any punctuation mark in your writing system?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              <p>52. If yes, is it unique?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                               <p>53. Do you have text book written in your language?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p>
                              
                              <p>54. If yes, which alphabet it is written in?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('Bangla'=>'Bangla','Roman' => 'Roman','Own'=>'Own');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                                  
                              ?> 
                               
                                <b> d)Other</b>
                                <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>
                                
                            </span>
                             
                            </p>
                              
                            <p>55. Do you think your language should be written?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Yes'=>'Yes','No'=>'No');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p> 
                            
                            
                            <p>56. If your language does not have any alphabets, which alphabets will you use?</p>
                              
                              <p>
                                 <span> 
                                <?php 
                                $options = array('Bangla'=>'Bangla','Roman'=>'Roman','newly developed alphabet');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                               ?>  
                                 </span>     
                              </p> 
                              
                              <h5>57. STORY TELLING:</h5>
                              <h5>NOTE:</h5>
                              
                              <h5>Read out the story and instruct the participant to retell the story in his very own 

mother tongue, line by line.</h5>
                              
                              <p>
                                  
                                <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?>   
                                  
                              </p>
                              
                           </div> 
                        </div>
                        </div>


                    </div>  
						<hr></hr>
						<button class="btn btn-info">Submit</button>
						<?php echo $this -> Form -> end(); ?>
					</div>
                      </div>
                         </div>
                             </div>   	