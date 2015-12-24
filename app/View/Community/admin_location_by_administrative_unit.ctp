<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Cultural'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">

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
                                <tr>
                                    <td><?php echo $location_by_unitlist[$i]; ?></td>  
                                    <td><?php
                                                            
                                                            echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' => $options[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 			       ?></td>
                                </tr>         
                                                    <?php endfor; ?>

                                <tr>

                                    <td>What is the name of the Union/ Municipality?</td> 
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                </tr>

                            </tbody>
                        </table>   

                        <h4>B-2: LOCATION BY TYPES AND PATTERNS OF SETTLEMENTS </h4>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Major settlement type </td>  
                                <td><?php
                                                            $options = array('Rural Settlement','Urban Settlement');
                                                            echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' => $options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
			 			       ?></td>  
                            </tr>

                                            <?php $survey_207_211 = array('What is the local name of the settlement unit (village/ Para/ Punji)?','What is the latitude of the center of the settlement unit (village/ Para/ Punji)?','What is the longitude of the center of the settlement unit (village/ Para/ Punji)?',
                                                'What is the altitude (MASL) of the settlement unit (village/ Para/ Punji)?','Comments based on observation (if any)'  
                                                
                                                ); ?>

                                            <?php for($i=0;$i<count($survey_207_211);$i++): ?>
                            <tr>
                                <td><?php echo $survey_207_211[$i]; ?></td>
                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                            </tr>
                                            <?php endfor; ?>

                            <!-------Gap For Drop DOwn Menu------>

                                             <?php $survey_207_211 = array('What is the name of the urban locality (para/ basti/ moholla)?','What is the latitude of the center of the urban locality (para/ basti/ moholla)?',
                                                'What is the longitude of the center of the urban locality (para/ basti/ moholla)?','What is the altitude (MASL) of the urban locality (para/ basti/ moholla)?',
                                                 'Comments based on observation (if any)'
                                                
                                                ); ?>

                                            <?php for($i=0;$i<count($survey_207_211);$i++): ?>
                            <tr>
                                <td><?php echo $survey_207_211[$i]; ?></td>
                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                            </tr>
                                            <?php endfor; ?>

                        </table>

                        <h4>B-3: INFRASTRUCTURE </h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>How many households (approx.) in the settlement unit (village/ Punji/ para/ basti/ moholla) have access to (=use) safe drinking water?</td>
                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                            </tr>

                                          <?php $major_drinking_water = array(
                                                 'Supply Water/ Tap','Deep Tube-well','Tubewell','Surface Water (Pond/ River/ Haor)','Spring Water/ Chora/ Jorna','Well/ Ring Well/','Others'
                                              
                                              
                                          ); ?>

                            <tr>
                                <td>What are the major sources of drinking water for the majority population of the settlement unit (villagers/ Punji/ para/ basti/ moholla)?</td>  
                                <td><?php
                                              
                                                  echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' => $major_drinking_water, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false));
                                              
                                              ?></td>
                            </tr>

                            <tr>
                                <td>Others (Describe):</td>
                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>

                            </tr>

                            <tr>
                                <td>How many households (approx.) in the settlement unit (village/ Punji/ para/ basti/ moholla) have access to electricity (from public or private suppliers)?</td> 
                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                            </tr>

                            <tr>
                                <td>Is there any NGO health center in the settlement unit (village/ Punji/ para/ basti/ moholla)?</td>
                                <td><?php  echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' =>array('Yes','No'), 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>
                            </tr>

                            <tr>
                                <td>Is there any NGO health center in the settlement unit (village/ Punji/ para/ basti/ moholla)?</td>
                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                            </tr>
                            <tr>
                                <td>Does the settlement unit (village/ Punji/ para/ basti/ moholla) have at least one road useable by cars during all seasons?</td> 
                                <td><?php  echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' =>array('Yes','No'), 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>
                            </tr>

                            <tr>
                                <td>If ‘no’: what is the distance in kilometers to the nearest road usable during all seasons?</td>
                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>

                            </tr>

                            <tr>
                                <td>Is there a river within the settlement unit (village/ Punji/ para/ basti/ moholla) boundaries that is navigable during all seasons? </td> 
                                <td><?php  echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' =>array('Yes','No'), 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>

                            </tr>

                            <tr>

                                <td>If ‘no’: what is the distance to the nearest river that is navigable during all seasons?</td>
                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                            </tr>

                                          <?php $options = array('Teletalk','City Cell','Robi','Banglalink','Grameen','Indian Phone network'); ?>

                            <tr>
                                <td>What are the available Cell phone Network in the settlement unit (village/ Punji/ para/ basti/ moholla) center?</td> 
                                <td><?php  echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' =>$options, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>

                            </tr>

                        </table>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Place/ Facilities</th>
                                    <th>Distance from settlement unit center (in Km.)</th>
                                    <th>Most Common Means of Transport</th>
                                    <th>Estimated Time to Reach (in minutes)</th>

                                </tr>
                            </thead>

                            <tbody>
                                                <?php $palces_list = array('Weekly Hat/ Bazaar','Bazaar for buying major consumption goods','Bazaar where agricultural products are sold',
                                                                            'Primary School','Secondary School','College'); 
                                                
                                                       $drop_down_text = array(
                                                           'Walk/ on foot','Animal Cart/ Cow cart etc','Van/ Rickshaw/ Cycle','Boat','Motor car/ bike/ Auto-rickshaw/ light vehicle',
                                                           'Bus/ mini bus/ Truck'
                                                           
                                                           
                                                       );      
                                                ?>

                                                <?php for($i=0;$i<count($palces_list);$i++): ?>


                                <tr>
                                    <td><?php echo $palces_list[$i]; ?></td>
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                    <td><?php  echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' =>$drop_down_text, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                </tr>    

                                                  <?php endfor; ?>

                            </tbody>

                        </table>

                        <h4>B-4 DEMOGRAPHICS</h4>
                        <table class="table table-bordered table-striped">

                                            <?php  $drop_down_text = array(
                                                
                                                           '00-1 Years','11-20 Years','21-30 Years','31-40 Years','41 Years  Or More'   
                                                 
                                            );
                                            
                                            ?>

                            <tbody>
                                <tr>
                                    <td>241</td>
                                    <td>How long ago was the settlement unit (village/ Punji/ para/ basti/moholla) established?</td>
                                    <td><?php  echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' =>$drop_down_text, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>
                                </tr>

                                <tr>
                                    <td>242</td>
                                    <td>How many households live currently in this settlement unit (village/ Punji/ para/ basti/ moholla)?</td>
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                </tr>
                                <tr>
                                    <td>243</td>
                                    <td>How many households lived in the settlement unit (village/ Punji/ para/ basti/ moholla) 10 years ago?</td>
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                </tr>

                                <tr>
                                    <td>244</td>
                                    <td>How many households (approx.) living here today/now have moved to the settlement unit (village/ Punji/ para/ basti/ moholla) in the past 10 years (in-migration)?</td>
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                </tr>

                                <tr>
                                    <td>245</td>
                                    <td>How many households (approx.) have left the settlement unit (village/ Punji/ para/ basti/ moholla) over the past 10 years (out-migration)?</td>
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                </tr>

                                <tr>
                                    <td>246</td>
                                    <td>What is the current population of the settlement unit (village/ Punji/ para/ basti/ moholla)?</td>
                                    <td>Male_<?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                        Female_<?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?> 
                                        Total_<?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>

                                    </td>
                                </tr>

                                <tr>
                                    <td>247</td>
                                    <td>What was the total population of the settlement unit (village/ Punji/ para/ basti/ moholla) 10 years ago?</td>
                                    <td>Male_<?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                        Female_<?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?> 
                                        Total_<?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>

                                    </td>
                                </tr>


                            </tbody>

                        </table>

                        <h4>B-5: ETHNIC AND CULTURAL COMPOSITION OF THE SETTLEMENT UNIT</h4>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td width="7%"><p>250 </p></td>
                                <td width="75%" colspan="5"><p>How    many different INDIGENOUS/ETHNIC GROUPS are living in the settlement unit (village/    para/ basti/ moholla)? </p></td>
                                <td width="16%"><form id="form1" name="form1" method="post" action="">
                                        <label for="textfield"></label>
      <?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    </form>      <p align="center">&nbsp;</p></td>
                            </tr>
                            <tr>
                                <td width="7%"><p>251 </p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the    INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/    Punji/ para/ basti/ moholla)? </p></td>
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
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="7%"><p>252 </p></td>
                                <td width="75%" colspan="5"><p>How    many different OCCUPATIONAL GROUPS are living in the settlement unit (village/    para/ basti/ moholla)? </p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="7%"><p>253 </p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the    OCCUPATIONAL GROUPS livening currently in this settlement unit (village/ Punji/    para/ basti/ moholla)? </p></td>
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
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="7%"><p>254 </p></td>
                                <td width="75%" colspan="5"><p>How    many different MINORITY RELIGIOUS/ CASTES GROUPS are living in the settlement    unit (village/ para/ basti/ moholla)? </p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="7%"><p>255<a name="_GoBack" id="_GoBack"></a></p></td>
                                <td width="92%" colspan="6"><p>Name and number of households of the    MINORITY RELIGIOUS/ CASTES GROUPSlivening currently in this settlement unit (village/    Punji/ para/ basti/ moholla)? </p></td>
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
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                            </tr>
                            <tr>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="18%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="12%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
                                <td width="16%"><p align="center"><em><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></em></p></td>
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