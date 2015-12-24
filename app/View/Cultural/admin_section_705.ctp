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
                        <h5><b>G- 3: Survey of animal husbandry of the household in the last 3 months </b></h5>
                        <h5><b>Present number and description of adult animals domesticated by this household</b></h5>

                        <div class="table-responsive">

                            <?php
                            $domesticated_animals = array(
                                'Description of Animals', 'Primary number', 'Sold and exchanged', 'Gift and own use', 'Lost and deceased', 'Purchased and gained through gift', 'Reproduction', 'Total number=
(2-3-4-5+6+7)', 'Value of standard unit', 'Total present value (8X9)'
                            );


                            $description_of_animals = array(
                                '01. Cow', '02. Buffalo', '03. Goat', '04. Sheep', '05. Pig', '06. Duck', '07. Chicken', '08. Pigeon', 'Others'
                            );
                            ?>                             <?php echo $this->Form->create('Section705', array('class' => '')) ?>

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="7">705: Do members of this household have domesticated animals? </th>
                                        <?php
                                        if (!empty($this->data[0]['Section705']['id'])) {
                                            echo $this->Form->input('0.Section705.id', array('type' => 'hidden'));
                                        }
                                        ?>
                                        <th colspan="3">
                                            <?php echo $this->form->input('0.Section705.yes_no_ans', array('type' => 'select', 'options' => array('1' => 'Yes', '0' => 'No'), 'label' => FALSE, 'class' => 'form-control')); ?>

                                        </th>
                                    </tr>

                                    <tr>
                                        <?php for ($k = 0; $k < count($domesticated_animals); $k++): ?>
                                            <th>
                                                <?php echo $domesticated_animals[$k]; ?> 

                                            </th>  

                                        <?php endfor; ?>
                                    </tr>

                                </thead>
                                <tbody>

                                    <?php for ($l = 0; $l < count($description_of_animals); $l++): ?>
                                        <?php
                                        if (!empty($this->data[$l]['Section705']['id'])) {
                                            echo $this->Form->input($l . '.Section705.id', array('type' => 'hidden'));
                                        }
                                        ?>
                                        <?php echo $this->form->input($l.'.Section705.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                        <tr>
                                            <td>
                                              <?php if($l==8){
                                                  echo $this->form->input($l.'.Section705.description_of_animals',array('type'=>'text','placeholder'=>'Others:','class'=>'form-control','label'=>false));
                                                
                                            } else{ ?> 
                                                
                                              <?php echo $this->form->input($l.'.Section705.description_of_animals',array('type'=>'hidden','value'=>$description_of_animals[$l])); ?> <?php echo $description_of_animals[$l]; } ?> 

                                            </td> 
                                            <td><?php echo $this->Form->input($l . '.Section705.primary_number', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($l . '.Section705.sale_and_exchange', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($l . '.Section705.gift_own_use', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($l . '.Section705.lost_and_deceased', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($l . '.Section705.purchased_gift', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($l . '.Section705.reproduction', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($l . '.Section705.total_number', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($l . '.Section705.unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input($l . '.Section705.total_present_value', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>


                                        </tr>
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