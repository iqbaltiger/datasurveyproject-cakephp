<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Household/Section-G(704)'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <h5><b>G- 2:Survey of Income earned in exchange of labour</b></h5>

                        <h5><b>Survey of the daily wages/ earnings of household members in the last 12 months(In case of difference, include the same member more than once)</b></h5>

                        <div class="table-responsive">
                            <?php echo $this->Form->create('HouseholdSection704', array('class' => '')) ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="8">704. How many members of this household earned wages in exchange of labour? </th>
                                         <?php
                                        if (!empty($this->data[0]['HouseholdSection704']['id'])) {
                                            echo $this->Form->input('0.HouseholdSection704.id', array('type' => 'hidden'));
                                        }
                                        ?>
                                        <th colspan="3">
                                             <?php echo $this->Form->input('0.HouseholdSection704.day_peak', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?> 
                                         
                                        </th>
<!--                                <span>No. of person (Write '0' if none and pass onto the next chapter) </span>-->


                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>
                                        <td rowspan="4"><b>Name of Member and number of member</b></td>
                                        <td rowspan="4"><b>Type of Work</b></td>
                                        <td colspan="6"><b>Duration of employment of laborers(Both agricultural and non-agricultural) in different seasons</b></td>
                                        <td rowspan="4"><b>Total wage(In Cash)</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>During peak season</b></td>
                                        <td colspan="3"><b>During slack season</b></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><b>Day</b></td>
                                        <td colspan="2"><b>Daily wage/earning</b></td>
                                        <td rowspan="2"><b>Day</b></td>
                                        <td colspan="2"><b>Daily wage/earning</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Cash</b></td>
                                        <td><b>Item</b></td>
                                        <td><b>Cash</b></td>
                                        <td><b>Item</b></td>
                                    </tr>                                	



                                    <?php
                                    $type_of_work = array(
                                        '01' => 'Agricultural laborer (Day laborer/ Agricultural labour/ Assistance in household agricultural tasks)',
                                        '02' => 'mason', '03' => 'carpenter', '04' => 'Mason Assistant', '05' => 'Carpenter Assistant', '06' => 'Potter', '07' => 'Blacksmith', '08' => 'Cobbler',
                                        '09' => 'Tailor', '10' => 'Rice mill worker', '11' => 'Rickshaw/ Van/ Car driver', '12' => 'Automatic vehicle driver', '13' => 'Hawker', '14' => 'Household servant',
                                        '15' => 'Garment�s factory worker', '16' => 'Shopkeeper', '99' => 'Others (Please specify)',
                                    );

                                    for ($j =0; $j <8; $j++):
                                        ?>
                                    
                                    <?php
                                        if (!empty($this->data[$j]['HouseholdSection704']['id'])) {
                                            echo $this->Form->input($j.'.HouseholdSection704.id', array('type' => 'hidden'));
                                        }
                                        ?>
                                        <tr>
                                             <?php echo $this->form->input($j.'.HouseholdSection704.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                            <td><?php echo $this->Form->input($j.'.HouseholdSection704.name_member', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td>
                                                <?php echo $this->Form->input($j.'.HouseholdSection704.type_of_work', array('type' => 'select', 'options' => $type_of_work,'empty'=>'Choose One','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                                 <?php echo $this->Form->input($j.'.HouseholdSection704.type_other_work', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                            </td> 
                                            
                                            <td><?php echo $this->Form->input($j.'.HouseholdSection704.day_peak', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input($j.'.HouseholdSection704.cash_peak', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input($j.'.HouseholdSection704.item_peak', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input($j.'.HouseholdSection704.day_slack', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input($j.'.HouseholdSection704.cash_slack', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input($j.'.HouseholdSection704.item_slack', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input($j.'.HouseholdSection704.total_wage', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
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







