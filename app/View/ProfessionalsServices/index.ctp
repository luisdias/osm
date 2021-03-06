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
<?php 
echo $this->Html->script(array('professionals-services-index.js'));
echo $this->Form->input('fkfield',array('type'=>'hidden','value'=>$fkfield));
echo $this->Form->input('fkid',array('type'=>'hidden','value'=>$fkid));
?>
<div id="professionalsServices" class="index droppable"></div>
<div class="hmtError"><?php echo __('Professional already associated with this service');?></div>