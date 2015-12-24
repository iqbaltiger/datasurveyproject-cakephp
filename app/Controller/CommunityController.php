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
	'CommunitySectionBSecondPart',
	'CommunitySectionBThirdPart',
	'CommunitySectionCPartOne',
	'CommunitySectionCPartTwo',
	'CommunitySectionCPartThree',
	'CommunityQuestion701',
	'CommSectionDDropdown',
	'ComSectionD402',
	'CommunityQuestion702',
        'CommunityInterview'    
	
	
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
			//$id = 1;
                        
                        $id = $this->Session->read('interview_id');
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
                
                $data = array('id' => $id, 'status' => 'Active');
                
                $this->CommunityInterview->save($data);
                return $this->redirect(array('action' => 'section_b'));
              }				 
			 		 
        }else{
        	$this->request->data['Reference'] = $this->CommSectionAReferenceInformation->find('all', array('conditions' => array('CommSectionAReferenceInformation.com_interview_id' => $id)));
       		$this->request->data['Respond'] = $this->CommSectionARespondentInformation->find('all', array('conditions' => array('CommSectionARespondentInformation.com_interview_id' => $id)));
			$this->request->data['DataFile'] = $this->CommSectionADataFile->find('all', array('conditions' => array('CommSectionADataFile.com_interview_id' => $id)));
			$this->request->data['Qc'] = $this->CommSectionAQualityControl->find('all', array('conditions' => array('CommSectionAQualityControl.com_interview_id' => $id)));
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
			 if ($this->CommunitySectionBSecondPart->saveMany($this->request->data['CommunitySectionBSecondPart'])) {            
			  }
			 unset($this->request->data['CommunitySectionBSecondPart']);
			 if ($this->CommunitySectionBThirdPart->saveMany($this->request->data['CommunitySectionBThirdPart'])) {
             	$this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_b'));             
			  }			 
			 
        }else{
        	$this->request->data['CommunitySectionBB1Part'] = $this->CommunitySectionBB1Part->find('all', array('conditions' => array('CommunitySectionBB1Part.interview_id' => 1)));
       		$this->request->data['CommunitySectionBSecondPart'] = $this->CommunitySectionBSecondPart->find('all', array('conditions' => array('CommunitySectionBSecondPart.interview_id' => 1)));	
			$this->request->data['CommunitySectionBThirdPart'] = $this->CommunitySectionBThirdPart->find('all', array('conditions' => array('CommunitySectionBThirdPart.interview_id' => 1)));	
	   
	    }		
			
        }
        
        
         public function admin_interviewlist() {
             $this->Session->delete('interview_id');
              $allInterview = $this->CommunityInterview->find('all',array('conditions' => array('CommunityInterview.status' =>'Active')));
        $this->set('Interview', $allInterview);
            $this->set('title_for_layout', 'InterView List');
        }
        
        public function admin_interview() {
            
            $this->request->data['CommunityInterview']['interview_pattern'] = 'community';
            $this->request->data['CommunityInterview']['createddate'] = 'community';
            
           if ($this->CommunityInterview->save($this->request->data)) {
                   $last_insert_id = $this->CommunityInterview->getLastInsertID();
                   
                    $this->Session->write('interview_id', $last_insert_id);
                   
                   return $this->redirect(array('action' => 'section_a'));
                   //echo $last_insert_id;
                   
              }
            
           //if ($this->SectiondHouseholdinfo->save($this->request->data['SectionHouseholdArray']))
            
        }
        
        
         public function admin_session_create($interviewId = null) {

        $this->Session->write('interview_id', $interviewId);

        return $this->redirect(
                        array('controller' => 'community', 'action' => 'section_a')
         );
        
        
         }
        
        public function admin_section_c() {
            
            $this->layout = 'cultural';
			$interview_id = 1;
			$this->set('interview_id',$interview_id);
			
        if ($this->request->is('post')) {
        	//pr($this->request->data['CommunitySectionCPartThree']);exit;
		     if ($this->CommunitySectionCPartTwo->saveMany($this->request->data['CommunitySectionCPartTwo'])) {
	     	
              }						 		 			 		 
			 unset($this->request->data['CommunitySectionCPartTwo']);
		     if ($this->CommunitySectionCPartOne->saveMany($this->request->data['CommunitySectionCPartOne'])) {
		     	
              }	
			 unset($this->request->data['CommunitySectionCPartOne']);			 
		     if ($this->CommunitySectionCPartThree->saveMany($this->request->data['CommunitySectionCPartThree'])) {
             	$this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_c'));		     	
			
              }				 
			 
        }else{
			$this->request->data['CommunitySectionCPartTwo'] = $this->CommunitySectionCPartTwo->find('all', array('conditions' => array('CommunitySectionCPartTwo.interview_id' => 1)));        	
        	$this->request->data['CommunitySectionCPartOne'] = $this->CommunitySectionCPartOne->find('all', array('conditions' => array('CommunitySectionCPartOne.interview_id' => 1)));
			$this->request->data['CommunitySectionCPartThree'] = $this->CommunitySectionCPartThree->find('all', array('conditions' => array('CommunitySectionCPartThree.interview_id' => 1)));	
	   
	    }				
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
						
						$comunity703QuestionMarker=  $this->request->data['Community703Marker'];
                        
                        //pr($comunity702QuestionMarker); exit;
                                 if ($this->CommunityQuestion701->saveMany($comunityQuestion)) {
                                     
                                 }
								 
								 if ($this->CommunityQuestion702->saveMany($comunity702QuestionMarker)) {
                                     
                                 }
								 
								 if ($this->CommunityQuestion702->saveMany($comunity703QuestionMarker)) {
                                     
                                 }
								 
                                 }
                       else{          
                         $this->request->data['701_marker'] = $this->CommunityQuestion701->find('all', array('conditions' => array('CommunityQuestion701.interview_id' =>$interviewId)));        
                       
                          $this->request->data['Community702Marker'] = $this->CommunityQuestion702->find('first', array('conditions' => array('CommunityQuestion702.interview_id' =>$interviewId)));        
                         //pr( $this->request->data['Community702Marker']);exit;
                         
                       }
            
            $this->set('title_for_layout', 'Section G');
        }
        
}
?>