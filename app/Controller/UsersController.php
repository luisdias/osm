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
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

public $paginate = array('limit'=>10, 'order'=>array('username'=>'asc'));
public $fk = null;
public $adminOnly = true;

public function __construct( $request = NULL, $response = NULL ) {
    parent::__construct($request,$response);
    if ( empty($this->translatedSingularName) )
            $this->translatedSingularName = __('User',true);

}
public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->deny('index','view','passwordChange');
}

public function login() {
    $this->layout = 'login';   
    if ( $this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Your username/password combination was incorrect.'));
        }
    }
}

public function logout() {    
    $this->redirect($this->Auth->logout());    
}	 

public function passwordChange($id = null) {
    if (empty($this->request->data)) {
           $this->request->data = $this->User->read(null, $id);
    } else {       
       if ( isset($this->request->data['User']['tmp_password']) )
               $this->request->data['User']['tmp_password'] = $this->Auth->password($this->request->data['User']['new_password']);
       if ($this->User->save($this->request->data)) {
               $this->Session->setFlash(__('Password updated successfully', true),'default',array('class'=>'success-msg')); 
               $this->redirect(array('action'=>'index'));
       } else {
               $this->Session->setFlash(__('Passwords do not match. Please try again', true),'default',array('class'=>'error-msg'));
       }            
    }        
}
}