<?php
App::uses('AppModel', 'Model');
/**
 * Household500 Model
 *
 */
class Household500 extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'household_500';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
        
        
        
        public function pushInterviewId($datas,$interview_id){
		if(!empty($datas)){
			foreach($datas as $index=>$data){
				
				$datas[$index]['Household500']['household_interview_id'] = $interview_id;
			}
		}
		return $datas;
	}

}
