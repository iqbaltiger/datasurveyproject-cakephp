<?php
App::uses('Controller', 'Controller','RequestHandler','Session');
class AppController extends Controller {
	public $helpers = array('Html', 'Form');
	public $status = array('active'=>'Active','inactive'=>'Inactive');
	public $components = array(
		'Session',
		'PermissionCheck',
		'ImageUploader',
		'Auth' => array(
				'loginRedirect' => array('controller' => 'pages', 'action' => 'index','prefix'=>'admin', 'admin'=>true),
				'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
				'authorize' => array('Controller') // Added this line
		)
	);
        
        
//        public $components = array(
//		'Session',
//		'PermissionCheck',
//		'ImageUploader',
//		'Auth' => array(
//				'loginRedirect' => array('controller' => 'users', 'action' => 'index','prefix'=>'admin', 'admin'=>true),
//				'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
//				'authorize' => array('Controller') // Added this line
//		)
//	);


	public function beforeFilter(){
		$this->Auth->allow('index', 'view','login','logout');
		
		if ($this->Auth->user('id')) {
			$this->set('logged_user', $this->Auth->user());
			$this->set('loggedIn', true);
			if (empty($this->params['prefix'])) {
				$this->layout = 'frontend';
			} else if($this->params['prefix'] == 'admin') {
				$this->layout = 'default';
			}

		}
		//pr($this->Auth->user());exit;
		$this->getAdminMenu($this->Auth->user('role_id'));
		$this->set('status',$this->status);
	}

	private function getAdminMenu($role_id=null){
				$admin_menu_data = array();
				if($this->Session->read('admin_menu_data')){
						$admin_menu_data = $this->Session->read('admin_menu_data'); 		
				}else {
					ClassRegistry::init('AuthorizedMenu')->contain(array('Dominion','Process'));			
					$admin_menu_data = ClassRegistry::init('AuthorizedMenu')->find(			
						'threaded',					
						array(							
						'recursive'=>-1,							
						'conditions'=>array(									
						'AuthorizedMenu.status' => 'Active',									
						'AuthorizedMenu.role_id' => $role_id							
						),							
						'order'=>array('AuthorizedMenu.position ASC')					
						)			
					);			
					$this->Session->write('admin_menu_data',$admin_menu_data);		
				}				
				$this->set('admin_menu_data',$admin_menu_data);	
	}

