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
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'community','action'=>'section_a')) ?>"><i class="fa fa-edit"></i> <span>Section A</span></a>
			</li>
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'community','action'=>'section_b')) ?>"><i class="fa fa-edit"></i> <span>Section B</span></a>
			</li>
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'community','action'=>'section_c')) ?>"><i class="fa fa-edit"></i> <span>Section C</span></a>
			</li>

                       <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'community','action'=>'section_d')) ?>"><i class="fa fa-edit"></i> <span>Section D</span></a>
			</li>

                         <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'community','action'=>'section_e')) ?>"><i class="fa fa-edit"></i> <span>Section E</span></a>
			</li>
                        
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'community','action'=>'section_f')) ?>"><i class="fa fa-edit"></i> <span>Section F</span></a>
			</li>
                        
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'community','action'=>'section_g')) ?>"><i class="fa fa-edit"></i> <span>Section G</span></a>
			</li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>