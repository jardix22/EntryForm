<h1>Edit User</h1>
<?php 
	echo $this->Form->create('Phase', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->input('start_date', array('type' => 'text', 'id'=>'da-ex-datepicker-0'));
	echo $this->Form->input('end_date', array('type' => 'text', 'id'=>'da-ex-datepicker-1')); 
	echo $this->Form->input('state');
	echo $this->Form->end('Save');
?>