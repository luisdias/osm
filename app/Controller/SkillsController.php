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
 * Skills Controller
 *
 * @property Skill $Skill
 */
class SkillsController extends AppController {

public $paginate = array('limit'=>10, 'order'=>array('skill_desc'=>'asc'));
public $fk = null;
public $presetVars = array(
    array('field' => 'skill_desc', 'type' => 'like'));

public function __construct( $request = NULL, $response = NULL ) {
    parent::__construct($request,$response);
    if ( empty($this->translatedSingularName) )
            $this->translatedSingularName = __('Skill',true);

}

public function setRelated() {
    $this->loadModel('Professional');
    $professionals = $this->Professional->find('list',array('recursive'=>-1));
    $this->set(compact('professionals'));
}

public function view($id = null) {
    $this->setRelated();
    parent::view($id);
}

public function getSkillsList() {
    Configure::write('debug',0);
    $this->autoRender = false;
    $this->layout = false;
    if ($this->request->is('ajax')) {
        $skills = $this->Skill->find(
                'all', 
                array('fields'=>array('id','skill_desc'),
                'order'=>'skill_desc',
                'recursive'=>0)
                );
        $this->set(array('skills'=>$skills));
        echo $this->render('list');
    }
    exit();
}
public function index() {
    $this->setRelated();
    $conditions = array();
    if (!empty($this->request->data)) {    
        $skill_desc = $this->request->data['Skill']['skill_desc'];
        if (!empty($skill_desc)) {
            $conditions[] = array('Skill.skill_desc LIKE '=>'%'.$skill_desc.'%');
        }
    }    
    $this->set('childPage',false);
    $this->Skill->recursive = 0;
    $this->set('skills', $this->paginate('Skill',$conditions));
}
}
