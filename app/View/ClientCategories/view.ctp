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
<div class="clientCategories view">
<h2><?php  echo __('Client Category');?></h2>
	<dl>
		<dt><?php echo __('Client Category Desc'); ?></dt>
		<dd>
			<?php echo h($clientCategory['ClientCategory']['client_category_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($clientCategory['ClientCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($clientCategory['ClientCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
        <li><?php echo $this->Html->link(__('Edit Client Category'), array('action' => 'edit', $clientCategory['ClientCategory']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Client Category'), array('action' => 'delete', $clientCategory['ClientCategory']['id']), null, __('Are you sure you want to delete # %s?', $clientCategory['ClientCategory']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Client Categories'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Client Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<?php echo $this->element('related_clients',array('currentModel' => $clientCategory)); ?>
