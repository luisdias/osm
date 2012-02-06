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
 * SkillsProfessionals Controller
 *
 * @property SkillsProfessional $SkillsProfessional
 */
class SkillsProfessionalsController extends AppController {

public $paginate = array('limit'=>10, 'order'=>array('professional_id'=>'asc'));

public $fk = null;

public function __construct( $request = NULL, $response = NULL ) {
    parent::__construct($request,$response);
    if ( empty($this->translatedSingularName) )
            $this->translatedSingularName = __('Skill Professional',true);
}
public function add() {
    Configure::write('debug',0);
    $this->autoRender = false;
    $this->layout = false;
    if ($this->request->is('ajax')) {
        $skill_id = $this->request->data('skill_id'); 
        $professional_id = $this->request->data('professional_id');
        if ($skill_id > 0 && $professional_id > 0) {
            $this->SkillsProfessional->create();            
            if ( $this->SkillsProfessional->save($this->request->data) ) 
                echo $this->SkillsProfessional->getLastInsertID();
            else
                header("HTTP/1.0 404 Not Found");
        } else {
            header("HTTP/1.0 404 Not Found");
        }
    }
    exit();
}

public function index() {
    if (isset($this->passedArgs['fkfield']) && isset($this->passedArgs['fkid'])) {
        $this->SkillsProfessional->Professional->recursive = -1;
        $professional = $this->SkillsProfessional->Professional->findById($this->passedArgs['fkid'],array('professional_name')); 
        $fkfield = $this->passedArgs['fkfield'];
        $fkid = $this->passedArgs['fkid'];            
        $this->set(array('fkfield'=>$fkfield,'fkid'=>$fkid,'professional'=>$professional));
    } else {
        $this->redirect(array('controller'=>'services','action'=>'index'));
    }
}
public function display() {
    Configure::write('debug',0);
    $this->layout = 'ajax';
    if ($this->request->is('ajax')) {
        $fkfield = $this->request->data['fkfield'];
        $fkid = $this->request->data['fkid'];
        $skillsProfessionals = $this->SkillsProfessional->find('all',
                array('conditions' => array('SkillsProfessional.professional_id' => $fkid))
        );   
        $this->set(array('skillsProfessionals'=>$skillsProfessionals,'fkfield'=>$fkfield,'fkid'=>$fkid));
        echo $this->render('display');
    }
    exit();
}
}
