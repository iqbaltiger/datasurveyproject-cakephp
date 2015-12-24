<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Household'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                       <?php echo $this->Form->create('Household500',array('class'=>'')) ?>
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
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('0.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>01.	Domestic land (Homestead and yard)</td>
                                                    <?php echo $this ->Form ->input('0.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('0.Household500.question', array('type' => 'hidden','value'=>1)); ?>
			                            <td><?php echo $this->Form->input('0.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('0.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('1.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>02.	Total agricultural land</td>
                                                    <?php echo $this ->Form ->input('1.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('1.Household500.question', array('type' => 'hidden','value'=>2)); ?>
			                            <td><?php echo $this->Form->input('1.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('1.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('2.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td> 03.	Pond</td>
                                                    <?php echo $this ->Form ->input('2.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('2.Household500.question', array('type' => 'hidden','value'=>3)); ?>
			                           <td><?php echo $this->Form->input('2.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('2.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td colspan="3"> <b>Furniture in possession and other material assets</b></td>
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('3.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>04.Cot/ Khat</td>
                                                    <?php echo $this ->Form ->input('3.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('3.Household500.question', array('type' => 'hidden','value'=>4)); ?>
			                           <td><?php echo $this->Form->input('3.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('3.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('4.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>05.Almirah</td>
                                                    <?php echo $this ->Form ->input('4.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('4.Household500.question', array('type' => 'hidden','value'=>5)); ?>
			                           <td><?php echo $this->Form->input('4.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('4.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('5.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>06.Television</td>
                                                    <?php echo $this ->Form ->input('5.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('5.Household500.question', array('type' => 'hidden','value'=>6)); ?>
			                            <td><?php echo $this->Form->input('5.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('5.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('6.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>07.	Radio </td>
                                                    <?php echo $this ->Form ->input('6.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('6.Household500.question', array('type' => 'hidden','value'=>7)); ?>
			                            <td><?php echo $this->Form->input('6.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('6.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('7.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>08.	Electric Fan </td>
                                                    <?php echo $this ->Form ->input('7.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('7.Household500.question', array('type' => 'hidden','value'=>8)); ?>
			                            <td><?php echo $this->Form->input('7.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('7.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('8.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>09.	Cassette/ CD/ VCD Player </td>
                                                    <?php echo $this ->Form ->input('8.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('8.Household500.question', array('type' => 'hidden','value'=>9)); ?>
			                            <td><?php echo $this->Form->input('8.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('8.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('9.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>10.	Mobile Phone </td>
                                                    <?php echo $this ->Form ->input('9.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('9.Household500.question', array('type' => 'hidden','value'=>10)); ?>
			                           <td><?php echo $this->Form->input('9.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('9.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('10.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>11.Sewing Machine</td>
                                                    <?php echo $this ->Form ->input('10.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('10.Household500.question', array('type' => 'hidden','value'=>11)); ?>
			                            <td><?php echo $this->Form->input('10.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('10.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('11.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>12.	Rickshaw/ Van</td>
                                                    <?php echo $this ->Form ->input('11.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('11.Household500.question', array('type' => 'hidden','value'=>12)); ?>
			                           <td><?php echo $this->Form->input('11.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('11.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('12.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>13.	Power Tiller </td>
                                                    <?php echo $this ->Form ->input('12.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('12.Household500.question', array('type' => 'hidden','value'=>13)); ?>
			                            <td><?php echo $this->Form->input('12.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('12.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('13.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>14.	Irrigation Equipments</td>
                                                    <?php echo $this ->Form ->input('13.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('13.Household500.question', array('type' => 'hidden','value'=>14)); ?>
			                            <td><?php echo $this->Form->input('13.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('13.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('14.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>15.Other Equipments</td>
                                                    <?php echo $this ->Form ->input('14.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('14.Household500.question', array('type' => 'hidden','value'=>15)); ?>
			                           <td><?php echo $this->Form->input('14.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('14.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('15.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>16.Motor Cycle</td>
                                                    <?php echo $this ->Form ->input('15.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('15.Household500.question', array('type' => 'hidden','value'=>16)); ?>
			                            <td><?php echo $this->Form->input('15.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('15.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('16.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>17.	Bi-Cycle</td>
                                                    <?php echo $this ->Form ->input('16.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('16.Household500.question', array('type' => 'hidden','value'=>17)); ?>
			                            <td><?php echo $this->Form->input('16.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('16.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('17.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>18.	Fishing Net</td>
                                                    <?php echo $this ->Form ->input('17.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('17.Household500.question', array('type' => 'hidden','value'=>18)); ?>
			                            <td><?php echo $this->Form->input('17.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('17.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('18.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>19.Boat</td>
                                                    <?php echo $this ->Form ->input('18.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('18.Household500.question', array('type' => 'hidden','value'=>19)); ?>
			                            <td><?php echo $this->Form->input('18.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('18.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr>
									<tr>
			                            <td>20.Solar Panel</td>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('19.Household500.id'); 
                                        }
                                        
                                    ?>
                                                    <?php echo $this ->Form ->input('19.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('19.Household500.question', array('type' => 'hidden','value'=>20)); ?>
			                            <td><?php echo $this->Form->input('19.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('19.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                        </tr>
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('20.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>21.Brass (kasha) Kitchen utensils</td>
                                                    <?php echo $this ->Form ->input('20.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('20.Household500.question', array('type' => 'hidden','value'=>21)); ?>
			                            <td><?php echo $this->Form->input('20.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('20.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                        </tr> 
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('21.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>22.Refrigerator</td>
                                                    <?php echo $this ->Form ->input('21.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('21.Household500.question', array('type' => 'hidden','value'=>22)); ?>
			                            <td><?php echo $this->Form->input('21.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('21.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                        </tr>
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('22.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>23.Table-chair</td>
                                                    <?php echo $this ->Form ->input('22.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('22.Household500.question', array('type' => 'hidden','value'=>23)); ?>
			                           <td><?php echo $this->Form->input('22.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('22.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                        </tr>
			                        <tr>
			                            <td colspan="3"><b>Description of personal possession(s)</b></td>  
			
			                        </tr>
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('23.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>24.	Gold Jewelry</td>
                                                    <?php echo $this ->Form ->input('23.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('23.Household500.question', array('type' => 'hidden','value'=>24)); ?>
			                           <td><?php echo $this->Form->input('23.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('23.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('24.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>25.	Silver Jewelry</td>
                                                    <?php echo $this ->Form ->input('24.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('24.Household500.question', array('type' => 'hidden','value'=>25)); ?>
			                           <td><?php echo $this->Form->input('24.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('24.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('25.Household500.id'); 
                                        }
                                        
                                    ?>
			                            <td>26.Silver Coins</td>
                                                    <?php echo $this ->Form ->input('25.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                    <?php echo $this ->Form ->input('25.Household500.question', array('type' => 'hidden','value'=>26)); ?>
			                            <td><?php echo $this->Form->input('25.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('25.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			
			                        <!-- Section E Row Start--->
			                        <tr>
			                            <td colspan="3"><b>Description of other assets (Purchase value 1500 taka and more)</b></td>
			
			
			                        </tr> 
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('26.Household500.id'); 
                                        }
                                        
                                    ?>
                                                   <?php echo $this ->Form ->input('26.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
			                            <td><?php echo $this->Form->input('26.Household500.question',array('type'=>'text','placeholder'=>'Others (Please specify)','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?></td>
			                           <td><?php echo $this->Form->input('26.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('26.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('27.Household500.id'); 
                                        }
                                        
                                    ?>
                                                    <?php echo $this ->Form ->input('27.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                   <td><?php echo $this->Form->input('27.Household500.question',array('type'=>'text','placeholder'=>'Others (Please specify)','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?></td>
			                           
			                           <td><?php echo $this->Form->input('27.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('27.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			                        <!-- Section E Row Start--->
			                        <tr>
                                                    <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('28.Household500.id'); 
                                        }
                                        
                                    ?>
                                                    <?php echo $this ->Form ->input('28.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                                                   <td><?php echo $this->Form->input('28.Household500.question',array('type'=>'text','placeholder'=>'Others (Please specify)','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?></td>
			                           
			                           <td><?php echo $this->Form->input('28.Household500.number_amount_present',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			                            <td><?php echo $this->Form->input('28.Household500.total_market_value',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px;')); ?>  </td>
			
			                        </tr> 
			
			                    </thead>
			                </table>
			                
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
                            <?php 
                                        if(!empty($this->request->data)){
                                            echo $this->Form->input('29.Household500.id'); 
                                        }
                                        
                                    ?>
                            <th colspan="6">601. Has any member of this household taken loan from any person or institution? </th>
                            <?php echo $this ->Form ->input('29.Household500.household_interview_id', array('type' => 'hidden','value'=>$household_interview_id)); ?>
                            <?php echo $this->Form->input('29.Household500.question',array('type'=>'hidden','value'=>29)); ?>
                            <th colspan="3">
                                
                                <?php echo $this->Form->input('29.Household500.number_amount_present',array('type'=>'select','options'=>array('1'=>'Yes','2'=>'No'),'empty'=>'(choose one)','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>



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
                         <?php 
                         
                              //pr($this->request->data); exit;
                                        if(!empty($this->request->data['601_picker'])){
                                            echo $this->Form->input('601_picker.'.$i.'.Section601.id'); 
                                        }
                                        
                                    ?>
                        <tr>
                            <?php echo $this->Form->input('601_picker.'.$i.'.Section601.household_interview_id',array('type'=>'hidden','value'=>$household_interview_id)); ?>
                            <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.number_of_loan',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.reason_of_taking_loan',array('type'=>'select','options'=>$reason_taking_loan,'empty'=>'(choose one)','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                           
                            <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.mortgage_against_loan',array('type'=>'select','options'=>array('1'=>'Yes','0'=>'No'),'empty'=>'(choose one)',  'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                             <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.sources_of_loan',array('type'=>'select','options'=>$mortgage_against_loan,'empty'=>'(choose one)','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.amount_of_basic_loan',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.amount_repayment',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.monthly_rate_interest',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.amount_outstanding_debt',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
                            <td><?php echo $this->Form->input('601_picker.'.$i.'.Section601.amount_of_interest_against_loan',array('type'=>'text','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?></td>
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