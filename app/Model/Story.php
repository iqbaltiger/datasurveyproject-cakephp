<?php
App::uses('AppModel', 'Model');
/**
 * Story Model
 *
 * @property PersonnelInformation $PersonnelInformation
 */
class Story extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'story';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'PersonnelInformation' => array(
			'className' => 'PersonnelInformation',
			'foreignKey' => 'personnel_information_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
