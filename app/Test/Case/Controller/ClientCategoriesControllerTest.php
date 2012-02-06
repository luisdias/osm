<?php
/* ClientCategories Test cases generated on: 2012-01-12 16:40:30 : 1326382830*/
App::uses('ClientCategoriesController', 'Controller');

/**
 * TestClientCategoriesController *
 */
class TestClientCategoriesController extends ClientCategoriesController {
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
 * ClientCategoriesController Test Case
 *
 */
class ClientCategoriesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client_category', 'app.client', 'app.client_type', 'app.address', 'app.entity', 'app.table', 'app.professional', 'app.service', 'app.status', 'app.service_type', 'app.professionals_service', 'app.skill', 'app.skills_professional', 'app.contact');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ClientCategories = new TestClientCategoriesController();
		$this->ClientCategories->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientCategories);

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
