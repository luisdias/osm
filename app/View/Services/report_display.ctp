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
<h1>OSM : Open Service Manager</h1>
<div id="report_display" class="report_display">
    <h3><?php __('Relatório de Serviços');?></h3>
    <?php 
    $counter = 0;
    $estimatedTotal = 0;
    $realTotal = 0;
    $discountTotal = 0;
    $paidTotal = 0;
    ?>     
    <?php if (!empty($reportData)):?>
    <table cellpadding = "0" cellspacing = "0" class="report">
    <tr class="header">
            <th><?php echo __('Service'); ?></th>
            <th><?php echo __('Client Name'); ?></th>
            <th><?php echo __('State'); ?></th>
            <th><?php echo __('Type'); ?></th>
            <th><?php echo __('Approval'); ?></th>
            <th><?php echo __('Expiration'); ?></th>
            <th><?php echo __('Payment'); ?></th>
            <th><?php echo __('Begin'); ?></th>
            <th><?php echo __('End'); ?></th>
            <th><?php echo __('Estimated'); ?></th>
            <th><?php echo __('Real'); ?></th>
            <th><?php echo __('Discount'); ?></th>
            <th><?php echo __('Paid'); ?></th>
    </tr>
    <?php
            foreach ($reportData as $service):
                $counter++;
                $estimatedTotal += $service['Service']['estimated_value'];
                $realTotal += $service['Service']['real_value'];
                $discountTotal += $service['Service']['discount_value'];
                $paidTotal += $service['Service']['paid_value'];            
            ?>
            <tr class="body">
                    <td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
                    <td>
                            <?php echo $service['Client']['client_name']; ?>
                    </td>
                    <td>
                            <?php echo $service['ServiceState']['service_state_desc']; ?>
                    </td>
                    <td>
                            <?php echo $service['ServiceType']['service_type_desc']; ?>
                    </td>
                    <td class="date"><?php echo h($service['Service']['approval_date']); ?>&nbsp;</td>
                    <td class="date"><?php echo h($service['Service']['expiration_date']); ?>&nbsp;</td>
                    <td class="date"><?php echo h($service['Service']['payment_date']); ?>&nbsp;</td>
                    <td class="date"><?php echo h($service['Service']['begin_date']); ?>&nbsp;</td>
                    <td class="date"><?php echo h($service['Service']['end_date']); ?>&nbsp;</td>
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
                    )); ?>&nbsp;</span></td>
            </tr>    
    <?php endforeach; ?>
            <tr class="body">
                    <td colspan="9"><b><?php echo _('Total records : ') . $counter; ?></b></td>
                    <td><b><span class="floatRight"><?php echo $this->Number->format($estimatedTotal,array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => '.',
                    'thousands' => ',')
                    ); ?>&nbsp;</span></b></td>
                    <td><b><span class="floatRight"><?php echo $this->Number->format($realTotal,array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => '.',
                    'thousands' => ',')
                    ); ?>&nbsp;</span></b></td>
                    <td><b><span class="floatRight"><?php echo $this->Number->format($discountTotal,array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => '.',
                    'thousands' => ',')
                    ); ?>&nbsp;</span></b></td>
                    <td><b><span class="floatRight"><?php echo $this->Number->format($paidTotal,array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => '.',
                    'thousands' => ',')
                    ); ?>&nbsp;</span></b></td>
                    
            </tr>             
    </table>
    <div class="report_date_stamp"><?php echo _('Created') . ' : ' . date('Y-m-d H:i:s'); ?></div>
<?php endif; ?>
<?php 
if (!empty($conditions)) {
    echo '<h2>' . __('Report parameters') . '</h2>';
    foreach ($conditions as $condition) {
        foreach ($condition as $key => $value) {
            if (strpos($key,'_id')>0)
                echo substr($key, 0, -3);
            else
                echo $key;
            switch ($key) {
                case 'client_id':
                    echo ' = ' . $client['Client']['client_name'];
                    break;
                case 'service_state_id':
                    echo ' = ' . $service_state['ServiceState']['service_state_desc'];
                    break;
                case 'service_type_id':
                    echo ' = ' . $service_type['ServiceType']['service_type_desc'];
                    break;                
                default:
                    echo $value;
                    break;
            }
            
            echo '<br/>';
        }
    }
}
?>    
</div>