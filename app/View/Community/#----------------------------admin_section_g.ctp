<style type="text/css">
    .table.table-bordered.table-striped td,th{text-align: center;} .first_row_bg{background-color: #f3f4f5;}
    .input.checkbox{text-align: left;}
    .modal-body{padding:0 20%;}
    
</style>
 <?php 
         echo $this->Html->css('frontend/datepickercss/default');
        echo $this->Html->script('jquery.min');
        echo $this->Html->script('frontend/datepickerjavascript/zebra_datepicker');
        
        ?>
<script>
    //j = jQuery.noConflict();  
    $(function () {

        for (i = 0; i <40; i++) {
         //   $('#' + i + 'answer_other').hide();

        }
    
       if($('#5checkbox').is(":checked"))(function () {
                                
                                            alert('hello');
                                            var selectboxValue = $('#0SectionQuestionAnswerFAnswerList').val();
                                            if (selectboxValue == 'Others- (Please specify below)') {
                                                $('#0answer_other').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#0answer_other').hide();
                                            }
        })
    
    
    })
</script>

<script>

    
   j = jQuery.noConflict();
    j(function(){
        
      
                  for(k=0;k<14;k++){
        j('#check_in_date_'+k).Zebra_DatePicker({
             
             format: 'M d, Y',
             direction: true,
                     })
                     
           j('#check_out_date_'+k).Zebra_DatePicker({
             
             format: 'M d, Y',
             direction: true,
                     })          
                 }
     
        

         
       
   
    })        
    
    </script>
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
                        <h4>SECTION – G: BELIEF SYSTEM </h4>
                        <h5><b>G-1: RELIGION AND RITUALS</b></h5>
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr><td colspan="7"><b>Present community situation of Religious composition (conversion from preclassical to classical)</b></td></tr>
                                <tr> <th class="first_row_bg" rowspan="8">&nbsp;</th> </tr>
                                <tr> 
                                   
                                    <th rowspan="2">Followers (Household)</th>
                                    <th rowspan="2">PRECLASSICAL</th>  
                                    <th colspan="4"><center>EXTENT OF CONVERSION TO CLASSICAL RELIGIONS</center></th>  
                                </tr>
                                
                                <tr>
                                    
                                    <th>Christianity</th> 
                                    <th>Buddhism</th>
                                    <th>Hinduism</th>  
                                    <th>Islam</th>
                                    
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr> <td rowspan="7">&nbsp;701</td> </tr>
                               
                                <?php $followers_list = array(
                                    '00 – 19%','20 – 39%','40 – 59%','60 – 79%','80 – 99%','100%'
                                ); ?>
                                
                                <?php foreach($followers_list as $key=>$data): ?>
                                 <tr> 
                                     
                                     <td><?php echo $data; ?></td>
                                    <?php for($i=0;$i<5;$i++): ?>
                                    <td><?php
                                        echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'type' => 'checkbox','div' => false
                                        ));
                                        ?></td>
                                   <?php endfor; ?> 
                                </tr>
                                <?php endforeach;?>
                                
                                <?php 
                                $question_list = array(
                                    'Nature of Preclassical Animistic belief and practices.','Nature and form of Hinduism and practices '
                                ); 
                                
                                $answer_list_1 = array(
                                    'Ancestor reverence and worship.','Belief in all parts of nature have souls and Nature Worship. Fetishism (object believed to have supernatural powers)/ totemism (performancestic unilineal relation of animal and plant species to linages or clans).',
                                    'Shamanism- a person believed to have access to, and influence in, the world of benevolent and malevolent spirits.',
                                    'Amalgamation of classical Hinduism but have their own religious specialist.','Amalgamation of Buddhism.',
                                    'Others- (Please specify below)'
                                );
                                
                                $answer_list_2 = array(
                                    'Belief in Brahma as the creator, preserver and transformer','Authority of the Veda and the Brahmin caste',
                                    'Caste Hierarchy & interdependence between castes','Vaisnavism (Vaisnava) that regard Visnu as the Supreme Being',
                                    'Saivism that regard Siva as the Supreme Being','Tantrism (Tantra) and Shaktism (Shakta), esoteric, magical, and devotional developments',
                                    'Folk Hinduism- an amalgam of numerous local folk beliefs and practices with classical Hinduism','Folk Hinduism with their own community religious specialist.',
                                    'Others- (Please specify below)'
                                );
                                
                                ?>
                                
                                
                                <tr>
                                    <td>702</td>
                                    <td>Nature of Preclassical Animistic belief and practices.</td>
                                    <td colspan="4" style="text-align: left;">
                                      <?php foreach($answer_list_1 as $key=>$value): ?>  
                                        <?php
                                        echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'value'=>$value,
                                            'id'=>$key.'checkbox',
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                        
                                        <?php echo $this -> Form -> input('0SectionQuestionAnswerF.answer', array('type' => 'text','id'=>'0answer_other','class' => 'form-control','placeholder'=>'Please type here','label' => false, 'style' => 'margin-top:3px'));?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>703</td>
                                    <td>Nature and form of Hinduism and practices </td>
                                    <td colspan="4" style="text-align: left;">
                                      <?php foreach($answer_list_2 as $key=>$value): ?>  
                                        <?php
                                        echo $this->form->input('checkbox', array(
                                            'label' => false,
                                            'value'=>$value,
                                            'id'=>$key.'checkbox',
                                            'after'=>'<label>'.$value.'</label>',
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                        
                                      <?php endforeach; ?>  
                                        
                                        <?php echo $this -> Form -> input('1SectionQuestionAnswerF.answer', array('type' => 'text','id'=>'1answer_other','class' => 'form-control','placeholder'=>'Please type here','label' => false, 'style' => 'margin-top:3px'));?>
                                    </td>
                                </tr>
                                   
                                  
                            </tbody>
                        </table>
                           
                        <?php $participant_list = array(
                            
                              '1. Only males','2.Both, but males more prominent','3. Both, and fairly equal participation',
                              '4. Both, but women more prominent'
                        ); ?>
                        <h4>Prepare a list of Domestic Rites and Ritual Performances</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                
                                <tr>
                                    <th rowspan="10" class="first_row_bg"></th>
                                    <th>Name of Ritual</th> 
                                    <th>Daily </th>
                                    <th>Weekly</th>
                                    <th>Monthly</th>
                                    <th>Yearly</th>
                                    <th>Participation</th>
                                    <th>Performances</th>
                                        
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td rowspan="10">704</td></tr>
                               <?php  for($j=0;$j<5;$j++):  ?> 
                                <tr>
<!--                                    <td>&nbsp;</td>-->
                                    <td><?php echo $this -> Form -> input($i.'.SectionQuestionAnswerF.answer', array('type' => 'text','id'=>$i.'answer_other','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td>
                                    <?php for($i=0;$i<4;$i++){ ?>
                                    <td>
                                       <?php
                                        echo $this->form->input('checkbox', array(
                                            'label' => false,
                                           
                                            'id'=>$i.'checkbox',
                                          
                                            'type' => 'checkbox','div' => true
                                        ));
                                        ?>
                                    <?php } ?>
                                        </td>
                                        <td>
                                           <?php echo $this ->Form-> input($i.'.SectionQuestionAnswerF.answer', array('type' => 'select','id'=>$i.'answer_other','options'=>$participant_list,'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?> 
                                        </td>
                                        
                                        
                                        <?php
                                           $performance_list_704 = array(
                                               'Special gestures and words, recitation of texts','Performance of special music, songs or dances',
                                               'Processions, rally','Manipulation of certain objects','Use of special dresses',
                                               'Use of aromatic objects','Consumption of special food, drink, or drugs','Fasting',
                                               'Animal Sacrifice','Lighting/ Prodip/ Candle','Lighting/ Prodip/ Candle ','Offerings (food, flower fruits)'
                                           );
                                        
                                        ?>
                                        
                                        <td>
                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#performanceModal">
                                                Click Here
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="performanceModal" tabindex="-1" role="dialog" aria-labelledby="performanceModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="performanceModalLabel">Please check performances from below</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                         
                                                                 <?php 
                                        foreach($performance_list_704 as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                  'name'=>$key.'multiple_check',
                                                   'value'=>$value, 
                                                  'after' => '<label>'.$value.'</lablel><br/>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </td>
                                        
                                        
                                </tr>
                                
                                <?php endfor; ?>
                               
                            </tbody>
                        </table>
                        
                        <h4>Prepare a Seasonal Calendar for Ritual Ceremonies (Public Celebration)</h4>
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                            <th rowspan="8" class="first_row_bg"></th>
                              <th>Name of Ritual</th>
                              <th>Beginning Day</th>
                              <th>End Day</th>
                              <th>Duration (Day)</th>
                              <th>Participation</th>
                              <th>Performances</th>
                            </thead>
                            
                            <tbody>
                                <tr><td rowspan="7">705</td></tr>
                                <?php 
                                
                                $duration_list = array(
                                    '01 day','02 – 04 days','05 – 07 days','08 – 14 days','15 – 30 days and more'
                                );
                                
                                $participation_list = array(
                                    
                                    'Only males','Both, but males more prominent','Both, and fairly equal public participation',
                                    'Both, but women more prominent'
                                );
                               
                                    ?>
                                
                                <?php  for($i=0;$i<5;$i++):  ?>
                                <tr>
<!--                                    <td rowspan="1"></td> -->
                                    <td> <?php echo $this -> Form -> input('SectionQuestionAnswerF.answer', array('type' => 'text','id'=>'answer_other','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></td> 
                                    <td>
                                        
                                      <?php echo $this ->Form->input('collector_name', array('type' => 'text','id'=>'check_in_date_'.$i, 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?>  
                                    </td>
                                    
                                    <td>
                                        
                                      <?php echo $this ->Form->input('collector_name', array('type' => 'text','id'=>'check_out_date_'.$i, 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?>  
                                    </td>
                                    
                                    <td>
                                     
                                        <?php echo $this ->Form->input('collector_name', array('type' => 'select','class' => 'form-control rdonly','options'=>$duration_list,'label' => false, 'style' => 'margin-top:3px'));?>  
                                   
                                    </td>
                                    
                                    <td>
                                     
                                        <?php echo $this ->Form->input('collector_name', array('type' => 'select','class' => 'form-control rdonly','options'=>$participation_list,'label' => false, 'style' => 'margin-top:3px'));?>  
                                   
                                    </td>
                                    
                                    <?php
                                           $performance_list = array(
                                               'Special gestures and words ,recitation of texts','Performance of special music, songs or dances',
                                               'Processions, rally','Manipulation of certain objects','Use of special dresses',
                                               'Use of aromatic objects','Consumption of special food, drink, or drugs','Fasting',
                                               'Animal Sacrifice','Lighting/ Prodip/ Candle','Offerings (food, flower fruits)'
                                           );
                                        
                                        ?>
                                        
                                        <td>
                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#performanceModal">
                                                Click Here
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="performanceModal" tabindex="-1" role="dialog" aria-labelledby="performanceModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="performanceModalLabel">Please check performances from below</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                         
                                                                 <?php 
                                        foreach($performance_list as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                  'name'=>$key.'multiple_check',
                                                   'value'=>$value, 
                                                  'after' => '<label>'.$value.'</lablel><br/>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </td>
                                    
                                </tr>
                                
                                <?php endfor; ?>
                                
                            </tbody>
                        </table>
                        
                        <h4>Sacrificial Rituals and Rites of exchange</h4>
                        
                        <?php
                        
                           $season_check_list = array(
                               'As & when Necessary','January','February','March','April','May','June','July','August',
                               'September','Octover','November','December'
                           );
                        
                           $organaiation_drop_down_list = array(
                               'Individual','Household','Lineage','Clan','Village','Community','Multi- ethnic'
                           );
                           
                           $purpose_ritual_list = array(
                               'Epidemic (e.g. Cholera)','Affliction and Illness','Housing Construction',
                               'Health and wellbeing','Agriculture','Hunting',''
                           );
                        ?>
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                              <th rowspan="10" class="first_row_bg"></th>  
                              <th>Purpose of Ritual</th>
                              <th>Local Name</th>
                              <th>Season</th>
                              <th>Level of Organization</th>
                              <th>Participation</th>
                              <th>Performances</th>
                            </thead>
                            
                            <tbody>
                                 <tr><td rowspan="7">706</td></tr>
                                <?php for($i=0;$i<6;$i++): ?>
                                <tr>
                                    <td><?php echo $purpose_ritual_list[$i]; ?></td>  
                                    <td> <?php echo $this ->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control rdonly', 'label' => false, 'style' => 'margin-top:3px'));?>  </td>
                                
                                    <td>
                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#seasonModal">
                                                Click Here
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="seasonModal" tabindex="-1" role="dialog" aria-labelledby="seasonModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="performanceModalLabel">Please check Season from below</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                         
                                                                 <?php 
                                        foreach($season_check_list as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                  'name'=>$key.'multiple_check',
                                                   'value'=>$value, 
                                                  'after' => '<label>'.$value.'</lablel><br/>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </td>
                                        <td>
                                           <?php echo $this ->Form->input('collector_name', array('type' => 'select','class' => 'form-control rdonly','options'=>$season_check_list,'label' => false, 'style' => 'margin-top:3px'));?>    
                                        </td>
                                        
                                        <td>
                                     
                                        <?php echo $this ->Form->input('collector_name', array('type' => 'select','class' => 'form-control rdonly','options'=>$participation_list,'label' => false, 'style' => 'margin-top:3px'));?>  
                                   
                                    </td>
                                    
                                    <?php
                                           $performance_list = array(
                                               'Special gestures and words ,recitation of texts','Performance of special music, songs or dances',
                                               'Processions, rally','Manipulation of certain objects','Use of special dresses',
                                               'Use of aromatic objects','Consumption of special food, drink, or drugs','Fasting',
                                               'Animal Sacrifice','Lighting/ Prodip/ Candle','Offerings (food, flower fruits)'
                                           );
                                        
                                        ?>
                                        
                                        <td>
                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#performanceModal">
                                                Click Here
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="performanceModal" tabindex="-1" role="dialog" aria-labelledby="performanceModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="performanceModalLabel">Please check performances from below</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                         
                                                                 <?php 
                                        foreach($performance_list as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                  'name'=>$key.'multiple_check',
                                                   'value'=>$value, 
                                                  'after' => '<label>'.$value.'</lablel><br/>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </td>
                                </tr>
                                <?php endfor; ?>    
                            </tbody>
                        </table>
                        
                        <hr></hr>
                        <center><button class="btn btn-info">Submit</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    