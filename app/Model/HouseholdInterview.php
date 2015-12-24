<?php
App::uses('AppModel', 'Model');
/**
 * HouseholdInterview Model
 *
 */
class HouseholdInterview extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'household_interview';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
        
        
          public $hasOne = array(
            'HouseholdSectionAReferenceInformation' => array(
                'className' => 'HouseholdSectionAReferenceInformation',
                'conditions' => array('HouseholdSectionAReferenceInformation.interview_key' => '1'),
                'dependent' => true
            )
        );

//         public $hasMany = array('VillageSectionBFirstPart');

}
