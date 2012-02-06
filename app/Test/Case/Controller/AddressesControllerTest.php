<?php
/* Addresses Test cases generated on: 2012-01-12 16:40:30 : 1326382830*/
App::uses('AddressesController', 'Controller');

/**
 * TestAddressesController *
 */
class TestAddressesController extends AddressesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * AddressesController Test Case
 *
 */
class AddressesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.address', 'app.entity', 'app.table', 'app.client', 'app.client_category', 'app.client_type', 'app.contact', 'app.service', 'app.status', 'app.service_type', 'app.professional', 'app.professionals_service', 'app.skill', 'app.skills_professional');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Addresses = new TestAddressesController();
		$this->Addresses->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Addresses);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
