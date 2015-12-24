<?php
App::uses('AppModel', 'Model');
/**
 * EthnicInterview Model
 *
 */
class EthnicInterview extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ethnic_interview';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
        
        
        public $hasOne = array(
            'EthnicSectionAReferenceInformation' => array(
                'className' => 'EthnicSectionAReferenceInformation',
                'conditions' => array('EthnicSectionAReferenceInformation.interview_key' => '1'),
                'dependent' => false
            )
        );

        // public $hasMany = array('EthnicSectionA2');
          public $hasMany = array(
            'EthnicSectionA2' => array(
                'className' => 'EthnicSectionA2',
                'conditions' => array('EthnicSectionA2.question' => array('111','112','113','121')),
                'dependent' => false
            )
          );

}
