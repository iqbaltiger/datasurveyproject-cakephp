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
                <h3 class="box-title"><?php echo __('Ethnic'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <h4>SECTION- B: ETHNIC GROUP IDENTIFICATION</h4>
                        <h5><b>B- 01: EXTERNAL/ OBSERVABLE ASPECTS OF ETHNIC IDENTITY(জাতিসত্তার পরিচিতির দৃশ্যমান নিয়ামক সমূহ নির্ণয়)</b></h5>

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
                              '2'=>'Exclusive language without script',
                              '3'=>'Shared ethnic language',
                              '4'=>'Dialect of Bangla language',
                              '5'=>'Bangla language'
                          );
						  $drop_value[0] = array(
                              
                              '1'=>'3',
                              '2'=>'3',
                              '3'=>'2',
                              '4'=>'1',
                              '5'=>'0'
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
                              '5'=>'Segmented into localized clans& local exogamy',
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
                              '3'=>'Ethnic identity based development organization'
                          );	
                          $drop_text_festivals[0] = array(
                              '1'=>'Collective ritual feasting and festivities',
                              '2'=>'Collective redistributive feastingand festivities',
                              '3'=>'Distinct community festivals like water festival',
                              '4'=>'No distinct festival other than Bangalifestivities'
                          );
                          $drop_text_festivals[1] = array(
                              '1'=>'Ethnic cultural &/or ritual rallies/or processions',
                              '2'=>'No cultural &/or ritual rallies/or processions'
                          );						  					  
						  						
						//pr($drop_text[10]);exit;	
												  				  
                        ?> 
                       
                        <?php echo $this->Form->create('CommSectionAConstruction');?>
                        <table class="table table-bordered table-striped">
                            <thead>
                              <th>Sr.No</th>
                              <th>Major Observable Aspects</th>
                              <th>Answer</th>
                            </thead>
                            
                            <tbody>
                               
                               <tr>
                               	<td>201</td>
                               	<td>Ethnic Traditions</td>
                               	<td>
                               	<table class="table table-bordered table-striped">
                                 <?php for($i=0;$i<count($prevailing_type_part_one);$i++): ?>
                                   <?php
                                        if (!empty($this->data['Construction'][$i]['CommSectionAConstruction']['id'])) {
                                            echo $this->Form->input('Construction.'.$i . '.CommSectionAConstruction.id', array('type' => 'hidden'));
                                        }
              						?> 	
                                 	
                                <tr>
                                    <td><?php echo $i+1; ?></td>
                                    <td><?php echo $prevailing_type_part_one[$i]; ?></td>
                                    <td>
                                    	<?php  echo $this ->Form ->input('Construction.'.$i.'.CommSectionAConstruction.personal_information_id', array('value' =>$pid,'type'=>'hidden')); ?>
                                    	<?php  echo $this ->Form ->input('Construction.'.$i.'.CommSectionAConstruction.role', array('value' =>$prevailing_type_part_one[$i],'type'=>'hidden')); ?>
                                        <?php  echo $this ->Form ->input('Construction.'.$i.'.CommSectionAConstruction.role_value', array('type'=>'select','options' =>$drop_text[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php echo $this -> Form -> input('Construction.'.$i.'.CommSectionAConstruction.other', array('type' => 'text','id'=>$i.'mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    
                                    </td>
                                </tr> 
                                <?php
                                  
                                   endfor;
                                
                                ?>     
                                	<tr><td colspan="2">Score of Subsection ∑ (1 + 2 + 3+… + 11)  = </td><td></td></tr>  
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
                                    <td>
                                        <?php  echo $this ->Form ->input('role_value', array('type'=>'select','options' =>$drop_text_networks, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                     </td>
                                </tr>  
                                <tr><td colspan="2">Score of Subsection(12)  =</td><td></td></tr>     
                               		</table>
                               	</td>
                               </tr>

                                
                               <tr>
                               	<td>203</td>
                               	<td>Ethnic Societies andAssociations</td>
                               	<td>
                               	<table class="table table-bordered table-striped">	
                                <tr>
                                    <td>13</td>
                                    <td>Ethnic voluntary associations</td>
                                    <td>
                                        <?php  echo $this ->Form ->input('role_value', array('type'=>'select','options' =>$drop_text_associations, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr>    
                                <tr><td colspan="2">Score of Subsection(13)  =</td><td></td></tr>   
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
                                        if (!empty($this->data['Construction'][$i]['CommSectionAConstruction']['id'])) {
                                            echo $this->Form->input('Construction.'.$i . '.CommSectionAConstruction.id', array('type' => 'hidden'));
                                        }
              						?> 	
                                 	
                                <tr>
                                    <td><?php echo $i+14; ?></td>
                                    <td><?php echo $prevailing_type_festivals[$i]; ?></td>
                                    <td>
                                        <?php  echo $this ->Form ->input('Construction.'.$i.'.CommSectionAConstruction.role_value', array('type'=>'select','options' =>$drop_text_festivals[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                    </td>
                                </tr> 
                                <?php
                                  
                                   endfor;
                                
                                ?> 
                                <tr><td colspan="2">Score of Subsection∑(14 + 15) = </td><td></td></tr>       
                               		</table>
                               	</td>
                               </tr>                                                           
                                
                                <tr><td colspan="2">TOTAL SCORE OF SECTION B- 01 = </td><td></td></tr> 
                            </tbody>
                        </table>
                        <br>
                         <!---<button class="btn btn-info">Next >></button>--->
                         <a href="<?php echo $this->base.'/admin/ethnics/section_b_next'?>" class='btn btn-info'>Next >></a>
                         <?php echo $this->Form->end();?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
