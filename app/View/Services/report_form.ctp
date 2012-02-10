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
<div class="services report">
<?php echo $this->Form->create('Service', array('url' => array_merge(array('action' => 'report')),'target'=>'_blank'));?>
	<fieldset>
		<legend><?php echo __('Service Reports'); ?></legend>
                <?php 
		echo $this->Form->input('client_id',array('empty'=>__('---Select---',true),'title'=>__('Required field ')));                
		echo $this->Form->input('service_state_id',array('empty'=>__('---Select---',true),'title'=>__('Required field ')));
		echo $this->Form->input('service_type_id',array('empty'=>__('---Select---',true),'title'=>__('Required field ')));
                ?>
                <div class="input text">
                    <div class="leftPane">
                <?php echo $this->Form->input('approval_date_1',array('type'=>'text','label'=>__('Approval Date').' >=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">
                <?php echo $this->Form->input('approval_date_2',array('type'=>'text','label'=>__('Approval Date').' <=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                </div>
                
                <div class="input text">
                    <div class="leftPane">                
		<?php echo $this->Form->input('expiration_date_1',array('type'=>'text','label'=>__('Expiration Date').' >=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">                        
                <?php echo $this->Form->input('expiration_date_2',array('type'=>'text','label'=>__('Expiration Date').' <=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                </div>
                
                <div class="input text">
                    <div class="leftPane">                          
		<?php echo $this->Form->input('payment_date_1',array('type'=>'text','label'=>__('Payment Date').' >=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">                        
                <?php echo $this->Form->input('payment_date_2',array('type'=>'text','label'=>__('Payment Date').' <=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                </div>

                <div class="input text">
                    <div class="leftPane">                                          
		<?php echo $this->Form->input('begin_date_1',array('type'=>'text','label'=>__('Begin Date').' >=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">                           
		<?php echo $this->Form->input('begin_date_2',array('type'=>'text','label'=>__('Begin Date').' <=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                </div>

                <div class="input text">
                    <div class="leftPane">
                <?php echo $this->Form->input('end_date_1',array('type'=>'text','label'=>__('End Date').' >=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">
                <?php echo $this->Form->input('end_date_2',array('type'=>'text','label'=>__('End Date').' <=','class'=>'datepicker','size'=>'10','maxlength'=>'10','title'=>__('Format yyyy-mm-dd'),'div'=>false)); ?>
                    </div>
                </div>
                
                <div class="input text">
                    <div class="leftPane">                
		<?php echo $this->Form->input('estimated_value_1',array('label'=>__('Estimated Value').' >=','title'=>__('Numeric field'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">
		<?php echo $this->Form->input('estimated_value_2',array('label'=>__('Estimated Value').' <=','title'=>__('Numeric field'),'div'=>false)); ?>
                    </div>
                </div>
 
                <div class="input text">
                    <div class="leftPane">                 
		<?php echo $this->Form->input('real_value_1',array('label'=>__('Real Value').' >=','title'=>__('Numeric field'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">                        
		<?php echo $this->Form->input('real_value_2',array('label'=>__('Real Value').' <=','title'=>__('Numeric field'),'div'=>false)); ?>
                    </div>
                </div>

                
                <div class="input text">
                    <div class="leftPane">                    
		<?php echo $this->Form->input('discount_value_1',array('label'=>__('Discount Value').' >=','title'=>__('Numeric field'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">                            
		<?php echo $this->Form->input('discount_value_2',array('label'=>__('Discount Value').' <=','title'=>__('Numeric field'),'div'=>false)); ?>
                    </div>
                </div>                
                
                <div class="input text">
                    <div class="leftPane">                    
		<?php echo $this->Form->input('paid_value_1',array('label'=>__('Paid Value').' >=','title'=>__('Numeric field'),'div'=>false)); ?>
                    </div>
                    <div class="rightPane">                            
		<?php echo $this->Form->input('paid_value_2',array('label'=>__('Paid Value').' <=','title'=>__('Numeric field'),'div'=>false)); ?>
                    </div>
                </div>                     
	</fieldset>
<?php echo $this->Form->submit(__('Report'));?>
<?php echo $this->Html->tag('div',$this->Html->link(__('Cancel'),array('action' => 'index')),array('class' => 'cancelButton')); ?>
<?php echo $this->Form->end() ?>  
</div>