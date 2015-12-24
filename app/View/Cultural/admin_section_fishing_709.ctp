<?php

echo $this->Html->script('jquery.min'); ?>
<script>
  
    $(function () {
        
        for(i=0;i<40;i++){
             $('#'+i+'Section709OthersPlaceCollection').hide();
            
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
                        <h4>709. Amount of Fish caught from pond/ land/ farm (In the last month)</h4>

                        <?php echo $this->Form->create('Section709',array('class'=>'')) ?>
                        <div class="table-responsive">

                            <?php
                            $fishCaught_headTitle = array(
                                'Type of Fish', 'Place of collection', 'Total collection (4+5)', 'Gift giving and own use', 'Sale and exchange',
                                'Price per kg', 'Total price (3X6)', 'Expenses**', 'Total earning (7-8)'
                            );

                            $fish_caught_colTitle = array(
    'Rui', 'Pangas', 'Silvercarp/ Grasscarp', 'Crab', 'Puti', 'Shing/Magur', 'Koi', 'Baim',
    'Baila', 'Tengra', 'Shorputi', 'Taki', 'Shol', 'Gojar', 'Katla', 'Nilotica', 'Telapia', 'Mrigel', 'Kachki',
    'Others', 'Others', 'Others', 'Others', 'Others'
);
                            
                            
                          
                            
                            $place_list_collection = array(
                             
                                 '01'=>'Household pond','02'=>'Fishing in a group owned pond as a member','03'=>'Pond owned by community or village',
                                '04'=>'Fishing in a pond on lease',
                                '99'=>'Others (Please specify)'
                            );
                            
                            $table_col_list = array(
                                'total_collection','gift_own_use','sale_and_exchange','price_per_kg','total_price','expenses','total_earnings'
                                
                            );
                            ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="6">Did members of the household catch fish from pond/ land/ farm in the last month?</th>
                                       
                                         <?php 
                                     
                                     if(!empty($this->data[0]['Section709']['id'])){
                                                        echo $this->Form->input('0.Section709.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <th colspan="3">
                                            <?php echo $this->form->input('0.Section709.yes_no_ans',array('type'=>'select','options'=>array('1'=>'Yes','0'=>'No'),'label'=>FALSE,'class'=>'form-control')); ?>
                                            
                                        </th>
                                        
                                    </tr>

                                    <tr>
                                        <?php for ($k = 0; $k < count($fishCaught_headTitle); $k++): ?>

                                            <th><?php echo $fishCaught_headTitle[$k]; ?></th>

                                        <?php endfor; ?>

                                    </tr>


                                </thead>

                                <tbody>

                                    <?php for ($m = 0; $m < count($fish_caught_colTitle)-5; $m++): ?> 
                                    
                                     <?php 
                                     
                                     if(!empty($this->data[$m]['Section709']['id'])){
                                                        echo $this->Form->input($m.'.Section709.id',array('type'=>'hidden')); 
                                                    }
                                                ?>

                                        <tr>

                                            <td>
                                                <?php echo $this->form->input($m.'.Section709.type_of_fish',array('type'=>'hidden','label'=>false,'class'=>'form-control','value'=>$fish_caught_colTitle[$m])); ?><?php echo $fish_caught_colTitle[$m]; ?>

                                            </td> 

                                           
                                            <td>
                                                
                                                <?php echo $this->form->input($m.'.Section709.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                               <?php echo $this->form->input($m.'.Section709.place_collection',array('type'=>'select','options'=>$place_list_collection,'empty'=>'(Choose One)', 'label'=>false,'class'=>'form-control')); ?> 
                                               <?php echo $this->form->input($m.'.Section709.others_place_collection',array('type'=>'text','label'=>false,'class'=>'form-control')); ?>
                                                
                                            </td>
                                            <?php foreach($table_col_list as $key=>$val): ?>
                                            <td><?php echo $this->form->input($m.'.Section709.'.$val,array('type'=>'text','label'=>false,'class'=>'form-control')); ?> </td>
                                            <?php endforeach; ?>

                                        </tr>
                                        
                                        <script>
  
  
 
    
    $('#'+<?php echo $m; ?>+'Section709PlaceCollection').change(function () {
                                      
                                 
                                            var selectboxValue = $('#'+<?php echo $m; ?>+'Section709PlaceCollection').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $m; ?>+'Section709OthersPlaceCollection').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $m; ?>+'Section709OthersPlaceCollection').hide();
                                            }
        })
            </script>
                                        
                                        

                                    <?php endfor; ?>
            
            
            
                                   <?php for ($m = 19; $m <count($fish_caught_colTitle); $m++): ?> 
            
                                       <?php
                                                 
                                   //  pr($this->data); exit;
                                     
                                     if(!empty($this->data[$m]['Section709']['id'])){
                                                        echo $this->Form->input($m.'.Section709.id',array('type'=>'hidden')); 
                                                    }
                                                ?>

                                        <tr>

                                            <td>
                                                 <?php echo $this->form->input($m.'.Section709.type_of_fish',array('type'=>'text','label'=>false,'class'=>'form-control','placeholder'=>$fish_caught_colTitle[$m])); ?> 

                                            </td> 

                                           
                                            <td>
                                                
                                                <?php echo $this->form->input($m.'.Section709.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                               <?php echo $this->form->input($m.'.Section709.place_collection',array('type'=>'select','options'=>$place_list_collection,'label'=>false,'class'=>'form-control')); ?> 
                                               <?php echo $this->form->input($m.'.Section709.others_place_collection',array('type'=>'text','label'=>false,'class'=>'form-control')); ?>
                                                
                                            </td>
                                            <?php foreach($table_col_list as $key=>$val): ?>
                                            <td><?php echo $this->form->input($m.'.Section709.'.$val,array('type'=>'text','label'=>false,'class'=>'form-control')); ?> </td>
                                            <?php endforeach; ?>

                                        </tr>
                                        
                                        <script>
  
  
 
    
    $('#'+<?php echo $m; ?>+'Section709PlaceCollection').change(function () {
                                      
                                 
                                            var selectboxValue = $('#'+<?php echo $m; ?>+'Section709PlaceCollection').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $m; ?>+'Section709OthersPlaceCollection').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $m; ?>+'Section709OthersPlaceCollection').hide();
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