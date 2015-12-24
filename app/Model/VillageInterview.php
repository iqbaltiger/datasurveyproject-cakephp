<?php
App::uses('AppModel', 'Model');
/**
 * VillageInterview Model
 *
 */
class VillageInterview extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'village_interview';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
        
        public $hasOne = array(
            'VillageSectionAReferenceInformation' => array(
                'className' => 'VillageSectionAReferenceInformation',
                'conditions' => array('VillageSectionAReferenceInformation.interview_key' => '1'),
                'dependent' => true
            )
        );

         public $hasMany = array('VillageSectionBFirstPart');
}
