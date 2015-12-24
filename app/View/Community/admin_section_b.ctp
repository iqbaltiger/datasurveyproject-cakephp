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
 							<?php echo $this->Form->create('CommunitySectionB',array('class'=>'')) ?>
                                        <?php $location_by_unitlist = array('What is the name of the Division?','What is the name of the District?','What is the name of the Upazila?',
                                            ); ?>
                                        <?php
                                        
                                          $options[0] = array('চট্টগ্রাম বিভাগ','রাজশাহী বিভাগ','খুলনা বিভাগ','বরিশাল বিভাগ','সিলেট বিভাগ','ঢাকা বিভাগ','রংপুর বিভাগ',);
                                          $options[1] = array('কুমিল্লা','ফেনী','ব্রাহ্মণবাড়িয়া','রাঙ্গামাটি');
                                          $options[2] = array('দেবিদ্বার','বরুড়া','ব্রাহ্মণপাড়া','চান্দিনা');
                                          
                                        ?>

						<h4>B-1: LOCATION BY ADMINISTRATIVE UNITS& SETTLEMENTS</h4>
                        <table class="table table-bordered table-striped">

                            <tbody>
                              <?php for($i=0;$i<count($location_by_unitlist);$i++): ?>
                                 	<?php
                                        if (!empty($this->request->data['CommunitySectionBB1Part'][$i]['CommunitySectionBB1Part']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB1Part.'.$i.'.CommunitySectionBB1Part.id', array('type' => 'hidden'));
                                        }
              						?>                              	
                              	
                                <tr>
                                    <td><?php  echo $i+201;?></td>
                                    <td><?php echo $location_by_unitlist[$i]; ?></td>  
                                    <td>
                                    	<?php   
                                    		echo $this->Form->input('CommunitySectionBB1Part.'.$i.'.CommunitySectionBB1Part.question_no',array('type'=>'hidden','value'=>$i+201));  
											echo $this->Form->input('CommunitySectionBB1Part.'.$i.'.CommunitySectionBB1Part.question',array('type'=>'hidden','value'=>$location_by_unitlist[$i])); 
											echo $this->Form->input('CommunitySectionBB1Part.'.$i.'.CommunitySectionBB1Part.interview_id',array('type'=>'hidden','value'=>$interview_id));               
                                        	echo $this ->Form ->input('CommunitySectionBB1Part.'.$i.'.CommunitySectionBB1Part.answer', array('options' => $options[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 			       			?>
			 			       		</td>
                                </tr>         
                                <?php endfor; ?>

								<?php
									$array_first = array(
										'What is the name of the Union/ Municipality?',
										'What is the local name of the primary settlement unit/ locality?',
										'Comments based on observation (if any)',
										'What is the latitude of the center of the primary settlement unit (village/ para/ punji)?',
										'What is the longitude of the center of the primary settlement unit (village/ para/ punji)?',
										'What is the altitude (MASL) of the primary settlement unit (village/ para/ punji)?',
										'Comments based on observation (if any)',
										'Id of the village level questionnaire '
									);
								?>


                                
 								<?php
									for($i=0;$i<count($array_first);$i++):
										$p = $i+3;
								?>
                                <tr>
                                    <td><?php echo $i+204;?></td>
                                    <td><?php echo $array_first[$i];?></td> 
                                    <td>
                                    <?php 
                                       if (!empty($this->request->data['CommunitySectionBB1Part'][$p]['CommunitySectionBB1Part']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.id', array('type' => 'hidden'));
                                        } 		
                                    		
                                    		echo $this->Form->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.question_no',array('type'=>'hidden','value'=>$i+204));  
											echo $this->Form->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.question',array('type'=>'hidden','value'=>'What is the name of the Union/ Municipality?')); 
											echo $this->Form->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.interview_id',array('type'=>'hidden','value'=>$interview_id));                                     
                                   		 	echo $this -> Form -> input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                    ?>
                                    </td>
                                </tr>
								<?php
									endfor;
								?>                               
                                
                                

                            </tbody>
                        </table>   

                        <h4>B-2: DEMOGRAPHIC & CULTURAL COMPOSITION</h4>
						<table class="table table-bordered table-striped">
                            <?php 
                            
                            $array_second = array(
							'How long ago was the primarysettlement unit (village/ punji/ para/ basti/ moholla) established?',
							'How many households live currently in this primary settlement unit (village/ punji/ para/ basti/ moholla)?',
							'How many households lived in the primary settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?',
							'How many households (approx.) living here today/now have moved to the primary settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?',
							'How many households (approx.) have left the primary settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?'
							);
                            
							
							$options[0] = array(
							'00 – 10 Year(s)',
							'11 – 20 Years',
							'21 – 30 Years',
							'31 – 40 Years',
							'41 Years or More'
							);
                            $options[1]= array(
                           	'< 15 HH',
                           	'16 HH – 30 HH',
                           	'31 HH – 50HH',
                           	'51 HH – 75 HH',
                           	'76 HH – 100 HH',
                           	'101 HH – 150 HH',
                           	'151 HH – 200 HH',
                           	'201 HH and Above'
                            );
							
                            $options[2]= array(
                           	'< 15 HH',
                           	'16 HH – 30 HH',
                           	'31 HH – 50 HH',
                           	'51 HH – 75 HH',
                           	'76 HH – 100 HH',
                           	'101 HH – 150 HH',
                           	'151 HH – 200 HH',
                           	'201 HH and Above'
                            );	
							
                            $options[3]= array(
                           	'< 15 HH',
                           	'16 HH – 30 HH',
                           	'31 HH – 50 HH',
                           	'51 HH – 75 HH',
                           	'76 HH – 100 HH',
                           	'101 HH – 150 HH',
                           	'151 HH – 200 HH',
                           	'201 HH and Above'
                            );							
							
							$options[4] = array(
							'< 15 HH',
                           	'16 HH – 30 HH',
                           	'31 HH – 50 HH',
                           	'51 HH – 75 HH',
                           	'76 HH – 100 HH',
                           	'101 HH – 150 HH',
                           	'151 HH – 200 HH',
                           	'201 HH and Above'
							);						
							
                            ?>
                            
                            <?php
                            for($i=0;$i<count($array_second);$i++):
								$p = $i+11;
                            ?>
                            
                             <tr>
                                 <td><?php echo $i+221;?></td>
                                <td><?php echo $array_second[$i];?></td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][$p]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.question_no',array('type'=>'hidden','value'=>$i+251));  
											echo $this->Form->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.question',array('type'=>'hidden','value'=>$array_second[$i])); 
											echo $this->Form->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB1Part.'.$p.'.CommunitySectionBB1Part.answer', array('options' => $options[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>
							<?php
							endfor;
							?>
							
							<?php
								$array_third = array(
								'What is the current population of the primarysettlement unit (village/ punji/ para/ basti/ moholla)?',
								'What was the total population of the primarysettlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?'
								);
							?>
							
							<?php
							for($i=0;$i<count($array_third);$i++):
								$p = $i;
							?>
                                <tr>
                                    <td><?php echo $i+226;?></td>
                                    <td><?php echo $array_third[$i];?></td>
                                   
                     			<?php
                                       if (!empty($this->request->data['CommunitySectionBSecondPart'][$p]['CommunitySectionBSecondPart']['id'])) {
                                            echo $this->Form->input('CommunitySectionBSecondPart.'.$p.'.CommunitySectionBSecondPart.id', array('type' => 'hidden'));
                                        }         	
                             	
                             	
                            		echo $this->Form->input('CommunitySectionBSecondPart.'.$p.'.CommunitySectionBSecondPart.question_no',array('type'=>'hidden','value'=>$i+256));  
									echo $this->Form->input('CommunitySectionBSecondPart.'.$p.'.CommunitySectionBSecondPart.question',array('type'=>'hidden','value'=>$array_third[$i])); 
									echo $this->Form->input('CommunitySectionBSecondPart.'.$p.'.CommunitySectionBSecondPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                               	
                             	?>                                    
                                   
                                   
                                    <td>Male<?php echo $this -> Form -> input('CommunitySectionBSecondPart.'.$p.'.CommunitySectionBSecondPart.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                        Female<?php echo $this -> Form -> input('CommunitySectionBSecondPart.'.$p.'.CommunitySectionBSecondPart.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?> 
                                        Total<?php echo $this -> Form -> input('CommunitySectionBSecondPart.'.$p.'.CommunitySectionBSecondPart.total', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>

                                    </td>
                                </tr>							
							<?php
							endfor;
							?>
							</table>
							<table class="table table-bordered table-striped">

                                <tr>
                                 <?php $question_B_new2 = array(
                                     
                                    'Rites of passage','Calendrical','Magical or religious','Individual sponsored and communally attended (e.g., potlatch)',
                                     'Others- (Please specify below)'
                                     
                                 ); ?>
                                    <td>228</td> 
                                    <td colspan="2">What are the <b>PROMINENT COMMUNITY CEREMONIALS</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?</td>
                                    <td colspan="4">
                                      <?php foreach($question_B_new2 as $key=>$value): ?> 
                                      	
			                             <?php	         
				                               if (!empty($this->request->data['CommunitySectionBThirdPart'][0]['CommunitySectionBThirdPart']['id'])) {
				                                    echo $this->Form->input('CommunitySectionBThirdPart.0.CommunitySectionBThirdPart.id', array('type' => 'hidden'));
				                                }         	
			                            		echo $this->Form->input('CommunitySectionBThirdPart.0.CommunitySectionBThirdPart.question_no',array('type'=>'hidden','value'=>268));  
												echo $this->Form->input('CommunitySectionBThirdPart.0.CommunitySectionBThirdPart.question',array('type'=>'hidden','value'=>'What are the <b>PROMINENT COMMUNITY CEREMONIALS</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?')); 
												echo $this->Form->input('CommunitySectionBThirdPart.0.CommunitySectionBThirdPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
			                            
			                             ?>                                      
                                                                       	
                                      	 
                                        <?php
                                        echo $this->form->input('CommunitySectionBThirdPart.0.CommunitySectionBThirdPart.ans_'.$key,
                                         array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                      <?php echo $this -> Form -> input('CommunitySectionBThirdPart.0.CommunitySectionBThirdPart.other', array('type' => 'text','placeholder'=>'Please write here','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>  
                                        
                                    </td>
                                    
                                </tr>
                                
                                 <tr>
                                 <?php $question_B_new3 = array(
                                     
                                    'Feasting and/or drinking','Exchanges other than food','Entertainment','Sacrifice animals','Sports and Games',
                                     'Others- (Please specify below)'
                                     
                                 ); ?>
                                    <td>229</td> 
                                    <td colspan="2">What are the <b>PROMINENT COMMUNITY CEREMONIAL ELEMENTS</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?</td>
                                    <td colspan="4">
                                      <?php foreach($question_B_new3 as $key=>$value): ?>  
                                      	
                             <?php	         
	                               if (!empty($this->request->data['CommunitySectionBThirdPart'][1]['CommunitySectionBThirdPart']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBThirdPart.1.CommunitySectionBThirdPart.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBThirdPart.1.CommunitySectionBThirdPart.question_no',array('type'=>'hidden','value'=>269));  
									echo $this->Form->input('CommunitySectionBThirdPart.1.CommunitySectionBThirdPart.question',array('type'=>'hidden','value'=>'What are the <b>PROMINENT COMMUNITY CEREMONIAL ELEMENTS</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?')); 
									echo $this->Form->input('CommunitySectionBThirdPart.1.CommunitySectionBThirdPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>                                        	
                                      	
                                      	
                                        <?php
                                       echo $this->form->input('CommunitySectionBThirdPart.1.CommunitySectionBThirdPart.ans_'.$key, array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                      <?php echo $this -> Form -> input('CommunitySectionBThirdPart.1.CommunitySectionBThirdPart.other', array('type' => 'text','placeholder'=>'Please write here','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>  
                                        
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                 <?php $question_B_new4 = array(
                                     
                                    'No centralized local leadership','Higher level only','Single local leader','Dual/plural headmen',
                                     'Single local leader and council','Local councils','Single local leader and subordinates','Too complex to be coded',
                                     'Others- (Please specify below)'
                                     
                                 ); ?>
                                    <td>230</td> 
                                    <td colspan="2">What is the pattern of <b>COMMUNITY LEADERSHIP</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?</td>
                                    <td colspan="4">
                                      <?php foreach($question_B_new4 as $key=>$value): ?> 
                                      	
                                      	
                             <?php	         
	                               if (!empty($this->request->data['CommunitySectionBThirdPart'][2]['CommunitySectionBThirdPart']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBThirdPart.2.CommunitySectionBThirdPart.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBThirdPart.2.CommunitySectionBThirdPart.question_no',array('type'=>'hidden','value'=>270));  
									echo $this->Form->input('CommunitySectionBThirdPart.2.CommunitySectionBThirdPart.question',array('type'=>'hidden','value'=>'What is the pattern of <b>COMMUNITY LEADERSHIP</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?')); 
									echo $this->Form->input('CommunitySectionBThirdPart.2.CommunitySectionBThirdPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>                                       	
                                      	 
                                        <?php
                                       echo $this->form->input('CommunitySectionBThirdPart.2.CommunitySectionBThirdPart.ans_'.$key, array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                      <?php echo $this -> Form -> input('CommunitySectionBThirdPart.2.CommunitySectionBThirdPart.other', array('type' => 'text','placeholder'=>'Please write here','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>  
                                        
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                 <?php $question_B_new5 = array(
                                     
                                    'No headman or council','By appointment','Seniority','Informal consensus','Electoral process','Patrilineal','Matrilineal','Hereditary with personal qualifications',
                                     'Membership of a certain clan',
                                     'Others- (Please specify below)'
                                     
                                 ); ?>
                                    <td>231</td> 
                                    <td colspan="2">What is the pattern of <b>LOCAL POLITICAL SUCCESSION (PRIMARY)</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?</td>
                                    <td colspan="4">
                                      <?php foreach($question_B_new5 as $key=>$value): ?> 
                                      	
                             <?php	         
	                               if (!empty($this->request->data['CommunitySectionBThirdPart'][3]['CommunitySectionBThirdPart']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBThirdPart.3.CommunitySectionBThirdPart.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBThirdPart.3.CommunitySectionBThirdPart.question_no',array('type'=>'hidden','value'=>271));  
									echo $this->Form->input('CommunitySectionBThirdPart.3.CommunitySectionBThirdPart.question',array('type'=>'hidden','value'=>'What is the pattern of <b>LOCAL POLITICAL SUCCESSION (PRIMARY)</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?')); 
									echo $this->Form->input('CommunitySectionBThirdPart.3.CommunitySectionBThirdPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>                                         	
                                      	 
                                        <?php
                                       echo $this->form->input('CommunitySectionBThirdPart.3.CommunitySectionBThirdPart.ans_'.$key, array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                      <?php echo $this -> Form -> input('CommunitySectionBThirdPart.3.CommunitySectionBThirdPart.other', array('type' => 'text','placeholder'=>'Please write here','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>  
                                        
                                    </td>
                                    
                                </tr>
                                
                                
                                <tr>
                                 <?php $question_B_new6 = array(
                                     
                                    'No headman or council','By appointment','Seniority','Informal consensus','Electoral process','Patrilineal','Matrilineal','Hereditary with personal qualifications',
                                     'Membership of a certain clan','Others- (Please specify below)',
                                     'Others- (Please specify below)'
                                     
                                 ); ?>
                                    <td>232</td> 
                                    <td colspan="2">What is the pattern of <b>LOCAL POLITICAL SUCCESSION (SECONDARY UNIT)</b>?</td>
                                    <td colspan="4">
                                      <?php foreach($question_B_new6 as $key=>$value): ?>  
                                      	
                             <?php	         
	                               if (!empty($this->request->data['CommunitySectionBThirdPart'][4]['CommunitySectionBThirdPart']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBThirdPart.4.CommunitySectionBThirdPart.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBThirdPart.4.CommunitySectionBThirdPart.question_no',array('type'=>'hidden','value'=>272));  
									echo $this->Form->input('CommunitySectionBThirdPart.4.CommunitySectionBThirdPart.question',array('type'=>'hidden','value'=>'What is the pattern of <b>LOCAL POLITICAL SUCCESSION (SECONDARY UNIT)')); 
									echo $this->Form->input('CommunitySectionBThirdPart.4.CommunitySectionBThirdPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>                                       	
                                      	
                                        <?php
                                        echo $this->form->input('CommunitySectionBThirdPart.4.CommunitySectionBThirdPart.ans_'.$key, array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                      <?php 
                                     	 echo $this -> Form -> input('CommunitySectionBThirdPart.4.CommunitySectionBThirdPart.other', array('type' => 'text','placeholder'=>'Please write here','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                      ?>  
                                        
                                    </td>
                                    
                                </tr>
                                
                                 <tr>
                                 <?php $question_B_new7 = array(
                                     
                                    'Absence among community','Wealth distinctions','Elite (based on control of land or other resources)',
                                     'Dual (hereditary aristocracy and commoners)','Complex stratification into three or more classes/ castes',
                                     
                                     'Others- (Please specify below)'
                                     
                                 ); ?>
                                    <td>233</td> 
                                    <td colspan="2">What is the nature of social stratification within the <b>Primary Settlement Unit</b>(village/ punji/ para/ basti/ moholla)</b>?</td>
                                    <td colspan="4">
                                      <?php foreach($question_B_new7 as $key=>$value): ?>  
                                      	
                             <?php	         
	                               if (!empty($this->request->data['CommunitySectionBThirdPart'][5]['CommunitySectionBThirdPart']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBThirdPart.5.CommunitySectionBThirdPart.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBThirdPart.5.CommunitySectionBThirdPart.question_no',array('type'=>'hidden','value'=>273));  
									echo $this->Form->input('CommunitySectionBThirdPart.5.CommunitySectionBThirdPart.question',array('type'=>'hidden','value'=>'What is the nature of social stratification within the <b>Primary Settlement Unit</b>(village/ punji/ para/ basti/ moholla)</b>?')); 
									echo $this->Form->input('CommunitySectionBThirdPart.5.CommunitySectionBThirdPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>                                         	
                                      	
                                        <?php
                                        echo $this->form->input('CommunitySectionBThirdPart.5.CommunitySectionBThirdPart.ans_'.$key, array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                      <?php echo $this -> Form -> input('CommunitySectionBThirdPart.5.CommunitySectionBThirdPart.other', array('type' => 'text','placeholder'=>'Please write here','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>  
                                        
                                    </td>
                                    
                                </tr>
                                
                                 <tr>
                                 <?php $question_B_new8 = array(
                                     
                                    'Absence among community','Wealth distinctions','Elite (based on control of land or other resources)',
                                     'Dual (hereditary aristocracy and commoners)','Complex stratification into three or more classes/ castes',
                                     
                                     'Others- (Please specify below)'
                                     
                                 ); ?>
                                    <td>234</td> 
                                    <td colspan="2">What is the nature of social stratification within <b>Larger Society</b>?</td>
                                    <td colspan="4">
                                      <?php foreach($question_B_new8 as $key=>$value): ?> 
                                      	
                             <?php	         
	                               if (!empty($this->request->data['CommunitySectionBThirdPart'][6]['CommunitySectionBThirdPart']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBThirdPart.6.CommunitySectionBThirdPart.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBThirdPart.6.CommunitySectionBThirdPart.question_no',array('type'=>'hidden','value'=>274));  
									echo $this->Form->input('CommunitySectionBThirdPart.6.CommunitySectionBThirdPart.question',array('type'=>'hidden','value'=>'What is the nature of social stratification within <b>Larger Society</b>?')); 
									echo $this->Form->input('CommunitySectionBThirdPart.6.CommunitySectionBThirdPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>                                         	
                                      	
                                      	 
                                        <?php
                                        echo $this->form->input('CommunitySectionBThirdPart.6.CommunitySectionBThirdPart.ans_'.$key, array(
                                            'label' => false,
                                            'value'=>$value,
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                      <?php echo $this -> Form -> input('CommunitySectionBThirdPart.6.CommunitySectionBThirdPart.other', array('type' => 'text','placeholder'=>'Please write here','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>  
                                        
                                    </td>
                                    
                                </tr>
                                							
							
							
							
                        </table>

                        <hr></hr>
                        <button class="btn btn-info">Submit</button>
                       <?php echo $this -> Form -> end(); ?>                                    

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>