<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('String', 'Utility');
class PagesController extends AppController {
	public $helpers = array('Html','Crumb');
	public $uses = array();
	public $components = array("Paginator","RequestHandler","ImageUploader");
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();	
		$user = $this->Auth->user();
		if(empty($user)){
			$this->redirect(array('controller'=>'users','action'=>'login'));
		}
		$this->set('logged_user',$user);
		
	}
	/*
	public function admin_index(){
		
		$this->set('title_for_layout','Dashboard');	
	}
	
	public function admin_linguistics(){
		$this->layout = 'linguistics';
		$this->set('title_for_layout','Linguistics');	
	}
	
	public function admin_cultural_dashboard(){
		$this->set('title_for_layout','Cultural');	
	}
	*/
	public function admin_index(){
		
                  //$id = $this->Session->read('personnel_information_id'); 
                
                 $this->Session->delete('personnel_information_id');
                 
                  
                 // $this->Session->delete($id);
             //echo  $this->Session->read('interview_id'); exit;
                //  echo $id; exit;
                  
		$this->set('title_for_layout','Dashboard');	
	}
	
	public function admin_linguistics(){
		$this->layout = 'linguistics';
		$this->set('title_for_layout','Linguistics');	
	}
	
	public function admin_cultural_dashboard(){
                $this->Session->delete('interview_id');
                  $this->Session->delete('interview_status');
		$this->set('title_for_layout','Cultural');	
	}
	
	
}
?>
