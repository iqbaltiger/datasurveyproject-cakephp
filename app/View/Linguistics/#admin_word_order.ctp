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
						<?php echo $this->Form->create('Survey',array('class'=>'')) ?>
                     <p>14. Word Order Typology Marker:</p>
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
                                <tr>
                                    <td>i. SOV;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <tr>
                                    <td>ii. SOV/rigid;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>



                                <!--14(a) row start-->
                                <tr>
                                    <td>iii. c)SOV/free;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!--14(a) row start-->
                                <tr>
                                    <td>iv. SVO;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>v. SVO/free;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>vi. SVO/V2 – 

                                        verb 

                                        second;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>vii. VSO;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!--14(a) row start-->
                                <tr>
                                    <td>viii. VOS;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>ix. OVS;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!--14(a) row start-->
                                <tr>
                                    <td>x. OSV;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!--14(a) row start-->
                                <tr>
                                    <td>xi. V1 – verb 

                                        initial;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>xii. V2 – verb

                                        second;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>xiii. free

                                        second;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>xiv.

                                        other</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <tr>
                                    <td colspan="5">
                                        <b>NOTE: all orders are possible and there are no grounds for positing one of the 

                                            occurring orders as basic.</b>  

                                    </td> 




                                </tr>

                            </tbody>


                        </table>
                        <hr></hr>
						<button class="btn btn-info">Submit</button>
						<?php echo $this->Form->end(); ?>
		</div>	
           </div>
               </div>
                  </div>
                     </div>
                         </div>					 
               		   