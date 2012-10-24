<div>
<?php echo $this->Form->create('Phase', array('class'=>'da-form')); ?>
	<?php echo $this->Form->input('name'); ?>
	<?php echo $this->Form->input('start_date', array('type' => 'text', 'id'=>'da-ex-datepicker-0')); ?>
	<?php echo $this->Form->input('end_date', array('type' => 'text', 'id'=>'da-ex-datepicker-1')); ?>
<?php echo $this->Form->end('Enviar'); ?>
</div>