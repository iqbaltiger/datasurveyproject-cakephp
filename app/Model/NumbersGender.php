<?php
App::uses('AppModel', 'Model');
/**
 * NumbersGender Model
 *
 * @property PersonnelInformation $PersonnelInformation
 */
class NumbersGender extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'numbers_gender';

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
