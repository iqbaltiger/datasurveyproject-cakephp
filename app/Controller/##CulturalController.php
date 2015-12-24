<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('String', 'Utility');
class CulturalController extends AppController {
	public $helpers = array('Html','Crumb');
	public $uses = array('PersonnelInformation','SectionH','SectionQuestionAnswerCultural','SectiondHouseholdinfo','SectionIFoodConsumption',
            'SectionJ','SectionGA','TotalProductionG','TotalProductionCost703G','HouseholdSectionG7713','HouseholdSectionG6712','HouseholdSectionG5711',
            
            'Section710','Section709','Section708','Section707','Section705','Section706','Interview','HouseholdInterview','User',
            'HouseholdSectionAReferenceInformation','HouseholdSectionADataFile',
            );
	public $components = array("Paginator","RequestHandler","ImageUploader");
	
//	public function beforeFilter(){
//		parent::beforeFilter();
//		$this->Auth->allow();	
//		$this->set('logged_user',$this->Auth->user());
//                $this->layout = 'cultural';
//		
//	}
        
        public function beforeFilter(){
		parent::beforeFilter();
		$user_info = $this->Auth->user();
		if(strtolower($user_info['Role']['name'])=='admin' || strtolower($user_info['Role']['name'])=='cultural' || $user_info['Role']['access_controller']==$this->params['controller']){
			$this->Auth->allow();	
		}else{
			$this->Session->setFlash(__('You are not Authorized Persion for this Action.'), 'alert_error');
			$this->redirect($this->referer());
		}
		$this->set('logged_user',$user_info);
        $this->layout = 'cultural';
		
	}
       
        
         public function admin_interviewlist() {
        $this->Session->delete('interview_id');
          $this->Session->delete('interview_status');
          $userList  = $this->User->find('all', array('fields'=>array('User.id','Profile.name'),'conditions' => array('User.role_id' => '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc'),array('recursive' =>0)));
         
          $list = array();
          foreach ($userList as $user){
              $list[$user['User']['id']] = $user['Profile']['name'];
          }
          
         
          $this->set('users', $list);
        $allInterview = $this->HouseholdInterview->find('all', array('conditions' => array('HouseholdInterview.status' => 'Active')));
        
           
//          $divisions =   $this->Division->find('list',array('recursive' =>-2));
//           $districts =   $this->District->find('list',array('recursive' =>-2));
//           $upazilas =   $this->Upazila->find('list',array('recursive' =>-2)); 

       // pr($allInterview);exit;
        $this->set('Interview', $allInterview);
        $this->set('title_for_layout', 'InterView List');
//         $this->set(compact('divisions','districts','upazilas'));
        
    }

    public function admin_interview() {

        $this->request->data['HouseholdInterview']['interview_pattern'] = 'household';
        // $this->request->data['VillageInterview']['createddate'] = 'village';

        if ($this->HouseholdInterview->save($this->request->data)) {
            $last_insert_id = $this->HouseholdInterview->getLastInsertID();

            $this->Session->write('interview_id', $last_insert_id);
            return $this->redirect(array('action' => 'section_a'));
           
        }

       
    }

    public function admin_session_create($interviewId = null) {

        $this->Session->write('interview_id', $interviewId);

        return $this->redirect(
                        array('action' => 'section_a')
        );
    }
      
        
        
        
        
//        public function admin_interviewlist() {
//             $this->Session->delete('interview_id');
//              $allInterview = $this->Interview->find('all');
//        $this->set('Interview', $allInterview);
//            $this->set('title_for_layout', 'InterView List');
//        }
//        
//        public function admin_interview() {
//            
//            $this->request->data['Interview']['interview_pattern'] = 'cultural';
//            
//           if ($this->Interview->save($this->request->data)) {
//                   $last_insert_id = $this->Interview->getLastInsertID();
//                   
//                    $this->Session->write('interview_id', $last_insert_id);
//                   
//                   return $this->redirect(array('action' => 'section_a', $last_insert_id));
//                  
//                   
//              }
//            
//         
//            
//        }
//        
//        
//         public function admin_session_create($interviewId = null) {
//
//        $this->Session->write('interview_id', $interviewId);
//
//        return $this->redirect(
//                        array('controller' => 'cultural', 'action' => 'section_a')
//        );
//
//    }
        
        
	
