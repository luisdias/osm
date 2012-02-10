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
App::uses('Controller', 'Controller');

class AppController extends Controller {
public $fk = null;
public $singularName = null;
public $translatedSingularName = null; // translated singular name for view
public $associatedModel = null;
public $adminOnly = false;

public $components = array('Session','Auth','Prg');

public $helpers = array('Html','Form','Session','Js','ExPaginator','Number');

public function __construct( $request = NULL, $response = NULL ) {
    parent::__construct($request,$response);
    $this->singularName = lcfirst(Inflector::singularize($this->name));
}

public function beforeFilter() {
    // TODO: save to text file, load on bootstrap, store in session
    $settings = ClassRegistry::init('Setting'); // load Setting model
    $setting = $settings->find('first');
    $language = $setting['Setting']['language'];
    Configure::write('Config.language', $language);

    $this->Auth->authenticate = array('Form'=>array('userModel'=>'User'));    
    $this->Auth->userModel = 'User';
    $this->Auth->loginAction=array('controller'=>'users','action'=>'login');
    $this->Auth->loginRedirect=array('controller'=>'services','action'=>'index');
    $this->Auth->logoutRedirect=array('controller'=>'users','action'=>'login');
    $this->Auth->loginError=__('Invalid login or password',true);     
    $this->Auth->authError=__('Without access permission',true); 
    $this->Auth->authorize = array('Controller');
}

public function index() {
    if (isset($this->passedArgs['fkfield']) && isset($this->passedArgs['fkid'])) {
        $childPage = true;
        $fkField = $this->passedArgs['fkfield'];
        $fkId = $this->passedArgs['fkid'];            
        $this->paginate = array('conditions'=> array($this->modelClass.'.'.$fkField . ' LIKE '=>$fkId));
    } else {
        $childPage = false;
    }
    $this->set('childPage',$childPage);
    $this->{$this->modelClass}->recursive = 0;
    $this->set(lcfirst($this->name), $this->paginate());
}

public function view($id = null) {
        $this->{$this->modelClass}->id = $id;
        if (!$this->{$this->modelClass}->exists()) {
                throw new NotFoundException(__('Invalid ').$this->name);
        }
        $this->set(lcfirst($this->singularName), $this->{$this->modelClass}->read(null, $id));
}

public function add() {
    $this->form();
    $this->render('form');
}
public function edit($id = null) {
    if (!$id && empty($this->data)) {
        $this->_flash(__('Invalid ').$this->name,'error');                        
        $this->redirect(array('action'=>'index'));
    }
    $this->form($id);
    $this->render('form');
}
public function form($id = null) {
    // view variables
    if ( $this->action == 'add' )
        $this->set('currentAction',__('New',true));
    else
        $this->set('currentAction',__('Edit',true));

    if ( isset($this->passedArgs['fkid']) && isset($this->passedArgs['fkfield']) ) {
        $childForm = true;
        if ( $this->action == 'add' )
            $theAction = $this->action;
        else
            $theAction = $this->action .'/'. $this->passedArgs[0];
        $options = array ('url'=>$theAction.'/'.
                            'fkfield:'.
                            $this->passedArgs['fkfield'].'/'.
                            'fkid:'.$this->passedArgs['fkid']);            
    } else {
        $options = array();
        $childForm = false;
    }                    
    $this->set('childForm',$childForm);
    $this->set('formOptions',$options);
    // end: view variables

    if (!empty($this->data)) { // save form for add or edit actions
        // Creating or updating is controlled by the model’s id field
        $this->{$this->modelClass}->create();

        if (!is_null($this->associatedModel)) {                
            if ( isset($this->request->data[$this->associatedModel]['table_name']) )
                $this->request->data[$this->associatedModel]['table_name'] = $this->{$this->modelClass}->useTable;
            $successfullySaved = $this->{$this->modelClass}->saveAssociated($this->data);
        } else {
            $successfullySaved = $this->{$this->modelClass}->save($this->data);
        }
        if ($successfullySaved) {
           $this->Session->setFlash($this->translatedSingularName .__(' has been saved', true),'default'); 
           if ( isset($this->passedArgs['fkid']) && isset($this->passedArgs['fkfield']) )                        
                $this->redirect(array('action'=>'index',
                    'fkfield' => $this->passedArgs['fkfield'],
                    'fkid' => $this->passedArgs['fkid']
                   ));
           $this->redirect(array('action'=>'index'));
        } else {
           $this->Session->setFlash($this->translatedSingularName .__(' could not be saved. Please, try again.', true),'default');
        }
    } else { // load form for add or edit actions
        if ( !is_null($id) ) { // edit action
            $this->data = $this->{$this->modelClass}->read(null, $id);
        }            
        if ( $this->params['action'] == 'add' ) {
               if (isset($this->passedArgs['fkid'])) {
                       $fkId = $this->passedArgs['fkid'];
                       $this->data[$this->singularName][$this->fk] = $fkId;
               }
        }
    }

    $this->setRelated();
}

/**
 * if there is a foreign key (fk) redirect with fk
 * @param type $id 
 */        
public function delete($id = null) {
    if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
    }
    $this->{$this->modelClass}->id = $id;
    if (!$this->{$this->modelClass}->exists()) {
           $this->Session->setFlash(__('Invalid '.$this->translatedSingularName, true),'default',array('class'=>'error-msg'));
           if ( isset($this->passedArgs['fkid']) && isset($this->passedArgs['fkfield']) )                        
                $this->redirect(array('action'=>'index',
                    'fkfield' => $this->passedArgs['fkfield'],
                    'fkid' => $this->passedArgs['fkid']
                   ));
           $this->redirect(array('action'=>'index'));
    }
    
