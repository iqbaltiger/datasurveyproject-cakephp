<?php
App::uses('AppHelper', 'View/Helper');
class LatestNewsHelper extends AppHelper {

	public $helpers = array('Html', 'Form');

	public function generateLatestNews(){
		$data = classRegistry::init('New')->find(
			'all',
			array(
				'order'=>'New.created DESC'
			)
		);
		return $data;
	}
}