<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2009, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\data\model;

class MockDatabasePost extends \lithium\data\Model {

	public $hasMany = array('MockDatabaseComment');

	protected $_schema = array(
		'id' => array('type' => 'integer'),
		'title' => array('type' => 'string'),
		'created' => array('type' => 'datetime')
	);
}

?>