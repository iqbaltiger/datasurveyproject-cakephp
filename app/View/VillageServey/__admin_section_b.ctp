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
										'What is the local name of the settlement unit/ locality?',
										'Comments based on observation (if any)'
									);
								?>
								
								<?php
									for($i=0;$i<count($array_first);$i++):
								?>
                                <tr>
                                    <td><?php echo $i+204;?></td>
                                    <td><?php echo $array_first[$i];?></td> 
                                    <td>
                                    <?php 
                                       if (!empty($this->request->data['CommunitySectionBB1Part'][3]['CommunitySectionBB1Part']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB1Part.3.CommunitySectionBB1Part.id', array('type' => 'hidden'));
                                        } 		
                                    		
                                    		echo $this->Form->input('CommunitySectionBB1Part.3.CommunitySectionBB1Part.question_no',array('type'=>'hidden','value'=>204));  
											echo $this->Form->input('CommunitySectionBB1Part.3.CommunitySectionBB1Part.question',array('type'=>'hidden','value'=>'What is the name of the Union/ Municipality?')); 
											echo $this->Form->input('CommunitySectionBB1Part.3.CommunitySectionBB1Part.interview_id',array('type'=>'hidden','value'=>$interview_id));                                     
                                   		 	echo $this -> Form -> input('CommunitySectionBB1Part.3.CommunitySectionBB1Part.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                    ?>
                                    </td>
                                </tr>
								<?php
									endfor;
								?>
                            </tbody>
                        </table>   

                        <h4>B-2: LOCATION BY TYPES AND PATTERNS OF SETTLEMENTS </h4>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>211</td>
                                <td>Major settlement type </td>  
                                <td>
                                	<?php
                                       if (!empty($this->request->data['CommunitySectionBB2Location'][0]['CommunitySectionBB2Location']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB2Location.0.CommunitySectionBB2Location.id', array('type' => 'hidden'));
                                        }                                 	
                                        	$options = array('Rural Settlement','Urban Settlement');
                                    		echo $this->Form->input('CommunitySectionBB2Location.0.CommunitySectionBB2Location.question_no',array('type'=>'hidden','value'=>211));  
											echo $this->Form->input('CommunitySectionBB2Location.0.CommunitySectionBB2Location.question',array('type'=>'hidden','value'=>'Major settlement type')); 
											echo $this->Form->input('CommunitySectionBB2Location.0.CommunitySectionBB2Location.interview_id',array('type'=>'hidden','value'=>$interview_id));               
                                        	echo $this ->Form ->input('CommunitySectionBB2Location.0.CommunitySectionBB2Location.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));                                        
			 			       		?>
			 			       </td>  
                            </tr>
                            
                            <tr>
                                <td>212</td>
                                <td>If rural settlement, what is the type and pattern?</td>  
                                <td>
                                	<?php
                                       if (!empty($this->request->data['CommunitySectionBB2Location'][1]['CommunitySectionBB2Location']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB2Location.1.CommunitySectionBB2Location.id', array('type' => 'hidden'));
                                        }                                 	
                                  		  $options = array('Linear pattern ','Rectangular pattern',
                                                     'Circular pattern','Square pattern','Radial pattern',
                                                     'Checker board pattern','Elongated pattern','Fan shaped pattern');
                                    		echo $this->Form->input('CommunitySectionBB2Location.1.CommunitySectionBB2Location.question_no',array('type'=>'hidden','value'=>212));  
											echo $this->Form->input('CommunitySectionBB2Location.1.CommunitySectionBB2Location.question',array('type'=>'hidden','value'=>'If rural settlement, what is the type and pattern?')); 
											echo $this->Form->input('CommunitySectionBB2Location.1.CommunitySectionBB2Location.interview_id',array('type'=>'hidden','value'=>$interview_id));               
                                        	echo $this ->Form ->input('CommunitySectionBB2Location.1.CommunitySectionBB2Location.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));                                     
			 			       		?>
			 			       
			 			       </td>  
                            </tr>
                                <?php 
                                $survey_207_211 = array('What is the local name of the settlement unit (village/ para/ punji)?','What is the latitude of the center of the settlement unit (village/ para/ punji)?','What is the longitude of the center of the settlement unit (village/ para/ punji)?',
                                    'What is the altitude (MASL) of the settlement unit (village/ para/ punji)?','Comments based on observation (if any)'  
                                    
                                    );
								 ?>

                             <?php for($i=0;$i<count($survey_207_211);$i++): ?>
                             	<?php
                             		$j = $i+2;
                                       if (!empty($this->request->data['CommunitySectionBB2Location'][$j]['CommunitySectionBB2Location']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.id', array('type' => 'hidden'));
                                        }         	
                             	?>
                             	
                            <tr>
                                <td><?php echo $i+213;?></td>
                                <td><?php echo $survey_207_211[$i]; ?></td>
                                <td>
                                	<?php 
                                		
                                    		echo $this->Form->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.question_no',array('type'=>'hidden','value'=>$i+213));  
											echo $this->Form->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.question',array('type'=>'hidden','value'=>$survey_207_211[$i])); 
											echo $this->Form->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.interview_id',array('type'=>'hidden','value'=>$interview_id));               
                                        	echo $this ->Form ->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));                                	
                                	
                                	?>
                                </td>
                            </tr>
                            <?php endfor; ?>
                            
                            <tr>
                                <td>218</td>
                                <td>If Urban settlement, what is the type and class of settlement type based on population size?</td>  
                                <td>
                                <?php
                                
                               if (!empty($this->request->data['CommunitySectionBB2Location'][7]['CommunitySectionBB2Location']['id'])) {
                                    echo $this->Form->input('CommunitySectionBB2Location.7.CommunitySectionBB2Location.id', array('type' => 'hidden'));
                                }                                 
                                
	                            $options = array('Town/Class I (Less than 5,000)','Town/Class II (5,000 – 9,999)',
	                                             'Town/Class III (10,000 – 19,999)','Town/Class IV (20,000 – 49,999)',
	                                              'Class IV (50,000 – 99,999)','City (population between one lakh to one million)',
	                                              'Metropolitan City (population in between one million to five million)','Mega City (more than 5 million population)'
	                                );
	                          
								echo $this->Form->input('CommunitySectionBB2Location.7.CommunitySectionBB2Location.question_no',array('type'=>'hidden','value'=>218));  
								echo $this->Form->input('CommunitySectionBB2Location.7.CommunitySectionBB2Location.question',array('type'=>'hidden','value'=>'If Urban settlement, what is the type and class of settlement type based on population size?')); 
								echo $this->Form->input('CommunitySectionBB2Location.7.CommunitySectionBB2Location.interview_id',array('type'=>'hidden','value'=>$interview_id));               
                            	echo $this ->Form ->input('CommunitySectionBB2Location.7.CommunitySectionBB2Location.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));                                        
			 			       ?>
			 			       
			 			       
			 			       
			 			       
			 			       </td>  
                            </tr>
                            

                            <!-------Gap For Drop DOwn Menu------>

                             <?php 
                             $survey_207_211 = array('What is the name of the urban locality (para/ basti/ moholla)?','What is the latitude of the center of the urban locality (para/ basti/ moholla)?',
                                'What is the longitude of the center of the urban locality (para/ basti/ moholla)?','What is the altitude (MASL) of the urban locality (para/ basti/ moholla)?',
                                 'Comments based on observation (if any)'
                                
                                ); 
                             ?>

                           <?php for($i=0;$i<count($survey_207_211);$i++): ?>
                           	
                             	<?php
                             		$j = $i+8;
                                       if (!empty($this->request->data['CommunitySectionBB2Location'][$j]['CommunitySectionBB2Location']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.id', array('type' => 'hidden'));
                                        }         	
                             	?>                           	
                            <tr>
                                <td><?php echo $i+219; ?></td>
                                <td><?php echo $survey_207_211[$i]; ?></td>
                                <td>
                            	<?php 
                            		echo $this->Form->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.question_no',array('type'=>'hidden','value'=>$i+219));  
									echo $this->Form->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.question',array('type'=>'hidden','value'=>$survey_207_211[$i])); 
									echo $this->Form->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.interview_id',array('type'=>'hidden','value'=>$interview_id));               
                                	echo $this ->Form ->input('CommunitySectionBB2Location.'.$j.'.CommunitySectionBB2Location.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));                            	
                            	
                            	?>
                                	</td>
                            </tr>
                           <?php endfor; ?>

                        </table>

                        <h4>B-3: DEMOGRAPHIC INFORMATION</h4>
                        <table class="table table-bordered table-striped">
                            <?php 
                            
                            $array_second = array(
							'How many households live currently in this primary settlement Unit (village/ punji/ para/ basti/ moholla) center?',
							'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?',
							'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?',
							'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?',
							'How long ago was the settlement unit (village/ punji/ para/ basti/ moholla) established?'
							);
                            
                            $options[0]= array(
                           	'< 15 HH',
                           	'16 HH – 30 HH',
                           	'31 HH – 50HH',
                           	'51 HH – 75 HH',
                           	'76 HH – 100 HH',
                           	'101 HH – 150 HH',
                           	'151 HH – 200 HH',
                           	'201HHand Above'
                            );
							
                            $options[1]= array(
                           	'< 15 HH',
                           	'16 HH – 30 HH',
                           	'31 HH – 50HH',
                           	'51 HH – 75 HH',
                           	'76 HH – 100 HH',
                           	'101 HH – 150 HH',
                           	'151 HH – 200 HH',
                           	'201HHand Above'
                            );	
							
							$options[2] = array(
								'01HH – 10HH',
								'11HH – 20 HH',
								'21 HH – 30HH',
								'31 HH – 40HH',
								'41HH – 50 HH',
								'51 HHand Above'
							);						
							
							$options[3] = array(
								'01HH – 10HH',
								'11HH – 20 HH',
								'21 HH – 30HH',
								'31 HH – 40HH',
								'41HH – 50 HH',
								'51 HHand Above'
							);							
							
							$options[4] = array(
								'00 – 10 Year(s)',
								'11 – 20 Years',
								'21 – 30 Years',
								'31 – 40 Years',
								'41 – 50 Years',
								'51 YearsorMore'
							);
							
                            ?>
                            
                            <?php
                            for($i=0;$i<count($array_second);$i++):
                            ?>
                            
                             <tr>
                                 <td><?php echo $i+231;?></td>
                                <td><?php echo $array_second[$i];?></td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('options' => $options[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>
							<?php
							endfor;
							?>
							
							<?php
								$array_third = array(
								'What is the current population of the settlement unit (village/ punji/ para/ basti/ moholla)?',
								'What was the total population of the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?'
								);
							?>
							
							<?php
							for($i=0;$i<count($array_third);$i++):
							?>
                                <tr>
                                    <td><?php echo $i+236;?></td>
                                    <td><?php echo $array_third[$i];?></td>
                                   
                     			<?php
                                       if (!empty($this->request->data['CommunitySectionBB4DemographicSecondPart'][0]['CommunitySectionBB4DemographicSecondPart']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB4DemographicSecondPart.0.CommunitySectionBB4DemographicSecondPart.id', array('type' => 'hidden'));
                                        }         	
                             	
                             	
                            		echo $this->Form->input('CommunitySectionBB4DemographicSecondPart.0.CommunitySectionBB4DemographicSecondPart.question_no',array('type'=>'hidden','value'=>256));  
									echo $this->Form->input('CommunitySectionBB4DemographicSecondPart.0.CommunitySectionBB4DemographicSecondPart.question',array('type'=>'hidden','value'=>'What is the current population of the settlement unit (village/ punji/ para/ basti/ moholla)?')); 
									echo $this->Form->input('CommunitySectionBB4DemographicSecondPart.0.CommunitySectionBB4DemographicSecondPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                               	
                             	?>                                    
                                   
                                   
                                    <td>Male_<?php echo $this -> Form -> input('CommunitySectionBB4DemographicSecondPart.0.CommunitySectionBB4DemographicSecondPart.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                        Female_<?php echo $this -> Form -> input('CommunitySectionBB4DemographicSecondPart.0.CommunitySectionBB4DemographicSecondPart.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?> 
                                        Total_<?php echo $this -> Form -> input('CommunitySectionBB4DemographicSecondPart.0.CommunitySectionBB4DemographicSecondPart.total', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>

                                    </td>
                                </tr>							
							<?php
							endfor;
							?>
                        </table>

                        <h4>B-4: ETHNIC AND CULTURAL COMPOSITION OF THE SETTLEMENT UNIT</h4>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td width="7%"><p>241 </p></td>
                                <td width="75%" colspan="5"><p>How many different INDIGENOUS/ETHNIC GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?</p></td>
                                 
                                   <td width="16%">
                                     	<?php 
                                          if (!empty($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartOne'][0]['CommunitySectionBB5EthnicCulturalUnitPartOne']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.0.CommunitySectionBB5EthnicCulturalUnitPartOne.id', array('type' => 'hidden'));
                                       	 } 
                                    		echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.0.CommunitySectionBB5EthnicCulturalUnitPartOne.question_no',array('type'=>'hidden','value'=>261));  
											echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.0.CommunitySectionBB5EthnicCulturalUnitPartOne.question',array('type'=>'hidden','value'=>'How    many different INDIGENOUS/ETHNIC GROUPS are living in the settlement unit (village/para/ basti/ moholla)?')); 
											echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.0.CommunitySectionBB5EthnicCulturalUnitPartOne.interview_id',array('type'=>'hidden','value'=>$interview_id));           	
                                    	echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartOne.0.CommunitySectionBB5EthnicCulturalUnitPartOne.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                    	?></td>                                  
                                 
                            </tr>
                            
                            
                            <tr>
                                <td width="7%"><p>242 </p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/ punji/ para/ basti/ moholla)?</p></td>
                            </tr>
                            <tr>
                                <td width="7%" rowspan="8"><p>&nbsp;</p></td>
                                <td width="18%" rowspan="2"><p>Name    of the Group </p></td>
                                <td width="18%" rowspan="2"><p>Total    Number of Households </p></td>
                                <td width="37%" colspan="3"><p align="center">Total    Population </p></td>
                                <td width="16%" rowspan="2"><p align="center"><em>Comments (if any)</em></p></td>
                            </tr>
                            <tr>
                                <td width="12%"><p>Male </p></td>
                                <td width="12%"><p>Female </p></td>
                                <td width="12%"><p>Total </p></td>
                            </tr>
                            
                            <?php 
                            for($i=0;$i<=5;$i++):
                           
	                               if (!empty($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartTwo'][$i]['CommunitySectionBB5EthnicCulturalUnitPartTwo']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.question_no',array('type'=>'hidden','value'=>262));  
									echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.question',array('type'=>'hidden','value'=>'Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/Punji/ para/ basti/ moholla)?')); 
									echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.group_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.total_household', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.total_pupulation', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartTwo.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartTwo.comment', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <?php
                            endfor;
                            ?>
                            <tr>
                                <td width="7%"><p>243 </p></td>
                                <td width="75%" colspan="5"><p>How many different OCCUPATIONAL GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?</p></td>
                                   <td width="16%">
                                     	<?php 
                                          if (!empty($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartOne'][1]['CommunitySectionBB5EthnicCulturalUnitPartOne']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.1.CommunitySectionBB5EthnicCulturalUnitPartOne.id', array('type' => 'hidden'));
                                       	 } 
                                    		echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.1.CommunitySectionBB5EthnicCulturalUnitPartOne.question_no',array('type'=>'hidden','value'=>263));  
											echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.1.CommunitySectionBB5EthnicCulturalUnitPartOne.question',array('type'=>'hidden','value'=>'How    many different OCCUPATIONAL GROUPS are living in the settlement unit (village/    para/ basti/ moholla)?')); 
											echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.1.CommunitySectionBB5EthnicCulturalUnitPartOne.interview_id',array('type'=>'hidden','value'=>$interview_id));           	
                                    	echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartOne.1.CommunitySectionBB5EthnicCulturalUnitPartOne.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                    	?></td>                                 
                            </tr>
                           
                           
                           
                           
                            <tr>
                                <td width="7%"><p>244 </p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the OCCUPATIONAL GROUPS livening currently in this settlement unit (village/ punji/ para/ basti/ moholla)?</p></td>
                            </tr>
                            <tr>
                                <td width="7%" rowspan="6"><p>&nbsp;</p></td>
                                <td width="18%" rowspan="2"><p>Name    of the Group </p></td>
                                <td width="18%" rowspan="2"><p>Total    Number of Households </p></td>
                                <td width="37%" colspan="3"><p align="center">Total    Population </p></td>
                                <td width="16%" rowspan="2"><p align="center"><em>Comments (if any)</em></p></td>
                            </tr>
                            <tr>
                                <td width="12%"><p>Male </p></td>
                                <td width="12%"><p>Female </p></td>
                                <td width="12%"><p>Total </p></td>
                            </tr>
                            <?php 
                            for($i=0;$i<=3;$i++):
                           
	                               if (!empty($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartThree'][$i]['CommunitySectionBB5EthnicCulturalUnitPartThree']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.question_no',array('type'=>'hidden','value'=>264));  
									echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.question',array('type'=>'hidden','value'=>'Name and number of households of the OCCUPATIONAL GROUPS living currently in this settlement unit (village/punji/para/ basti/ moholla)?')); 
									echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.group_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.total_household', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.total_pupulation', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.comment', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <?php
                            endfor;
                            ?>
                          
                            <tr>
                                <td width="7%"><p>245 </p></td>
                                <td width="75%" colspan="5"><p>How many different MINORITY RELIGIOUS/ CASTES GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?</p></td>
                                   <td width="16%">
                                     	<?php 
                                          if (!empty($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartOne'][2]['CommunitySectionBB5EthnicCulturalUnitPartOne']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.2.CommunitySectionBB5EthnicCulturalUnitPartOne.id', array('type' => 'hidden'));
                                       	 } 
                                    		echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.2.CommunitySectionBB5EthnicCulturalUnitPartOne.question_no',array('type'=>'hidden','value'=>265));  
											echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.2.CommunitySectionBB5EthnicCulturalUnitPartOne.question',array('type'=>'hidden','value'=>'How many different MINORITY RELIGIOUS/ CASTES GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?')); 
											echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartOne.2.CommunitySectionBB5EthnicCulturalUnitPartOne.interview_id',array('type'=>'hidden','value'=>$interview_id));           	
                                    	echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartOne.2.CommunitySectionBB5EthnicCulturalUnitPartOne.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                    	?></td>                                 
                            </tr>
                           
                           
                           
                            <tr>
                                <td width="7%"><p>246<a name="_GoBack" id="_GoBack"></a></p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the MINORITY RELIGIOUS/ CASTES GROUPS livening currently in this settlement unit (village/ punji/ para/ basti/ moholla)?</p></td>
                            </tr>
                            <tr>
                                <td width="7%" rowspan="5"><p>&nbsp;</p></td>
                                <td width="18%" rowspan="2"><p>Name    of the Group </p></td>
                                <td width="18%" rowspan="2"><p>Total    Number of Households </p></td>
                                <td width="37%" colspan="3"><p align="center">Total    Population </p></td>
                                <td width="16%" rowspan="2"><p align="center"><em>Comments (if any)</em></p></td>
                            </tr>
                            <tr>
                                <td width="12%"><p>Male </p></td>
                                <td width="12%"><p>Female </p></td>
                                <td width="12%"><p>Total </p></td>
                            </tr>
                            <?php 
                            for($i=0;$i<=2;$i++):
                           
	                               if (!empty($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartForth'][$i]['CommunitySectionBB5EthnicCulturalUnitPartForth']['id'])) {
	                                    echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.question_no',array('type'=>'hidden','value'=>266));  
									echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.question',array('type'=>'hidden','value'=>'Name and number of households of the    MINORITY RELIGIOUS/ CASTES GROUPS living currently in this settlement unit (village/punji/ para/ basti/ moholla)?')); 
									echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.interview_id',array('type'=>'hidden','value'=>$interview_id));                            
                            
                             ?>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.group_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.total_household', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.total_pupulation', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.comment', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <?php
                            endfor;
                            ?>   
                        </table>
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr><td colspan="8"><b>Present community situation of Religious composition (conversion from preclassical to classical)</b></td></tr>
                                <tr> <th class="first_row_bg" rowspan="8">&nbsp;</th> </tr>
                                <tr> 
                                   
                                    <th rowspan="2">Followers (Household)</th>
                                    <th rowspan="2">PRECLASSICAL</th>  
                                    <th colspan="5"><center>EXTENT OF CONVERSION TO CLASSICAL RELIGIONS</center></th>  
                                </tr>
                                
                                <tr>
                                    
                                    <th>Christianity</th> 
                                    <th>Buddhism</th>
                                    <th>Hinduism</th>  
                                    <th>Islam</th>
                                    <th>Others</th>
                                    
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr> <td rowspan="8">&nbsp;247</td> </tr>
                               
                                <?php $followers_list = array(
                                    '00 – 19%','20 – 39%','40 – 59%','60 – 79%','80 – 99%','100%'
                                ); ?>
                                
                                <?php foreach($followers_list as $key=>$data): ?>
                                 <tr> 
                                     
                                     <td><?php echo $data; ?></td>
                                    <?php for($i=0;$i<5;$i++): ?>
                                    	
                                   <?php
										   if (!empty($this->request->data['CommunitySectionGPartOne'][$i]['CommunitySectionGPartOne']['id'])) {
			                                    echo $this->Form->input('CommunitySectionGPartOne.'.$i.'.CommunitySectionGPartOne.id', array('type' => 'hidden'));
			                                }    
										        	
		                            		echo $this->Form->input('CommunitySectionGPartOne.'.$i.'.CommunitySectionGPartOne.question_no',array('type'=>'hidden','value'=>701));  
											echo $this->Form->input('CommunitySectionGPartOne.'.$i.'.CommunitySectionGPartOne.question',array('type'=>'hidden','value'=>$followers_list[$key])); 
											echo $this->Form->input('CommunitySectionGPartOne.'.$i.'.CommunitySectionGPartOne.interview_id',array('type'=>'hidden','value'=>$interview_id));                                   
                                   
                                   ?> 	
                                    	
                                    <td>
                                    	
                                    	<?php
                                        echo $this->form->input('CommunitySectionGPartOne.'.$i.'.CommunitySectionGPartOne.ans_'.$i, 
                                        array(
                                            'label' => false,

                                            'type' => 'checkbox','div' => false
                                        ));
                                        ?>
                                        
                                        </td>

                                        
                                        
                                   <?php endfor; ?> 
                                   <td><?php echo $this->Form->input('CommunitySectionGPartOne.'.$i.'.CommunitySectionGPartOne.question_no',array('type'=>'text','label'=>false));?></td>
                                   
                                </tr>
                                <?php endforeach;?>
                                
                                </tbody>
                                </table>                                
                                
                                
                                <table class="table table-bordered table-striped">
                                 <tbody>
                                <?php
                                $array_fourth = array(
								'Lacking or low compared to community segments or larger polity',
								'By common residence only',
								'Overlapping Kin ties',
								'Common social or economic status',
								'Common Identity, dialect, subculture',
								'Common political ties',
								'Common religious ties',
								'Others- (Please specify below)'
								);
                                ?>
                                
                                
                             <tr>
                                 <td><?php echo 248;?></td>
                                <td>What are the basis of community integration of settlement Unit (village/ punji/ para/ basti/ moholla)?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('options' => $array_fourth, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>                                
                                
                                </tbody>
                                </table>  
                                
                          <h4>B-5: INFRASTRUCTURE </h4>      
                                
                           <?php
                           
                           $question_array = array(
						   	'How many households (approx.) in the settlement unit (village/ punji/ para/ basti/ moholla) have access to (=use) safe drinking water?',
						   	'What are the major sources of drinking water for the majority population of the settlement unit (villagers/ punji/ para/ basti/ moholla)?'
						   );
                           
                           $options_array[0] = array(
						   	'No Safe Drinking Water',
						   	'01% – 20%',
						   	'21%  – 40%',
						   	'41%  – 60%',
						   	'61%  – 80%',
						   	'80%  – 100%'
						   );
						   
						   $options_array[1] = array(
						   	'Supply Water/ Tap',
						   	'Deep Tube-well',
						   	'Tubewell',
						   	'Surface Water (Pond/ River/ Haor)',
						   	'Spring Water/ Chora/ Jorna',
						   	'Well/ Ring Well',
						   	'Others'
						   );
						   
                           ?>  
                           
                                
                                <table class="table table-bordered table-striped">
                                 <tbody>                           
                            <?php
                            for($i=0;$i<count($question_array);$i++):
                            ?>
                            
                             <tr>
                                 <td><?php echo $i+251;?></td>
                                <td><?php echo $question_array[$i];?></td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('options' => $options_array[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>
							<?php
							endfor;
							?>      
							<?php
							
						$questtions = array(
						'How many households (approx.) in the settlement unit (village/ punji/ para/ basti/ moholla) have access to electricity (from public or private suppliers)?',
						'Is there any public/ Govt. health center in the settlement unit (village/ punji/ para/ basti/ moholla)?',
						'Is there any NGO health center in the settlement unit (village/ punji/ para/ basti/ moholla)?'
						
						);	
						$options_arrays[0] = array(
						   	'No Electricity',
						   	'01% – 20%',
						   	'21%  – 40%',
						   	'41%  – 60%',
						   	'61%  – 80%',
						   	'80%  – 100%'
						   );
						   $options_arrays[1] = array('Yes','No');
						   $options_arrays[2] = array('Yes','No');
						   $options_arrays[3] = array('Yes','No');
						   $options_arrays[4] = array('Yes','No');
							
							?>		
                            <?php
                            for($i=0;$i<count($questtions);$i++):
                            ?>
                            
                             <tr>
                                 <td><?php echo $i+253;?></td>
                                <td><?php echo $questtions[$i];?></td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('options' => $options_arrays[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>
							<?php
							endfor;
							?>							
							
                             <tr>
                                 <td>256</td>
                                <td>Is there any NGO health center in the settlement unit (village/ punji/ para/ basti/ moholla)?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>	
                            
                            						
                             <tr>
                                 <td>257</td>
                                <td>Does the settlement unit (village/ punji/ para/ basti/ moholla) have at least one road useable by cars during all seasons?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('options' => $options_arrays[3], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>							
							
							
                             <tr>
                                 <td>258</td>
                                <td>If ‘no’: what is the distance in kilometers to the nearest road usable during all seasons?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>	
                            
                            						
                             <tr>
                                 <td>259</td>
                                <td>Is there a river within the settlement unit (village/ punji/ para/ basti/ moholla) boundaries that is navigable during all seasons? </td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('options' => $options_arrays[3], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>							
                             <tr>
                                 <td>260</td>
                                <td>If ‘no’: what is the distance to the nearest river that is navigable during all seasons?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>							
							         
                             <tr>
                             	
                             	<?php
                             	$mobile_operator = array(
									'Teletalk',
									'City Cell',
									'Robi',
									'Banglalink',
									'Grameen',
									'Airtel',
									'Indian/ Myanmar Phone network'
								
								);
                             	?>
                             	
                                 <td>261</td>
                                <td>What are the available Cell phone Network in the settlement unit (village/ punji/ para/ basti/ moholla) center?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['CommunitySectionBB3Infrastructure'][1]['CommunitySectionBB3Infrastructure']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question_no',array('type'=>'hidden','value'=>232));  
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.interview_id',array('type'=>'hidden','value'=>$interview_id));                                 	
                                       		echo $this ->Form ->input('CommunitySectionBB3Infrastructure.1.CommunitySectionBB3Infrastructure.answer', array('options' => $mobile_operator, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>							         
							                     
                                 </tbody>
                                </table>    
                                
                                
                                                 <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>243.</th>
                                    <th colspan="4">What is the distance from the settlement unit (village/ punji/ para/ basti/ moholla)center to the nearest facilities as mentioned below …(in km and in minutes by most common means of transport)</th>
                                </tr>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Place/ Facilities</th>
                                    <th>Distance from settlement unit center (in Km.)</th>
                                    <th>Most Common Means of Transport</th>
                                    <th>Estimated Time to Reach (in minutes)</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                $palces_list = array('Weekly Hat/ Bazaar','Bazaar for buying major consumption goods','Bazaar where agricultural products are sold',
                                                            'Primary School','Secondary School','College'); 
                                
                               $drop_down_text = array(
                                   'Walk/ on foot','Animal Cart/ Cow cart etc','Van/ Rickshaw/ Cycle','Boat','Motor car/ bike/ Auto-rickshaw/ light vehicle',
                                   'Bus/ mini bus/ Truck'
                                   
                                   
                               );      
                                ?>

                                <?php for($i=0;$i<count($palces_list);$i++): ?>
                     			<?php
                                       if (!empty($this->request->data['CommunitySectionBB3InfrastructureSecondPart'][$i]['CommunitySectionBB3InfrastructureSecondPart']['id'])) {
                                            echo $this->Form->input('CommunitySectionBB3InfrastructureSecondPart.'.$i.'.CommunitySectionBB3InfrastructureSecondPart.id', array('type' => 'hidden'));
                                        }         	
                             	
                             	
                            		echo $this->Form->input('CommunitySectionBB3InfrastructureSecondPart.'.$i.'.CommunitySectionBB3InfrastructureSecondPart.question_no',array('type'=>'hidden','value'=>$i+244));  
									echo $this->Form->input('CommunitySectionBB3InfrastructureSecondPart.'.$i.'.CommunitySectionBB3InfrastructureSecondPart.question',array('type'=>'hidden','value'=>$palces_list[$i])); 
									echo $this->Form->input('CommunitySectionBB3InfrastructureSecondPart.'.$i.'.CommunitySectionBB3InfrastructureSecondPart.interview_id',array('type'=>'hidden','value'=>$interview_id));                               	
                             	?> 

                                <tr>
                                    <td><?php echo $i+244; ?></td>
                                    <td><?php echo $palces_list[$i]; ?></td>

                                    
                                    <td><?php echo $this -> Form -> input('CommunitySectionBB3InfrastructureSecondPart.'.$i.'.CommunitySectionBB3InfrastructureSecondPart.distance', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                    <td><?php  echo $this ->Form ->input('CommunitySectionBB3InfrastructureSecondPart.'.$i.'.CommunitySectionBB3InfrastructureSecondPart.transport',  array('type' => 'select','options'=>$drop_down_text, 'class' => 'form-control', 'label' => false, 'empty' => 'Select One')); ?></td>
                                    <td><?php echo $this -> Form -> input('CommunitySectionBB3InfrastructureSecondPart.'.$i.'.CommunitySectionBB3InfrastructureSecondPart.time', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                               
                                </tr>    

                                 <?php endfor; ?>

                            </tbody>

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