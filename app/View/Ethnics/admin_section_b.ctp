<?php

echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function () {

        for (i = 0; i <40; i++) {
            $('#' + i + 'mytest').hide();

        } })
</script>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('ETHNIC IDENTIFICATION'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <h4>SECTION- B: ETHNIC GROUP IDENTIFICATION</h4>
                        <h5><b>B- 01: EXTERNAL/ OBSERVABLE ASPECTS OF ETHNIC IDENTITY(জাতিসত্তার পরিচিতির দৃশ্যমান নিয়ামক সমূহ নির্ণয়)</b></h5>

                        <?php
                        
                          $major_object = array(
                              'Ethnic Social Networks',
                              'Ethnic Societies andAssociations',
                              'Community Functions/ Ceremonies'
                          );                        
                        
                          $prevailing_type_part_one = array(
                              'Language','Religion and belief system',
                              'Political and judicial system','Marriage system/ Community organization',
                              'Descent system (Bilateral and Bilinear Kin Croup)',
                              'Dress & costumes (regular wear)',
                              'Mode of subsistence economy',
                              'History of Settlement',
                              'Music & instruments',
                              'Dancing pattern',
                              'Myth of origin'
                          );
                          
						  
						  
						  
                          $prevailing_type_festivals = array(
                              'Collective festivals (excluding Bangali or mainstream festivities)',
                              'Rallies &/or processions'
                          );						  
						  
                          $drop_text[0] = array(
                              
                              '1'=>'Exclusive language with alphabet',
                              '2'=>'Exclusive language without scripture',
                              '3'=>'Shared ethnic language',
                              '4'=>'Dialect of Bangla language',
                              '5'=>'Bangla language'
                          );
			
						  
						  
                          $drop_text[1] = array(
                              
                              '1'=>'Ancestor/ Nature worship/ Shamanism',
                              '2'=>'Amalgam of Hinduism/ Folk Hinduism',
                              '3'=>'Amalgam of Buddhism',
                              '4'=>'Brahmanism/ Hinduism',
                              '5'=>'Buddhism',
                              '6'=>'Islam',
                              '7'=>'Christianity',
                              '8'=>'Other Syncretic Traditions'
                          );
                          $drop_text[2] = array(
                              
                              '1'=>'Mixed (State and Customary)',
                              '2'=>'Mixed (State and CHT Regulation)',
                              '3'=>'State administration only'
                          );
                          $drop_text[3] = array(
                              
                              '1'=>'Demes i.e. local endogamy but not segregated into exogamous barrios',
                              '2'=>'Segmented community without local exogamy',
                              '3'=>'Agamous community (no localized clan & no rules about endogamy/exogamy)',
                              '4'=>'Exogamous local communities without clan structures',
                              '5'=>'Segmented into localized clans & local exogamy',
                              '6'=>'Clan communities or segmented into clan barrios'
                          );						  
					
                          $drop_text[4] = array(
                              
                              '1'=>'Bilateral descent without kindreds',
                              '2'=>'Double descent without kindreds',
                              '3'=>'Bilateral kindreds',
                              '4'=>'Matrilineal descent',
                              '5'=>'Patrilineal descent',
                              '6'=>'Double descent with bilinear kin groups'
                          );						  						  
                          $drop_text[5] = array(
                              
                              '1'=>'Traditional clothing, costumes with unique design',
                              '2'=>'Mainstream clothing, costumes, attires and design',
                          );						 
						                            
                          $drop_text[6] = array(
                              
                              '1'=>'Extensive agriculture contributes most',
                              '2'=>'Extensive shifting agriculture/ horticulture',
                              '3'=>'Gathering contributes most (Forest dependent)',
                              '4'=>'Intensive agriculture contributes most',
                              '5'=>'Fishing contributes most',
                              '6'=>'Handicrafts contribute most',
                              '7'=>'Service or labor selling contribute most'
                          );		
						  
                          $drop_text[7] = array(
                              
                              '1'=>'Aboriginal association to settlement site',
                              '2'=>'Relocated & settled during colonial period',
                              '3'=>'Settled after partition of 1947',
                              '4'=>'Unknown settlement history'
                          );
                          $drop_text[8] = array(
                              
                              '1'=>'Distinct and traditional musical instruments',
                              '2'=>'Modern musical instruments'
                          );						  
                          $drop_text[9] = array(
                              
                              '1'=>'Unique dancing patterns or preclassical dance',
                              '2'=>'Modern or Classical dance'
                          );						  	
                          $drop_text[10] = array(
                              '1'=>'Distinct myth of origin unlike classical religions',
                              '2'=>'Myth of origin like classical religion',
                              '3'=>'No myth of origin'
                          );							
							
							
                          $drop_text_networks = array(
                              '1'=>'Primary networks based on descent categories',
                              '2'=>'Primary networks based on affinal categories',
                              '3'=>'Friendship & associations based primary networks'
                          );							
							
                          $drop_text_associations = array(
                              '1'=>'Ethnic identity based club, sports club or society',
                              '2'=>'Ethnic identity based Youth club/ organization',
                              '3'=>'Ethnic identity based development organization',
							  '4'=>'No ethnic identity based club/ society/ organization'
                          );	
                          $drop_text_festivals[0] = array(
                              '1'=>'Collective ritual feasting and festivities',
                              '2'=>'Collective redistributive feastingand festivities',
                              '3'=>'Distinct community festivals like water festival',
                              '4'=>'No distinct festival other than Bangali festivities'
                          );
                          $drop_text_festivals[1] = array(
                              '1'=>'Ethnic cultural &/or ritual rallies/or processions',
                              '2'=>'No cultural &/or ritual rallies/or processions'
                          );						  					  
						  						
						//pr($drop_text[10]);exit;	
												  				  
                        ?> 
                        
                        <script type="text/javascript">
                         
                            var drop_value0 = [3,3,2,1,0];
                            var drop_value1 = [3,3,2,2,2,1,1,1];
                            var drop_value2 = [3,3,0];
                            var drop_value3 = [3,3,1,1,3,3];
                            var drop_value4 = [3,3,3,3,1,3];
                            var drop_value5 = [3,0];
                            var drop_value6 = [3,3,2,0,2,2,1];
                            var drop_value7 = [3,2,1,1];
                            var drop_value8 = [3,0];
                            var drop_value9 = [3,0];
                            var drop_value10 = [3,0,0];
                            var drop_value11 = [2,3,0];
                            var drop_value12 = [3,3,3,0];
                            var drop_value13 = [3,3,3,0];
                            var drop_value14 = [3,0];
                            
                            
                            
                            //alert(drop_value[0]);
                        
                        </script>
                        
                        
                        
                       
                        <?php echo $this->Form->create('EthnicQuestionBFirstPart');?>
                        <table class="table table-bordered table-striped">
                            <thead>
                              <th>Sr.No</th>
                              <th>Major Observable Aspects</th>
                              <th>
                              <table>
                                  <tr>
                                      <th colspan="3">  Answer  </th>
                                      <th align="right">Score</th>
                                      
                                  </tr>
                                  
                                  
                              </table>
                                
                                    
                               
                              
                              </th>
<!--                              <th>Score</th>-->
                            </thead>
                            
                            <tbody>
                               
                               <tr>
                               	<td>201</td>
                               	<td>Ethnic Traditions</td>
                               	<td>
                               	<table class="table table-bordered table-striped">
                                 <?php for($i=0;$i<count($prevailing_type_part_one);$i++): ?>
                                   <?php
                                    
                                      //pr($this->data); exit;
                                        if (!empty($this->data['Construction'][$i]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.'.$i . '.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 	
                                 	
                                <tr>
                                    <td><?php echo $i+1; ?></td>
                                    <td><?php echo $prevailing_type_part_one[$i]; ?></td>
                                    <td>
                                    	<?php  echo $this ->Form ->input('Construction.'.$i.'.EthnicQuestionBFirstPart.ethnic_interview_id', array('value' =>$ethnic_interview_id,'type'=>'hidden')); ?>
                                    	<?php  echo $this ->Form ->input('Construction.'.$i.'.EthnicQuestionBFirstPart.question', array('value' =>($i+1),'type'=>'hidden')); ?>
                                        <?php  echo $this ->Form ->input('Construction.'.$i.'.EthnicQuestionBFirstPart.answer', array('type'=>'select','options' =>$drop_text[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php echo $this -> Form -> input('Construction.'.$i.'.EthnicQuestionBFirstPart.other', array('type' => 'text','id'=>$i.'mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                       
                                    </td>
                                    <td><?php echo $this -> Form -> input('Construction.'.$i.'.EthnicQuestionBFirstPart.score', array('type' => 'text','class' => 'form-control','label' => false,'readonly'=>true,'style' => 'margin-top:3px'));?></td>
                                    
                                </tr> 
                                
                             <script>

                                       
                                     $('#Construction'+<?php echo $i; ?>+'EthnicQuestionBFirstPartAnswer').change(function(){
                                        var dropdownValue = $('#Construction'+<?php echo $i; ?>+'EthnicQuestionBFirstPartAnswer').val();
                                       
                                      $('#Construction'+<?php echo $i; ?>+'EthnicQuestionBFirstPartScore').val(drop_value<?php echo $i; ?>[dropdownValue -1]);
                                         total=0;
                                          for(k=0;k<11;k++)
                                          {
                                                                                  
                                            total = total + Number($('#Construction'+k+'EthnicQuestionBFirstPartScore').val());
                                         // alert(test);
                                                }
                                          $('#Construction11EthnicQuestionBFirstPartScore').val(total);
                                          
                                          var g_total =  Number($('#Construction11EthnicQuestionBFirstPartScore').val())+ Number($('#Construction13EthnicQuestionBFirstPartScore').val())+ Number($('#Construction15EthnicQuestionBFirstPartScore').val())+ Number($('#Construction18EthnicQuestionBFirstPartScore').val());
                                          $('#Construction19EthnicQuestionBFirstPartScore').val(g_total);
                                          
                                        })   
                             


                                  

                                </script>
                                
                                    
                             <?php
                                endfor;
                                
                                ?>     
                                	<tr><td colspan="2">Score of Subsection ∑ (1 + 2 + 3+… + 11)  = </td>
                                            
                                            <td>&nbsp;</td>
                                            
                                             <?php
                                            //echo $this->data['Construction'][16]['EthnicQuestionBFirstPart']['score']; exit;
                                        if (!empty($this->data['Construction'][$i]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.'.$i.'.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 
                                            <td>
                                                <?php  echo $this ->Form ->input('Construction.'.$i.'.EthnicQuestionBFirstPart.ethnic_interview_id', array('value' =>$ethnic_interview_id,'type'=>'hidden')); ?>
                                                <?php  echo $this ->Form ->input('Construction.'.$i.'.EthnicQuestionBFirstPart.question', array('value' =>16,'type'=>'hidden')); ?>
                                                <?php echo $this->form->input('Construction.'.$i.'.EthnicQuestionBFirstPart.score',array('type'=>'text','readonly'=>true,'class'=>'form-control','label'=>false)) ?>
                                                
                                            </td>
                                            
                                            
                                        </tr>  
                               		</table>
                               	</td>
                               </tr>
                               


                               <tr>
                               	<td>202</td>
                               	<td>Ethnic Social Networks</td>
                               	<td>
                               	<table class="table table-bordered table-striped">	
                                <tr>
                                    <td>12</td>
                                    <td>Types of primary social networks</td>
                                    
                                     <?php
                                        if (!empty($this->data['Construction'][12]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.12.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 
                                    
                                    <td>
                                        
                                        <?php  echo $this ->Form ->input('Construction.12.EthnicQuestionBFirstPart.ethnic_interview_id', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>$ethnic_interview_id)); ?>
                                         <?php  echo $this ->Form ->input('Construction.12.EthnicQuestionBFirstPart.question', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>12)); ?>
                                        <?php  echo $this ->Form ->input('Construction.12.EthnicQuestionBFirstPart.answer', array('type'=>'select','options' =>$drop_text_networks, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                     </td>
                                   <td><?php echo $this -> Form -> input('Construction.12.EthnicQuestionBFirstPart.score', array('type' => 'text','class' => 'form-control','label' => false,'readonly'=>true,'style' => 'margin-top:3px'));?></td> 
                                </tr> 
                                
                                <script>
                               
                                    $('#Construction'+12+'EthnicQuestionBFirstPartAnswer').change(function(){
                                        var dropdownValue = $('#Construction'+12+'EthnicQuestionBFirstPartAnswer').val();
                                       
                                  $('#Construction'+12+'EthnicQuestionBFirstPartScore').val(drop_value11[dropdownValue -1]);
                                    
                                   
                                     
                                      
                                      $('#Construction'+13+'EthnicQuestionBFirstPartScore').val(drop_value11[dropdownValue -1]);
                                      
                                      
                                     var g_total =  Number($('#Construction11EthnicQuestionBFirstPartScore').val())+ Number($('#Construction13EthnicQuestionBFirstPartScore').val())+ Number($('#Construction15EthnicQuestionBFirstPartScore').val())+ Number($('#Construction18EthnicQuestionBFirstPartScore').val());
                                          $('#Construction19EthnicQuestionBFirstPartScore').val(g_total);
                                        
                                     })   
                                
                                </script>
                                
                                
                                <tr><td colspan="2">Score of Subsection(12)  =</td><td></td>
                                    
                                     <?php
                                        if (!empty($this->data['Construction'][13]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.13.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 
                                    <td>
                                         <?php  echo $this ->Form ->input('Construction.13.EthnicQuestionBFirstPart.ethnic_interview_id', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>$ethnic_interview_id)); ?>
                                         <?php  echo $this ->Form ->input('Construction.13.EthnicQuestionBFirstPart.question', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>17)); ?>
                                        <?php echo $this->form->input('Construction.13.EthnicQuestionBFirstPart.score',array('type'=>'text','readonly'=>true,'class'=>'form-control','label'=>false)); ?> 
                                        
                                    </td>
                                </tr>     
                               		</table>
                               	</td>
                               </tr>

                                
                               <tr>
                               	<td>203</td>
                               	<td>Ethnic Societies and Associations</td>
                               	<td>
                               	<table class="table table-bordered table-striped">	
                                <tr>
                                    <td>13</td>
                                    <td>Ethnic voluntary associations</td>
                                     <?php
                                        if (!empty($this->data['Construction'][14]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.14.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 
                                    <td>
                                         <?php  echo $this ->Form ->input('Construction.14.EthnicQuestionBFirstPart.ethnic_interview_id', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>$ethnic_interview_id)); ?>
                                         <?php  echo $this ->Form ->input('Construction.14.EthnicQuestionBFirstPart.question', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>13)); ?>
                                        <?php  echo $this ->Form ->input('Construction.14.EthnicQuestionBFirstPart.answer',array('type'=>'select','options' =>$drop_text_associations, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                     <td><?php echo $this -> Form -> input('Construction.14.EthnicQuestionBFirstPart.score', array('type' => 'text','class' => 'form-control','label' => false,'readonly'=>true,'style' => 'margin-top:3px'));?></td> 
                                </tr> 
                                
                                 <script>
                               
                                    $('#Construction'+14+'EthnicQuestionBFirstPartAnswer').change(function(){
                                        var dropdownValue = $('#Construction'+14+'EthnicQuestionBFirstPartAnswer').val();
                                       
                                      $('#Construction'+14+'EthnicQuestionBFirstPartScore').val(drop_value12[dropdownValue -1]);
                                       $('#Construction'+15+'EthnicQuestionBFirstPartScore').val(drop_value12[dropdownValue -1]);
                                       var g_total =  Number($('#Construction11EthnicQuestionBFirstPartScore').val())+ Number($('#Construction13EthnicQuestionBFirstPartScore').val())+ Number($('#Construction15EthnicQuestionBFirstPartScore').val())+ Number($('#Construction18EthnicQuestionBFirstPartScore').val());
                                          $('#Construction19EthnicQuestionBFirstPartScore').val(g_total);
                                     })   
                                
                                </script>
                                
                                <tr><td colspan="2">Score of Subsection(13)  =</td><td></td>
                                    
                                     <?php
                                        if (!empty($this->data['Construction'][15]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.15.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 
                                    <td>
                                      <?php  echo $this ->Form ->input('Construction.15.EthnicQuestionBFirstPart.ethnic_interview_id', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>$ethnic_interview_id)); ?>
                                         <?php  echo $this ->Form ->input('Construction.15.EthnicQuestionBFirstPart.question', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>18)); ?>   
                                     <?php echo $this->form->input('Construction.15.EthnicQuestionBFirstPart.score',array('type'=>'text','readonly'=>true,'class'=>'form-control','label'=>false)); ?>    
                                        
                                    </td>
                                </tr>   
                               		</table>
                               	</td>
                               </tr>    
                               
                               
                               
                               <tr>
                               	<td>204</td>
                               	<td>Community Functions/ Ceremonies</td>
                               	<td>
                               	<table class="table table-bordered table-striped">
                                 <?php for($i=0;$i<count($prevailing_type_festivals);$i++): ?>
                                   <?php
                                        if (!empty($this->data['Construction'][$i+16]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.'.($i+16).'.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 	
                                 	
                                <tr>
                                    <td><?php echo $i+14; ?></td>
                                    <td><?php echo $prevailing_type_festivals[$i]; ?></td>
                                     <?php  echo $this ->Form ->input('Construction.'.($i+16).'.EthnicQuestionBFirstPart.ethnic_interview_id', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>$ethnic_interview_id)); ?>
                                         <?php  echo $this ->Form ->input('Construction.'.($i+16).'.EthnicQuestionBFirstPart.question', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>($i+14))); ?>
                                    <td>
                                        <?php  echo $this ->Form ->input('Construction.'.($i+16).'.EthnicQuestionBFirstPart.answer', array('type'=>'select','options' =>$drop_text_festivals[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                     <td><?php echo $this -> Form -> input('Construction.'.($i+16).'.EthnicQuestionBFirstPart.score', array('type' => 'text','class' => 'form-control','label' => false,'readonly'=>true,'style' => 'margin-top:3px'));?></td> 
                                </tr> 
                                
                                 <script>

                                       
                                     $('#Construction'+<?php echo ($i+16); ?>+'EthnicQuestionBFirstPartAnswer').change(function(){
                                        var dropdownValue = $('#Construction'+<?php echo ($i+16); ?>+'EthnicQuestionBFirstPartAnswer').val();
                                       
                                      $('#Construction'+<?php echo ($i+16); ?>+'EthnicQuestionBFirstPartScore').val(drop_value<?php echo ($i+13); ?>[dropdownValue -1]);
                                      
                                      
                                       total=0;
                                          for(k=16;k<18;k++)
                                          {
                                                                                  
                                            total = total + Number($('#Construction'+k+'EthnicQuestionBFirstPartScore').val());
                                      
                                                }
                                          $('#Construction18EthnicQuestionBFirstPartScore').val(total);
                                      
                                  var g_total =  Number($('#Construction11EthnicQuestionBFirstPartScore').val())+ Number($('#Construction13EthnicQuestionBFirstPartScore').val())+ Number($('#Construction15EthnicQuestionBFirstPartScore').val())+ Number($('#Construction18EthnicQuestionBFirstPartScore').val());
                                          $('#Construction19EthnicQuestionBFirstPartScore').val(g_total);
                                    
                                     // $('#Construction'+19+'EthnicQuestionBFirstPartScore').val(Number(drop_value13[dropdownValue -1])+Number(drop_value14[dropdownValue -1]));
                                     })   
                             
                                          

                                  

                                </script>
                                
                                
                                <?php
                                  
                                   endfor;
                                
                                ?> 
                                <tr><td colspan="2">Score of Subsection∑(14 + 15) = </td><td></td>
                                    
                                     <?php
                                        if (!empty($this->data['Construction'][18]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.18.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 
                                    
                                    <?php  echo $this ->Form ->input('Construction.18.EthnicQuestionBFirstPart.ethnic_interview_id', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>$ethnic_interview_id)); ?>
                                         <?php  echo $this ->Form ->input('Construction.18.EthnicQuestionBFirstPart.question', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>19)); ?>   
                                    <td><?php echo $this->form->input('Construction.18.EthnicQuestionBFirstPart.score',array('type'=>'text','readonly'=>true,'class'=>'form-control','label'=>false)); ?> </td>
                                
                                </tr>       
                               		</table>
                               	</td>
                               </tr>                                                           
                                
                                <tr><td colspan="2">TOTAL SCORE OF SECTION B- 01 = </td>
                                    
                                    
                                    
                                    
                                    
                                   
                                    
                                
                                   <?php
                                        if (!empty($this->data['Construction'][19]['EthnicQuestionBFirstPart']['id'])) {
                                            echo $this->Form->input('Construction.19.EthnicQuestionBFirstPart.id', array('type' => 'hidden'));
                                        }
              						?> 
                                    
                                    <?php  echo $this ->Form ->input('Construction.19.EthnicQuestionBFirstPart.ethnic_interview_id', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>$ethnic_interview_id)); ?>
                                         <?php  echo $this ->Form ->input('Construction.19.EthnicQuestionBFirstPart.question', array('type'=>'hidden','class' => 'form-control','label' => false,'value'=>20)); ?>   
                                    <td><?php echo $this->form->input('Construction.19.EthnicQuestionBFirstPart.score',array('type'=>'text','readonly'=>true,'size'=>15,'class'=>'form-control','label'=>false)); ?> </td>
                                    
                                </tr> 
                            </tbody>
                        </table>
                        <br>
                         <!---<button class="btn btn-info">Next >></button>--->
                        <br>
                        <center> <button class="btn btn-info">Next>></button></center>
                            <?php echo $this->Form->end(); ?> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
