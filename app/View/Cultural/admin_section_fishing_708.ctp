<?php

echo $this->Html->script('jquery.min'); ?>
<script>
  
    $(function () {
        
        for(i=0;i<40;i++){
             $('#'+i+'Section708OthersPlaceCollection').hide();
            
        }
    });
</script>   
<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Household/Section-G'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <h4><b>G- 4: Fishing and Pisciculture</b></h4>
                        <h4>708. Amount of Fish caught from different sources (River, Bil, Haor)(In the last 1 month)</h4>

                        <?php echo $this->Form->create('Section708',array('class'=>'')) ?>
                        <div class="table-responsive">

                            <?php
                            $fishCaught_headTitle = array(
                                'Type of Fish', 'Place of collection', 'Total collection (4+5)', 'Gift giving and own use', 'Sale and exchange',
                                'Price per kg', 'Total price (3X6)', 'Expenses**', 'Total earning (7-8)'
                            );

                            $fish_caught_colTitle = array(
                                'Bhetki', 'Paissa/ Faissa', 'Tengra', 'Shrimp', 'Coral', 'Kaing', 'Rupchanda', 'Crab',
                                            'Rui', 'Katla', 'Boal', 'Kali Baush', 'Chitol', 'Aiyr', 'Foli', 'Ilish', 'Pabda', 'Poa',
                                            'Ritha', 'Others', 'Others'
                                );
                            
                            
                          
                            
                            $place_list_collection = array(
                             
                                 '01'=>'River','02'=>'Bil','03'=>'Lake',
                                '04'=>'Sea',
                                '99'=>'Others (Please specify)'
                            );
                            
                            $table_col_list = array(
                                'total_collection','gift_own_use','sale_and_exchange','price_per_kg','total_price','expenses','total_earnings'
                                
                            );
                            ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="6">Did members of the household catch fish from different sources (River, Bil, Haor) in the last month? </th>
                                       
                                         <?php if(!empty($this->data[0]['Section708']['id'])){
                                                        echo $this->Form->input('0.Section708.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <th colspan="3">
                                            <?php echo $this->form->input('0.Section708.yes_no_ans',array('type'=>'select','options'=>array('1'=>'Yes','0'=>'No'),'label'=>FALSE,'class'=>'form-control')); ?>
                                            
                                        </th>
                                        
                                    </tr>

                                    <tr>
                                        <?php for ($k = 0; $k < count($fishCaught_headTitle); $k++): ?>

                                            <th><?php echo $fishCaught_headTitle[$k]; ?></th>

                                        <?php endfor; ?>

                                    </tr>


                                </thead>

                                <tbody>

                                    <?php for ($m = 0; $m < count($fish_caught_colTitle)-2; $m++): ?> 
                                    
                                     <?php
                                                 
                                   //  pr($this->data); exit;
                                     
                                     if(!empty($this->data[$m]['Section708']['id'])){
                                                        echo $this->Form->input($m.'.Section708.id',array('type'=>'hidden')); 
                                                    }
                                                ?>

                                        <tr>

                                            <td>
                                                <?php echo $this->form->input($m.'.Section708.type_of_fish',array('type'=>'hidden','label'=>false,'class'=>'form-control','value'=>$fish_caught_colTitle[$m])); ?><?php echo $fish_caught_colTitle[$m]; ?>

                                            </td> 

                                           
                                            <td>
                                                
                                                <?php echo $this->form->input($m.'.Section708.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                               <?php echo $this->form->input($m.'.Section708.place_collection',array('type'=>'select','options'=>$place_list_collection,'label'=>false,'class'=>'form-control')); ?> 
                                               <?php echo $this->form->input($m.'.Section708.others_place_collection',array('type'=>'text','label'=>false,'class'=>'form-control')); ?>
                                                
                                            </td>
                                            <?php foreach($table_col_list as $key=>$val): ?>
                                            <td><?php echo $this->form->input($m.'.Section708.'.$val,array('type'=>'text','label'=>false,'class'=>'form-control')); ?> </td>
                                            <?php endforeach; ?>

                                        </tr>
                                        
                                        <script>
  
  
 
    
    $('#'+<?php echo $m; ?>+'Section708PlaceCollection').change(function () {
                                      
                                 
                                            var selectboxValue = $('#'+<?php echo $m; ?>+'Section708PlaceCollection').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $m; ?>+'Section708OthersPlaceCollection').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $m; ?>+'Section708OthersPlaceCollection').hide();
                                            }
        })
            </script>
                                        
                                        

                                    <?php endfor; ?>
            
            
            
                                   <?php for ($m = 19; $m <count($fish_caught_colTitle); $m++): ?> 
            
                                       <?php
                                                 
                                   //  pr($this->data); exit;
                                     
                                     if(!empty($this->data[$m]['Section708']['id'])){
                                                        echo $this->Form->input($m.'.Section708.id',array('type'=>'hidden')); 
                                                    }
                                                ?>

                                        <tr>

                                            <td>
                                                 <?php echo $this->form->input($m.'.Section708.type_of_fish',array('type'=>'text','label'=>false,'class'=>'form-control','placeholder'=>$fish_caught_colTitle[$m])); ?> 

                                            </td> 

                                           
                                            <td>
                                                
                                                <?php echo $this->form->input($m.'.Section708.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                               <?php echo $this->form->input($m.'.Section708.place_collection',array('type'=>'select','options'=>$place_list_collection,'empty'=>'Choose One','label'=>false,'class'=>'form-control')); ?> 
                                               <?php echo $this->form->input($m.'.Section708.others_place_collection',array('type'=>'text','label'=>false,'class'=>'form-control')); ?>
                                                
                                            </td>
                                            <?php foreach($table_col_list as $key=>$val): ?>
                                            <td><?php echo $this->form->input($m.'.Section708.'.$val,array('type'=>'text','label'=>false,'class'=>'form-control')); ?> </td>
                                            <?php endforeach; ?>

                                        </tr>
                                        
                                        <script>
  
  
 
    
    $('#'+<?php echo $m; ?>+'Section708PlaceCollection').change(function () {
                                      
                                 
                                            var selectboxValue = $('#'+<?php echo $m; ?>+'Section708PlaceCollection').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $m; ?>+'Section708OthersPlaceCollection').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $m; ?>+'Section708OthersPlaceCollection').hide();
                                            }
        })
            </script>
                                        
                                        

                                    <?php endfor; ?>
            

                                </tbody>
                            </table>  

                        </div>  
                         <hr/>

                        <center><button class="btn btn-info">Next>></button></center>
                            <?php echo $this->Form->end(); ?>    
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>