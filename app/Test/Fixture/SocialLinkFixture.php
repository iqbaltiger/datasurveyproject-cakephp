<?php
/**
 * SocialLinkFixture
 *
 */
class SocialLinkFixture extends CakeTestFixture {

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
			'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
			'icon' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
			'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
			'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
			'indexes' => array(
					'PRIMARY' => array('column' => 'id', 'unique' => 1)
			),
			'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	/**
	 * Records
	 *
	 * @var array
	 */
	public $records = array(
			array(
					'id' => '52f85f31-e94c-49af-b53f-1578f8defb25',
					'icon' => 'Lorem ipsum dolor sit amet',
					'title' => 'Lorem ipsum dolor sit amet',
					'url' => 'Lorem ipsum dolor sit amet'
			),
	);

}
