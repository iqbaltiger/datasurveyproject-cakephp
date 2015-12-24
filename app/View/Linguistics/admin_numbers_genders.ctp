<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Number & Gender'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                                           <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'].' '.$personalInfo['PersonnelInformation']['last_name'];  ?></b></p>

                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id'];  ?></b></p>

                                                </div>
                                            </div>   
						<?php echo $this->Form->create('NumbersGender',array('class'=>'')) ?>
                                                <?php
                                                    if(!empty($this->data['NumbersGender']['id'])){
                                                        echo $this->Form->input('NumbersGender.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
                                             <?php echo $this->Form->input('NumbersGender.personnel_information_id',array('type'=>'hidden','value'=>$id)) ?>
						<p>9. Function(s) of reduplication? (E.g. marks plural, aspect, etc.)</p>

	                    <div class="table-responsive">
                                 <?php $genders = array('i. marks plural', 'ii. aspect', 'iii. emphatic', 'iv. importance','Other(specify)'); ?>
	                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>YES/NO</th>
                                    <th>Bangla</th>
                                    <th>English</th>
                                    <th>Target Word IPA</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php for($i=0; $i<count($genders); $i++){ ?>
                                
                                 <?php
                                  
                                      if(!empty($this->data['reduplication'][$i]['ComparaisonMarker']['id'])){
                                                                    echo $this->Form->input('reduplication.'.$i.'.ComparaisonMarker.id',array('type'=>'hidden')); 
                                                                }
                                ?>
                            		<tr>
                            			<td> <?php echo $this->Form->input('reduplication.'.$i.'.ComparaisonMarker.attribute_values',array('type'=>'hidden','value'=>$genders[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $genders[$i] ?></td>
                                                  <?php echo $this->Form->input('reduplication.'.$i.'.ComparaisonMarker.table_attribute_type',array('type'=>'hidden','value'=>'reduplication_marker','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			 <?php echo $this->Form->input('reduplication.'.$i.'.ComparaisonMarker.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input('reduplication.'.$i.'.ComparaisonMarker.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                            			<td><?php echo $this->Form->input('reduplication.'.$i.'.ComparaisonMarker.bangla_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input('reduplication.'.$i.'.ComparaisonMarker.english_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input('reduplication.'.$i.'.ComparaisonMarker.target_ipa', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                            		</tr>
                                <?php }
                                   
                                     $count = $i;
                                ?>
                            </tbody>
                       </table>
                                
                                
                                
                                
	                    </div> 
	                   
<!--	                    <p>b. Can the copied portion/domain be regularly specified/described (without exception)?</p>
	                    <?php echo $this->Form ->input('11b_ans', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>
	                    <p>c. Is this portion phonologically (syllable, foot, total, etc.) or morphologically (affix, stem, root, etc.) specifiable?  Note exceptions &idiosyncracies</p>
	
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	                            <tbody>
	                                <tr>
	                                    <td>phonologically (syllable, foot, total, etc.)</td> 
	                                    <td><?php echo $this -> Form -> input('11c_phonologically', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
	                                </tr>
	                                <tr>
	                                    <td>morphologically (affix, stem, root,  etc.)</td> 
	                                    <td><?php echo $this -> Form -> input('11c_morphologically', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>   -->
	
	                    <p>
	                        10. Gender marking issues of the target language:
	                    </p>
	                    <p>
	                        <span style="margin-left: 25px;">a. How many sets of gender agreeing forms are there (how many "target genders")?</span>  
	                    </p>
	                    <?php $genders = array('Male', 'Female', 'Neuter', 'Other'); ?>
	                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>YES/NO</th>
                                    <th>Bangla Equivalent</th>
                                    <th>English Equivalent</th>
                                    <th>Target Word IPA</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php for($i=0; $i<count($genders); $i++){ ?>
                                
                                 <?php
                                  
                                      if(!empty($this->data['Market'][$i]['ComparaisonMarker']['id'])){
                                                                    echo $this->Form->input('Market.'.$i.'.ComparaisonMarker.id',array('type'=>'hidden')); 
                                                                }
                                ?>
                            		<tr>
                            			<td> <?php echo $this->Form->input('Market.'.$i.'.ComparaisonMarker.attribute_values',array('type'=>'hidden','value'=>$genders[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $genders[$i] ?></td>
                                                  <?php echo $this->Form->input('Market.'.$i.'.ComparaisonMarker.table_attribute_type',array('type'=>'hidden','value'=>'gender_marker','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			 <?php echo $this->Form->input('Market.'.$i.'.ComparaisonMarker.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input('Market.'.$i.'.ComparaisonMarker.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                            			<td><?php echo $this->Form->input('Market.'.$i.'.ComparaisonMarker.bangla_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input('Market.'.$i.'.ComparaisonMarker.english_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input('Market.'.$i.'.ComparaisonMarker.target_ipa', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                            		</tr>
                                <?php }
                                   
                                     $count = $i;
                                ?>
                            </tbody>
                       </table>
						<hr></hr>
<!--						<p>b. How many sets of nouns do these divide nouns into (how many "controller genders")?</p>
	                    <p>
	                        NOTE: In many languages of Europe the two questions give the same answer. Thus French 
	
	                        adjectives (pronouns etc) have two sets of forms, masculine and feminine (exemplars of two 
	
	                        target genders) which serve to divide nouns into two sets (controller genders). But in 
	
	                        Rumanian, which is partially similar to French, a large number of nouns take the same 
	
	                        agreements as masculine when singular and as feminines when plural. Like French, 
	
	                        Rumanian has two target genders, but it has three controller genders: masculine, feminine 
	
	                        and neuter (or am bi generic).  
	                    </p>
	                     <?php echo $this -> Form -> input('12b_ans', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>    
	
	                    <p>c.  How are nouns assigned to gender?</p>   
	
	                    <p><span style="margin-left: 25px;">i. semantic assignment (the meaning determines gender)</span></p> 
	
	                      <?php echo $this -> Form -> input('12ci_semantic_ans', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>    
	
	                    <p><span style="margin-left: 25px;">ii. morphological assignment (the inflectional paradigm of the noun determines gender)</p>
	                       <?php echo $this -> Form -> input('12cii_morphological_ans', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
	
	                    <p>
	                       iii. phonological assignment (the shape of a single form – the base form - issufficient)  
	                    </p>
	                       <?php echo $this -> Form -> input('12ciii_phonological_ans', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     -->
	
	                    <p>b. The morphology of gender:</p>
	
	                    <p>
	                    	<span style="margin-left: 25px;">
	                            <b>i. how is gender marked?</b> - inflectionally - prefixing, suffixing, infixing, ambifixingsuppletion
	                        </span>
	                   </p>
	
	                      <?php echo $this -> Form -> input('12di_gender_mark', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
	
	                    <p>
	                    	<span style="margin-left: 25px;">
	                            <b>ii. which lexical categories have carry gender markers?</b>- verbs, adjectives, pronouns, others.
	                        </span>
	                    </p>
							<?php echo $this -> Form -> input('12dii_lexical_categories', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
	
	                    <p>
	                    	<span style="margin-left: 25px;">
	                            <b> iii. within the lexical categories are all items involved</b> (i.e. if adjectives mark gender 
	                            do all adjectives mark gender)?
	                        </span>
	                   </p>
							<?php echo $this -> Form -> input('12diii_lexical_categories', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
						<hr></hr>
						<p>11. Number Marker issues of the target language:</p> 

	                    <p>a. Which grammatical numbers are distinguished? Mark the following options –</p>
	
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	                            <thead>
	
	                                <tr>
	                                    <th>Male</th>
	                                    <th>YES/NO</th>
	                                    <th>Bangla</th>
	                                    <th>English</th>
	                                    <th>Target Word IPA</th>
	                                </tr>
	
	                            </thead>
                                    <tbody>
                                       <?php 
                                       
                                       $males = array('i. singular-plural','ii. singular-dual- plural','iii. other(specify)');
                                       for($i=0; $i<count($males); $i++){ ?>
                                         <?php
                                  
                                      if(!empty($this->data['Number_Marker'][$i]['ComparaisonMarker']['id'])){
                                                                    echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.id',array('type'=>'hidden')); 
                                                                }
                                ?>
                                          
                            		<tr>
                            			<td> <?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.attribute_values',array('type'=>'hidden','value'=>$males[$i],'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?><?php echo $males[$i] ?></td>
                                                  <?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.table_attribute_type',array('type'=>'hidden','value'=>'number_marker','class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.personnel_information_id',array('type'=>'hidden','value'=>$id,'class'=>'form-control','label'=>false,'style'=>'margin-top:3px')); ?>
                            			<td><?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                            			<td><?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.bangla_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.english_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
						<td><?php echo $this->Form->input('Number_Marker.'.$i.'.ComparaisonMarker.target_ipa', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                            		</tr>
                                <?php } ?> 
                                        
                                    </tbody>
                                    
	                        </table> 
	
	                    </div>
	
	                   
	                    <p>b. How is number morphologically expressed?</p>
	                    <p><span style="margin-left: 25px;">i. which means are used? - inflectional: prefixing, suffixing, infixing, ambifixing, other -suppletion, reduplication</span></p>
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13cia', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13cib', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>   
	
	                    <p><span style="margin-left: 25px;">ii. which lexical categories carry the morphological markers -nouns, verbs, adjectives,
	
	                            pronouns, others?</span></p>
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13ciia', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13ciib', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>   
	
<!--	                    <p><span style="margin-left: 25px;">iii. within the lexical categories, are all items involved? (i. e. if adjectives mark number, do 
	
	                            all or only some adjectives mark number?)</span></p>
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13ciiia', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13ciiib', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>   -->
	
<!--	                    <p>Sometimes there are types of noun (e. g. abstracts, massnouns) which can be predicted to be 
	
	                        defective.</p>-->
<!--	                    <p>d. How is number expressed? <b>Syntactically :</b></p>
	
	                    <p><span style="margin-left: 25px;">i. is there a matching of number marking between different elements  which could be 
	
	                            characterized as agreement?</span></p>
	
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13dia', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13dib', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>  
	
	                    <p><span style="margin-left: 25px;">ii. are there particular syntactic complications where numerals are involved?</span></p>
	
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13diia', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('13diib', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>  
	
	                    <p>e. Relation to other categories particularly within the NP how does number interact with:</p>
	
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	                            <tr>
	
	                                <td>
	                                    <p>i. gender</p>  
	                                    <p>(taken widely to include animacyetc)</p>
	
	
	                                </td>  
	
	                                <td><?php echo $this -> Form -> input('13ei_gender', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	
	                            </tr>
	
	                            <tr>
	
	                                <td>
	                                    <p>ii. case</p>  
	
	
	
	                                </td>  
	
	                                <td><?php echo $this -> Form -> input('13ei_case', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	
	                            </tr>
	
	                            <tr>
	
	                                <td>
	                                    <p>iii. person</p>  
	
	
	
	                                </td>  
	
	                                <td><?php echo $this -> Form -> input('13eiii_person', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	
	                            </tr>
	
	                            <tr>
	
	                                <td>
	                                    <p>iv. other</p>  
	
	
	
	                                </td>  
	
	                                <td><?php echo $this -> Form -> input('13eiv_other', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	
	                            </tr>
	
	                        </table>-->
                                
                                <hr></hr>
						<center><button class="btn btn-info">Next>></button></center>
	                    </div>
						 </div>
                                    
                                               
						<?php echo $this->Form->end(); ?>
                                    
						  </div>
						   </div>
						    </div>
							 </div>
							 </div>