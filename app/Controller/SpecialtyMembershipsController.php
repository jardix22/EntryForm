<?php
	/**
	* SpecialtyMemberships
	*/
	class SpecialtyMemberships extends AppController
	{
		public $name = 'Students';

		public function add()
		{
			$this->set('phase_id', $this->request->params['pass'][0]);

			if ($this->request->is('post')) {
				
				$this->request->data['Student']['phase_id'] = $this->request->params['pass'][0];

				if ($this->Student->save($this->request->data)) {
					$this->Session->setFlash('Student has been saved');
				} else {
					$this->Session->setFlash('Error');
				}
			}
		}
	}
?>