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
<div class="services index">
	<h2><?php echo __('Services');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
                        <th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
                        <th><?php echo $this->Paginator->sort('service_state_id');?></th>			
			<th><?php echo $this->Paginator->sort('service_type_id');?></th>
			<th><?php echo $this->Paginator->sort('approval_date');?></th>
			<th><?php echo $this->Paginator->sort('expiration_date');?></th>
			<th><?php echo $this->Paginator->sort('payment_date');?></th>
			<th><?php echo $this->Paginator->sort('estimated_value');?></th>
			<th><?php echo $this->Paginator->sort('real_value');?></th>
			<th><?php echo $this->Paginator->sort('discount_value');?></th>
			<th><?php echo $this->Paginator->sort('paid_value');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($services as $service): ?>
	<tr>
                <td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($service['Client']['client_name'], array('controller' => 'clients', 'action' => 'view', $service['Client']['id'])); ?>
		</td>
                <td>
			<?php echo $this->Html->link($service['ServiceState']['service_state_desc'], array('controller' => 'servicestates', 'action' => 'view', $service['ServiceState']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($service['ServiceType']['service_type_desc'], array('controller' => 'service_types', 'action' => 'view', $service['ServiceType']['id'])); ?>
		</td>
		<td><?php echo h($service['Service']['approval_date']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['expiration_date']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['payment_date']); ?>&nbsp;</td>
		<td><span class="floatRight"><?php echo h($this->Number->format($service['Service']['estimated_value'],array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => '.',
                    'thousands' => ',')
                )); ?>&nbsp;</span></td>
		<td><span class="floatRight"><?php echo h($this->Number->format($service['Service']['real_value'],array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => '.',
                    'thousands' => ',')
                )); ?>&nbsp;</span></td>
		<td><span class="floatRight"><?php echo h($this->Number->format($service['Service']['discount_value'],array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => '.',
                    'thousands' => ',')
                )); ?>&nbsp;</span></td>		
                <td><span class="floatRight"><?php echo h($this->Number->format($service['Service']['paid_value'],array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => '.',
                    'thousands' => ',')
                )); ?>&nbsp;</span></td>		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $service['Service']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $service['Service']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
                        <?php echo $this->Html->link(__('Professionals'), array('plugin' => null,'controller'=>'professionals_services','action' => 'index','fkfield'=>'service_id','fkid'=>$service['Service']['id'])); ?>                    
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('paginator'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?></li>
	</ul>
</div>