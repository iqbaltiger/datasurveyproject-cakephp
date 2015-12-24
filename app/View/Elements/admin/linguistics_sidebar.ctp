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
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'admin_index')) ?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>
			</li>
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'personnellist')) ?>"><i class="fa fa-tachometer"></i> <span>Interview List</span></a>
			</li>
                        
                        <?php   
                        
                        $id = $this->Session->read('personnel_information_id');
                        if(!empty($id)): ?>
                        

			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'personnel_information')) ?>"><i class="fa fa-edit"></i> <span>Personnel Information</span></a>
			</li>
                        
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'section_officeuse')) ?>"><i class="fa fa-edit"></i> <span>Office Use</span></a>
			</li>
                        
			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'vowel')) ?>"><i class="fa fa-edit"></i></i> <span>VOWEL sound samples</span></a>
			</li>
			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'consonant')) ?>"><i class="fa fa-edit"></i></i> <span>CONSONANT sound samples</span></a>
			</li>
			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'vowel_sound_features')) ?>"><i class="fa fa-edit"></i></i> <span>Features of  VOWEL sounds</span></a>
			</li>
			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'manners_constonant_sounds')) ?>"><i class="fa fa-edit"></i></i> <span>Features Of CONSONANT sound</span></a>
			</li>
			<li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'comparing_language')) ?>"><i class="fa fa-edit"></i></i> <span>Special Features (Vowel)</span></a>
			</li>
			
                    
                       <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'wfprocess')) ?>"><i class="fa fa-edit"></i></i> <span>WF Process</span></a>
			</li>
                      
			<li class="treeview">
				<a class="" href="#"><i class="fa fa-fw fa-sitemap"></i> <i class="fa fa-angle-left pull-right"></i> <span>Morphology</span></a>
				<ul class="treeview-menu">
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_color')) ?>"><i class="fa fa-edit"></i></i> <span>Name Of Color/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_nature_religion')) ?>"><i class="fa fa-edit"></i></i> <span>Nature & Religion/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_animals')) ?>"><i class="fa fa-edit"></i></i> <span>Animals/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_fruits')) ?>"><i class="fa fa-edit"></i></i> <span>Fruits, Flower, Tree, Food/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_body_parts')) ?>"><i class="fa fa-edit"></i></i> <span>Body Parts/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_profession')) ?>"><i class="fa fa-edit"></i></i> <span>Profession/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_human_relation')) ?>"><i class="fa fa-edit"></i></i> <span>Human & Kinship Terms/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_cultural_terms')) ?>"><i class="fa fa-edit"></i></i> <span>Cultural Terms/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_numerics')) ?>"><i class="fa fa-edit"></i></i> <span>Numerics/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_temporal')) ?>"><i class="fa fa-edit"></i></i> <span>Temporal/Noun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_pronoun')) ?>"><i class="fa fa-edit"></i></i> <span>Pronoun</span></a>
					</li>
					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_verb')) ?>"><i class="fa fa-edit"></i></i> <span>Verb</span></a>
					</li>

                                        <li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'conjunction')) ?>"><i class="fa fa-edit"></i></i> <span>Conjunction</span></a>
					</li>

					<li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'noun_others')) ?>"><i class="fa fa-edit"></i></i> <span>Others</span></a>
					</li>
                                        
<!--                                        <li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'admin_section_storytext')) ?>"><i class="fa fa-edit"></i></i> <span>Story Text</span></a>
					</li>-->
				</ul>
			</li>
			
                           <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'admin_numbers_genders')) ?>"><i class="fa fa-edit"></i></i> <span>Number &amp; Gender</span></a>
			</li>
                                 
                                 <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'admin_word_order')) ?>"><i class="fa fa-edit"></i></i> <span>Word Order</span></a>
			</li>

                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'admin_sentence_type')) ?>"><i class="fa fa-edit"></i></i> <span>Sentence Type</span></a>
			</li>
                              
 <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'admin_question_type')) ?>"><i class="fa fa-edit"></i></i> <span>Question Type</span></a>
			</li>    


                       <li class="treeview">
				<a class="" href="#"><i class="fa fa-fw fa-sitemap"></i> <i class="fa fa-angle-left pull-right"></i> <span>Socio Culture</span></a>
				<ul class="treeview-menu">
                                     


                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'others')) ?>"><i class="fa fa-edit"></i></i> <span>Q1-Q10</span></a>
			</li>


                         <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'socio_section_b')) ?>"><i class="fa fa-edit"></i></i> <span>Q11-Q20</span></a>
			</li>
         
                         <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'socio_section_c')) ?>"><i class="fa fa-edit"></i></i> <span>Q21-Q30</span></a>
			</li> 
                        
                         <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'socio_section_d')) ?>"><i class="fa fa-edit"></i></i> <span>Q31-Q40</span></a>
			</li> 
  
                        <li class="">
				<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'socio_section_e')) ?>"><i class="fa fa-edit"></i></i> <span>Q41-Q56</span></a>
			</li>   

                         <li class="">
						<a class="" href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'admin_section_storytext')) ?>"><i class="fa fa-edit"></i></i> <span>Story Text</span></a>
					</li>
                        
                               </ul>
                        </li>    

      
     <?php endif;?>
			
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>