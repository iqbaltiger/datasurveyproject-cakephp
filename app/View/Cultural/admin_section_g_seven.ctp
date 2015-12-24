<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Household/Section-G7'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <?php echo $this->Form->create('HouseholdSectionG7713', array('class' => '')) ?>
                        <h4>G-7: Survey of other collective earnings of the household (In the last 6 months)</h4>
                        <h5>712. Was there any other source of income of the household members except those already mentioned?</h5>

                        <div class="table-responsive">

                            <?php
                            $table_head = array('Sources of Income', 'Amount of total income');

                            $table_cols = array('Money sent from abroad', 'Aid from Governmental and non-Governmental organization', 'Gifts or help from relatives and friends', 'Pension', 'Rent from house or land', 'Others (Please specify) ______________');
                           
                            $db_table_field_name = array(
                                ''
                            );
                            ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <?php for ($i = 0; $i < count($table_head); $i++): ?>

                                            <th><?php echo $table_head[$i]; ?></th> 
                                        <?php endfor; ?>   
                                    </tr>



                                </thead>

                                <tbody>
                                   
                                    <?php for ($i = 0; $i < count($table_cols) - 1; $i++): ?>
                                    
                                     <?php if(!empty($this->data[$i]['HouseholdSectionG7713']['id'])){
                                     echo $this->Form->input($i.'.HouseholdSectionG7713.id',array('type'=>'hidden')); 
                                        } ?>
                                    
                                       <?php echo $this->form->input($i.'.HouseholdSectionG7713.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                        <tr>
                                            <td><?php echo $this->form->input($i.'.HouseholdSectionG7713.question',array('type'=>'hidden','value'=>$table_cols[$i])); ?><?php echo $table_cols[$i]; ?></td>
                                            <td>
                                                
                                              <?php echo $this->form->input($i.'.HouseholdSectionG7713.answer',array('type'=>'text','label'=>false,'div'=>false,'class'=>'form-control'))  ?>  
                                            </td>
                                        </tr>
                                     <?php endfor; ?>
                                       
                                      <tr>
                                            <?php if(!empty($this->data[$i]['HouseholdSectionG7713']['id'])){
                                     echo $this->Form->input($i.'.HouseholdSectionG7713.id',array('type'=>'hidden')); 
                                        } ?>
                                            <td><?php echo $this->form->input($i.'.HouseholdSectionG7713.question',array('type'=>'text','label'=>false,'div'=>false,'class'=>'form-control','placeholder'=>'Others (Please specify) ______________'))  ?></td> 
                                            <td>
                                                
                                                <?php echo $this->form->input($i.'.HouseholdSectionG7713.answer',array('type'=>'text','label'=>false,'div'=>false,'class'=>'form-control'))  ?>  
                                               <?php echo $this->form->input($i.'.HouseholdSectionG7713.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?> 
                                            </td>
                                        </tr>
   
                                </tbody>
                            </table>  

                        </div> 

                        <hr/>

                        <center><button class="btn btn-info">Submit</button></center>
                            <?php echo $this->Form->end(); ?>

                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>