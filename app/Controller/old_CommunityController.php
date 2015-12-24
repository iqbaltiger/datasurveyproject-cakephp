<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('String', 'Utility');
class CommunityController extends AppController {
	public $helpers = array('Html','Crumb');
	public $uses = array('CommSectionAReferenceInformation','CommSectionARespondentInformation','CommSectionADataFile','CommSectionAQualityControl');
	public $components = array("Paginator","RequestHandler","ImageUploader");
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();	
		$this->set('logged_user',$this->Auth->user());
                $this->layout = 'cultural';
		
	}
        
        public function admin_section_a() {
            $this->layout = 'cultural';
			
			
        if ($this->request->is('post')) {
           $data = $this->request->data;
			//pr($this->request->data['Respond']);exit;
              if ($this->CommSectionAReferenceInformation->saveMany($this->request->data['alada'])) {
                	//$this->Session->setFlash(__('The CommSectionAReferenceInformation information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                	//return $this->redirect(array('action' => 'section_a', $last_insert_id));
              }
			 unset($this->request->data['alada']);
             if ($this->CommSectionARespondentInformation->saveMany($this->request->data['Respond'])) {
              }
			 unset($this->request->data['Respond']);
             if ($this->CommSectionADataFile->saveMany($this->request->data['DataFile'])) {
              }	
			 unset($this->request->data['DataFile']);
             if ($this->CommSectionAQualityControl->saveMany($this->request->data['Qc'])) {
              }				 
			 		 
        }else{
        	 $this->request->data = $this->CommSectionAReferenceInformation->find('all', array('conditions' => array('CommSectionAReferenceInformation.id' => 1)));
       //pr($this->request->data); exit;
	    }
			
        }
        
        public function admin_section_b() {
            $this->layout = 'cultural';
        }
        
        public function admin_section_c() {
            
            $this->layout = 'cultural';
        }
        
        public function admin_section_d() {
            
        }
        
        public function admin_section_e() {
            
        }
        
        public function admin_section_f() {
            
            $this->set('title_for_layout', 'Section F');
        }
		
		public function admin_section_g() {
            
            $this->set('title_for_layout', 'Section G');
        }
        
}
?>