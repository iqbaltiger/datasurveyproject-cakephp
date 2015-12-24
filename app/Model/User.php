<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Role $Role
 * @property Profile $Profile
 */
class User extends AppModel {

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
					'uuid' => array(
							'rule' => array('uuid'),
							//'message' => 'Your custom message here',
							//'allowEmpty' => false,
							//'required' => false,
							//'last' => false, // Stop validation after this rule
							//'on' => 'create', // Limit validation to 'create' or 'update' operations
					),
			),
			'username' => array(
					'notEmpty' => array(
							'rule' => array('notEmpty'),
							'message' => 'User Name is required',
							//'allowEmpty' => false,
							//'required' => false,
							//'last' => false, // Stop validation after this rule
							//'on' => 'create', // Limit validation to 'create' or 'update' operations
					),
					'unique' => array(
							'rule'    => 'isUnique',
							'message' => 'This username has already been taken.'
					)
			),
				'password' => array(
					'notEmpty' => array(
									'rule' => array('notEmpty'),
									//'message' => 'Your custom message here',
									//'allowEmpty' => false,
									//'required' => false,
									//'last' => false, // Stop validation after this rule
									//'on' => 'create', // Limit validation to 'create' or 'update' operations
								),
			            'minLength'=> array(
			            	 'rule' => array('minLength', 5),
			             	 'message' => 'Password must be at least 5 characters long.'
			           ), 										
				),
					'captcha' =>array(
						'rule'=>array('matchCaptcha'),
						'message'=>'Failed validating human check.'
					)
				);

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
			'Role' => array(
					'className' => 'Role',
					'foreignKey' => 'role_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
			)
	);
	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasOne = array(
			'Profile' => array(
					'className' => 'Profile',
					'foreignKey' => 'user_id',
					'dependent' => false,
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			)
	);

	/*
	 *  Captch Function 
	 */
	
	function matchCaptcha($inputValue){
		
		return $inputValue['captcha']==$this->getCaptcha(); //return true or false after comparing submitted value with set value of captcha
	}

	function setCaptcha($value)	{
		$this->captcha = $value; //setting captcha value
	}

	function getCaptcha()	{
		return $this->captcha; //getting captcha value
	}


	public function beforeSave($options = array()) {
		$this->data['User']['password'] = AuthComponent::password(
				$this->data['User']['password']
		);
		return true;
	}

	

}
