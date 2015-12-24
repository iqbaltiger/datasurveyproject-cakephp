<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Cultural'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                       <?php echo $this->Form->create('SectionJ',array('class'=>'')) ?>
       					 <h4>HEALTH CARE AND AWARENESS </h4>
                    <h5>Disease and Care/ Treatment (last 03 months) </h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
  <tr>
    <td><p align="center"><strong>Q. No.</strong></p></td>
    <td colspan="10"><p align="center"><strong>Questions</strong></p></td>
    <td  colspan="5"><p align="center"><strong>Coding    Categories</strong></p></td>
    <td  colspan="3"><p align="center"><strong>Codes</strong></p></td>
  </tr>
  <tr>
    <td  valign="top"><p align="center"><strong>1001</strong></p></td>
    <td  colspan="10" valign="top"><p><strong>Has anyone    of the household suffered from any ailment(s) in last three months?</strong></p></td>
    <td  colspan="5"><p align="center"><strong>01 Yes</strong></p></td>
    <td  colspan="3"><p align="center"><strong>02 No</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td  valign="top"><p align="center"><strong>1002</strong></p></td>
    <td  colspan="18" valign="top"><p>If    yes, give us the details of the illness (take the details of each ailment of    an individual member in a separate row)</p></td>
  </tr>
  <tr>
    <td  rowspan="7" valign="top"><p align="center">&nbsp;</p></td>
    <td  rowspan="2"><p align="center">HH ID</p></td>
    <td  colspan="3" rowspan="2"><p align="center">Sex Male 1    Female 2 </p></td>
    <td  colspan="2"><p align="center">Age</p></td>
    <td  colspan="3" rowspan="2"><p align="center">Type of    ailments</p></td>
    <td  colspan="2" rowspan="2"><p>Duration</p></td>
    <td  rowspan="2"><p align="center">Did you    receive any treatment? Yes- 1 ; No- 2</p></td>
    <td  colspan="4" rowspan="2"><p align="center">If Yes,    where did you receive treatment from?</p></td>
    <td  colspan="2" rowspan="2"><p align="center">If No, the    reasons for not taking treatment</p></td>
  </tr>
  <tr>
    <td ><p align="center">Year</p></td>
    <td ><p align="center">Month</p></td>
  </tr>
  <tr>
    <td ><p align="center">(01)</p></td>
    <td  colspan="3"><p align="center">(02)</p></td>
    <td ><p align="center">(03)</p></td>
    <td ><p align="center">(04)</p></td>
    <td  colspan="3"><p align="center">(05)</p></td>
    <td  colspan="2"><p align="center">(06)</p></td>
    <td ><p align="center">(07)</p></td>
    <td  colspan="4"><p align="center">(08)</p></td>
    <td  colspan="2"><p align="center">(09)</p></td>
  </tr>
  
  <?php for($j=0;$j<4;$j++): ?>
  
   <?php  
   if(!empty($this->data[$j]['SectionJ']['id'])){
                                     echo $this->Form->input($j.'.SectionJ.id',array('type'=>'hidden')); 
                                        } ?>
  
  <tr>
    
    <?php echo $this->Form->input($j.'.SectionJ.track_row_id',array('type'=>'hidden','value'=>$j));?>   
    <?php echo $this->Form->input($j.'.SectionJ.interview_id',array('type'=>'hidden','value'=>$interview_id));?>
     <td  valign="top"><?php echo $this->Form->input($j.'.SectionJ.hh_id',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
    <td  colspan="3" valign="top"><?php echo $this->Form->input($j.'.SectionJ.sex',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
    <td  valign="top"><?php echo $this->Form->input($j.'.SectionJ.year',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
    <td  valign="top"><?php echo $this->Form->input($j.'.SectionJ.month',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
    <td  colspan="3" valign="top"><?php echo $this->Form->input($j.'.SectionJ.type_of_ailments',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
    <td  colspan="2" valign="top"><?php echo $this->Form->input($j.'.SectionJ.duration',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
    <td  valign="top"><?php echo $this->Form->input($j.'.SectionJ.receive_treatment',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
    <td  colspan="4" valign="top"><?php echo $this->Form->input($j.'.SectionJ.where_receive_treatment',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
    <td  colspan="2" valign="top"><?php echo $this->Form->input($j.'.SectionJ.not_taking_treatment',array('type'=>'text','class'=>'form-control','label'=>false,'valign'=>'top','style'=>'margin-top:3px')); ?></td>
  </tr>
  
  <?php endfor; ?>

  <tr>
    <td  colspan="3"><p><strong>Name    of Diseases code (Column 05)</strong></p></td>
    <td ><p><strong>code</strong></p></td>
    <td  colspan="4"><p><strong>Name    of Disease code (Column 05)</strong></p></td>
    <td ><p><strong>code</strong></p></td>
    <td  colspan="5"><p><strong>Treatment/medical    care (Column 07)</strong></p></td>
    <td ><p><strong>code</strong></p></td>
    <td colspan="3"><p><strong>Reasons for    not taking treatment (Column 08) </strong></p></td>
    <td ><p><strong>code</strong></p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Eye    Problems</p></td>
    <td ><p>01</p></td>
    <td  colspan="4"><p>Gastric</p></td>
    <td ><p>12</p></td>
    <td  colspan="5"><p>Government    Hospital/clinic</p></td>
    <td ><p>01</p></td>
    <td  colspan="3"><p>Poverty/<a name="_GoBack" id="_GoBack"></a>lack of money</p></td>
    <td ><p>01</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Cold/Cough</p></td>
    <td ><p>02</p></td>
    <td  colspan="4"><p>Diabetes</p></td>
    <td ><p>13</p></td>
    <td  colspan="5"><p>Private/NGO    Hospital/clinic</p></td>
    <td ><p>02</p></td>
    <td  colspan="3" rowspan="2"><p>Transportation/distant</p></td>
    <td  rowspan="2"><p>02</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Paralysis</p></td>
    <td ><p>03</p></td>
    <td  colspan="4"><p>Anemia </p></td>
    <td ><p>14</p></td>
    <td  colspan="5"><p>Rural    doctor/quack</p></td>
    <td ><p>03</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Fever/Influenza</p></td>
    <td ><p>04</p></td>
    <td  colspan="4"><p>Asthma/breathing    problems</p></td>
    <td ><p>15</p></td>
    <td  colspan="5"><p>Religious    healer/ Herbal</p></td>
    <td ><p>04</p></td>
    <td  colspan="3"><p>Inadequate    medical facilities</p></td>
    <td ><p>03</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Nyctalopic/night    blind</p></td>
    <td ><p>05</p></td>
    <td  colspan="4"><p>Dysentery</p></td>
    <td ><p>16</p></td>
    <td  colspan="5"><p>Local    pharmacy</p></td>
    <td ><p>05</p></td>
    <td  colspan="3"><p>Inefficient    medical services</p></td>
    <td ><p>04</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Pneumonia</p></td>
    <td ><p>06</p></td>
    <td  colspan="4"><p>Diarrhoea</p></td>
    <td ><p>17</p></td>
    <td  colspan="5"><p>MBBS    Doctor</p></td>
    <td ><p>06</p></td>
    <td  colspan="3"><p>Didn&rsquo;t    feel the need</p></td>
    <td ><p>05</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>ENT    problems</p></td>
    <td ><p>07</p></td>
    <td  colspan="4"><p>Skin    disease</p></td>
    <td ><p>18</p></td>
    <td  colspan="5"><p>Homeopathy    Doctor</p></td>
    <td ><p>07</p></td>
    <td  colspan="3" rowspan="5"><p>Others    (please mention the details)</p></td>
    <td  rowspan="5"><p>99</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Tuberculosis</p></td>
    <td ><p>08</p></td>
    <td  colspan="4"><p>Tetanus</p></td>
    <td ><p>19</p></td>
    <td  colspan="5"><p>LMF</p></td>
    <td ><p>08</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Hypertension/blood    pressure</p></td>
    <td ><p>09</p></td>
    <td  colspan="4"><p>Typhoid</p></td>
    <td ><p>20</p></td>
    <td  colspan="5"><p>Haven&rsquo;t    received any treatment</p></td>
    <td ><p>09</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Hepatitis    B-C </p></td>
    <td ><p>10</p></td>
    <td  colspan="4"><p>Malaria</p></td>
    <td ><p>21</p></td>
    <td  colspan="5" rowspan="2"><p>Others (please mention the details)  </p></td>
    <td  rowspan="2"><p>99</p></td>
  </tr>
  <tr>
    <td  colspan="3"><p>Injury</p></td>
    <td ><p>11</p></td>
    <td  colspan="4"><p>Others</p></td>
    <td ><p>99</p></td>
  </tr>
</table>
                        
                    </div>
                                    
                                    
                       <button class="btn btn-info">Submit</button>
                       <?php echo $this -> Form -> end(); ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>