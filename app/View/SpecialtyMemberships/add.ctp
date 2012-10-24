<?php echo $phase_id; ?>
<div>
<?php echo $this->Form->create('Student', array('class'=>'da-form')); ?>
	<?php echo $this->Form->input('person_id'); ?>
<?php echo $this->Form->end('Enviar'); ?>
</div>