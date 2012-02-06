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
<div class="addresses view">
        <dt><?php echo __('Street'); ?></dt>
        <dd>
                <?php echo h($currentModel['Address']['street']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Number'); ?></dt>
        <dd>
                <?php echo h($currentModel['Address']['number']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('City'); ?></dt>
        <dd>
                <?php echo h($currentModel['Address']['city']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('District'); ?></dt>
        <dd>
                <?php echo h($currentModel['Address']['district']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('State'); ?></dt>
        <dd>
                <?php echo h($currentModel['Address']['state']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Zip Code'); ?></dt>
        <dd>
                <?php echo h($currentModel['Address']['zip_code']); ?>
                &nbsp;
        </dd>
        <dt><?php echo __('Country'); ?></dt>
        <dd>
                <?php echo h($currentModel['Address']['country']); ?>
                &nbsp;
        </dd>
</div>
