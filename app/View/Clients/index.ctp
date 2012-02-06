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
<div class="clients index">
	<h2><?php echo __('Clients');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
            <th><?php echo $this->Paginator->sort('client_category_id');?></th>
            <th><?php echo $this->Paginator->sort('client_type_id');?></th>            
            <th><?php echo $this->Paginator->sort('client_name');?></th>
            <th><?php echo $this->Paginator->sort('corporate_name');?></th>
            <th><?php echo $this->Paginator->sort('phone');?></th>
            <th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clients as $client): ?>
	<tr>
            <td>
                    <?php echo $this->Html->link($client['ClientCategory']['client_category_desc'], array('controller' => 'client_categories', 'action' => 'view', $client['ClientCategory']['id'])); ?>
            </td>
            <td>
                    <?php echo $this->Html->link($client['ClientType']['client_type_desc'], array('controller' => 'client_types', 'action' => 'view', $client['ClientType']['id'])); ?>
            </td>            
            <td><?php echo h($client['Client']['client_name']); ?>&nbsp;</td>
            <td><?php echo h($client['Client']['corporate_name']); ?>&nbsp;</td>
            <td><?php echo h($client['Client']['phone']); ?>&nbsp;</td>
            <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?>
            </td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('paginator'); ?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
    </ul>
</div>