    try {    
        if ($this->{$this->modelClass}->delete($id)) {
               $this->Session->setFlash(__($this->translatedSingularName . ' deleted', true),'default',array('class'=>'success-msg'));
               if ( isset($this->passedArgs['fkid']) && isset($this->passedArgs['fkfield']) )                        
                    $this->redirect(array('action'=>'index',
                        'fkfield' => $this->passedArgs['fkfield'],
                        'fkid' => $this->passedArgs['fkid']
                       ));
               $this->redirect(array('action'=>'index'));
        }
    } catch (Exception $e) {
        $this->Session->setFlash(__("There are related records. Record was not deleted.",true),'default',array('class'=>'error-msg'));
        if ( isset($this->passedArgs['fkid']) && isset($this->passedArgs['fkfield']) )                        
            $this->redirect(array('action'=>'index',
                'fkfield' => $this->passedArgs['fkfield'],
                'fkid' => $this->passedArgs['fkid']
               ));
        $this->redirect(array('action'=>'index'));	               
    }
    
}

/**
 * run during actions add,edit e view
 */
public function setRelated() {
}   

/**
 * required when $this->Auth->authorize = 'controller';
 * @return type 
 */
public function isAuthorized($user) {
    if ($this->action == 'logout' || $this->action == 'login') {
        return true;
    }
    if ($this->Auth->user('role') == 'user') {
        if ($this->adminOnly) {
            $this->Session->setFlash(__('Action not authorized for this role',true));
            return false;            
        }
    }
    if ($this->Auth->user('role') == 'guest') {
        if ( ($this->action == 'add' || $this->action == 'edit' || $this->action == 'delete') || 
                ( ( $this->action != 'logout' ) && ($this->adminOnly) ) ) {
            $this->Session->setFlash(__('Action not authorized for this role',true));
            return false;
        }        
    }
    
    return true;
}   

public function find() {
    $this->setRelated();
    $this->Prg->commonProcess();
    $this->paginate['conditions'] = $this->{$this->modelClass}->parseCriteria($this->passedArgs);
    $this->set(strtolower($this->name), $this->paginate());
    $this->render('index');
}

function report($conditions = array(),$order = null,$direction = 'ASC') {
    if (!empty($this->data)) {
        $this->set('conditions',$conditions); // pass conditions to the view
        if (is_null($order))
            $order = $this->modelClass.'.id';
        $order = $order . ' ' . $direction;
        $this->set('reportData', $this->{$this->modelClass}->find('all',array('order' => $order,'conditions'=>$conditions)));
        Configure::write('debug',0);
        $this->layout = 'report';
        $this->render('report_display');
    } else {
        $this->setRelated();
        $this->{$this->modelClass}->recursive = 0;            
        $this->render('report_form');
    }          
}  

}

// (PHP 5 >= 5.3.0)
if ( false === function_exists('lcfirst') ): 
    function lcfirst( $str ) 
    { return (string)(strtolower(substr($str,0,1)).substr($str,1));} 
endif; 
