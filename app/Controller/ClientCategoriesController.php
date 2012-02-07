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
 * ClientCategories Controller
 *
 * @property ClientCategory $ClientCategory
 */
class ClientCategoriesController extends AppController {

public $paginate = array('limit'=>10, 'order'=>array('client_category_desc'=>'asc'));
public $fk = null;
public $adminOnly = true;

public function __construct( $request = NULL, $response = NULL ) {
    parent::__construct($request,$response);
    if ( empty($this->translatedSingularName) )
            $this->translatedSingularName = __('Client category',true);

}
    
}
