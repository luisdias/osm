<?php
/* ServiceTypes Test cases generated on: 2012-01-12 16:40:31 : 1326382831*/
App::uses('ServiceTypesController', 'Controller');

/**
 * TestServiceTypesController *
 */
class TestServiceTypesController extends ServiceTypesController {
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
 * ServiceTypesController Test Case
 *
 */
class ServiceTypesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.service_type', 'app.service', 'app.status', 'app.client', 'app.client_category', 'app.client_type', 'app.address', 'app.entity', 'app.table', 'app.professional', 'app.professionals_service', 'app.skill', 'app.skills_professional', 'app.contact');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ServiceTypes = new TestServiceTypesController();
		$this->ServiceTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceTypes);

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
