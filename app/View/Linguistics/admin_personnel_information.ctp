<style type="text/css">
    #errmsg{color:red;} .content{margin-top: 5%;}
</style>
<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Personnel Information'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
                            <?php 
                            
                             echo $this->Html->css('frontend/datepickercss/default');
                            echo $this->Html->script('admin/jquery.min');
                              echo $this->Html->script('frontend/datepickerjavascript/zebra_datepicker'); 
                            
                            ?>
                            <script>
                              
                                $(function(){ 
                                    
                                    $('#PersonnelInformationDateOfBirth').Zebra_DatePicker({
             
             format: 'M d, Y',
             view: 'years',
//             direction: true,
             
         });
		
                                    $("#PersonnelInformationAge").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
                
                                    
                                   
                                   $('#district').change(function(){
                                       
                                   var district_val = this.value;
                                   
                                   if(district_val==0){
                                       
                                               $('#upazilla').empty();

                                                var upazilla_value = {
                                                                            l  : 'লাকসাম',
                                                                            d : 'দেবিদ্বার '
                                                                        };
                                                                        $.each(upazilla_value, function(val, text) {
                                                                            $('#upazilla').append( new Option(text,val) );
                                                                        });


                                               }

                                               if (district_val == 1) {


                                                 $('#upazilla').empty();


                                                   var upazilla_value = {
                                                       l: 'কসবা',
                                                       d: 'সরাইল'
                                                   };
                                                   $.each(upazilla_value, function (val, text) {
                                                       $('#upazilla').append(new Option(text, val));
                                                   });


                                               }


                                           })
                                   
                                   
                                   
                               }) 
                          
                            </script>
                            
                             
				<div class="row">
					<div class="col-lg-12 col-xs-12 col-md-6 col-sm-12">
                                                 
						<?php echo $this->Form->create('PersonnelInformation',array('class'=>'')) ?>
                                            
                                                 <?php 
                                                 
                                                // pr($this->data); exit;
                                                
                                                // echo $this->data['PersonnelInformation']['id']; exit;
                                                 if(!empty($this->data['PersonnelInformation']['id'])){
                                                                    echo $this->Form->input('PersonnelInformation.id',array('type'=>'hidden')); 
                                                                } ?>
				        	<?php echo $this->Form->input('PersonnelInformation.first_name',array('type'=>'text','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'First Name')); ?>
				        	<?php echo $this->Form->input('PersonnelInformation.last_name',array('type'=>'text','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Last Name')); ?>
				         	<?php echo $this->Form->input('PersonnelInformation.gender',array('type'=>'select','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Gender','options'=>array('male','female'),'empty'=>'Please Choose One')); ?>  
				          	<?php echo $this->Form->input('PersonnelInformation.date_of_birth',array('type'=>'text','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Date Of Birth')); ?>
				           	
                                                    <?php echo $this->Form->input('PersonnelInformation.age',array('type'=>'number','after'=>'<span id="errmsg"></span>',  'class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Age','min'=>'0','placeholder'=>0)); ?>
				           	
                                               <?php echo $this->Form->input('PersonnelInformation.indigenous_group',array('type'=>'text','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Indigenous Group')); ?>
				               
                                                 <?php echo $this->Form->input('PersonnelInformation.language',array('type'=>'type','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Mother Tongue')); ?>  
				           	
                                                <?php echo $this->Form->input('PersonnelInformation.language_one',array('type'=>'type','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Language One')); ?>
                                                
                                                <?php echo $this->Form->input('PersonnelInformation.language_two',array('type'=>'type','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Language Two')); ?>
                                                <?php echo $this->Form->input('PersonnelInformation.language_three',array('type'=>'type','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Language Three')); ?>                                               
                                                <?php echo $this->Form->input('PersonnelInformation.district',array('type'=>'text','class'=>'form-control','id'=>'district','div'=>array('class'=>'form-group col-md-6'),'label'=>'District','options'=>array('কুমিল্লা','ব্রাহ্মণবাড়িয়া','District-C'),'empty'=>'Please Choose One')); ?> 
                                                <?php echo $this->Form->input('PersonnelInformation.upazilla',array('type'=>'text','class'=>'form-control','id'=>'upazilla','div'=>array('class'=>'form-group col-md-6'),'label'=>'Upazilla','empty'=>'Please Choose One')); ?> 
                                              <?php //echo $this->Form->input('upazilla',array('type'=>'select','class'=>'form-control','id'=>'upazilla','div'=>array('class'=>'form-group col-md-6'),'label'=>'Upazilla','options'=>array('Upazilla-A','Upazilla-B','Upazilla-C'),'empty'=>'Please Choose One')); ?> 
                                                <?php echo $this->Form->input('PersonnelInformation.union',array('type'=>'text','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Union','options'=>array('Union-A','Union-B','Union-C'),'empty'=>'Please Choose One')); ?> 
                                                <?php echo $this->Form->input('PersonnelInformation.village',array('type'=>'text','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Village','options'=>array('Jaurtola','Badamtola','Morichtola'),'empty'=>'Please Choose One')); ?> 
                                                
                                                 <?php echo $this->Form->input('PersonnelInformation.longitude',array('type'=>'text','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Longitude')); ?> 
                                                <?php echo $this->Form->input('PersonnelInformation.latitude',array('type'=>'text','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>'Latitude')); ?> 
				           
                                                 <?php echo $this->Form->input('PersonnelInformation.user_id',array('type'=>'hidden','class'=>'form-control','div'=>array('class'=>'form-group col-md-6'),'label'=>false)); ?>  
                                            
				          <div class="form-group col-md-12">
				              <button type="submit" class="btn btn-info">Next>></button>
				          </div>
				        <?php echo $this->Form->end() ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>