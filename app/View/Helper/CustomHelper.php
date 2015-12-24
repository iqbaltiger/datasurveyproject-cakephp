<?php
App::uses('AppHelper', 'View/Helper');
class CustomHelper extends AppHelper {

	public $helpers = array('Html', 'Form','Session');
	
	public function canAccess($controller='',$action = ''){
		$user_info = $this->Session->read('Auth');
		$permission_list = array();
		if(isset($user_info['User']['role_id'])){
			/*if($this->Session->read('permission_list')){
				$permission_list = $this->Session->read('permission_list'); //set permission_list to session for checking access any place
			}else {
				$permission_list = $this->generatePermissionList($user_info['User']['role_id']);
				$this->Session->write('permission_list', $permission_list);
			}*/
			$permission_list = $this->generatePermissionList($user_info['User']['role_id']);
			if(isset($user_info['User']['Role']['name']) and (strtolower($user_info['User']['Role']['name']) == 'admin')){
				return true;
			}else {
				$check_all = strtolower($controller.'_all');
				$check_action = strtolower($controller.'_'.$action);
				if(in_array($check_all,$permission_list)){
					return true;
				}elseif(in_array($check_action,$permission_list)){
					return true;
				}else{
					return false;
				}
			}
		}
	}
	
	protected function generatePermissionList($role_id = null){
		$permission_list = array();
		$options = array(
				'conditions'=>array(
						'Permission.role_id'=>$role_id
				)
		);
		$db_permission_data = ClassRegistry::init('Permission')->find('all',$options);
	
		if($db_permission_data){
			foreach ($db_permission_data as $key => $value) {
				$permission_list[] = strtolower($value['Dominion']['name'].'_'.$value['Process']['name']);
			}
		}
		return $permission_list;
	}


	public function persePhpCodeFromNsCode($html = ''){
		$html = str_replace("#ns-phpstart","<?php ",$html);	
		$html = str_replace("#ns-phpend"," ?>",$html);
		$html = str_replace("-&gt;","->",$html);

		$nsCode = explode('#ns-code#', $html);
		unset($nsCode[0]);
		$mainCode = array();
		$generateCode = array();
		foreach ($nsCode as $key => $value) {
			if(!empty($value)){		
				$code = explode(':', $value);			
				if(sizeof($code) > 2){
					$mainCode[] = $value;
					$generateCode[] = '<?php echo $this->'.$code[0].'->'.$code[1].'("'.$code[2].'"); ?>';			
				}
			}else{		
				unset($nsCode[$key]);
			}
		}
		foreach ($generateCode as $key => $value) {	
			$html = str_replace("#ns-code#".$mainCode[$key]."#ns-code#",$generateCode[$key],$html);	
		}

		

		return $html;
	}
	
	function getProcessData($datas,$role_id,$dominion_id,$process_id){
 		
		if(!empty($datas)){
			foreach($datas as $data){
				if($data['Permission']['role_id']==$role_id & $data['Permission']['dominion_id']==$dominion_id & $data['Permission']['process_id']==$process_id){
					
					return true;
				}
			}
			
		}
		return false;
 	}
	
	function authorizeMenuIsCheckedRole($role_id,$rolestr){
		if(!empty($rolestr)){
			$roles = explode('|',$rolestr);
			if(in_array($role_id, $roles)){
				return true;
			}
		}
		return false;
	}
}