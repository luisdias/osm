<div class="members form">
    <?php echo $this->Form->create('User');?>
            <fieldset>
                    <legend><?php echo __('Password change');?></legend>
            <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('username',array('disabled'=>'true','label' => 'Nome'));
                    echo $this->Form->input('username',array('type' => 'hidden'));
                    echo $this->Form->input('new_password', array('type' => 'password','title'=>__('Enter the new password',true)));
                    echo $this->Form->input('password_confirm',array('type' => 'password','title'=>__('Enter the password confirmation',true)));
                    echo $this->Form->input('tmp_password',array('type' => 'hidden','value'=>''));
            ?>
            </fieldset>
    <?php echo $this->Form->end(__('Submit', true));?>
</div>