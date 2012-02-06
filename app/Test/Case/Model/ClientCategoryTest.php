<?php
/* ClientCategory Test cases generated on: 2012-01-12 16:37:10 : 1326382630*/
App::uses('ClientCategory', 'Model');

/**
 * ClientCategory Test Case
 *
 */
class ClientCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client_category', 'app.client');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ClientCategory = ClassRegistry::init('ClientCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientCategory);

		parent::tearDown();
	}

}
