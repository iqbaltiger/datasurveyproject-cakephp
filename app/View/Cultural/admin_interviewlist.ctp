<div class="btn-group">
                                
				<div class="btn-group hidden-nav-xs">
					<?php echo $this->Html->link(__('Add New Interview'), array('action' => 'interview'),array('class' => 'btn btn-sm btn-primary ajax_page','data-toggle'=>'modal',)); ?>
				</div>
                                <p>&nbsp;</p>
			</div>

<table class="table table-striped table-bordered  table-hover">
					<thead>
						<tr>
						
                                                        <th>InterView List</th>
                                                        <th>Interview Date</th>
                                                        <th>By Whom</th>
                                                        
                                                        <th>Name:</th>
                                                        <th>Created Date</th>
							<th><i class="fa fa-cog"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php 
                                                
                                                //pr($Interview); exit;
                                                foreach ($Interview as $key=>$val): 

                                                    
                                                    ?>
						<tr>    
                                                    
                                                      
							<td><center><?php echo $key+1;//echo $val['CommunityInterview']['id']; ?>&nbsp;</center></td>
                                                        <th><?php echo $val['HouseholdSectionAReferenceInformation']['date'] ?></th>
                                                        <th>
                                                            <?php
                                                           
                                                            if(key_exists($val['HouseholdSectionAReferenceInformation']['by_whom'],$users)){
                                                                echo $users[$val['HouseholdSectionAReferenceInformation']['by_whom']];
                                                            } 
                                                           ?>
                                                        </th>
                                                            
                                                        <td><center>DemoName</center></td>
                                                        <td><center><?php echo $val['HouseholdInterview']['created']; ?>&nbsp;</center></td>
                                                        <td class="action"><center>
								<?php echo $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'session_create', $val['HouseholdInterview']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page','escape'=>false)); ?>
								
							  </center>
                                                        </td>
                                                        
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>