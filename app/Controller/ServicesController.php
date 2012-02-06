<?php
/**
    This file is part of OSM - Open Service Manager.

    OSM - Open Service Manager is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    OSM - Open Service Manager is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with OSM - Open Service Manager.  If not, see <http://www.gnu.org/licenses/>.
 */
App::uses('AppController', 'Controller');
/**
 * Services Controller
 *
 * @property Service $Service
 */
class ServicesController extends AppController {

public $paginate = array('limit'=>10, 'order'=>array('created'=>'desc'));
public $fk = null;
public $associatedModel = 'Address';
public $presetVars = array(
    array('field' => 'service_state_id', 'type' => 'value'),
    array('field' => 'service_type_id', 'type' => 'value'),
);

public function __construct( $request = NULL, $response = NULL ) {
    parent::__construct($request,$response);
    if ( empty($this->translatedSingularName) )
            $this->translatedSingularName = __('Service',true);

}
public function setRelated() {
    $this->loadModel('Professional');
    $professionals = $this->Professional->find('list',array('recursive'=>-1));
    $serviceStates = $this->Service->ServiceState->find('list');
    $serviceTypes = $this->Service->ServiceType->find('list');
    $clients = $this->Service->Client->find('list');
    $this->set(compact('serviceStates','serviceTypes','clients','professionals'));    
}

public function view($id = null) {
    $this->setRelated();
    parent::view($id);
}

public function getServiceById() {
    Configure::write('debug',0);
    $this->autoRender = false;
    $this->layout = false;
    if ($this->request->is('ajax')) {
        $service_id = $this->request->data('service_id');        
    }
    exit();
}

public function index() {
    $this->setRelated();
    parent::index();
}
}
