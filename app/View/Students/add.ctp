<?php
echo $this->Form->create('Student', array('action'=>'create'));
	echo $this->Form->input('Student.document', array('label' => 'DNI'));
	echo $this->Form->input('Student.name', array('label' => 'Nombre'));
	echo $this->Form->input('Student.last_fn', array('label' => 'Apellido Paterno'));
	echo $this->Form->input('Student.last_mn', array('label' => 'Apellido Materno'));
	echo $this->Form->input('Student.birtdate', array( 'type' => 'text', 'id' => 'da-ex-datepicker-year', 'label' => 'Fecha de Nacimiento'));
	echo $this->Form->input('Student.address', array('label' => 'Direccion' ));
	echo $this->Form->input('Student.email', array('label' => 'Correo Electronico' ));
?>
	 Situacio Laboral
<?php 
	echo $this->Form->input('occupation', array('label' => 'Ocupacion Actual' ));
	echo $this->Form->input('workplace', array('label' => 'Centro de Trabajo' ));
	echo $this->Form->input('charge', array('label' => 'Cargo que Ocupa' ));


?>
	 Titulo Profesional
<?php 
	echo $this->Form->input('ProfessionalTitle.0.university', array('label' => 'Universidad' ));
	echo $this->Form->input('ProfessionalTitle.0.country', array('label' => 'Pais' ));
	echo $this->Form->input('ProfessionalTitle.0.specialty', array('label' => 'Especialidad' ));
	echo $this->Form->input('ProfessionalTitle.0.degree', array('label' => 'Grado' ));
echo $this->Form->end('Enviar');