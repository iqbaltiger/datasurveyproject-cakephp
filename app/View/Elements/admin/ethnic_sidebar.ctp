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
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'ethnics','action'=>'interviewlist')) ?>"><i class="fa fa-tachometer"></i> <span>Interview List</span></a>
			</li>

             
                        
                         <?php   
                        
                         $id = $this->Session->read('interview_id');
                       $status = $this->Session->read('interview_status');
                        
                       // pr($this->Session->read('interview_id')); exit;
                        if(!empty($id)&&!empty($status)):  ?>
                        
                          <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'ethnics','action'=>'section_a')) ?>"><i class="fa fa-edit"></i> <span>Section A</span></a>
			</li>
                        
                         <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'ethnics','action'=>'section_b')) ?>"><i class="fa fa-edit"></i> <span>Section B</span></a>
			</li>
                        
                         <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'ethnics','action'=>'section_b_next')) ?>"><i class="fa fa-edit"></i> <span>Section B-2</span></a>
			</li>
                        
                       <?php endif; ?>    
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>