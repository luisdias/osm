<?php
/* Contact Test cases generated on: 2012-01-12 16:37:14 : 1326382634*/
App::uses('Contact', 'Model');

/**
 * Contact Test Case
 *
 */
class ContactTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.contact', 'app.client', 'app.federal_tax', 'app.client_category', 'app.client_type', 'app.address', 'app.entity', 'app.table', 'app.professional', 'app.service');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Contact = ClassRegistry::init('Contact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contact);

		parent::tearDown();
	}

}
