<div class="btn-group">
                                
				<div class="btn-group hidden-nav-xs">
					<?php echo $this->Html->link(__('Add New Interview'), array('action' => 'personnel_information'),array('class' => 'btn btn-sm btn-primary ajax_page','data-toggle'=>'modal',)); ?>
				</div>
                                <p>&nbsp;</p>
			</div>

<table class="table table-striped table-bordered  table-hover">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('first_name', null, array('class'=>'ajax_page')); ?></th>
							<th><?php echo $this->Paginator->sort('indigenous_group', null, array('class'=>'ajax_page')); ?></th>
							<th><?php echo $this->Paginator->sort('language', null, array('class'=>'ajax_page')); ?></th>
							<th><?php echo $this->Paginator->sort('date_of_birth', null, array('class'=>'ajax_page')); ?></th>
							<th><i class="fa fa-cog"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($PersonnelInformations as $PersonnelInformation): ?>
						<tr>    
                                                    
                                                        <?php //pr($PersonnelInformation); ?>
							<td><?php echo h($PersonnelInformation['PersonnelInformation']['first_name']); ?>&nbsp;</td>
                                                        <td><?php echo h($PersonnelInformation['PersonnelInformation']['indigenous_group']); ?>&nbsp;</td>
                                                        <td><?php echo h($PersonnelInformation['PersonnelInformation']['language']); ?>&nbsp;</td>
                                                        <td><?php echo h($PersonnelInformation['PersonnelInformation']['date_of_birth']); ?>&nbsp;</td>
<!--							<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
							<td><?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?></td>
							<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
-->							<td class="action"><?php //echo $this->Html->link('<i class="fa fa-eye"></i> ', array('action' => 'view', $PersonnelInformation['PersonnelInformation']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'escape'=>false)); ?>
								<?php echo $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'session_create', $PersonnelInformation['PersonnelInformation']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page','escape'=>false)); ?>
								<?php //echo $this->Html->link('<i class="fa fa-times text-white text"></i> ', array('action' => 'delete', $PersonnelInformation['PersonnelInformation']['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-danger ajax_delete', 'escape'=>false)); ?>
								<?php //echo $this->Form->postLink('<i class="fa fa-times text-white text"></i>', array('action' => 'delete', $user['User']['id']), array('class'=>'btn btn-rounded btn-sm btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>