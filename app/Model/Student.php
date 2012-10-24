<?php
	/**
	* Person
	*/
	class Student extends AppModel
	{
		public $name = 'Student';
		public $hasMany = array(
			'ProfessionalTitle' => array(
				'className' => 'ProfessionalTitle', 
				'dependent' => true
				)
			);
		public $hasOne = array(
			'LaborState' => array(
				'className' => 'LaborState', 
				'dependent' => true
				)
			);
	}
