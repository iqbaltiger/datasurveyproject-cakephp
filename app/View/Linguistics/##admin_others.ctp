<style>
    
    .radio-test{padding-left:20px;}
    .radio_question_section{}
    
    .radio_question_section label{padding:0px 10px;}
    
    .radio_question_section > span{float: left;margin-left: 10px;font-weight: bold;}
</style>


<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Linguistics Basics'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
						<?php echo $this->Form->create('Survey',array('class'=>'')) ?>
						<p>11. a. Function(s) of reduplication? (E.g. marks plural, aspect,, etc.)</p>

	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	                            <thead>
	                                <tr>
	                                    <th>marks plural</th>
	                                    <th>aspect</th>
	                                    <th>emphatic</th>
	                                    <th>importance</th>
	                                </tr>
	                            </thead>
	                        </table>  
	                    </div> 
	
	                    <p>b. Can the copied portion/domain be regularly specified/described (without exception)?</p>
	                    <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>
	                    <p>c. Is this portion phonologically (syllable, foot, total, etc.) or morphologically (affix, stem, root, etc.) specifiable?  Note exceptions &idiosyncracies</p>
	
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	                            <tbody>
	                                <tr>
	                                    <td>phonologically (syllable, foot, total, etc.)</td> 
	                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
	                                </tr>
	                                <tr>
	                                    <td>morphologically (affix, stem, root,  etc.)</td> 
	                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>   
	
	                    <p>
	                        12. Gender marking issues of the target language:
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
                            	<?php foreach($genders as $gender): ?>
                            		<tr>
                            			<td><?php echo $gender ?></td>
                            			<td><?php echo $this->Form->input('status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                            			<td><?php echo $this -> Form -> input('bangla_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
										<td><?php echo $this -> Form -> input('english_equivalent', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
										<td><?php echo $this -> Form -> input('target', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                            		</tr>
                            	<?php endforeach; ?>
                            </tbody>
                       </table>
						<hr></hr>
						<p>b. How many sets of nouns do these divide nouns into (how many "controller genders")?</p>
	                    <p>
	                        NOTE: In many languages of Europe the two questions give the same answer. Thus French 
	
	                        adjectives (pronouns etc) have two sets of forms, masculine and feminine (exemplars of two 
	
	                        target genders) which serve to divide nouns into two sets (controller genders). But in 
	
	                        Rumanian, which is partially similar to French, a large number of nouns take the same 
	
	                        agreements as masculine when singular and as feminines when plural. Like French, 
	
	                        Rumanian has two target genders, but it has three controller genders: masculine, feminine 
	
	                        and neuter (or am bi generic).  
	                    </p>
	                     <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>    
	
	                    <p>c.  How are nouns assigned to gender?</p>   
	
	                    <p><span style="margin-left: 25px;">i. semantic assignment (the meaning determines gender)</span></p> 
	
	                      <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>    
	
	                    <p><span style="margin-left: 25px;">ii. morphological assignment (the inflectional paradigm of the noun determines gender)</p>
	                       <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
	
	                    <p>
	                       iii. phonological assignment (the shape of a single form – the base form - issufficient)  
	                    </p>
	                       <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
	
	                    <p>d. The morphology of gender:</p>
	
	                    <p>
	                    	<span style="margin-left: 25px;">
	                            <b>i. how is gender marked?</b> - inflectionally - prefixing, suffixing, infixing, ambifixingsuppletion
	                        </span>
	                   </p>
	
	                      <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
	
	                    <p>
	                    	<span style="margin-left: 25px;">
	                            <b>ii. which lexical categories are carry gender markers?</b>- verbs, adjectives, pronouns, others.
	                        </span>
	                    </p>
							<?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
	
	                    <p>
	                    	<span style="margin-left: 25px;">
	                            <b> iii. within the lexical categories are all items involved</b> (i.e. if adjectives mark gender 
	                            do all adjectives mark gender)?
	                        </span>
	                   </p>
							<?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>     
						<hr></hr>
						<p>13. Number Marker issues of the target language:</p> 

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
	
	
	                                <!--12(1) row start-->
	
	                                <tr>
	                                    <th>i. singular-plural</th>
	                                    <th> <div class="input-group">
	                                <span class="input-group-addon">
	                                    <input type="radio" aria-label="..." name="choice">Yes
	                                </span>
	
	                                <span class="input-group-addon">
	                                    <input type="radio" aria-label="..." name="choice">No
	                                </span>
	
	                            </div>   </th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            </tr>
	
	                            <!--12(1) row start-->
	
	                            <tr>
	                                <th>ii. singular-dual-
	
	                                    plural,</th>
	                                <th> <div class="input-group">
	                                <span class="input-group-addon">
	                                    <input type="radio" aria-label="..." name="choice">Yes
	                                </span>
	
	                                <span class="input-group-addon">
	                                    <input type="radio" aria-label="..." name="choice">No
	                                </span>
	
	                            </div>   </th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            </tr>   
	
	                            <!--12(1) row start-->
	
	                            <tr>
	                                <th>iii. other(specify)</th>
	                                <th> <div class="input-group">
	                                <span class="input-group-addon">
	                                    <input type="radio" aria-label="..." name="choice">Yes
	                                </span>
	
	                                <span class="input-group-addon">
	                                    <input type="radio" aria-label="..." name="choice">No
	                                </span>
	
	                            </div>   </th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            <th><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></th>
	                            </tr>   
	
	
	
	                            </thead>
	                        </table> 
	
	                    </div>
	
	                    <p>b. How is number expressed? lexically:</p>
	                    <p>are there separate words meaning , say 'plural'?</p>
	                    <p>c. How is number expressed?morphologically</p>
	                    <p><span style="margin-left: 25px;">i. which means are used? - inflectional: prefixing, suffixing, infixing, ambifixing, other -suppletion, reduplication</span></p>
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>   
	
	                    <p><span style="margin-left: 25px;">ii. which lexical categories carry the morphological markers -nouns, verbs, adjectives,
	
	                            pronouns, others?</span></p>
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>   
	
	                    <p><span style="margin-left: 25px;">iii. within the lexical categories, are all items involved? (i. e. if adjectives mark number, do 
	
	                            all or only some adjectives mark number?)</span></p>
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>   
	
	                    <p>Sometimes there are types of noun (e. g. abstracts, massnouns) which can be predicted to be 
	
	                        defective.</p>
	                    <p>d. How is number expressed? <b>Syntactically :</b></p>
	
	                    <p><span style="margin-left: 25px;">i. is there a matching of number marking between different elements  which could be 
	
	                            characterized as agreement?</span></p>
	
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	                            </tr>
	
	
	                        </table>
	                    </div>  
	
	                    <p><span style="margin-left: 25px;">ii. are there particular syntactic complications where numerals are involved?</span></p>
	
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
	                            </tr>
	
	                            <tr>
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
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
	
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	
	                            </tr>
	
	                            <tr>
	
	                                <td>
	                                    <p>ii. case</p>  
	
	
	
	                                </td>  
	
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	
	                            </tr>
	
	                            <tr>
	
	                                <td>
	                                    <p>iii. person</p>  
	
	
	
	                                </td>  
	
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	
	                            </tr>
	
	                            <tr>
	
	                                <td>
	                                    <p>iv. other</p>  
	
	
	
	                                </td>  
	
	                                <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
	
	                            </tr>
	
	                        </table>
	                    </div>
	                    <p>14. Word Order Typology Marker:</p>

                    <p><span style="margin-left: 25px;">a.  How is the basic word order of the classified in terms of the  following , where  rigid   

                            stands   for   the  impossibility   of   items   occurring   to   the   right   of   V,   and  free  

                            for   the  existence of all possible combinations of S, V and O.</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Word 

                                        Order Type</th>
                                    <th>Yes/

                                        No</th>
                                    <th>If Yes, Possible 

                                        Example In Bangla 

                                        Equivalent</th>
                                    <th>Target Sentence in

                                        BANGLA SCRIPT</th>

                                    <th>IPA

                                        Transcripttion of</th>


                                </tr>



                            </thead> 

                            <tbody>
                                <tr>
                                    <td>i. SOV;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <tr>
                                    <td>ii. SOV/rigid;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>



                                <!--14(a) row start-->
                                <tr>
                                    <td>iii. c)SOV/free;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!--14(a) row start-->
                                <tr>
                                    <td>iv. SVO;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>v. SVO/free;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>vi. SVO/V2 – 

                                        verb 

                                        second;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>vii. VSO;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!--14(a) row start-->
                                <tr>
                                    <td>viii. VOS;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>ix. OVS;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!--14(a) row start-->
                                <tr>
                                    <td>x. OSV;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!--14(a) row start-->
                                <tr>
                                    <td>xi. V1 – verb 

                                        initial;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>xii. V2 – verb

                                        second;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>xiii. free

                                        second;</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!--14(a) row start-->
                                <tr>
                                    <td>xiv.

                                        other</td>  
                                    <td><div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">Yes
                                            </span>

                                            <span class="input-group-addon">
                                                <input type="radio" aria-label="..." name="choice">No
                                            </span>

                                        </div>   </td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <tr>
                                    <td colspan="5">
                                        <b>NOTE: all orders are possible and there are no grounds for positing one of the 

                                            occurring orders as basic.</b>  

                                    </td> 




                                </tr>

                            </tbody>


                        </table>
                    </div>   


                    <p>15. These sentences are designed to elicit data to give a typological sketch of a language. One 

                        has to build on further on each of these sentences to get full paradigms of a verb or a noun. You 

                        might find some of these sentences funny or ungrammatical in English, however, when 

                        translated in the contact language and the target language they will appear all right.</p>



                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Sentence Type</th>
                                    <th>Bangla Sentence</th>
                                    <th>English Equivalent</th>
                                    <th>Sentence of Target language(First: In Bangla script & Second: in IPA)</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>I eat rice Summon plays football at every evening.Mother loves her child</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>What time does it take to go

                                        from Bandarban to 

                                        Rangamati?

                                        The sun rises in the east and 

                                        sets in west

                                        He is very powerful and 

                                        intelligent .</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>After eating rice, I go to</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>Dhaka is the capital of 

                                        Bangladesh.

                                        I like cats.

                                        Jamal is a Farmer.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>How are you?

                                        Where Are You going?

                                        Why have you come here?</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>



                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>After eating rice, I go to school.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>Dhaka is the capital of 

                                        Bangladesh.

                                        I like cats.

                                        Jamal is a Farmer.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>How are you?

                                        Where Are You going?

                                        Why have you come here?</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>What a Beautiful flower!

                                        What a surprise!

                                        What a nice evening!

                                        What a shame!</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>Give me a glass of water.

                                        Have a good day.

                                        Please give me your phone 

                                        number.

                                        Wait, I will go with you.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>


                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>It you come, then I will go.

                                        I would be angry, if you are 

                                        unwilling to eat.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>I have ate meat.

                                        Come tomorrow.

                                        I will go your home this 

                                        evening.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>

                                <!---15 row start--->

                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td>I am not a thief.

                                        They aren't coming

                                        I cannot speak Bengali.</td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  

                                </tr>




                            </tbody>
                        </table>  


                        <p>20. Order in yes/no questions:</p>

                        <p>a. Exemplify the normal order in yes/no questions.</p>

                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>

                        <p>b. If   there   are   alternative   orders   (other   than   those   involving   echo- questions, (see (16) below) exemplify them.</p>               

                                         <?php echo $this -> Form -> input('collector_name', array('type' => 'textarea', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px;margin-bottom:5px;', 'rows' => 3)); ?>

                        <p>b. What is the location of the q-word/phrase?</p> 

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th></th>
                                        <th>YES/NO</th>
                                        <th>Bangla Equivalent EX</th>

                                        <th>Transcription in IPA</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <!--21(b) row-->
                                    <tr>
                                        <th>i. initial</th>  
                                        <td>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">Yes
                                                </span>

                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">No
                                                </span>

                                            </div>     

                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  

                                    </tr>

                                    <!--21(b) row-->
                                    <tr>
                                        <th>ii. immediately preverbal position</th>  
                                        <td>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">Yes
                                                </span>

                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">No
                                                </span>

                                            </div>     

                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  

                                    </tr>

                                    <!--21(b) row-->
                                    <tr>
                                        <th>iii. in situ</th>  
                                        <td>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">Yes
                                                </span>

                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">No
                                                </span>

                                            </div>     

                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  

                                    </tr>

                                    <!--21(b) row-->
                                    <tr>
                                        <th>iv. other</th>  
                                        <td>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">Yes
                                                </span>

                                                <span class="input-group-addon">
                                                    <input type="radio" aria-label="..." name="choice">No
                                                </span>

                                            </div>     

                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  
                                        <td>

                                                                          <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                        </td>  

                                    </tr>  


                                </tbody>
                            </table>
                        </div>   

                        <h4>
                            PART C: SOCIO-CULTURAL ASPECTS OF LANGUAGE
                        </h4>

                        <p>1. What should be the language medium of conversation among family member?</p>

                        <p>

                            <span>a) Mother tongue <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) Bangla <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) English <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> d) other  <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>   

                        </p>


                        <p>2. What should be the language medium of education?</p>

                        <p>
                            <span>a) Mother tongue <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) Bangla <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) English <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> d) other  <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>     

                        </p>

                        <p>
                            3. What language should be use in temple /prayer house?</p>
                        <p>
                            <span>a) Mother tongue <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) Bangla <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) English <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> d) other  <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'label' => false, 'div' => false)); ?></span>     

                        </p>

                        <p>

                            4. Will you send your child if in a new school provide mother tongue based education at 

                            first and then switched into Bangla and English language medium ? </p>

                        <p>
                            <span>a) Yes <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) No <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?></span>     

                        </p>

                        <p>

                            5. When you speak your mother tongue in presence of the speaker of the dominant/ bangle 

                            language what do you feel?   
                        </p>

                        <p>
                            <span>a) Prestigious <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) Embarrassed <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) Normal <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?></span>     

                        </p>

                        <p>

                            6. How would you feel if your son or daughter married someone who does not know your

                            language?  
                        </p>

                        <p>
                            <span>a) Good <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> b) indifferent /not so good <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?> c) Bad <?php echo $this -> Form -> checkbox('published', array('hiddenField' => false)); ?></span>     

                        </p>

                        <p>

                            7.  What are the major kinds of oral literature/resources available in your language?

                            Instruction:   Only ask literate person and Mark the right box 
                        </p>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>Oral literature</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                        <th>Remark</th>

                                    </tr>


                                </thead>


                                <tbody>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Folk tales</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>


                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Songs</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Religious 

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Radio 

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Film /short film 

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>other

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>




                                <tbody>


                                </tbody>

                            </table>   
                        </div>

                        <p>8.  What materials written about your language?</p>
                        <p>Instruction:  Only ask literate person and Mark the right box.</p>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>Material</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Year of

                                            publication(If 

                                            applicable)</th>

                                        <th>Remark</th>

                                    </tr>


                                </thead>


                                <tbody>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Grammar</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>Dictionary</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Textbook</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Newspaper</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Magazine</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Written

                                            literature</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>


                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            folklore</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>


                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            Literacy

                                            material</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>

                                    <!--- 7 row first--->  

                                    <tr>
                                        <td>

                                            other</td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">Yes
                                        </td>  
                                        <td>
                                            <input type="radio" aria-label="..." name="choice">No
                                        </td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                        <td><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>  
                                    </tr>





                                </tbody>
                            </table>
                            
                            <p>9.Instruction: Only ask literate person and Mark the right box.</p>
                             
                            <div class="radio_question_section">
                                
                             
                             <?php 
                                $options = array('M' => 'Male', 'F' => 'Female');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('gender', $options, $attributes); 
                                  
                              ?> 
                          
                            
                            <p>10. Name some organizations which promote your language__________ </p>
                            <div><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false,'style' => 'margin-top:3px')); ?></div>
                          
                            <p>11. What language should your children speak first?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('M' => 'Mother Tongue', 'B' => 'Bangla');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('spoken_language_child', $options, $attributes); 
                                  
                              ?> 
                            </span>
                            <span><b> C)Other</b></span> 
                            <span><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?></span>   
                            </p>
                            
                            <p>12. How many languages do you know except your mother tongue?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('One' => 'One', 'two' => 'Two','Three'=>'Three','More'=>'More');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('language_know', $options, $attributes); 
                                  
                              ?> 
                                
                            </span>
                            </p>
                            
                            <p>13. If you know (other languages), which languages do you know?</p>
                            <p>
                            <span>
                                <?php 
                                $options = array('Cakma' => 'Cakma', 'Marma' => 'Marma','Mro'=>'Mro','Bangla'=>'Bangla','English'=>'English');
                                $attributes = array('legend' => false,'class'=>'radio-test','div'=>false);
                                echo $this->Form->radio('other_language_know', $options, $attributes); 
                                  
                              ?> 
                                
                            </span>
                             
                            </p>
                            
                             <span><b> E)Other</b></span> 
                            <span><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control form-inline', 'label' => false,'style' => 'margin-top:3px;','div'=>false)); ?></span>        
                            
                            
                            
                           </div> 
                        </div>
                        </div>


                    </div>  
						<hr></hr>
						<button class="btn btn-info">Submit</button>
						<?php echo $this -> Form -> end(); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>