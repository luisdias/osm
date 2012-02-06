<?php
/* ProfessionalsServices Test cases generated on: 2012-01-12 16:40:31 : 1326382831*/
App::uses('ProfessionalsServicesController', 'Controller');

/**
 * TestProfessionalsServicesController *
 */
class TestProfessionalsServicesController extends ProfessionalsServicesController {
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
 * ProfessionalsServicesController Test Case
 *
 */
class ProfessionalsServicesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.professionals_service', 'app.professional', 'app.address', 'app.entity', 'app.table', 'app.client', 'app.client_category', 'app.client_type', 'app.contact', 'app.service', 'app.status', 'app.service_type', 'app.skill', 'app.skills_professional');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ProfessionalsServices = new TestProfessionalsServicesController();
		$this->ProfessionalsServices->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProfessionalsServices);

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
