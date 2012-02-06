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
<div class="settings index">
	<h2><?php echo __('Settings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('my_company_name');?></th>
			<th><?php echo $this->Paginator->sort('hourly_rate');?></th>
			<th><?php echo $this->Paginator->sort('language');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($settings as $setting): ?>
	<tr>
		<td><?php echo h($setting['Setting']['my_company_name']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['hourly_rate']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['language']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setting['Setting']['id'])); ?>                    
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>