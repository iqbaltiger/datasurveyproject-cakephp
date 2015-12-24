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
                       <?php echo $this->Form->create('SectionH',array('class'=>'')) ?>
                        
                        <?php
                                                    if(!empty($this->data['SectionH']['id'])){
                                                        echo $this->Form->input('SectionH.id',array('type'=>'hidden')); 
                                                    }
                                                ?>


                        <h4>HOUSEHOLD INCOME AND EXPENDITURE</h4>
                        <h5>Gross Annual Income and Expenditure of the Household</h5>

                        <div class="table-responsive">

                                                       <?php $table_head = array('Sources of Income','Annual income BDT');
                                                       
                                                             $table_cols = array('Agriculture (self-owned and share-cropped)','Poultry and livestock','Fish cultivation','Tree selling',
                                                                                 'Job (including bonus)','Business','Labour','Rickshaw/van pulling','House/shop Rent','Remittance',
                                                                                 'Scholarship/Tuition','Support/allowance/relief/ VGD/ VGF card','Handicrafts','Others (please mention the details)','Others (please mention the details)' 
                                                                 
                                                                 ); 
                                                       
                                                       
                                                       ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                           <?php for($i=0;$i<count($table_head);$i++): ?>
                                        

                                        <th><?php echo  $table_head[$i];?></th> 
                                                                 <?php endfor;  ?>   
                                    </tr>
                  </thead>

                                <tbody>  <?php 
                                                             
                                                                
                                                                for($i=0;$i<count($table_cols);$i++): ?>
                                     <?php 
                                  if(!empty($this->data[$i]['SectionH']['id'])){
                                     echo $this->Form->input($i.'.SectionH.id',array('type'=>'hidden')); 
                                        }
                            ?>

                                    <tr>
                                        <td><?php  echo $this->Form->input($i.'.SectionH.question',array('type'=>'hidden','value'=>$table_cols[$i])) ; ?><?php echo $table_cols[$i];?></td>

                                        <td><?php echo $this->Form->input($i.'.SectionH.answer',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                        <?php echo $this->Form->input($i.'.SectionH.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                   
                                    </tr>

                                                                <?php endfor;
                                                                     
                                                                 ?>
                                    <tr>
                                        <td class="grey_bg_color" align='right'><?php  echo $this->Form->input('15.SectionH.question',array('type'=>'hidden','value'=>'Gross Annual Income:')) ; ?>Gross Annual Income: </td>  
                                        <td><?php echo $this->Form->input('15.SectionH.answer',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td> 
                                        <?php echo $this->Form->input('15.SectionH.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                    </tr>
                                </tbody>
                            </table>  

                        </div>  

                        <div class="table-responsive">

                                                       <?php $table_head = array('Sources of Income','Annual Expenditure (BDT)');
                                                       
                                                             $table_cols = array(
                                                                '16'=>'Expenditure',
                                                                'Agriculture (crop production,'
                                                                 . 'livestock and poutry, fish etc.)',
                                                                 'Non agriculture sector (investment in business and other expenditure)',
                                                                'Food',
                                                                'Dress',
                                                                'Building /repairing house',
                                                                'House/ land rent',
                                                                'Education',
                                                                 'Health/treatment',
                                                                 'Entertainment',
                                                                 'Conveyance',
                                                                 'Electricity/Water/Gas',
                                                                 'Kerosene',
                                                                 'Other FuelExpences',
                                                                 'Other regular payable bills',
                                                                 'Loan repayment',
                                                                 'Others',
                                                                 'Total Expenditure', 
                                                                 
                                                                 ); 
                                                             
                                                         
                                                       
                                                       
                                                       ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                         <?php for($i=0;$i<count($table_head);$i++): ?>

                                        <th><?php echo  $table_head[$i];?></th> 
                                                                 <?php endfor;  ?>   
                                    </tr>
                                </thead>

                                <tbody>
                                                                <?php for($i=16;$i<count($table_cols)+count($table_cols)-2;$i++): ?>
                                     <?php 
                                  if(!empty($this->data[$i]['SectionH']['id'])){
                                     echo $this->Form->input($i.'.SectionH.id',array('type'=>'hidden')); 
                                        }
                            ?>

                                    <tr>
                                        <td><?php  echo $this->Form->input($i.'.SectionH.question',array('type'=>'hidden','value'=>$table_cols[$i])) ; ?><?php echo $table_cols[$i];?></td>

                                        <td><?php echo $this->Form->input($i.'.SectionH.answer',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                                        <?php echo $this->Form->input($i.'.SectionH.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>

                                    </tr>
                                                                  <?php endfor;
                                                                    
                                                                 ?>

                                    <tr>
                                       
                                         <?php 
                                  if(!empty($this->data[34]['SocioCulture']['id'])){
                                     echo $this->Form->input('34.SocioCulture.id',array('type'=>'hidden')); 
                                        }
                            ?>
                                        <td class="grey_bg_color" align='right'><?php  echo $this->Form->input('34.SectionH.question',array('type'=>'hidden','value'=>'Total annual expenditure')) ; ?>
                                            Total annual expenditure </td>  
                                         <td><?php echo $this->Form->input('34.SectionH.answer',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td> 
                                         <?php echo $this->Form->input('34.SectionH.interview_id',array('type'=>'hidden','value'=>$interview_id)); ?>
                                    </tr>
                                </tbody>
                            </table>  

                        </div> 
                        <button class="btn btn-info">Submit</button>
                       <?php echo $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>