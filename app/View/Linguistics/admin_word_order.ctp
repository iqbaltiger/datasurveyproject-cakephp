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
				<h3 class="box-title"><?php echo __('Number & Gender'); ?></h3>
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
                                                    <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'] . ' ' . $personalInfo['PersonnelInformation']['last_name']; ?></b></p>

                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id']; ?></b></p>

                                                </div>
                                            </div> 
						<?php echo $this->Form->create('ComparaisonMarker',array('class'=>'')) ?>
                                                 <?php 

//echo $this->Form->input('Common.personnel_information_id',array('type'=>'hidden','value'=>$id)) ?>
                     <p>12. Word Order Typology:</p>
                     <p><span style="margin-left: 25px;">a.How is the basic word order of the classified in terms of the  following , where  rigid   

                            stands   for   the  impossibility   of   items   occurring   to   the   right   of   V,   and  free  

                            for   the  existence of all possible combinations of S, V and O.</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Word 

                                        Order Type</th>
                                    <th>Yes/

                                        No</th>
                                    <th>If Yes, Possible 

                                        Example In Bangla 

                                        Equivalent</th>
                                    <th>Target Sentence in

                                        BANGLA SCRIPT</th>

                                    <th>IPA

                                        Transcripttion of</th>


                                </tr>



                            </thead> 

                            <tbody>
							   <?php $word_order_list = array('i. SOV','ii. SOV/rigid','iii. c)SOV/free','iv. SVO','v. SVO/free','vi. SVO/V2 – verb second','vii. VSO','viii. VOS','ix. OVS','x. OSV','xi. V1 – verb initial','xii. V2 – verb second','xiii. free second','xiv. other'); ?>
							    
                                <?php for($i=0; $i<count($word_order_list); $i++){ ?>
                                <?php
                                  
                                      if(!empty($this->data[$i]['ComparaisonMarker']['id'])){
                                                                    echo $this->Form->input($i.'.ComparaisonMarker.id',array('type'=>'hidden')); 
                                                                }
                                ?>
                            		<tr>
                            			<td> <?php echo $this->Form->input($i.'.ComparaisonMarker.attribute_values',array('type'=>'hidden','value'=>$word_order_list[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $word_order_list[$i] ?></td>
                                                  <?php echo $this->Form->input($i.'.ComparaisonMarker.table_attribute_type',array('type'=>'hidden','value'=>'word_order_marker','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			 <?php echo $this->Form->input($i.'.ComparaisonMarker.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input($i.'.ComparaisonMarker.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                            			<td><?php echo $this->Form->input($i.'.ComparaisonMarker.bangla_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input($i.'.ComparaisonMarker.english_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input($i.'.ComparaisonMarker.target_ipa', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                            		</tr>
                                <?php }
                                   
                                    
                                ?>

                                <tr>
                                    <td colspan="5">
                                        <b>NOTE: all orders are possible and there are no grounds for positing one of the 

                                            occurring orders as basic.</b>  

                                    </td> 




                                </tr>

                            </tbody>


                        </table>
                        <hr></hr>
						<center><button class="btn btn-info">Next>></button></center>
						<?php echo $this->Form->end(); ?>
		</div>	
           </div>
               </div>
                  </div>
                     </div>
                         </div>					 
               		  