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
<div class="clients view">
<h2><?php  echo __('Client');?></h2>
    <dl>
        <dt><?php echo __('Client Category'); ?></dt>
        <dd>
                <?php echo $this->Html->link($client['ClientCategory']['client_category_desc'], array('controller' => 'client_categories', 'action' => 'view', $client['ClientCategory']['id'])); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Client Type'); ?></dt>
        <dd>
                <?php echo $this->Html->link($client['ClientType']['client_type_desc'], array('controller' => 'client_types', 'action' => 'view', $client['ClientType']['id'])); ?>
                &nbsp;
        </dd>            
        <dt><?php echo __('Client Name'); ?></dt>
        <dd>
                <?php echo h($client['Client']['client_name']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Corporate Name'); ?></dt>
        <dd>
                <?php echo h($client['Client']['corporate_name']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Phone'); ?></dt>
        <dd>
                <?php echo h($client['Client']['phone']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Federal Tax Id'); ?></dt>
        <dd>
                <?php echo h($client['Client']['federal_tax_number']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Email'); ?></dt>
        <dd>
                <?php echo h($client['Client']['email']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Website'); ?></dt>
        <dd>
                <?php echo h($client['Client']['website']); ?>
                &nbsp;
        </dd>
        <?php echo $this->element('address_view',array('currentModel' => $client)); ?>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
                <?php echo h($client['Client']['created']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
                <?php echo h($client['Client']['modified']); ?>
                &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contacts');?></h3>
	<?php if (!empty($client['Contact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Contact Name'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Contact'] as $contact): ?>
		<tr>
			<td><?php echo $contact['contact_name'];?></td>
			<td><?php echo $contact['role'];?></td>
			<td><?php echo $contact['birth_date'];?></td>
			<td><?php echo $contact['cell_phone'];?></td>
			<td><?php echo $contact['phone'];?></td>
			<td><?php echo $contact['email'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<?php echo $this->element('related_services',array('currentModel' => $client)); ?>