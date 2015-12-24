<?php

echo $this->Html->script('jquery.min'); ?>
<script>
  
    $(function () {
        
        for(i=0;i<25;i++){
             $('#'+i+'Section710OthersPlaceHunting').hide();
            
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
                        <h4>710. Hunting and Trapping (In the last month)</h4>

                        <?php echo $this->Form->create('Section710',array('class'=>'')) ?>
                        <div class="table-responsive">

                            <?php
                            $hunting_trapping_headTitle = array(
                                'Type of Game', 'Place of hunting/ trapping', 'Total collection (4+5)', 'Gift giving and own use', 'Sale and exchange',
                                'Price per kg', 'Total price (3X6)', 'Expenses**', 'Total earning (7-8)'
                            );

                            $hunting_trapping_cols = array(
                                'Fowl', 'Rabbit', 'Wild boar', 'Snakes', 'Birds', 'Rats', 'Gaur/Goyal', 'Others', 'Others', 'Others', 'Others', 'Others'
                            );
                            
                            $place_list_hunting = array(
                             
                                 '01'=>'Homestead','02'=>'Forest on Khas Land','03'=>'Protected forest','04'=>'Common Property land',
                                '99'=>'Others (Please specify)'
                            );
                            
                            $table_col_list = array(
                                'total_collection','gift_own_use','sale_and_exchange','price_per_kg','total_price','expenses','total_earnings'
                                
                            );
                            ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="3">Do you do hunting?</th>
                                         <?php
                                       
                                     if(!empty($this->data[0]['Section710']['id'])){
                                                        echo $this->Form->input('0.Section710.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <th colspan="5">
                                            <?php echo $this->form->input('0.Section710.yes_no_ans',array('type'=>'select','options'=>array('1'=>'Yes','0'=>'No'),'label'=>FALSE,'class'=>'form-control')); ?>
                                            
                                        </th>
                                        
                                    </tr>

                                    <tr>
                                        <?php for ($k = 0; $k < count($hunting_trapping_headTitle); $k++): ?>

                                            <th><?php echo $hunting_trapping_headTitle[$k]; ?></th>

                                        <?php endfor; ?>

                                    </tr>


                                </thead>

                                <tbody>

                                    <?php for ($m = 0; $m < count($hunting_trapping_cols)-5; $m++): ?> 
                                    
                                     <?php
                                                 
                                   //  pr($this->data); exit;
                                     
                                     if(!empty($this->data[$m]['Section710']['id'])){
                                                        echo $this->Form->input($m.'.Section710.id',array('type'=>'hidden')); 
                                                    }
                                                ?>

                                        <tr>

                                            <td>
                                                <?php echo $this->form->input($m.'.Section710.type_of_game',array('type'=>'hidden','label'=>false,'class'=>'form-control','value'=>$hunting_trapping_cols[$m])); ?><?php echo $hunting_trapping_cols[$m]; ?>

                                            </td> 

                                           
                                            <td>
                                                
                                                <?php echo $this->form->input($m.'.Section710.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                               <?php echo $this->form->input($m.'.Section710.place_hunting',array('type'=>'select','options'=>$place_list_hunting,'empty'=>'Choose One','label'=>false,'class'=>'form-control')); ?> 
                                               <?php echo $this->form->input($m.'.Section710.others_place_hunting',array('type'=>'text','label'=>false,'class'=>'form-control')); ?>
                                                
                                            </td>
                                            <?php foreach($table_col_list as $key=>$val): ?>
                                            <td><?php echo $this->form->input($m.'.Section710.'.$val,array('type'=>'text','label'=>false,'class'=>'form-control')); ?> </td>
                                            <?php endforeach; ?>

                                        </tr>
                                        
                                        <script>
  
  
 
    
    $('#'+<?php echo $m; ?>+'Section710PlaceHunting').change(function () {
                                      
                                 
                                            var selectboxValue = $('#'+<?php echo $m; ?>+'Section710PlaceHunting').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $m; ?>+'Section710OthersPlaceHunting').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $m; ?>+'Section710OthersPlaceHunting').hide();
                                            }
        })
            </script>
                                        
                                        

                                    <?php endfor; ?>
            
            
            
                                   <?php for ($m = 7; $m <count($hunting_trapping_cols); $m++): ?> 
            
                                       <?php
                                                 
                                   //  pr($this->data); exit;
                                     
                                     if(!empty($this->data[$m]['Section710']['id'])){
                                                        echo $this->Form->input($m.'.Section710.id',array('type'=>'hidden')); 
                                                    }
                                                ?>

                                        <tr>

                                            <td>
                                                 <?php echo $this->form->input($m.'.Section710.type_of_game',array('type'=>'text','label'=>false,'class'=>'form-control','placeholder'=>$hunting_trapping_cols[$m])); ?> 

                                            </td> 

                                           
                                            <td>
                                                
                                                <?php echo $this->form->input($m.'.Section710.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                               <?php echo $this->form->input($m.'.Section710.place_hunting',array('type'=>'select','options'=>$place_list_hunting,'empty'=>'Choose One','label'=>false,'class'=>'form-control')); ?> 
                                               <?php echo $this->form->input($m.'.Section710.others_place_hunting',array('type'=>'text','label'=>false,'class'=>'form-control')); ?>
                                                
                                            </td>
                                            <?php foreach($table_col_list as $key=>$val): ?>
                                            <td><?php echo $this->form->input($m.'.Section710.'.$val,array('type'=>'text','label'=>false,'class'=>'form-control')); ?> </td>
                                            <?php endforeach; ?>

                                        </tr>
                                        
                                        <script>
  
  
 
    
    $('#'+<?php echo $m; ?>+'Section710PlaceHunting').change(function () {
                                      
                                 
                                            var selectboxValue = $('#'+<?php echo $m; ?>+'Section710PlaceHunting').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $m; ?>+'Section710OthersPlaceHunting').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $m; ?>+'Section710OthersPlaceHunting').hide();
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