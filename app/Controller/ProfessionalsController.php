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
 * Professionals Controller
 *
 * @property Professional $Professional
 */
class ProfessionalsController extends AppController {
    
public $paginate = array('limit'=>10, 'order'=>array('professional_name'=>'asc'));
public $fk = null;
public $associatedModel = 'Address';
public $presetVars = array(
    array('field' => 'professional_name', 'type' => 'like'));


public function __construct( $request = NULL, $response = NULL ) {
    parent::__construct($request,$response);
    if ( empty($this->translatedSingularName) )
            $this->translatedSingularName = __('Professional',true);

}

public function getProfessionalsList() {
    Configure::write('debug',0);
    $this->autoRender = false;
    $this->layout = false;
    if ($this->request->is('ajax')) {
        $professionals = $this->Professional->find(
                'all', 
                array('fields'=>array('id','professional_name'),
                'order'=>'professional_name',
                'recursive'=>0)
                );
        $this->set(array('professionals'=>$professionals));
        echo $this->render('list');
    }
    exit();
}
public function index() {
    $this->setRelated();
    $conditions = array();
    if (!empty($this->request->data)) {    
        $professional_name = $this->request->data['Professional']['professional_name'];
        if (!empty($professional_name)) {
            $conditions[] = array('Professional.professional_name LIKE '=>'%'.$professional_name.'%');
        }
    }    
    $this->set('childPage',false);
    $this->Professional->recursive = 0;
    $this->set('professionals', $this->paginate('Professional',$conditions));
}
}
