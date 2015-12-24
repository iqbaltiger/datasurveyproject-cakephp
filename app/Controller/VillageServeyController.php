<?php

App::uses('AppController', 'Controller');
App::uses('String', 'Utility');

class VillageServeyController extends AppController {

    public $helpers = array('Html');
    public $uses = array(
        'VillageSectionADataFile',
        'VillageSectionAQualityControl',
        'VillageSectionAReferenceInformation',
        'VillageSectionARespondentInformation',
        'VillageSectionBFirstPart',
        'VillageSectionBSecondPart',
        'VillageSectionBThirdPart',
        'VillageQuestion242',
        'VillageQuestion244',
        'VillageQuestion262',
        'VillageQuestion246',
        'VillageQuestion247',
        'VillageInterview',
        'Division',
        'District',
        'Upazila',
        'User'
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
        $this->set('logged_user', $this->Auth->user());
        $this->layout = 'cultural';
    }

    public function admin_section_a() {
        $this->layout = 'cultural';
        $id = $this->Session->read('interview_id');
        $this->set('pid', $id);
        
       $userList  = $this->User->find('list', array('fields'=>array('User.id','User.username'),'conditions' => array('User.role_id' => '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc'),array('recursive' =>0)));
       $this->set('users', $userList);
       
       //$userList = $this->User->findByRoleId('54e9a01d-ea00-42a6-ab97-6d97c0b99bfc');
       
       
        //pr($userList); exit;

        if ($this->request->is('post')) {
            
            
           // pr($this->request->data['Reference']); exit;
            
            if ($this->VillageSectionAReferenceInformation->saveMany($this->request->data['Reference'])) {
                
            }
            unset($this->request->data['Reference']);
            if ($this->VillageSectionARespondentInformation->saveMany($this->request->data['Respond'])) {
                
            }
            unset($this->request->data['Respond']);
            if ($this->VillageSectionADataFile->saveMany($this->request->data['DataFile'])) {
                
            }
            unset($this->request->data['DataFile']);

            $data = array('id' => $id, 'status' => 'Active');
          $this->Session->write('interview_status', 'Active');
            $this->VillageInterview->save($data);

            if ($this->VillageSectionAQualityControl->saveMany($this->request->data['Qc'])) {
                $this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_b'));
            }
        } else {
            $this->Session->write('interview_status', 'Active');
            $this->request->data['Reference'] = $this->VillageSectionAReferenceInformation->find('all', array('conditions' => array('VillageSectionAReferenceInformation.village_interview_id' => $id)));
            $this->request->data['Respond'] = $this->VillageSectionARespondentInformation->find('all', array('conditions' => array('VillageSectionARespondentInformation.village_interview_id' => $id)));
            $this->request->data['DataFile'] = $this->VillageSectionADataFile->find('all', array('conditions' => array('VillageSectionADataFile.village_interview_id' => $id)));
            $this->request->data['Qc'] = $this->VillageSectionAQualityControl->find('all', array('conditions' => array('VillageSectionAQualityControl.village_interview_id' => $id)));
        }
    }

