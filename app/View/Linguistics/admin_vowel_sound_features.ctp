<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Features of  VOWEL sounds'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                            <div class="col-lg-6 col-md-6">
                                                <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'].' '.$personalInfo['PersonnelInformation']['last_name'];  ?></b></p>

                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id'];  ?></b></p>

                                            </div>
						<?php $features = array('Sonorant','Syllabic','Voiced','High','Low','Back','Round','Tense') ?>
						
						<p>3. Provide Distinctive Features of  VOWEL sounds: Accumulate answers from Q1</p>
                                                 <?php echo $this->Form->create('FeatureOfVowelSound',array('class'=>'')) ?>
                                               
						<table class="table table-bordered table-striped">
			                <thead>
			                    <tr>
			                        <th></th> 
			                        <th>i</th> 
			                        <th>e</th> 
			                        <th>a</th> 
			                        <th>ɔ</th> 
			                        <th>o</th> 
			                        <th>u</th> 
			                    </tr>
                                           
			                </thead>
			                <tbody>
                                                <?php //echo $this->Form->input('Common.personnel_information_id',array('type'=>'hidden','value'=>)) ?>
			                	<?php foreach($features as $index=>$feature): ?>
                                            
                                            <?php 
                                                    if(!empty($this->data[$index]['FeatureOfVowelSound']['id'])){
                                                                    echo $this->Form->input($index.'.FeatureOfVowelSound.id',array('type'=>'hidden')); 
                                                                }
                                                            ?>
			                		<tr>
                                                              <?php echo $this->Form->input($index.'.FeatureOfVowelSound.personnel_information_id',array('type'=>'hidden','value'=>$id)); ?>
                                                             
			                			<td><?php echo $this->Form->input($index.'.FeatureOfVowelSound.articulation',array('type'=>'hidden','value'=>$feature));echo $feature ?></td>
			                			<td><?php echo $this->Form->input($index.'.FeatureOfVowelSound.vowel_i',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
			                			<td><?php echo $this->Form->input($index.'.FeatureOfVowelSound.vowel_e',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
			                			<td><?php echo $this->Form->input($index.'.FeatureOfVowelSound.vowel_a',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
			                			<td><?php echo $this->Form->input($index.'.FeatureOfVowelSound.vowel_c',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
			                			<td><?php echo $this->Form->input($index.'.FeatureOfVowelSound.vowel_o',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
			                			<td><?php echo $this->Form->input($index.'.FeatureOfVowelSound.vowel_u',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
			                		</tr>
			                	<?php endforeach; ?>
			                </tbody>
			            </table>
						   <hr></hr>
						
						  <div class="form-group col-md-12">
                                                      <center> <button type="submit" class="btn btn-info">Next>></button></center>
                                                      <p>&nbsp;</p>
				          </div>   
                                                   
                                        
                                        
						
						<?php echo $this->Form->end(); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>