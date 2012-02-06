<?php
    echo $this->Html->tag('h2','Login');
    echo $this->Form->create();
    echo $this->Form->input('username',array('size'=>'10'));
    echo $this->Form->input('password',array('size'=>'10'));
    echo $this->Form->end('Login');
?>