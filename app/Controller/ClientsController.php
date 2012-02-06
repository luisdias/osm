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
 * Clients Controller
 *
 * @property Client $Client
 */
class ClientsController extends AppController {
    
public $paginate = array('limit'=>10, 'order'=>array('client_name'=>'asc'));
public $fk = null;
public $associatedModel = 'Address';

public $presetVars = array(
    array('field' => 'client_category_id', 'type' => 'value'),
    array('field' => 'client_type_id', 'type' => 'value'),
    array('field' => 'client_name', 'type' => 'like'));


public function __construct( $request = NULL, $response = NULL ) {
    parent::__construct($request,$response);
    if ( empty($this->translatedSingularName) )
            $this->translatedSingularName = __('Client',true);

}

public function setRelated() {
    $clientCategories = $this->Client->ClientCategory->find('list');
    $clientTypes =  $this->Client->ClientType->find('list');
    $this->set(compact('clientCategories','clientTypes'));    
}   

public function index() {
    $this->setRelated();
    parent::index();
}
}
