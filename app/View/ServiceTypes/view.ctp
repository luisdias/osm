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
<div class="serviceTypes view">
<h2><?php  echo __('Service Type');?></h2>
	<dl>
		<dt><?php echo __('Service Type Desc'); ?></dt>
		<dd>
			<?php echo h($serviceType['ServiceType']['service_type_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($serviceType['ServiceType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($serviceType['ServiceType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Type'), array('action' => 'edit', $serviceType['ServiceType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Type'), array('action' => 'delete', $serviceType['ServiceType']['id']), null, __('Are you sure you want to delete # %s?', $serviceType['ServiceType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<?php echo $this->element('related_services',array('currentModel' => $serviceType)); ?>