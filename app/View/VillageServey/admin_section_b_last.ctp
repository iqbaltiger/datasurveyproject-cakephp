<?php  echo $this->Html->script('admin/jquery.min'); ?>

<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Household/Section-B_Second Part'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
                                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                          <h4>B-4: ETHNIC AND CULTURAL COMPOSITION OF THE SETTLEMENT UNIT</h4>
                                           <?php echo $this->Form->create('VillageSurvey', array('class' => '')) ?>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td width="7%"><p>241 </p></td>
                                <td width="75%" colspan="5"><p>How many different INDIGENOUS/ETHNIC GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?</p></td>
                                 
                                   <td width="16%">
                                     	<?php 
                                        
                                       //pr($this->data); exit;
                                        
                                       // echo $this->request->data['VillageSUrveyQuestion242Marker'][0]['VillageQuestion242']['id']; exit;
                                        
                                          if (!empty($this->request->data['VillageSectionBSecondPart'][0]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.0.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                       	 } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.0.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>241));  
											echo $this->Form->input('VillageSectionBSecondPart.0.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'How many different INDIGENOUS/ETHNIC GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?')); 
											echo $this->Form->input('VillageSectionBSecondPart.0.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));           	
                                    	echo $this -> Form -> input('VillageSectionBSecondPart.0.VillageSectionBSecondPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                    	?>
                                    	</td>                                  
                                 
                            </tr>
                            
                            
                            <tr>
                                <td width="7%"><p>242 </p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the INDIGENOUS/ETHNIC GROUPS living currently in this settlement unit (village/ punji/ para/ basti/ moholla)?</p></td>
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
                           
	                               if (!empty($this->request->data['VillageSUrveyQuestion242Marker'][$i]['VillageQuestion242']['id'])) {
	                                    echo $this->Form->input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.id', array('type' => 'hidden'));
	                                }         	
                            		echo $this->Form->input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.question_no',array('type'=>'hidden','value'=>262));  
									echo $this->Form->input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.question',array('type'=>'hidden','value'=>'Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/Punji/ para/ basti/ moholla)?')); 
									echo $this->Form->input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                            
                            
                             ?>
                            
                            <?php echo $this->Form->input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));  ?>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.name_of_group', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.number_of_household', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.total', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('VillageSUrveyQuestion242Marker.'.$i.'.VillageQuestion242.comment', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <?php
                            endfor;
                            ?>
                            <tr>
                                <td width="7%"><p>243 </p></td>
                                <td width="75%" colspan="5"><p>How many different OCCUPATIONAL GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?</p></td>
                                   <td width="16%">
                                     	<?php 
                                          if (!empty($this->request->data['VillageSectionBSecondPart'][1]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.1.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                       	 } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.1.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>243));  
											echo $this->Form->input('VillageSectionBSecondPart.1.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'How many different OCCUPATIONAL GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?')); 
											echo $this->Form->input('VillageSectionBSecondPart.1.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));           	
                                    	echo $this -> Form -> input('VillageSectionBSecondPart.1.VillageSectionBSecondPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                    	?>
                                    	</td>                                 
                            </tr>
                           
                           
                           
                           
                            <tr>
                                <td width="7%"><p>244 </p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the OCCUPATIONAL GROUPS living currently in this settlement unit (village/ punji/ para/ basti/ moholla)?</p></td>
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
									echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartThree.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartThree.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                            
                            
                             ?>
                            
                            <?php 
                            
                             if (!empty($this->request->data['VillageQuestion244Marker'][$i]['VillageQuestion244']['id'])) {
	                                    echo $this->Form->input('VillageQuestion244Marker.'.$i.'.VillageQuestion244.id', array('type' => 'hidden'));
	                                }  
                            
                            
                            
                            echo $this->Form->input('VillageQuestion244Marker.'.$i.'.VillageQuestion244.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));  ?>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion244Marker.'.$i.'.VillageQuestion244.name_of_group', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion244Marker.'.$i.'.VillageQuestion244.number_of_household', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion244Marker.'.$i.'.VillageQuestion244.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion244Marker.'.$i.'.VillageQuestion244.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion244Marker.'.$i.'.VillageQuestion244.total', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion244Marker.'.$i.'.VillageQuestion244.comment', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <?php
                            endfor;
                            ?>
                          
                            <tr>
                                <td width="7%"><p>245 </p></td>
                                <td width="75%" colspan="5"><p>How many different MINORITY RELIGIOUS/CASTE GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?</p></td>
                                   <td width="16%">
                                     	<?php 
                                          if (!empty($this->request->data['VillageSectionBSecondPart'][2]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.2.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                       	 } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.2.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>245));  
											echo $this->Form->input('VillageSectionBSecondPart.2.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'How many different MINORITY RELIGIOUS/ CASTES GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?')); 
											echo $this->Form->input('VillageSectionBSecondPart.2.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));           	
                                    	echo $this -> Form -> input('VillageSectionBSecondPart.2.VillageSectionBSecondPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                    	?>
                                    	
                                    	</td>                                 
                            </tr>
                           
                           
                           
                            <tr>
                                <td width="7%"><p>246<a name="_GoBack" id="_GoBack"></a></p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the MINORITY RELIGIOUS/CASTE GROUPS living currently in this settlement unit (village/ punji/ para/ basti/ moholla)?</p></td>
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
									echo $this->Form->input('CommunitySectionBB5EthnicCulturalUnitPartForth.'.$i.'.CommunitySectionBB5EthnicCulturalUnitPartForth.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                            
                            
                             ?>
                            
                             <?php 
                              if (!empty($this->request->data['VillageQuestion246Marker'][$i]['VillageQuestion246']['id'])) {
	                                    echo $this->Form->input('VillageQuestion246Marker.'.$i.'.VillageQuestion246.id', array('type' => 'hidden'));
	                                }  
                             
                             
                             
                             echo $this->Form->input('VillageQuestion246Marker.'.$i.'.VillageQuestion246.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));  ?>
                            
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion246Marker.'.$i.'.VillageQuestion246.name_of_group', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion246Marker.'.$i.'.VillageQuestion246.number_of_household', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion246Marker.'.$i.'.VillageQuestion246.male', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion246Marker.'.$i.'.VillageQuestion246.female', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion246Marker.'.$i.'.VillageQuestion246.total', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('VillageQuestion246Marker.'.$i.'.VillageQuestion246.comment', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <?php
                            endfor;
                            ?>   
                        </table>
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr><td colspan="8"><b>Present community situation of religious composition (conversion from preclassical to classical)</b></td></tr>
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
                               
                                <?php 
                                
                                $religion_list = array('preclassical','christianity','buddhism','hinduism','islam');
                                
                                
                                $followers_list = array(
                                    '00 – 19%','20 – 39%','40 – 59%','60 – 79%','80 – 99%','100%'
                                ); ?>
                                
                              <?php for($j=0;$j<6;$j++): ?>
                                
                                  <?php
                                        
                                  // pr($this->request->data); exit;
                                  
                                  //echo $this->request->data['VillageQuestion247Marker'][$j]['VillageQuestion247']['id'];
                                  
                                if (!empty($this->request->data['VillageQuestion247Marker'][$j]['VillageQuestion247']['id'])) {
                                            echo $this->Form->input('VillageQuestion247Marker.'.$j.'.VillageQuestion247.id', array('type' => 'hidden'));
                                        }
              						?> 
                                
                                
                                 <tr> 
                                     <?php echo $this->form->input('VillageQuestion247Marker.'.$j.'.VillageQuestion247.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id)); ?>
                                     <td><?php echo $this->form->input('VillageQuestion247Marker.'.$j.'.VillageQuestion247.followers_percentage',array('type'=>'hidden','value'=>$followers_list[$j])); ?><?php echo $followers_list[$j]; ?></td>
                                    <?php for($i=0;$i<5;$i++): ?>
                                     
                                   
                                    <td><?php
                                        echo $this->form->input('VillageQuestion247Marker.'.$j.'.VillageQuestion247.'.$religion_list[$i], array(
                                            'label' => false,
                                            'value'=>$religion_list[$i],
                                            'type' => 'checkbox','div' => false
                                        ));
                                        ?></td>
                                   <?php endfor; ?> 
                                    
                                    <td>
                                      <?php echo $this->form->input('VillageQuestion247Marker.'.$j.'.VillageQuestion247.comment',array('type'=>'text','div'=>false,'label'=>false,'class'=>'form-control')); ?>  
                                        
                                    </td>
                                    
                                    
                                </tr>
                               
                                <?php endfor; ?>
                                
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
                                <td>What is the basis of community integration of settlement Unit (village/ punji/ para/ basti/ moholla)?</td>  
                                <td>
                                     	<?php 
                                        
                                        
                                          if (!empty($this->request->data['VillageSectionBSecondPart'][3]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.3.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                       	 } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.3.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>248));  
											echo $this->Form->input('VillageSectionBSecondPart.3.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'What are the basis of community integration of settlement Unit (village/ punji/ para/ basti/ moholla)?')); 
											echo $this->Form->input('VillageSectionBSecondPart.3.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));           	
                                    		echo $this ->Form ->input('VillageSectionBSecondPart.3.VillageSectionBSecondPart.answer', array('options' => $array_fourth, 'class' => 'form-control', 'empty' => '(choose one)','multiple'=>true, 'label' => false)); 
                                    	
                                                echo $this->Form->input('VillageSectionBSecondPart.3.VillageSectionBSecondPart.answer_other',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:5px;','placeholder'=>'Please Type Here:'));         
                                              
 
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
						   	'81%  – 100%'
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
                                		$j = $i+4;
										if (!empty($this->request->data['VillageSectionBSecondPart'][$j]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>$i+251));  
											echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>$question_array[$i])); 
											echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                                 	
                                       		
                                                if($i==0){
                                                             echo $this ->Form ->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.answer', array('options' => $options_array[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                                }  
                                                
                                                else{
                                                    
                                                     echo $this ->Form ->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.answer', array('options' => $options_array[$i],'multiple'=>true,'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                                      echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.answer_other',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:5px;','placeholder'=>'Please Type Here:'));         
                                                     
                                                }
                                                                                        
                                                                                      
                                    ?>
                                    </td>
                            </tr>
							<?php
							endfor;
							?>      
							<?php
							
						$questions = array(
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
						   	'81%  – 100%'
						   );
                                                 //  $options_arrays[0] = array('Yes','No');
						   $options_arrays[1] = array('Yes','No');
						   $options_arrays[2] = array('Yes','No');
						   $options_arrays[3] = array('Yes','No');
						   $options_arrays[4] = array('Yes','No');
							
							?>		
                            <?php
                            for($i=0;$i<count($questions);$i++):
                            ?>
                            
                             <tr>
                                 <td><?php echo $i+253;?></td>
                                <td><?php echo $questions[$i];?></td>  
                                <td>
                                	<?php
                                		$j = $i+6;
										if (!empty($this->request->data['VillageSectionBSecondPart'][$j]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>$i+253));  
											echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>$questions[$i])); 
											echo $this->Form->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                                 	
                                       		  echo $this ->Form ->input('VillageSectionBSecondPart.'.$j.'.VillageSectionBSecondPart.answer', array('type'=>'select','options' => $options_arrays[$i],'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>
							<?php
							endfor;
							?>							
							
<!--                             <tr>
                                 <td>256</td>
                                <td>Is there any NGO health center in the settlement unit (village/ punji/ para/ basti/ moholla)?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['VillageSectionBSecondPart'][9]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>256));  
											echo $this->Form->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                                 	
                                       		echo $this ->Form ->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>	-->
                            
                            						
                             <tr>
                                 <td>256</td>
                                <td>Does the settlement unit (village/ punji/ para/ basti/ moholla) have at least one road useable by cars during all seasons?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['VillageSectionBSecondPart'][9]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>256));  
											echo $this->Form->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                                 	
                                       		echo $this ->Form ->input('VillageSectionBSecondPart.9.VillageSectionBSecondPart.answer', array('options' => $options_arrays[3], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>							
							
							
                             <tr>
                                 <td>257</td>
                                <td>If ‘no’: what is the distance in kilometers to the nearest road usable during all seasons?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['VillageSectionBSecondPart'][10]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.10.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.10.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>257));  
											echo $this->Form->input('VillageSectionBSecondPart.10.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('VillageSectionBSecondPart.10.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                                 	
                                       		echo $this ->Form ->input('VillageSectionBSecondPart.10.VillageSectionBSecondPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>	
                            
                            						
                             <tr>
                                 <td>258</td>
                                <td>Is there a river within the settlement unit (village/ punji/ para/ basti/ moholla) boundaries that is navigable during all seasons? </td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['VillageSectionBSecondPart'][11]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.11.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.11.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>258));  
											echo $this->Form->input('VillageSectionBSecondPart.11.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('VillageSectionBSecondPart.11.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                                 	
                                       		echo $this ->Form ->input('VillageSectionBSecondPart.11.VillageSectionBSecondPart.answer', array('options' => $options_arrays[3], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
                                    ?>
                                    </td>
                            </tr>							
                             <tr>
                                 <td>259</td>
                                <td>If ‘no’: what is the distance to the nearest river that is navigable during all seasons?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['VillageSectionBSecondPart'][12]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.12.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.12.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>259));  
											echo $this->Form->input('VillageSectionBSecondPart.12.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('VillageSectionBSecondPart.12.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                                 	
                                       		echo $this ->Form ->input('VillageSectionBSecondPart.12.VillageSectionBSecondPart.answer', array('type' => 'text', 'class' => 'form-control', 'label' => false));    
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
                             	
                                 <td>260</td>
                                <td>What are the available Cell phone Network in the settlement unit (village/ punji/ para/ basti/ moholla) center?</td>  
                                <td>
                                	<?php
                                	
										if (!empty($this->request->data['VillageSectionBSecondPart'][13]['VillageSectionBSecondPart']['id'])) {
                                            echo $this->Form->input('VillageSectionBSecondPart.13.VillageSectionBSecondPart.id', array('type' => 'hidden'));
                                        } 
                                    		echo $this->Form->input('VillageSectionBSecondPart.13.VillageSectionBSecondPart.question_no',array('type'=>'hidden','value'=>260));  
											echo $this->Form->input('VillageSectionBSecondPart.13.VillageSectionBSecondPart.question',array('type'=>'hidden','value'=>'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?')); 
											echo $this->Form->input('VillageSectionBSecondPart.13.VillageSectionBSecondPart.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                                 	
                                       		echo $this ->Form ->input('VillageSectionBSecondPart.13.VillageSectionBSecondPart.answer', array('options' => $mobile_operator,'multiple'=>true,'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));    
//                                                echo $this->Form->input('VillageSectionBSecondPart.13.VillageSectionBSecondPart.answer_other',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:5px;','placeholder'=>'Please Type Here:'));         
                                    ?>
                                    </td>
                            </tr>							         
							                     
                                 </tbody>
                                </table>    
                                
                                
                                                 <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>261.</th>
                                    <th colspan="4">What is the distance from the settlement unit (village/ punji/ para/ basti/ moholla) center to the nearest facilities as mentioned below(in km and in minutes by most common means of transportation)</th>
                                </tr>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Place/ Facilities</th>
                                    <th>Distance from settlement unit center (in Km.)</th>
                                    <th>Most Common Means of Transportation</th>
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
                                       if (!empty($this->request->data['VillageQuestion262Marker'][$i]['VillageQuestion262']['id'])) {
                                            echo $this->Form->input('VillageQuestion262Marker.'.$i.'.VillageQuestion262.id', array('type' => 'hidden'));
                                        }         	
                             	
                             	
                            		echo $this->Form->input('VillageQuestion262Marker.'.$i.'.VillageQuestion262.question_no',array('type'=>'hidden','value'=>$i+243));  
									echo $this->Form->input('VillageQuestion262Marker.'.$i.'.VillageQuestion262.question',array('type'=>'hidden','value'=>$palces_list[$i])); 
									echo $this->Form->input('VillageQuestion262Marker.'.$i.'.VillageQuestion262.village_interview_id',array('type'=>'hidden','value'=>$village_interview_id));                               	
                             	?> 

                                <tr>
                                    <td><?php echo $i+262; ?></td>
                                    <td><?php echo $palces_list[$i]; ?></td>

                                    
                                    <td><?php echo $this -> Form -> input('VillageQuestion262Marker.'.$i.'.VillageQuestion262.distance', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                    <td><?php  echo $this ->Form ->input('VillageQuestion262Marker.'.$i.'.VillageQuestion262.transport',  array('type' => 'select','options'=>$drop_down_text, 'class' => 'form-control', 'label' => false, 'empty' => 'Select One')); ?></td>
                                    <td><?php echo $this -> Form -> input('VillageQuestion262Marker.'.$i.'.VillageQuestion262.time', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                               
                                </tr>    

                                 <?php endfor; ?>

                            </tbody>

                        </table>       
                                                                              

                        <hr></hr>
                        <center> <button class="btn btn-info">Submit</button></center>
                       <?php echo $this -> Form -> end(); ?> 
                                        
                                    </div>
                                </div>
                        </div>   
                </div>
        </div>
</div>