	public function isAuthorized($user){
		$this->getAdminMenu($this->Auth->user('role_id'));
		$this->set('role_id',$user['role_id']);				
		$canAccess = $this->PermissionCheck->checkPermission($user,$controller = $this->params['controller'],$action = $this->params['action']);		if($this->Session->read('permission_list')){			$this->set('permission_list', $this->Session->read('permission_list'));		}		if($canAccess){			return true;		}else{						$this->Session->setFlash(__('You are not Authorized Persion for this Action. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));			$this->redirect($this->referer());					}
	}
        
        public function addPersonnelId($model){
            $p_id = $this->request->data['Common']['personnel_information_id'];
            unset($this->request->data['Common']);
         
            foreach($this->request->data as $key=>$data){
                 $this->request->data[$key][$model]['personnel_information_id'] = $p_id;
             }
            return true;
        }
        
        
        public function addYesOrNo($model){
            
            
           foreach($this->request->data as $key=>$data){
                 $this->request->data[$key][$model]['cultivate_anyland'] = $p_id;
             }
            return true;
            
        }

        public function nonemptyElement($model,$field) {
            
            foreach($this->request->data as $key=>$value){
                if(empty($value[$model][$field])){
                    unset($this->request->data[$key]);
                }
            }
            return true;
        }
        
        public function nonemptyElementWithKey($index,$model,$field) {
            
            foreach($this->request->data[$index] as $key=>$value){
                if(empty($value[$model][$field])){
                    unset($this->request->data[$index][$key]);
                }
            }
            return true;
        }
        
         public function addSectionIFoodConsumtion($model){
             
             $reason_of_proverty = $this->request->data[$model]['reason_of_proverty'];
             $reason_of_proverty_other = $this->request->data[$model]['reason_of_proverty_other'];
             $coping = $this->request->data[$model]['coping'];
             $type_of_coping = $this->request->data[$model]['type_of_coping'];
             
             unset($this->request->data['SectionIFoodConsumption']);
             
             pr($this->request->data); exit;
         
            foreach($this->request->data as $key=>$data){
                 $this->request->data[$key][$model]['reason_of_proverty'] = $reason_of_proverty;
                 $this->request->data[$key][$model]['reason_of_proverty_other'] = $reason_of_proverty_other;
                 $this->request->data[$key][$model]['coping'] = $coping;
                 $this->request->data[$key][$model]['type_of_coping'] = $type_of_coping;
             }
            return true;
         }
        
	/*
	sendMailWithAttachment for send email with attachment file.
	*/

	function sendMailWithAttachment($template = 'default', $to_email = null, $from_email = null, $subject = '', $contents='', $file=null) {        
		App::uses('CakeEmail', 'Network/Email');
		$my_mail = new CakeEmail();
		$my_mail->template($template);
		$my_mail->emailFormat('html');
		$my_mail->helpers(array('Html'));

		$my_mail->from(array($from_email => $contents['sender']));
		$my_mail->to($to_email);
		$my_mail->subject($subject);
		$my_mail->viewVars(array('contents'=>$contents));

		if($file){			
			$my_mail->attachments(array($file['name'] => $file['tmp_name']));	
		}		
		
        if ($my_mail->send()) {
            return true;
        }
        return false;
    }

	/*
	send Mail Function.
	*/

	function sent_my_mails($options = array()) {
		$my_mail = new CakeEmail();
		$my_mail -> to($options['to']);
		$my_mail -> from(array($options['from_email'] => $options['from_name']));
		$my_mail -> subject($options['subject']);
		$my_mail -> template($options['template']);
		$my_mail -> emailFormat('html');
		$my_mail -> viewVars($options['data']);
		$my_mail -> send();
	}

    /*
    public function appError($error) {
    	$this->layout = 'frontend';

		if ($this->Auth->user('id')) {
			if (empty($this->params['prefix'])) {
				$this->layout = 'frontend';
			} else if($this->params['prefix'] == 'admin') {
				$this->layout = 'default';
			}
		}
        // custom logic goes here.
        if($this->request->is('ajax')){
			echo '<div class="alert alert-danger show" id="flashMessage">Page Not Found!!! <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>';
			exit;
		}else{			
	    	$this->Session->setFlash('Page Not Found!!! <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', 'default', array('class' => 'alert alert-danger'));        
	        //$this->redirect($this->referer());
	        $this->redirect('controller'=> 'Errors', 'action'=>'error400');
	    }        
    }
    */

    function setErrorLayout() {
    	if ($this->name == 'CakeError') { 
    		if($this->request->is('ajax')){
    			echo '<div class="alert alert-danger show" id="flashMessage">Page Not Found!!! <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>';
    			exit;
    		}else{			
    			$this->layout = 'frontend';

				if ($this->Auth->user('id')) {					
					if (empty($this->params['prefix'])) {
						$this->layout = 'frontend';
					} else if($this->params['prefix'] == 'admin') {
						$this->layout = 'default';
					}
				}
    		}  
    		
    	}
    }

    function beforeRender () {
    	//$this->setErrorLayout();
    }

    function deletePreviousImage($path){
		$images['0'] = $path;
		$images['1'] = str_replace('/thumb', '', $images['0']);
		
		foreach($images as $image){
		$dir = WWW_ROOT.$image;
			if(!empty($path) & file_exists($dir)){
				unlink($dir);
			}
		}
	}

    function uploadValidImage($model,$field,$path,$size=array()){
    	$data = $this->request->data;
		
		$ModelClass = ClassRegistry::init($model);
		$valid_ext = $ModelClass->validate[$field]['rule']['1'];
		
		if($data[$model][$field]['size']>0){
			
			// Delete Previous image if exist
			if(array_key_exists('pre_'.$field, $data[$model]) & !empty($data[$model]['pre_'.$field])){
				$this->deletePreviousImage($data[$model]['pre_'.$field]);
			}

			$pathinfo = pathinfo($data[$model][$field]['name']);
			if(in_array($pathinfo['extension'], $valid_ext)){
				$config = array(
					'id'=>$model.'_'.$field,
					'file'=>$data[$model][$field],
					'path'=>$path,
					'resize'=>$size
				);
				$this->request->data[$model][$field] = $this->ImageUploader->uploadImage($config);
			}else{
				$this->request->data[$model][$field]=$data[$model][$field]['name'];
				//$this->request->data['Content']['image']=$data['Content']['image']['name'];
			}
			
		}elseif($data[$model][$field]['error']==1){
			$this->request->data[$model][$field] = 'error.error';
			$this->$model->validate[$field]['message'] = 'This is error file. Upload another file';
		}else{
			$this->request->data[$model][$field] = $data[$model]['pre_'.$field];
		}
    }

	
}
