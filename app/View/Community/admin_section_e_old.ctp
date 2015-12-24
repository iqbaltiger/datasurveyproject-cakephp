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
                <h3 class="box-title"><?php echo __('Community'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <h4>SECTION – E: CONSTRUCTION AND MAINTENANCE OF HOUSE</h4>
                        <h5><b>E-1: PREVAILING TYPE OF DWELLING</b></h5>

                        <?php
                        
                          $prevailing_type = array(
                              'How many rooms are there in the Dwelling?','What is the Type of Ground Plan of the Prevailing Dwelling?',
                              'What is the Type of Floor Level of the Prevailing Dwelling?','What is the Type of Wall Material of the Prevailing Dwelling?',
                              'What is the Type of Roofing Materials of the Prevailing Dwelling? '
                          );
                          
                          $drop_text[0] = array(
                              
                              'One','Two','Three','Four or More','99'=>'Others- (Please specify below)'
                          );
                          
                          $drop_text[1] = array(
                              'Semicircular','Circular','Elliptical or elongated with rounded ends','Polygonal',
                              'Rectangular or square','Quadrangular around (if only partially) inner court','99'=>'Others- (Please specify below)'
                          );
                          
                          $drop_text[2] = array(
                              
                              'Subterranean (underground)or semi-subterranean (ignoring cellars)','Floor formed by ground','Elevated slightly or on raised platform',
                              'Raised substantially on piles, posts, or piers','99'=>'Others- (Please specify below)'
                          );
                          
                          $drop_text[3] = array(
                              'Concrete, stucco, or fired brink','Mud, clayand dung or wattle and daub','Wood, including logs, planks, poles, or bamboo',
                              'Golpata,Coconut Leaves,Shon, Shundori, Gewa','Grass, leaves, brush, or other thatch','Felt, cloth, or other fabrics',
                              'Polythene or plastic','99'=>'Others- (Please specify below)'
                              
                          );
                          
                          $drop_text[4] = array(
                              'Concrete, stucco, or fired brink','Mud,clayand dung or wattle and daub','Wood, including logs, planks, poles, or bamboo',
                              'Golpata,Coconut Leaves,Shon, Shundori, Gewa','Grass, leaves, brush, or other thatch','Felt, cloth, or other fabrics',
                              'Polythene or plastic','99'=>'Others- (Please specify below)'
                              
                          );
                        ?> 
                       
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                              <th></th>
                              <th>ROLE</th>
                              <th></th>
                            </thead>
                            
                            <tbody>
                               
                                 <?php for($i=0;$i<count($prevailing_type);$i++): ?>
                                <tr>
                                    <td><?php echo $i+501; ?></td>
                                    <td><?php echo $prevailing_type[$i]; ?></td>
                                    <td>
                                        <?php  echo $this ->Form ->input($i.'.SectionQuestionAnswerCultural.answer_list', array('options' =>$drop_text[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php echo $this -> Form -> input($i.'.SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>$i.'mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    
                                    </td>
                                </tr> 
                                
                                <script>
                                    
                                  $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswerList').change(function () {
            
                                            var selectboxValue = $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswerList').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $i; ?>+'mytest').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $i; ?>+'mytest').hide();
                                            }
        })
                            </script>
                                <?php
                                  
                                   endfor;
                                
                                ?>
                                
                                
                                
                            </tbody>
                        </table>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    