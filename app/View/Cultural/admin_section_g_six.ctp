<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Household/Section-G6'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">

                        <h4>G-6: Survey of the miscellaneous earnings of the household from forest produces(In the last month)</h4>

                        <div class="table-responsive"> 

                            <?php
                            $miscellaneous_eangs_thead = array(
                                'Type of produces', 'Total collection', 'Unit', 'Gift giving and own',
                                'Sale and exchange', 'Price per unit', 'Total price', 'Expenses', 'Net earning'
                            );

                            $miscellaneous_eangs_tbody = array(
                                '01. Honey', '02. Golpata', '03. Fish', '04. Crab', 'Others', 'Others', 'Others'
                            );
                            ?>

                            <?php echo $this->Form->create('HouseholdSectionG6712', array('class' => '')) ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="8"> 712. What kind of forest produces (except those already mentioned) did the members collect in the last month? </th>
                                        
                                        <?php
                                       
                                     if(!empty($this->data[0]['HouseholdSectionG6712']['id'])){
                                                        echo $this->Form->input('0.HouseholdSectionG6712.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                        <th> <?php echo $this->form->input('0.HouseholdSectionG6712.yes_no_ans',array('type'=>'select','options'=>array('Yes','No'),'label'=>FALSE,'class'=>'form-control')); ?></th>
<!--                                        <th>Yes</th>
                                        <th>No</th>-->
                                    </tr>

                                    <tr>
                                        <?php for ($i = 0; $i < count($miscellaneous_eangs_thead); $i++): ?> 

                                            <th><?php echo $miscellaneous_eangs_thead[$i]; ?></th>

                                        <?php endfor; ?> 
                                    </tr>

                                </thead>

                                <tbody>

                                    <?php for ($j = 0; $j < count($miscellaneous_eangs_tbody); $j++): ?>
                                    
                                     <?php if(!empty($this->data[$j]['HouseholdSectionG6712']['id'])){
                                     echo $this->Form->input($j.'.HouseholdSectionG6712.id',array('type'=>'hidden')); 
                                        } ?>
                                    
                                        <tr>
                                            
                                            <?php if($j==4){ ?>
                                           <td><?php echo $this->Form->input($j.'.HouseholdSectionG6712.type_of_produces', array('type' => 'text','placeholder'=>$miscellaneous_eangs_tbody[$j], 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <?php }
                                             else if($j==5){ ?>
                                            <td><?php echo $this->Form->input($j.'.HouseholdSectionG6712.type_of_produces', array('type' => 'text','placeholder'=>$miscellaneous_eangs_tbody[$j], 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <?php }
                                            else if($j==6){ ?>
                                            <td><?php echo $this->Form->input($j.'.HouseholdSectionG6712.type_of_produces', array('type' => 'text','placeholder'=>$miscellaneous_eangs_tbody[$j], 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <?php }
                                            
                                            else{ ?>
                                            <td><?php echo $this->Form->input($j.'.HouseholdSectionG6712.type_of_produces', array('type' => 'hidden','value'=>$miscellaneous_eangs_tbody[$j], 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?><?php echo $miscellaneous_eangs_tbody[$j]; ?></td>
                                            
                                            <?php } ?>
                                                <?php for ($k = 1; $k < count($miscellaneous_eangs_thead); $k++): ?>  
                                            
                                           
                                            
                                            
                                                <?php
                                                $a = $miscellaneous_eangs_thead[$k];

                                                $field_name = strtolower(str_replace(' ', '_', $a));
                                                
                                               echo $this->Form->input($j.'.HouseholdSectionG6712.interview_id', array('type' => 'hidden','value'=>$interview_id, 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));
                                                
                                                echo '<td>' . $this->Form->input($j.'.HouseholdSectionG6712.'.$field_name, array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')) . '</td>';
                                            endfor;
                                            ?>
                                        <?php endfor; ?>
                                    </tr>


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