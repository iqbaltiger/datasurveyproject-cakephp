<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Linguistics/Story Text'); ?></h3>
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
                          
                        <?php echo $this->Form->create('Story',array('class'=>'')) ?>
                        
                        <?php 
                        
                        //pr($this->data);exit;
                        
                        //  echo $this->data['OfficeUse']['id'];
                            if(!empty($this->data['Story']['id'])){
                                                                    echo $this->Form->input('Story.id',array('type'=>'hidden')); 
                                                                }
                        
                        ?>
                        
                        
                        <table class="table table-striped table-bordered  table-hover">
                            <tr>
                                <?php echo $this->form->input('personnel_information_id', array('type' => 'hidden','value'=>$id,'class' => 'form-control', 'label' => false, 'div' => false)); ?>
                                <td><?php echo $this->form->input('Story.story', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'div' => false)); ?></td>  
                            </tr>
                            <tr>
                                <td>
                            <center>
                                <hr></hr>
                                <center><button class="btn btn-info">Finish</button></center>
                                <?php echo $this->Form->end(); ?>
                            </center>  
                            </td>  
                            </tr>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>