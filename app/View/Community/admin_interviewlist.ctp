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
                                                        <td><center><?php echo $val['CommunityInterview']['created']; ?>&nbsp;</center></td>
                                                        <td class="action"><center><?php //echo $this->Html->link('<i class="fa fa-eye"></i> ', array('action' => 'view', $PersonnelInformation['PersonnelInformation']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'escape'=>false)); ?>
								<?php echo $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'session_create', $val['CommunityInterview']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page','escape'=>false)); ?>
								<?php //echo $this->Html->link('<i class="fa fa-times text-white text"></i> ', array('action' => 'delete', $PersonnelInformation['PersonnelInformation']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-danger ajax_delete', 'escape'=>false)); ?>
								<?php //echo $this->Form->postLink('<i class="fa fa-times text-white text"></i>', array('action' => 'delete', $user['User']['id']), array('class'=>'btn btn-rounded btn-sm btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
							  </center>
                                                        </td>
                                                        
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>