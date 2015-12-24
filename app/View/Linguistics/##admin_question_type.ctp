<style>
    
    .radio-test{padding-left:20px;}
    .radio_question_section{}
    
    .radio_question_section label{padding:0px 10px;}
    
    .radio_question_section > span{float: left;margin-left: 10px;font-weight: bold;}
</style>   
<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Question Type'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
						<?php echo $this->Form->create('Survey',array('class'=>'')) ?>
   <p>20. Order in yes/no questions:</p>

                        <p>a. Exemplify the normal order in yes/no questions.</p>

                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>

                        <p>b. If   there   are   alternative   orders   (other   than   those   involving   echo- questions, (see (16) below) exemplify them.</p>               

                                         <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>

                        <p>b. What is the location of the q-word/phrase?</p> 

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th></th>
                                        <th>YES/NO</th>
                                        <th>Bangla Equivalent EX</th>

                                        <th>Transcription in IPA</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <!--21(b) row-->
                                    <tr>
                                        <th>i. initial</th>  
                                        <td>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">Yes
                                                </span>

                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">No
                                                </span>

                                            </div>     

                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  

                                    </tr>

                                    <!--21(b) row-->
                                    <tr>
                                        <th>ii. immediately preverbal position</th>  
                                        <td>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">Yes
                                                </span>

                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">No
                                                </span>

                                            </div>     

                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  

                                    </tr>

                                    <!--21(b) row-->
                                    <tr>
                                        <th>iii. in situ</th>  
                                        <td>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">Yes
                                                </span>

                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">No
                                                </span>

                                            </div>     

                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  

                                    </tr>

                                    <!--21(b) row-->
                                    <tr>
                                        <th>iv. other</th>  
                                        <td>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">Yes
                                                </span>

                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">No
                                                </span>

                                            </div>     

                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  

                                    </tr>  


                                </tbody>
                            </table>
                        </div>   

                      


                    </div>  
						<hr></hr>
						<button class="btn btn-info">Submit</button>
						<?php echo $this -> Form -> end(); ?>
					</div>
                      </div>
                         </div>
                             </div>   						 