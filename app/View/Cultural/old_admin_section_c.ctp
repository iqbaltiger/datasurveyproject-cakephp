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
                       <?php echo $this->Form->create('Cultural',array('class'=>'')) ?>
       					<h4>SECTION-E: HOUSEHOLD ASSETS</h4>
			            <p>500.Describe different assets of present household</p>
			
			            <div class="table-responsive">
			                <table class="table table-bordered table-striped">
			                    <thead>
			
			                        <tr>
			                            <th>Description Of Assets</th>
			                            <th>Number Or Amount Present in The HouseHold</th>
			                            <th>Total Market Value (Current Estimated Sale Price)</th>
			
			
			                        </tr>
			
			                        <tr>
			                            <td colspan="3"><b>Amount of land presently owned (Decimal)</b> </td> 
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>01.	Domestic land (Homestead and yard)</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>02.	Total agricultural land</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td> 03.	Pond</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td colspan="3"> <b>Furniture in possession and other material assets</b></td>
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>04.Cot/ Khat</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>05.Almirah</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>06.Television</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>07.	Radio </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>08.	Electric Fan </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>09.	Cassette/ CD/ VCD Player </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>10.	Mobile Phone </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>11.Sewing Machine</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>12.	Rickshaw/ Van</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>13.	Power Tiller </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>14.	Irrigation Equipments</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>15.Other Equipments</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>16.Motor Cycle</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>17.	Bi-Cycle</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>18.	Fishing Net</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>19.Boat</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <tr>
			                            <td colspan="3"><b>Description of personal possession(s)</b></td>  
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>20.	Gold Jewelry</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>21.	Silver Jewelry</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td>22.Silver Coins</td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td colspan="3"><b>Description of other assets (Purchase value 1500 taka and more)</b></td>
			
			
			                        </tr> 
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','placeholder'=>'Others (Please specify)________________','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?></td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','placeholder'=>'Others (Please specify)________________','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?></td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','placeholder'=>'Others (Please specify)________________','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?></td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			                    </thead>
			                </table>
			                <p>
			                    <b>**1 Vori/ Tola= 10 grams</b>   
			                </p>
			            </div>  
                                    
                                     <h4>SECTION-F: HOUSEHOLD’S LOANS AND LIABILITIES </h4>
            <p>Description and amount of loan in present household (In case of difference, include the same member more than once) </p>
            
             <div class="table-responsive">

                <?php
                
                    $table_row_head = array(
                        'Number of Loan Receiving Household Member','Reason of Taking Loan',
                        'Mortgage Against Loan','Sources Of Loan','Amount of Basic Loan',
                        'Amount of Repayment in Money','Monthly Rate of Interest (%)',
                        'Amount of Outstanding Debt','Amount of Interest Only Against Loan'
                        );
                
                
                
                ?>



                <table class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th colspan="6">601. Has any member of this household taken loan from any person or institution? </th>
                            <th colspan="3">
                                
                                <?php echo $this->Form->input('collector_name',array('type'=>'select','options'=>array('1'=>'Yes','2'=>'No'),'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>

<!--                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="radio" aria-label="..." name="choice">Yes
                        </span>

                        <span class="input-group-addon">
                            <input type="radio" aria-label="..." name="choice">No
                        </span>

                    </div>   -->

                    </th>


                    </tr>

                    <tr>
                      <?php for($i=0;$i<count($table_row_head);$i++):  ?>  

                        <th> <?php echo $table_row_head[$i]; ?>  </th>

                      <?php endfor; ?>
                    </tr>


                    </thead> 

                    <tbody>
                        
                        <?php $reason_taking_loan = array(
                            '01'=>'Illness and coping with emergency','02'=>'Child education','03'=>'Marriage expenditure',
                            '04'=>'Land purchase','05'=>'House purchase','06'=>'House maintenance','07'=>'Daily subsistence',
                            '08'=>'Purchase of different assets and consumer goods','09'=>'Business and investment',
                            '10'=>'Repayment of outstanding debt','11'=>'Coping with food deficiency',
                            '12'=>'Agricultural investment','13'=>'Van/ Rickshaw/ Boat purchase',
                            '98'=>'Do not know/ Cannot say','99'=>'Others (Please specify)'
                        ); 
                        
                            $mortgage_against_loan = array(
                                '01'=>'N.G.O','02'=>'Money launderer/ Mahajan','03'=>'Council',
                                '04'=>'Dadan','05'=>'Employer','06'=>'Relatives','07'=>'Friends or neighbors',
                                '08'=>'Bank','09'=>'Slave laborer','99'=>'Others (Please specify)'
                            );
                        ?>

                        <?php for($i=0;$i<5;$i++): ?>
                        <tr>
                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('collector_name',array('type'=>'select','options'=>$reason_taking_loan,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                           
                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                             <td><?php echo $this->Form->input('collector_name',array('type'=>'select','options'=>$mortgage_against_loan,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('collector_name',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                        </tr>

                        <?php endfor; ?>

                    </tbody>
                </table>

            </div>
                                    
             <hr/>                       
            <center><button class="btn btn-info">Next>></button></center>
                       <?php echo $this -> Form -> end(); ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>