    public function admin_section_b() {
        $pid = $this->Session->read('interview_id');
        $this->set('village_interview_id', $pid);
        
        
        
        
        $this->layout = 'cultural';

        if ($this->request->is('post')) {

            //pr($this->request->data);exit;

            if ($this->VillageSectionBFirstPart->saveMany($this->request->data['VillageSectionBFirstPart'])) {
                
            }
            unset($this->request->data['VillageSectionBFirstPart']);
            if ($this->VillageSectionBSecondPart->saveMany($this->request->data['VillageSectionBSecondPart'])) {
                
            }

            unset($this->request->data['VillageSectionBSecondPart']);
            if ($this->VillageSectionBThirdPart->saveMany($this->request->data['VillageSectionBThirdPart'])) {
                $this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_b_last'));
            }
        } else {
            
            
          $divisions =   $this->Division->find('list',array('recursive' =>-2));
           $districts =   $this->District->find('list',array('recursive' =>-2,'order' => array('District.name ASC')));
           $upazilas =   $this->Upazila->find('list',array('recursive' =>-2,'order' => array('Upazila.name ASC'))); 
          
          $this->set(compact('divisions','districts','upazilas'));
          
         // pr($divisions); exit;
            
            $this->request->data['VillageSectionBFirstPart'] = $this->VillageSectionBFirstPart->find('all', array('conditions' => array('VillageSectionBFirstPart.village_interview_id' => $pid)));
            $this->request->data['VillageSectionBSecondPart'] = $this->VillageSectionBSecondPart->find('all', array('conditions' => array('VillageSectionBSecondPart.village_interview_id' => $pid)));
            $this->request->data['VillageSectionBThirdPart'] = $this->VillageSectionBThirdPart->find('all', array('conditions' => array('VillageSectionBThirdPart.village_interview_id' => $pid)));
            //$this->request->data['Qc'] = $this->VillageSectionAQualityControl->find('all', array('conditions' => array('VillageSectionAQualityControl.interview_id' => 1)));
        }
    }

