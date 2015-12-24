<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left info">
				<p>
					<i class="glyphicon glyphicon-user"></i> Hello, <span class="text-green"><?php echo $logged_user['username']; ?>
					</span>
				</p>

			</div>
		</div>
		<ul class="sidebar-menu">
			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'cultural_dashboard')) ?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>
			</li>
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'interviewlist')) ?>"><i class="fa fa-tachometer"></i> <span>Interview List</span></a>
			</li>
                        
                        <?php   
                        
                         $id = $this->Session->read('interview_id');
                        
                       // pr($this->Session->read('interview_id')); exit;
                        if(!empty($id)): ?>
                        
                        
                        
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_a')) ?>"><i class="fa fa-edit"></i> <span>Section A</span></a>
			</li>
                       

			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_b')) ?>"><i class="fa fa-edit"></i> <span>Section B-D</span></a>
			</li>
			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_c')) ?>"><i class="fa fa-edit"></i> <span>Section E-F</span></a>
			</li>

                         <li class="treeview">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_g')) ?>"><i class="fa fa-edit"></i> <span>Section G</span></a>
                                <ul class="treeview-menu">
                                    <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_701')) ?>"><i class="fa fa-edit"></i> <span>Question-701</span></a>
			              </li>
                                    <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_702')) ?>"><i class="fa fa-edit"></i> <span>Question-702</span></a>
			              </li>
                                    <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_703')) ?>"><i class="fa fa-edit"></i> <span>Question-703</span></a>
			              </li>
						  
						  <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_704')) ?>"><i class="fa fa-edit"></i> <span>Question-704</span></a>
			              </li>
						  
                                     <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_705')) ?>"><i class="fa fa-edit"></i> <span>Question-705</span></a>
			              </li> 
                                      
                                      <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_706')) ?>"><i class="fa fa-edit"></i> <span>Question-706</span></a>
			              </li> 
                                      
                                      <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_707')) ?>"><i class="fa fa-edit"></i> <span>Question-707</span></a>
			              </li> 
                                      
                                      <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'admin_section_fishing_708')) ?>"><i class="fa fa-edit"></i> <span>Question-708</span></a>
			              </li>
                                      
                                      <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'admin_section_fishing_709')) ?>"><i class="fa fa-edit"></i> <span>Question-709</span></a>
			              </li>
                                      
                                      <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'admin_section_hunting_710')) ?>"><i class="fa fa-edit"></i> <span>Question-710</span></a>
			              </li>
                                      
                                      <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'admin_section_g_five')) ?>"><i class="fa fa-edit"></i> <span>Question-711</span></a>
			              </li>
                                      
                                      <li class="">
				        <a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'admin_section_g_six')) ?>"><i class="fa fa-edit"></i> <span>Question-712</span></a>
			              </li>
                                      
                                      
                                </ul>
                         </li> 
			
                         <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_h')) ?>"><i class="fa fa-edit"></i> <span>Section H</span></a>
			</li> 

                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_i')) ?>"><i class="fa fa-edit"></i> <span>Section I</span></a>
			</li> 

                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'cultural','action'=>'section_j')) ?>"><i class="fa fa-edit"></i> <span>Section j</span></a>
			</li>
                        
                       <?php endif; ?> 

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>