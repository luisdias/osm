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
<div id="paginator">
    <p><?php echo __('Page'); ?>
    <?php echo $this->Paginator->prev($this->Html->image('resultset_previous.png'), array('escape'=>false)); ?>
    <span class="currentPage"><?php echo $this->Paginator->current(); ?></span>
    <?php echo $this->Paginator->next($this->Html->image('resultset_next.png'), array('escape'=>false)); ?> 
    <?php echo __('out of'); ?>
    <?php echo $this->Paginator->counter(array('format' =>'%pages%')); ?>
    <?php echo __('page(s)'); ?>
    | <?php echo __('Total records'); ?>: <b><?php echo $this->Paginator->counter(array('format' =>'%count%')); ?></b>
    </p>
</div>