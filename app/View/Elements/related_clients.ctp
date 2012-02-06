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
<div class="related">
	<h3><?php echo __('Related Clients');?></h3>
	<?php if (!empty($currentModel['Client'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Client Name'); ?></th>
		<th><?php echo __('Corporate Name'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['client_name'];?></td>
			<td><?php echo $client['corporate_name'];?></td>
			<td><?php echo $client['phone'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), null, __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>