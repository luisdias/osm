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
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
    
    var $displayField = 'username';
    
    public function __construct($id = false, $table = null, $ds = null) {
        parent::__construct($id, $table, $ds);
        $this->validate = array(
            'username' => array(
                        'notEmpty' => array(
                            'rule' => 'notEmpty',
                            'message' => __('User name is required',true)
                        ),
                         'unique' => array(
                                'rule' => 'isUnique',
                                'message' => __('User name already in use',true),
                        ),                         
                        'length' => array(
                            'rule' => array('minLength', 4),  
                            'message' => __('Minimun size : 4 characters',true)
                        )),
            'new_password' => array(
                    'notempty' => array(
                            'rule' => array('notempty'),
                            'message' => __('Password is required',true),
                            'on' => 'udpate'
                    ),
                    'length' => array(
                        'rule' => array('minLength', 4),  
                        'message' => __('Minimun size : 4 characters',true),
                        'on' => 'update'
                    ),                    
                    'passwordConfirm' => array(
                        'rule' => 'checkPasswords',
                        'message' => __('Passwords do not match',true),
                        'on' => 'update'
                    )
            )            
            
        );
    }         
    
    function checkPasswords() {
        if ($this->data['User']['new_password'] == $this->data['User']['password_confirm'])  {
            $this->data['User']['password'] = $this->data['User']['tmp_password'];
            return true; 
        }

        else
            return false; 
    }         
}
