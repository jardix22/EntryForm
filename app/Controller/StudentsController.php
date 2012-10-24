<?php 
	/**
	* StudentsController
	*/
	class StudentsController extends AppController
	{
	
		public function add()
		{

		}
		public function create()
		{
			if ($this->request->is('post')) {
				if (!empty($this->request->data)) {
					// Use the following to avoid validation errors:
					unset($this->Student->ProfessionalTitle->validate['company_id']);
					if ($this->Student->saveAssociated($this->request->data)) {					
						$this->Session->setFlash("Estudiante Registrado");
					} else {
						$this->Session->setFlash("Error al Registrar Estudiante ");
					}
				}
			}
		}
	}
