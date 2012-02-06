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
	<h3><?php echo __('Related Services');?></h3>
	<?php if (!empty($currentModel['Service'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Service State'); ?></th>
		<th><?php echo __('Client'); ?></th>
		<th><?php echo __('Service Type'); ?></th>
		<th><?php echo __('Approval Date'); ?></th>
		<th><?php echo __('Expiration Date'); ?></th>
		<th><?php echo __('Payment Date'); ?></th>
		<th><?php echo __('Service Description'); ?></th>
		<th><?php echo __('Estimated Value'); ?></th>
		<th><?php echo __('Real Value'); ?></th>
		<th><?php echo __('Discount Value'); ?></th>
		<th><?php echo __('Paid Value'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['ServiceState']['service_state_desc'];?></td>
			<td><?php echo $service['Client']['client_name'];?></td>
			<td><?php echo $service['ServiceType']['service_type_desc'];?></td>
			<td><?php echo $service['approval_date'];?></td>
			<td><?php echo $service['expiration_date'];?></td>
			<td><?php echo $service['payment_date'];?></td>
			<td><?php echo $service['service_description'];?></td>
			<td><span class="floatRight"><?php echo $this->Number->format($service['estimated_value'],array(
                        'places' => 2,
                        'before' => '',
                        'escape' => false,
                        'decimals' => '.',
                        'thousands' => ',')                
                        );?></span></td>
			<td><span class="floatRight"><?php echo $this->Number->format($service['real_value'],array(
                        'places' => 2,
                        'before' => '',
                        'escape' => false,
                        'decimals' => '.',
                        'thousands' => ',')                
                        );?></span></td>			
                        <td><span class="floatRight"><?php echo $this->Number->format($service['discount_value'],array(
                        'places' => 2,
                        'before' => '',
                        'escape' => false,
                        'decimals' => '.',
                        'thousands' => ',')                
                        );?></span></td>			
                        <td><span class="floatRight"><?php echo $this->Number->format($service['paid_value'],array(
                        'places' => 2,
                        'before' => '',
                        'escape' => false,
                        'decimals' => '.',
                        'thousands' => ',')                
                        );?></span></td>
                        <td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'services', 'action' => 'view', $service['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'services', 'action' => 'edit', $service['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'services', 'action' => 'delete', $service['id']), null, __('Are you sure you want to delete # %s?', $service['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