    public function admin_section_b_last() {
        $pid = $this->Session->read('interview_id');
        $this->set('village_interview_id', $pid);
        $this->layout = 'cultural';

        if ($this->request->is('post')) {

           $question_248_multiple_box = $this->request->data['VillageSectionBSecondPart'][3]['VillageSectionBSecondPart']['answer'];
           
           $With_Comma_question_248_multiple_box = implode(',', $question_248_multiple_box);
           
         
           $this->request->data['VillageSectionBSecondPart'][3]['VillageSectionBSecondPart']['answer']=$With_Comma_question_248_multiple_box;
           
            $question_252_multiple_box = $this->request->data['VillageSectionBSecondPart'][5]['VillageSectionBSecondPart']['answer'];
           
           $With_Comma_question_252_multiple_box = implode(',', $question_252_multiple_box);
           
         
           $this->request->data['VillageSectionBSecondPart'][5]['VillageSectionBSecondPart']['answer']=$With_Comma_question_252_multiple_box;
           
           
           
            $question_260_multiple_box = $this->request->data['VillageSectionBSecondPart'][13]['VillageSectionBSecondPart']['answer'];
           
           $With_Comma_question_260_multiple_box = implode(',', $question_260_multiple_box);
           
         
           $this->request->data['VillageSectionBSecondPart'][13]['VillageSectionBSecondPart']['answer']=$With_Comma_question_260_multiple_box;
           
           
           
           
           
          
           // pr($this->request->data['VillageSectionBSecondPart']); exit;
         // exit;
        

            if ($this->VillageQuestion242->saveMany($this->request->data['VillageSUrveyQuestion242Marker'])) {
                
            }

            unset($this->request->data['VillageSUrveyQuestion242Marker']);

            if ($this->VillageQuestion244->saveMany($this->request->data['VillageQuestion244Marker'])) {
                
            }

            unset($this->request->data['VillageQuestion244Marker']);

            if ($this->VillageQuestion246->saveMany($this->request->data['VillageQuestion246Marker'])) {
                
            }

            unset($this->request->data['VillageQuestion246Marker']);


            if ($this->VillageQuestion247->saveMany($this->request->data['VillageQuestion247Marker'])) {
                
            }

            unset($this->request->data['VillageQuestion247Marker']);



            if ($this->VillageQuestion262->saveMany($this->request->data['VillageQuestion262Marker'])) {
                
            }

            unset($this->request->data['VillageQuestion262Marker']);

            if ($this->VillageSectionBSecondPart->saveMany($this->request->data['VillageSectionBSecondPart'])) {
                
            }

            unset($this->request->data['VillageSectionBSecondPart']);

            $this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
            return $this->redirect(array('action' => 'section_b_last'));
        } else {
            $this->request->data['VillageSUrveyQuestion242Marker'] = $this->VillageQuestion242->find('all', array('conditions' => array('VillageQuestion242.village_interview_id' => $pid)));
            $this->request->data['VillageQuestion244Marker'] = $this->VillageQuestion244->find('all', array('conditions' => array('VillageQuestion244.village_interview_id' => $pid)));
            $this->request->data['VillageQuestion246Marker'] = $this->VillageQuestion246->find('all', array('conditions' => array('VillageQuestion246.village_interview_id' => $pid)));
            $this->request->data['VillageQuestion262Marker'] = $this->VillageQuestion262->find('all', array('conditions' => array('VillageQuestion262.village_interview_id' => $pid)));
            $this->request->data['VillageQuestion247Marker'] = $this->VillageQuestion247->find('all', array('conditions' => array('VillageQuestion247.village_interview_id' => $pid)));
           
            $this->request->data['VillageSectionBSecondPart'] = $this->VillageSectionBSecondPart->find('all', array('conditions' => array('VillageSectionBSecondPart.village_interview_id' => $pid)));
            $question_248_multiple_box = $this->request->data['VillageSectionBSecondPart'][3]['VillageSectionBSecondPart']['answer'];
           
             $With_Comma_question_248_multiple_box = explode(',', $question_248_multiple_box);
             
             $this->request->data['VillageSectionBSecondPart'][3]['VillageSectionBSecondPart']['answer']=$With_Comma_question_248_multiple_box;
            
             $question_252_multiple_box = $this->request->data['VillageSectionBSecondPart'][5]['VillageSectionBSecondPart']['answer'];
           
             $With_Comma_question_252_multiple_box = explode(',', $question_252_multiple_box);
             
             $this->request->data['VillageSectionBSecondPart'][5]['VillageSectionBSecondPart']['answer']=$With_Comma_question_252_multiple_box;
             
             $question_260_multiple_box = $this->request->data['VillageSectionBSecondPart'][13]['VillageSectionBSecondPart']['answer'];
             //pr( $this->request->data['VillageSectionBSecondPart']); exit;
             $With_Comma_question_260_multiple_box = explode(',', $question_260_multiple_box);
             
             $this->request->data['VillageSectionBSecondPart'][13]['VillageSectionBSecondPart']['answer']=$With_Comma_question_260_multiple_box;
             
            
//$this->request->data['VillageSectionBThirdPart'] = $this->VillageSectionBThirdPart->find('all', array('conditions' => array('VillageSectionBThirdPart.interview_id' => 1)));
            //$this->request->data['Qc'] = $this->VillageSectionAQualityControl->find('all', array('conditions' => array('VillageSectionAQualityControl.interview_id' => 1)));
        }
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
        $allInterview = $this->VillageInterview->find('all', array('conditions' => array('VillageInterview.status' => 'Active')));
        
           
          $divisions =   $this->Division->find('list',array('recursive' =>-2));
           $districts =   $this->District->find('list',array('recursive' =>-2));
           $upazilas =   $this->Upazila->find('list',array('recursive' =>-2)); 

       // pr($allInterview);exit;
        $this->set('Interview', $allInterview);
        $this->set('title_for_layout', 'InterView List');
         $this->set(compact('divisions','districts','upazilas'));
        
    }

    public function admin_interview() {

        $this->request->data['VillageInterview']['interview_pattern'] = 'village';
        // $this->request->data['VillageInterview']['createddate'] = 'village';

        if ($this->VillageInterview->save($this->request->data)) {
            $last_insert_id = $this->VillageInterview->getLastInsertID();

            $this->Session->write('interview_id', $last_insert_id);
            //$this->Session->write('interview_status');

            return $this->redirect(array('action' => 'section_a'));
            //echo $last_insert_id;
        }

        //if ($this->SectiondHouseholdinfo->save($this->request->data['SectionHouseholdArray']))
    }

    public function admin_session_create($interviewId = null) {

        $this->Session->write('interview_id', $interviewId);

        return $this->redirect(
                        array('controller' => 'VillageServey', 'action' => 'section_a')
        );
    }

}

?>