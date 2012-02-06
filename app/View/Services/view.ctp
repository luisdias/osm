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
<div class="services view">
<h2><?php  echo __('Service');?></h2>
	<dl>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['Client']['client_name'], array('controller' => 'clients', 'action' => 'view', $service['Client']['id'])); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Service State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['ServiceState']['service_state_desc'], array('controller' => 'servicestates', 'action' => 'view', $service['ServiceState']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['ServiceType']['service_type_desc'], array('controller' => 'service_types', 'action' => 'view', $service['ServiceType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Date'); ?></dt>
		<dd>
			<?php echo h($service['Service']['approval_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration Date'); ?></dt>
		<dd>
			<?php echo h($service['Service']['expiration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Date'); ?></dt>
		<dd>
			<?php echo h($service['Service']['payment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Description'); ?></dt>
		<dd>
			<?php echo h($service['Service']['service_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Begin Date'); ?></dt>
		<dd>
			<?php echo h($service['Service']['begin_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($service['Service']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estimated Value'); ?></dt>
		<dd>
			<?php echo h($service['Service']['estimated_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Real Value'); ?></dt>
		<dd>
			<?php echo h($service['Service']['real_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount Value'); ?></dt>
		<dd>
			<?php echo h($service['Service']['discount_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid Value'); ?></dt>
		<dd>
			<?php echo h($service['Service']['paid_value']); ?>
			&nbsp;
		</dd>
                <?php echo $this->element('address_view',array('currentModel' => $service)); ?>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($service['Service']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($service['Service']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Professionals');?></h3>
	<?php if (!empty($service['ProfessionalsService'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Professional Name'); ?></th>
                <th><?php echo __('Total time'); ?></th>
                <th><?php echo __('Total value'); ?></th>
                <th><?php echo __('Payment date'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($service['ProfessionalsService'] as $professional): ?>
		<tr>
			<td><?php echo $professionals[$professional['professional_id']];?></td>
                        <td><?php echo $professional['total_time'];?></td>
                        <td><?php echo $professional['total_value'];?></td>
                        <td><?php echo $professional['payment_date'];?></td>                        
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>