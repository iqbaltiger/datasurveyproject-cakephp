<?php 
        echo $this->Html->css('frontend/datepickercss/default');
        echo $this->Html->script('jquery.min');
        echo $this->Html->script('frontend/datepickerjavascript/zebra_datepicker');
        
        ?>
<script>
   j = jQuery.noConflict();
    j(function(){
        
      
        j('#linguistic_collector_date').Zebra_DatePicker({
             
             format: 'M d, Y',
             direction: true,
             
         });
         
         
         j('#socioculture_collector_date').Zebra_DatePicker({
             
             format: 'M d, Y',
             direction: true,
             
         });
         
   
         
       
   
    })        
    
    </script>

<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Linguistics/Office Use'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                           <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'].' '.$personalInfo['PersonnelInformation']['last_name'];  ?></b></p>

                            </div>

                            <div class="col-lg-6 col-md-6">
                                <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id'];  ?></b></p>

                            </div>
                        </div>
                          
                        <?php echo $this->Form->create('OfficeUse',array('class'=>'')) ?>
                        
                        <?php 
                        
                        //pr($this->data);exit;
                        
                        //  echo $this->data['OfficeUse']['id'];
                            if(!empty($this->data['OfficeUse']['id'])){
                                                                    echo $this->Form->input('OfficeUse.id',array('type'=>'hidden')); 
                                                                }
                        
                        ?>
                        <table class="table table-striped table-bordered  table-hover">
                            
                            <thead>
                                <tr>
                                   
                                    <th>Linguistics</th>
                                    <th>Socioculture</th>
                                </tr>
                                
                                
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>
                                 <table class="table table-striped table-bordered  table-hover">
                                     <tr>
                                         <td>BY:</td>  
                                         <td><?php echo $this->form->input('OfficeUse.linguistic_collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'div'=>false)); ?></td>  
                                         
                                     </tr>
                                     
                                     <tr>
                                       <td>Date:</td>
                                         <td><?php echo $this->form->input('OfficeUse.linguistic_date',array('type'=>'text','id'=>'linguistic_collector_date','class'=>'form-control','label'=>false,'div'=>false)); ?></td>  
                                     </tr>
                                     <tr>
                                       <td>Remarks:</td>
                                         <td><?php echo $this->form->input('OfficeUse.linguistic_remarks',array('type'=>'textarea','class'=>'form-control','label'=>false,'div'=>false)); ?></td>  
                                     </tr>
                                     
                                 </table>  
                                   </td>   
                                   
                                   <td>
                                 <table class="table table-striped table-bordered  table-hover">
                                     <tr>
                                         <td>BY:</td>  
                                         <td><?php echo $this->form->input('OfficeUse.socioculture_collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'div'=>false)); ?></td>   
                                     </tr>
                                     
                                     <tr>
                                       <td>Date:</td>
                                         <td><?php echo $this->form->input('OfficeUse.socioculture_date',array('type'=>'text','id'=>'socioculture_collector_date','class'=>'form-control','label'=>false,'div'=>false)); ?></td>  
                                     </tr>
                                     <tr>
                                       <td>Remarks:</td>
                                         <td><?php echo $this->form->input('OfficeUse.socioculture_remarks',array('type'=>'textarea','class'=>'form-control','label'=>false,'div'=>false)); ?></td>  
                                     </tr>
                                     
                                      <?php echo $this->Form->input('OfficeUse.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                                     
                                 </table>  
                                   </td> 
                                   
                                </tr>
                            </tbody>
                            
                            
                        </table>
                        <hr/>
                        <center><button type="submit" class="btn btn-info">Next>></button></center>
                        <?php echo $this->Form->end(); ?> 
                        
                        
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>