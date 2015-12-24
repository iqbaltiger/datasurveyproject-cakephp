<?php
App::uses('AppController', 'Controller');
class CommunityController extends AppController {
	public $helpers = array('Html');
	public $uses = array(
	
	'CommSectionAReferenceInformation',
	'CommSectionARespondentInformation',
	'CommSectionF',
	'CommSectionADataFile',
	'CommSectionAQualityControl',
	'CommSectionAConstruction',
	'CommunitySectionBB1Part',
	'CommunitySectionBB2Location',
	'CommunitySectionBB3Infrastructure',
	'CommunitySectionBB3InfrastructureSecondPart',
	'CommunitySectionBB4Demographic',
	'CommunitySectionBB4DemographicSecondPart',
	'CommunitySectionBB5EthnicCulturalUnitPartOne',
	'CommunitySectionBB5EthnicCulturalUnitPartTwo',
	'CommunitySectionBB5EthnicCulturalUnitPartThree',
	'CommunitySectionBB5EthnicCulturalUnitPartForth',
	'CommunitySectionBB5EthnicCulturalUnitPartFifth',
        'CommunityQuestion701',    
	
	);
	public $components = array("Paginator","RequestHandler","ImageUploader");
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();	
		$this->set('logged_user',$this->Auth->user());
                $this->layout = 'cultural';
		
	}
        
        public function admin_section_a() {
            $this->layout = 'cultural';
			$id = 1;
			$this->set('pid',$id);
			
        if ($this->request->is('post')) {
           	//$data = $this->request->data;
           	
         
           	
			//pr($data);exit;
              if ($this->CommSectionAReferenceInformation->saveMany($this->request->data['Reference'])) {
              }
			 unset($this->request->data['Reference']);
             if ($this->CommSectionARespondentInformation->saveMany($this->request->data['Respond'])) {
              }
			 unset($this->request->data['Respond']);
             if ($this->CommSectionADataFile->saveMany($this->request->data['DataFile'])) {
              }	
			 unset($this->request->data['DataFile']);
           
		     if ($this->CommSectionAQualityControl->saveMany($this->request->data['Qc'])) {
             	$this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_a'));
              }				 
			 		 
        }else{
        	$this->request->data['Reference'] = $this->CommSectionAReferenceInformation->find('all', array('conditions' => array('CommSectionAReferenceInformation.personal_information_id' => 1)));
       		$this->request->data['Respond'] = $this->CommSectionARespondentInformation->find('all', array('conditions' => array('CommSectionARespondentInformation.personal_information_id' => 1)));
			$this->request->data['DataFile'] = $this->CommSectionADataFile->find('all', array('conditions' => array('CommSectionADataFile.personal_information_id' => 1)));
			$this->request->data['Qc'] = $this->CommSectionAQualityControl->find('all', array('conditions' => array('CommSectionAQualityControl.personal_information_id' => 1)));
	    }
			
        }
        
        public function admin_section_b() {
            $this->layout = 'cultural';
			$interview_id = 1;
			$this->set('interview_id',$interview_id);
			
        if ($this->request->is('post')) {
        	//pr($this->request->data);exit;
              if ($this->CommunitySectionBB1Part->saveMany($this->request->data['CommunitySectionBB1Part'])) {
              }
			 unset($this->request->data['CommunitySectionBB1Part']);
            
			 if ($this->CommunitySectionBB2Location->saveMany($this->request->data['CommunitySectionBB2Location'])) {
              }
			 unset($this->request->data['CommunitySectionBB2Location']);
            
			 if ($this->CommunitySectionBB3Infrastructure->saveMany($this->request->data['CommunitySectionBB3Infrastructure'])) {
              }	
			 unset($this->request->data['CommunitySectionBB3Infrastructure']);
           
		     if ($this->CommunitySectionBB3InfrastructureSecondPart->saveMany($this->request->data['CommunitySectionBB3InfrastructureSecondPart'])) {
              }	

			 unset($this->request->data['CommunitySectionBB3InfrastructureSecondPart']);
           
		     if ($this->CommunitySectionBB4Demographic->saveMany($this->request->data['CommunitySectionBB4Demographic'])) {
              }	
			 
			 
			 unset($this->request->data['CommunitySectionBB4Demographic']);
		     if ($this->CommunitySectionBB4DemographicSecondPart->saveMany($this->request->data['CommunitySectionBB4DemographicSecondPart'])) {
              }	
			 
			 
			 unset($this->request->data['CommunitySectionBB4DemographicSecondPart']);
		     if ($this->CommunitySectionBB5EthnicCulturalUnitPartOne->saveMany($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartOne'])) {
              }		
			 
			 
			 unset($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartOne']);
		     if ($this->CommunitySectionBB5EthnicCulturalUnitPartTwo->saveMany($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartTwo'])) {
              }	
			unset($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartTwo']);	
		     if ($this->CommunitySectionBB5EthnicCulturalUnitPartThree->saveMany($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartThree'])) {
              }	

			unset($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartThree']);	
		     if ($this->CommunitySectionBB5EthnicCulturalUnitPartForth->saveMany($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartForth'])) {
              }		
			unset($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartForth']);	
		     if ($this->CommunitySectionBB5EthnicCulturalUnitPartFifth->saveMany($this->request->data['CommunitySectionBB5EthnicCulturalUnitPartFifth'])) {
             	$this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_b'));
              }					 		 			 		 
			 	
        }else{
        	$this->request->data['CommunitySectionBB1Part'] = $this->CommunitySectionBB1Part->find('all', array('conditions' => array('CommunitySectionBB1Part.interview_id' => 1)));
       		$this->request->data['CommunitySectionBB2Location'] = $this->CommunitySectionBB2Location->find('all', array('conditions' => array('CommunitySectionBB2Location.interview_id' => 1)));
			$this->request->data['CommunitySectionBB3Infrastructure'] = $this->CommunitySectionBB3Infrastructure->find('all', array('conditions' => array('CommunitySectionBB3Infrastructure.interview_id' => 1)));
			$this->request->data['CommunitySectionBB3InfrastructureSecondPart'] = $this->CommunitySectionBB3InfrastructureSecondPart->find('all', array('conditions' => array('CommunitySectionBB3InfrastructureSecondPart.interview_id' => 1)));
	   		$this->request->data['CommunitySectionBB4Demographic'] = $this->CommunitySectionBB4Demographic->find('all', array('conditions' => array('CommunitySectionBB4Demographic.interview_id' => 1)));
			$this->request->data['CommunitySectionBB4DemographicSecondPart'] = $this->CommunitySectionBB4DemographicSecondPart->find('all', array('conditions' => array('CommunitySectionBB4DemographicSecondPart.interview_id' => 1)));
			$this->request->data['CommunitySectionBB5EthnicCulturalUnitPartOne'] = $this->CommunitySectionBB5EthnicCulturalUnitPartOne->find('all', array('conditions' => array('CommunitySectionBB5EthnicCulturalUnitPartOne.interview_id' => 1)));	   
	   		$this->request->data['CommunitySectionBB5EthnicCulturalUnitPartTwo'] = $this->CommunitySectionBB5EthnicCulturalUnitPartTwo->find('all', array('conditions' => array('CommunitySectionBB5EthnicCulturalUnitPartTwo.interview_id' => 1)));
			$this->request->data['CommunitySectionBB5EthnicCulturalUnitPartThree'] = $this->CommunitySectionBB5EthnicCulturalUnitPartThree->find('all', array('conditions' => array('CommunitySectionBB5EthnicCulturalUnitPartThree.interview_id' => 1)));
			$this->request->data['CommunitySectionBB5EthnicCulturalUnitPartForth'] = $this->CommunitySectionBB5EthnicCulturalUnitPartForth->find('all', array('conditions' => array('CommunitySectionBB5EthnicCulturalUnitPartForth.interview_id' => 1)));
		$this->request->data['CommunitySectionBB5EthnicCulturalUnitPartFifth'] = $this->CommunitySectionBB5EthnicCulturalUnitPartFifth->find('all', array('conditions' => array('CommunitySectionBB5EthnicCulturalUnitPartFifth.interview_id' => 1)));	
	   
	    }		
			
        }
        
        public function admin_section_c() {
            
            $this->layout = 'cultural';
        }
        
       public function admin_section_d() {
            
            $interViewId = 5;
            
            $this->set('interview_id',$interViewId);
            
            if ($this->request->is('post')) {
                $rootQuestionSectionD = $this->request->data['dropdownanswerlist'];
                $table402Data = $this->request->data['SectionD402'];
                //pr($rootQuestionSectionD); exit;
                $this->CommSectionDDropdown->saveMany($rootQuestionSectionD);
                $this->ComSectionD402->saveMany($table402Data);
                }
            else{
                
                $this->request->data['dropdownanswerlist'] = $this->CommSectionDDropdown->find('first', array('conditions' => array('CommSectionDDropdown.interview_id' =>$interViewId)));
                $this->request->data['SectionD402'] = $this->ComSectionD402->find('all', array('conditions' => array('ComSectionD402.interview_id' =>$interViewId)));
                //pr($this->request->data['dropdownanswerlist']); exit;
            }    
            
            
        }
        
        public function admin_section_e() {
        	$id = 1;
			$this->set('pid',$id);
			
			$data_array = array();
			
   			if ($this->request->is('post')) {
   				$data = $this->request->data['Construction'];
   				
   				foreach($data as $value){
   					if(!empty($value['CommSectionAConstruction']['other'])){
   						$data['CommSectionAConstruction']['role_value'] = $value['CommSectionAConstruction']['other'];
   					}
   				}
   				//pr($data);exit;
				
              if ($this->CommSectionAConstruction->saveMany($data)) {
             	$this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_e'));              	
				
              }
   			}  else{
   				$this->request->data['Construction'] = $this->CommSectionAConstruction->find('all', array('conditions' => array('CommSectionAConstruction.personal_information_id' => 1)));
   			}        
		   
		    
        }
        
        public function admin_section_f() {
            
        	$id = 1;
			$this->set('pid',$id);
			
   			if ($this->request->is('post')) {
				//pr($this->request->data['CommSectionF']);exit;
              if ($this->CommSectionF->saveMany($this->request->data['CommSectionF'])) {
             	$this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_f'));              	
				
              }
   			}  else{
   				$this->request->data['CommSectionF'] = $this->CommSectionF->find('all', array('conditions' => array('CommSectionF.personal_information_id' => 1)));
   			}   			
			
			
            $this->set('title_for_layout', 'Section F');
        }
		
		public function admin_section_g() {
                    
                    $interviewId = 5;
                 $this->set('interview_id',$interviewId); 
                    if ($this->request->is('post')) {
                                
                        $comunityQuestion=  $this->request->data['701_marker'];
                        
                        $comunity702QuestionMarker=  $this->request->data['Community702Marker'];
                        
                        pr($comunity702QuestionMarker); exit;
                                 if ($this->CommunityQuestion701->saveMany($comunityQuestion)) {
                                     
                                 }
                                 }
                       else{          
                         $this->request->data['701_marker'] = $this->CommunityQuestion701->find('all', array('conditions' => array('CommunityQuestion701.interview_id' =>$interviewId)));        
                       
                          $this->request->data['Community702Marker'] = $this->CommunityQuestion701->find('all', array('conditions' => array('CommunityQuestion701.interview_id' =>$interviewId)));        
                         //pr( $this->request->data['701_marker']);exit;
                         
                       }
            
            $this->set('title_for_layout', 'Section G');
        }
        
}
?>