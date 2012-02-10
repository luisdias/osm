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

public function report($conditions = array(),$order = null,$direcion = 'ASC') {
    if (!empty($this->data['Service']['client_id'])) {
        $conditions[] = array('client_id'=>$this->data['Service']['client_id']);
        $this->Service->Client->recursive = -1;
        $client = $this->Service->Client->findById($this->data['Service']['client_id'],array('client_name'));
        $this->set('client',$client);
    }
        
    
    if (!empty($this->data['Service']['service_state_id'])) {
        $conditions[] = array('service_state_id'=>$this->data['Service']['service_state_id']);
        $this->Service->ServiceState->recursive = -1;
        $service_state = $this->Service->ServiceState->findById($this->data['Service']['service_state_id'],array('service_state_desc'));
        $this->set('service_state',$service_state);        
    }
        
    
    if (!empty($this->data['Service']['service_type_id'])) {
        $conditions[] = array('service_type_id'=>$this->data['Service']['service_type_id']);
        $this->Service->ServiceType->recursive = -1;
        $service_type = $this->Service->ServiceType->findById($this->data['Service']['service_type_id'],array('service_type_desc'));
        $this->set('service_type',$service_type);                
    }
        
    
    /**
     * DATES
     */
    
    // approval
    if (!empty($this->data['Service']['approval_date_1']))
        $conditions[] = array('approval_date >= '=>$this->data['Service']['approval_date_1']);
    
    if (!empty($this->data['Service']['approval_date_2']))
        $conditions[] = array('approval_date <= '=>$this->data['Service']['approval_date_2']);

    // expiration
    if (!empty($this->data['Service']['expiration_date_1']))
        $conditions[] = array('expiration_date >= '=>$this->data['Service']['expiration_date_1']);
    
    if (!empty($this->data['Service']['expiration_date_2']))
        $conditions[] = array('expiration_date <= '=>$this->data['Service']['expiration_date_2']);

    // payment
    if (!empty($this->data['Service']['payment_date_1']))
        $conditions[] = array('payment_date >= '=>$this->data['Service']['payment_date_1']);
    
    if (!empty($this->data['Service']['payment_date_2']))
        $conditions[] = array('payment_date <= '=>$this->data['Service']['payment_date_2']);    

    // begin
    if (!empty($this->data['Service']['begin_date_1']))
        $conditions[] = array('begin_date >= '=>$this->data['Service']['begin_date_1']);
    
    if (!empty($this->data['Service']['begin_date_2']))
        $conditions[] = array('begin_date <= '=>$this->data['Service']['begin_date_2']);
    
    // end
    if (!empty($this->data['Service']['end_date_1']))
        $conditions[] = array('end_date >= '=>$this->data['Service']['end_date_1']);
    
    if (!empty($this->data['Service']['end_date_2']))
        $conditions[] = array('end_date <= '=>$this->data['Service']['end_date_2']);
    
    /**
     * VALUES
     */
    
    // estimated
    if (!empty($this->data['Service']['estimated_value_1']))
        $conditions[] = array('estimated_value >= '=>$this->data['Service']['estimated_value_1']);
    
    if (!empty($this->data['Service']['estimated_value_2']))
        $conditions[] = array('estimated_value <= '=>$this->data['Service']['estimated_value_2']);
    
    // real
    if (!empty($this->data['Service']['real_value_1']))
        $conditions[] = array('real_value >= '=>$this->data['Service']['real_value_1']);
    
    if (!empty($this->data['Service']['real_value_2']))
        $conditions[] = array('real_value <= '=>$this->data['Service']['real_value_2']);

    // discount
    if (!empty($this->data['Service']['discount_value_1']))
        $conditions[] = array('discount_value >= '=>$this->data['Service']['discount_value_1']);
    
    if (!empty($this->data['Service']['discount_value_2']))
        $conditions[] = array('discount_value <= '=>$this->data['Service']['discount_value_2']);

    // paid
    if (!empty($this->data['Service']['paid_value_1']))
        $conditions[] = array('paid_value >= '=>$this->data['Service']['paid_value_1']);
    
    if (!empty($this->data['Service']['paid_value_2']))
        $conditions[] = array('paid_value <= '=>$this->data['Service']['paid_value_2']);
    
    parent::report($conditions,$order,$direcion);
}

}
