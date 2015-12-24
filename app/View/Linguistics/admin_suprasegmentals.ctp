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
						<p>
							8. Use of Suprasegmentals:
                    		Note: Identify the proccess with the availability of the possible sound types. If found then write YES and provide example of target language in IPA
                		</p>
                		<p><b>Are there distinctive degrees found in:</b></p>
                		<?php
                			$suprasegmentals = array('Tones','Pitch','Juncture');
                		?>
                		<table class="table table-bordered table-striped">
	                        <thead>
	
	                            <tr>
	                                <th>Types of Suprasegmentals</th> 
	                                <th>YES/NO</th> 
	                                <th>Description</th> 
	                                <th>Target Word in IPA</th> 
	                                <th>Bangla Equivalent</th> 
	                            </tr>
	
	                        </thead>
	                        <tbody>
	                        	<?php for($i=0; $i<=2; $i++): ?>
	                        	<tr>
	                        		<td><?php echo $suprasegmentals[$i];  ?></td>
	                        		<td><?php echo $this->Form->input('status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
	                        		<td><?php echo $this->Form->input('description',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
	                        		<td><?php echo $this->Form->input('target_word',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
	                    			<td><?php echo $this->Form->input('bangla_equivalent',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
	                        	</tr>
	                        	<?php endfor; ?>
	                        </tbody>
	                    </table>
						<hr></hr>
						<p>9. A productive word formation (WF) process is one which is synchronically used for the formation of new words. The following chart shows that whether the target language formed productively by the following word formation process.</p>
						<?php
							$sl = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t');
							$process = array('Prefixation','Suffixation','Infixation','Circumfixation','Prfixal-Sufixal Derivation','Prefixal-Infixal Derivation','Infixal-Sufixal Derivation','Root-and-Pattern Derivation (Transfixation)','Vowel alternation','Prefixation With Vowel alternation','Suffixation With Vowel alternation','Consonant alternation','Compounding','Incorporation','Reduplication','Conversion','Back formation/Subtraction','Blending','Clipping','Other productive process')
						
						?>
						<table class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <td></td> 
                                    <td>WF Process</td> 
                                    <td>Bangla Example</td>
                                    <td>YES Or NO</td> 
                                    <td>Literal Translation of constitunent morpherme in IPA</td> 
                                    <td>Bangla Equivalent</td>
                                </tr>
                            </thead>

                            <tbody>
                            	<?php for($i=0; $i<=19; $i++): ?>
                            		<tr>
                            			<td><?php echo $sl[$i]; ?></td>
                            			<td><?php echo $process[$i]; ?></td>
                            			<td></td>
                            			<td><?php echo $this->Form->input('status',array('type'=>'radio','options'=>array(' Yes ',' No'),'div'=>false,'label'=>false,'legend'=>false)) ?></td>
                            			<td><?php echo $this->Form->input('ipa',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
	                    				<td><?php echo $this->Form->input('bangla_equivalent',array('type'=>'text','class'=>'form-control','label'=>false)); ?></td>
	                        	
                            		</tr>
                            	<?php endfor; ?>
                            </tbody>
                        </table>
						<hr></hr>
						<button class="btn btn-info">Submit</button>
						<?php echo $this->Form->end(); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>