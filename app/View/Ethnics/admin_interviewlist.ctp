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
                                                         <th>Division</th>
                                                        <th>District</th>
                                                        <th>Upazila</th>
                                                        <th>Name</th>
							<th><i class="fa fa-cog"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php 
                                                
                                                //pr($Interview); exit;
                                                foreach ($Interview as $key=>$val): 
                                                    $div = '';
                                                $dis='';
                                                $upa = '';
                                                if(!empty($val['EthnicSectionA2'])){
                                                    $div = $val['EthnicSectionA2']['0']['answer'];
                                                    $dis=$val['EthnicSectionA2']['1']['answer'];
                                                    $upa =$val['EthnicSectionA2']['2']['answer'];
                                                }
                                                    ?>
						<tr>    
                                                    
                                                      
							<td><center><?php echo $key+1;//echo $val['CommunityInterview']['id']; ?>&nbsp;</center></td>
                                                        <th><?php echo $val['EthnicSectionAReferenceInformation']['date'] ?></th>
                                                        <th>
                                                            <?php
                                                           
                                                            if(key_exists($val['EthnicSectionAReferenceInformation']['by_whom'],$users)){
                                                                echo $users[$val['EthnicSectionAReferenceInformation']['by_whom']];
                                                            } 
                                                           ?>
                                                        </th>
                                                        <th><?php if(!empty($div)){echo $divisions[$div];} ?></th>
                                                        <th><?php if(!empty($dis)){echo $districts[$dis];} ?></th>
                                                        <th><?php if(!empty($upa)){echo $upazilas[$upa];} ?></th>
                                                        <th><?php echo $val['EthnicSectionA2']['3']['answer']; ?></th>
                                                        <td class="action"><center><?php //echo $this->Html->link('<i class="fa fa-eye"></i> ', array('action' => 'view', $PersonnelInformation['PersonnelInformation']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'escape'=>false)); ?>
								<?php echo $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'session_create', $val['EthnicInterview']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page','escape'=>false)); ?>
								<?php //echo $this->Html->link('<i class="fa fa-times text-white text"></i> ', array('action' => 'delete', $PersonnelInformation['PersonnelInformation']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-danger ajax_delete', 'escape'=>false)); ?>
								<?php //echo $this->Form->postLink('<i class="fa fa-times text-white text"></i>', array('action' => 'delete', $user['User']['id']), array('class'=>'btn btn-rounded btn-sm btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
							  </center>
                                                        </td>
                                                        
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>