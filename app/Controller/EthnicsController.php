<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('String', 'Utility');

class EthnicsController extends AppController {

    public $helpers = array('Html', 'Crumb');
    public $uses = array('User', 'EthnicSectionB', 'EthnicInterview', 'Division', 'District', 'Upazila', 'EthnicSectionAReferenceInformation', 'EthnicSectionA2','EthnicQuestionBFirstPart');
    public $components = array("Paginator", "RequestHandler", "ImageUploader");

    /*
      public function beforeFilter(){
      parent::beforeFilter();
      $this->Auth->allow();
      $this->set('logged_user',$this->Auth->user());
      $this->layout = 'cultural';

      }

     */

    public function beforeFilter() {
        parent::beforeFilter();
        $user_info = $this->Auth->user();
        if (strtolower($user_info['Role']['name']) == 'admin' || strtolower($user_info['Role']['name']) == 'cultural' || $user_info['Role']['access_controller'] == $this->params['controller']) {
            $this->Auth->allow();
        } else {
            $this->Session->setFlash(__('You are not Authorized Persion for this Action.'), 'alert_error');
            $this->redirect($this->referer());
        }
        $this->set('logged_user', $user_info);
        $this->layout = 'cultural';
    }

    public function admin_section_a() {
        $this->layout = 'cultural';
        $id = $this->Session->read('interview_id');
        $this->set('pid', $id);

        $userList = $this->User->find('list', array('fields' => array('User.id', 'User.username'), 'conditions' => array('User.role_id' => '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc'), array('recursive' => 0)));
        $this->set('users', $userList);

        $divisions = $this->Division->find('list', array('recursive' => -2));
        $districts = $this->District->find('list', array('recursive' => -2, 'order' => array('District.name ASC')));
        $upazilas = $this->Upazila->find('list', array('recursive' => -2, 'order' => array('Upazila.name ASC')));

        $this->set(compact('divisions', 'districts', 'upazilas'));


        if ($this->request->is('post')) {


            //pr($this->request->data['Reference']); exit;
            if ($this->EthnicSectionAReferenceInformation->saveMany($this->request->data['Reference'])) {
                $data = array('id' => $id, 'status' => 'Active');
            $this->Session->write('interview_status', 'Active');
            $this->EthnicInterview->save($data);
            
             $this->Session->setFlash(__('Interview Has Been Created Successfully <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
            }

            unset($this->request->data['Reference']);

            // pr($this->request->data['EthnicSectionA2']); exit;

            if ($this->EthnicSectionA2->saveMany($this->request->data['EthnicSectionA2'])) {
                return $this->redirect(array('action' => 'section_b'));
            }

            unset($this->request->data['EthnicSectionA2']);

            
        } else {

            $this->Session->write('interview_status', 'Active');
            $this->request->data['Reference'] = $this->EthnicSectionAReferenceInformation->find('all', array('conditions' => array('EthnicSectionAReferenceInformation.ethnic_interview_id' => $id)));
            $this->request->data['EthnicSectionA2'] = $this->EthnicSectionA2->find('all', array('conditions' => array('EthnicSectionA2.ethnic_interview_id' => $id)));
            
            
        }
    }

    public function admin_section_b() {
       $interview_id = $this->Session->read('interview_id');
        $this->set('ethnic_interview_id', $interview_id);
        $this->layout = 'cultural';

        if ($this->request->is('post')) {
//             pr($this->request->data['Construction']); 
//             exit();
            
            
            
            
             if ($this->EthnicQuestionBFirstPart->saveMany($this->request->data['Construction'])) {
                $this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_b_next'));
            }
            
            
        }
        
        else{
            
            $this->request->data['Construction'] = $this->EthnicQuestionBFirstPart->find('all', array('conditions' => array('EthnicQuestionBFirstPart.ethnic_interview_id' => $interview_id)));
        
           // pr($this->request->data['Construction']); exit;
            
        }
    }

    public function admin_section_b_next() {
        $interview_id = $this->Session->read('interview_id');
        $this->set('ethnic_interview_id', $interview_id);
        $this->layout = 'cultural';

        if ($this->request->is('post')) {
            //pr($this->request->data); exit;
            if ($this->EthnicSectionB->saveMany($this->request->data)) {
                $this->Session->setFlash(__('The information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'interviewlist'));
            }
        } else {
            $this->request->data = $this->EthnicSectionB->find('all', array('conditions' => array('EthnicSectionB.ethnic_interview_id' => $interview_id)));
//                pr($this->request->data);
//                exit;
        }
    }

    public function admin_interview() {

        $this->request->data['EthnicInterview']['interview_pattern'] = 'ethnic';
        // $this->request->data['EthnicInterview']['createddate'] = 'village';

        if ($this->EthnicInterview->save($this->request->data)) {
            $last_insert_id = $this->EthnicInterview->getLastInsertID();

            $this->Session->write('interview_id', $last_insert_id);
            return $this->redirect(array('action' => 'section_a'));
        }
    }

    public function admin_interviewlist() {
        $this->Session->delete('interview_id');
        $this->Session->delete('interview_status');
        $userList = $this->User->find('all', array('fields' => array('User.id', 'Profile.name'), 'conditions' => array('User.role_id' => '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc'), array('recursive' => 0)));

        $list = array();
        foreach ($userList as $user) {
            $list[$user['User']['id']] = $user['Profile']['name'];
        }


        $this->set('users', $list);
        $allInterview = $this->EthnicInterview->find('all', array('conditions' => array('EthnicInterview.status' => 'Active')));
        
        /*pr($allInterview);
        exit;*/


        $divisions = $this->Division->find('list', array('recursive' => -2));
        $districts = $this->District->find('list', array('recursive' => -2));
        $upazilas = $this->Upazila->find('list', array('recursive' => -2));

        // pr($allInterview);exit;
        $this->set('Interview', $allInterview);
        $this->set('title_for_layout', 'InterView List');
        $this->set(compact('divisions', 'districts', 'upazilas'));
    }

    public function admin_session_create($interviewId = null) {

        $this->Session->write('interview_id', $interviewId);

        return $this->redirect(
                        array('controller' => 'ethnics', 'action' => 'section_a')
        );
    }

}

?>