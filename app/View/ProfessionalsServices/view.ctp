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
<div class="professionalsServices view">
<h2><?php  echo __('Professionals Service');?></h2>
	<dl>
		<dt><?php echo __('Professional'); ?></dt>
		<dd>
			<?php echo $this->Html->link($professionalsService['Professional']['id'], array('controller' => 'professionals', 'action' => 'view', $professionalsService['Professional']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($professionalsService['Service']['id'], array('controller' => 'services', 'action' => 'view', $professionalsService['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Time'); ?></dt>
		<dd>
			<?php echo h($professionalsService['ProfessionalsService']['total_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Value'); ?></dt>
		<dd>
			<?php echo h($professionalsService['ProfessionalsService']['total_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Date'); ?></dt>
		<dd>
			<?php echo h($professionalsService['ProfessionalsService']['payment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($professionalsService['ProfessionalsService']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($professionalsService['ProfessionalsService']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Professionals Service'), array('action' => 'edit', $professionalsService['ProfessionalsService']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Professionals Service'), array('action' => 'delete', $professionalsService['ProfessionalsService']['id']), null, __('Are you sure you want to delete # %s?', $professionalsService['ProfessionalsService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professionals Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals'), array('controller' => 'professionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional'), array('controller' => 'professionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
