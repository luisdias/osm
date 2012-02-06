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
?>
<ul>
<li><?php echo $this->Html->link(__('Client categories'), array('controller' => 'clientcategories', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Client types'), array('controller' => 'clienttypes', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Service states'), array('controller' => 'servicestates', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Service types'), array('controller' => 'servicetypes', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Settings'), array('controller' => 'settings', 'action' => 'index')); ?></li>                    
</ul>