	public function admin_section_b(){
            
//              echo $id = $this->Session->read('interview_id');       exit;    
        if ($this->request->is('post')) {
            
           
            $this->nonemptyElementWithKey('SectionHouseholdArray','SectiondHouseholdinfo', 'year');
            // pr($this->request->data); exit;
            
            // $SectionHouseholdArray = $this->request->data['SectionHouseholdArray'];
             
              if ($this->SectiondHouseholdinfo->saveMany($this->request->data['SectionHouseholdArray'])) {
                   $last_insert_id = $this->SectiondHouseholdinfo->getLastInsertID();
              }
         
              unset($this->request->data['SectionHouseholdArray']);
            if ($this->SectionQuestionAnswerCultural->saveMany($this->request->data)) {
                $last_insert_id = $this->SectionQuestionAnswerCultural->getLastInsertID();

                $this->Session->setFlash(__('The SectionQuestionAnswerCultural information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_c', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SectionQuestionAnswerCultural information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        }else{
            //$this->request->data = $this->Cultural->find('all',array('conditions'=>array('PhoneticSoundSample.personnel_information_id'=>$id,'PhoneticSoundSample.phonetic_type'=>'vowel')));
        }


        $this->set('title_for_layout', 'Section B');
	
	}
	
	public function admin_section_c(){
		$this->layout = 'cultural';
	}
        
        public function admin_section_g(){
            
                  $interviewId = $this->Session->read('interview_id');
                //  $interviewId = 5;
                 $this->set('interview_id',$interviewId); 
                   if ($this->request->is('post')) {
                    $section_ga_upper_marker = $this->request->data['Section_GA_Upper_Marker'];
                     $Total_Production_Marker = $this->request->data['Total_Production_Marker'];
                   // pr($Total_Production_Marker); exit;
                      $this->SectionGA->saveMany($section_ga_upper_marker);
                       $this->TotalProductionG->saveMany($Total_Production_Marker);
                       
                   }
                   
                   else{
                           $section_ga_upper_marker = $this->SectionGA->find('all',array('conditions'=>array('SectionGA.interview_id'=>$interviewId)));
                           
                           //$total_Production_Marker = $this->SectionGA->find('all',array('conditions'=>array('TotalProductionG.interview_id'=>$interviewId)));
                          // pr($total_Production_Marker);exit;
                           $this->request->data['Section_GA_Upper_Marker'] = $section_ga_upper_marker;
                          // $this->request->data['Total_Production_Marker'] = $total_Production_Marker;
                       }
                 
		 $this->set('title_for_layout', 'Section G');
	}
        
        
        public function admin_section_701() {
                $interviewId = $this->Session->read('interview_id');
                //$interviewId = 5;
                 $this->set('interview_id',$interviewId); 
        }
        
        
        
        
         public function admin_section_h(){
              
             
            $interviewId = $this->Session->read('interview_id'); 
            // $interviewId = 5;
             $this->set('interview_id',$interviewId); 
            if ($this->request->is('post')) {
           

            if ($this->SectionH->saveMany($this->request->data)) {
                $last_insert_id = $this->SectionH->getLastInsertID();

                $this->Session->setFlash(__('The SectionH information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SectionH information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
        }
              else{
                  
                    $this->request->data = $this->SectionH->find('all',array('conditions'=>array('SectionH.interview_id'=>$interviewId)));
                 //pr($this->request->data); exit;
                  
              }      
             
                $this->set('title_for_layout', 'Section H');
		
	}
        
        public function admin_section_i(){
             
            $interviewId = $this->Session->read('interview_id');
             //$interviewId = 5;
             $this->set('interview_id',$interviewId); 
             
              if ($this->request->is('post')) {
                  
                  $this->addSectionIFoodConsumtion('SectionIFoodConsumption');
                  
                //  pr($this->request->data);exit;
          
            if ($this->SectionIFoodConsumption->saveMany($this->request->data)) {
                $last_insert_id = $this->SectionIFoodConsumption->getLastInsertID();

                $this->Session->setFlash(__('The SectionIFoodConsumption information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SectionH information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
        }
              else{
                  
                    $this->request->data = $this->SectionIFoodConsumption->find('all',array('conditions'=>array('SectionIFoodConsumption.interview_id'=>$interviewId)));
                 //pr($this->request->data); exit;
                  
              }   
            
		 $this->set('title_for_layout', 'Section I');
	}
        
         public function admin_section_j(){
             
             $interviewId = $this->Session->read('interview_id');
              //$interviewId = 5;
             $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  
                 $this->addSectionJFirstAnswer('SectionJ');
                 // pr($this->request->data); exit;
                  
            if ($this->SectionJ->saveMany($this->request->data)) {
                $last_insert_id = $this->SectionJ->getLastInsertID();

                $this->Session->setFlash(__('The SectionIFoodConsumption information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SectionH information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
        }
              else{
                  
                    $this->request->data = $this->SectionJ->find('all',array('conditions'=>array('SectionJ.interview_id'=>$interviewId)));
                 //pr($this->request->data); exit;
                  
              }
             
             
             $this->layout = 'cultural';
	}
        
        public function admin_section_a() {
            $this->layout = 'cultural';
            $userList  = $this->User->find('list', array('fields'=>array('User.id','User.username'),'conditions' => array('User.role_id' => '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc'),array('recursive' =>0)));
            $this->set('users', $userList);
           $id = $this->Session->read('interview_id');
          $this->set('pid', $id);
          
                  if ($this->request->is('post')) {   
           // pr($this->request->data['Reference']); exit;
            
            if ($this->HouseholdSectionAReferenceInformation->saveMany($this->request->data['Reference'])) {}
            
            unset($this->request->data['Reference']);
            
            $data = array('id' => $id, 'status' => 'Active');
          $this->Session->write('interview_status', 'Active');
            $this->HouseholdInterview->save($data); 
            
            if ($this->HouseholdSectionADataFile->saveMany($this->request->data['DataFile'])) {
           
               $this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_b')); 
                
                
            }
             }
             
             else{
            $this->Session->write('interview_status', 'Active');     
                 
            $this->request->data['Reference'] = $this->HouseholdSectionAReferenceInformation->find('all', array('conditions' => array('HouseholdSectionAReferenceInformation.household_interview_id' => $id)));
           
            $this->request->data['DataFile'] = $this->HouseholdSectionADataFile->find('all', array('conditions' => array('HouseholdSectionADataFile.household_interview_id' => $id)));
                 
             }
                  
               
        }
        
        
        /************
         * G Series in Sub Section
         * 
         * 
         * 
         * **************/
       
         public function admin_section_702() {
           
            $interviewId = $this->Session->read('interview_id');  
            //$interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  //$this->addInterViewId('HouseholdSectionG5711');
                  //$this->colAdd('TotalProductionCost703G');
                  
                   //pr($this->request->data); exit;
                    if ($this->TotalProductionG->saveMany($this->request->data)) {
                $last_insert_id = $this->TotalProductionG->getLastInsertID();

                $this->Session->setFlash(__('The TotalProductionCost703G information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The TotalProductionCost703G information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->TotalProductionG->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
            $this->set('title_for_layout', 'Section 702'); 
       } 
        
        
        
       
       public function admin_section_703() {
           
            $interviewId = $this->Session->read('interview_id');
            //$interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  //$this->addInterViewId('HouseholdSectionG5711');
                  $this->colAdd('TotalProductionCost703G');
                  
                   //pr($this->request->data); exit;
                    if ($this->TotalProductionCost703G->saveMany($this->request->data)) {
                $last_insert_id = $this->TotalProductionCost703G->getLastInsertID();

                $this->Session->setFlash(__('The TotalProductionCost703G information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The TotalProductionCost703G information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->TotalProductionCost703G->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
            $this->set('title_for_layout', 'Section 703'); 
       } 
        
        public function admin_section_704() {
		
		   $this->set('title_for_layout', 'Section 704'); 
		}
		
		
		
       public function admin_section_705() {
           
           $interviewId = $this->Session->read('interview_id');
           // $interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  //$this->addInterViewId('HouseholdSectionG5711');
                  $this->colAdd('Section705');
                  
                   //pr($this->request->data); exit;
                    if ($this->Section705->saveMany($this->request->data)) {
                $last_insert_id = $this->Section705->getLastInsertID();

                $this->Session->setFlash(__('The Section705 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_706', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Section705 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->Section705->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
           
           $this->set('title_for_layout', 'Section G-705'); 
       }
        
       public function admin_section_706() {
           
            $interviewId = $this->Session->read('interview_id'); 
            //$interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  //$this->addInterViewId('HouseholdSectionG5711');
                 
                  
                   //pr($this->request->data); exit;
                    if ($this->Section706->saveMany($this->request->data)) {
                $last_insert_id = $this->Section706->getLastInsertID();

                $this->Session->setFlash(__('The Section706 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_707', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Section706 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->Section706->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
                  
           
          $this->set('title_for_layout', 'Section G-706');    
       }
        
         
       public function admin_section_707() {
           
           $interviewId = $this->Session->read('interview_id');
           // $interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  //$this->addInterViewId('HouseholdSectionG5711');
                 
                  
                   //pr($this->request->data); exit;
                    if ($this->Section707->saveMany($this->request->data)) {
                $last_insert_id = $this->Section707->getLastInsertID();

                $this->Session->setFlash(__('The Section707 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Section707 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->Section707->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
                  
                 $this->set('title_for_layout', 'Section G-707'); 
           
           
           
       }
        
        
         public function admin_section_fishing_708() {
            
           $interviewId = $this->Session->read('interview_id'); 
           //$interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  //$this->addInterViewId('HouseholdSectionG5711');
                  $this->colAdd('Section708');
                  
                   //pr($this->request->data); exit;
                    if ($this->Section708->saveMany($this->request->data)) {
                $last_insert_id = $this->Section708->getLastInsertID();

                $this->Session->setFlash(__('The Section708 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Section708 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->Section708->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
                  
                 $this->set('title_for_layout', 'Section G-708'); 
            
            
        } 
        
        
        
        
        
        
      
        
        public function admin_section_fishing_709() {
            
           $interviewId = $this->Session->read('interview_id');
             //$interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  //$this->addInterViewId('HouseholdSectionG5711');
                  $this->colAdd('Section709');
                  
                   //pr($this->request->data); exit;
                    if ($this->Section709->saveMany($this->request->data)) {
                $last_insert_id = $this->Section709->getLastInsertID();

                $this->Session->setFlash(__('The Section709 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Section709 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->Section709->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
                  
                 $this->set('title_for_layout', 'Section G-709'); 
            
            
        } 
        
        
       public function admin_section_hunting_710() {
           
            $interviewId = $this->Session->read('interview_id');
             //$interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  //$this->addInterViewId('HouseholdSectionG5711');
                  $this->colAdd('Section710');
                  
                   //pr($this->request->data); exit;
                    if ($this->Section710->saveMany($this->request->data)) {
                $last_insert_id = $this->Section710->getLastInsertID();

                $this->Session->setFlash(__('The Section710 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Section710 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->Section710->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
                  
                 $this->set('title_for_layout', 'Section G-710'); 
       }
        
        public function admin_section_g_five() {
            //HouseholdSectionG5711 
            $interviewId = $this->Session->read('interview_id'); 
           //$interviewId = 5;
            $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                  $this->addInterViewId('HouseholdSectionG5711');
                  
                  
                   //pr($this->request->data); exit;
                    if ($this->HouseholdSectionG5711->saveMany($this->request->data)) {
                $last_insert_id = $this->HouseholdSectionG5711->getLastInsertID();

                $this->Session->setFlash(__('The HouseholdSectionG5711 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The HouseholdSectionG5711 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                  
                  
                  }
                  
                  else{
                      
                       $this->request->data = $this->HouseholdSectionG5711->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
                      
                  }
                  
                 $this->set('title_for_layout', 'Section G5'); 
                  
              }
        
        
        public function admin_section_g_six() {
           $interviewId = $this->Session->read('interview_id');
           //$interviewId = 5;
             $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                 // pr($this->request->data); exit;
                    if ($this->HouseholdSectionG6712->saveMany($this->request->data)) {
                $last_insert_id = $this->HouseholdSectionG6712->getLastInsertID();

                $this->Session->setFlash(__('The HouseholdSectionG6712 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The HouseholdSectionG6712 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                
              }
              
              else{
                  
                  $this->request->data = $this->HouseholdSectionG7713->find('all',array('conditions'=>array('interview_id'=>$interviewId)));
              }
           
           
           $this->set('title_for_layout', 'Section G6');
            
        }
        
        
        
       public function admin_section_g_seven() {
              $interviewId = $this->Session->read('interview_id'); 
               //$interviewId = 5;
             $this->set('interview_id',$interviewId); 
                
              if ($this->request->is('post')) {
                 // pr($this->request->data); exit;
                    if ($this->HouseholdSectionG7713->saveMany($this->request->data)) {
                $last_insert_id = $this->HouseholdSectionG7713->getLastInsertID();

                $this->Session->setFlash(__('The HouseholdSectionG7713 information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'personnel_information', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The HouseholdSectionG7713 information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
               
            }
                
              }
              
              else{
                  
                  $this->request->data = $this->HouseholdSectionG7713->find('all',array('conditions'=>array('HouseholdSectionG7713.interview_id'=>$interviewId)));
              }
           
           
           $this->set('title_for_layout', 'Section G7');
           
       }
	   
	   public function admin_old_section_b(){
	       $this->set('title_for_layout', 'Old Section B');
	   }
	   
	   public function admin_old_section_c(){
	       $this->set('title_for_layout', 'Old Section C');
	   }

}
?>