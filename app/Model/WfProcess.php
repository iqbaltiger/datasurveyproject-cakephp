<?php
App::uses('AppModel', 'Model');
/**
 * WfProcess Model
 *
 * @property PersonnelInformation $PersonnelInformation
 */
class WfProcess extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'wf_process';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
