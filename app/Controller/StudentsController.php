<?php

	/**
	* 
	*/
	class StudentsController extends AppController
	{
		
		public $components = array('Session');

		/*index action method for students*/
		public function Index(){
			try {
				$this->set('IndexStudent','Students Home Page');
				$data = $this->Student->find('all');
				$this->set('Students',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*add action method for add new student*/
		public function Add(){
			try
			{
					if ( $this->request->is('post')) {
						 $this->Student->create();
						 // If the form data can be validated and saved...
				        if ($this->Student->save($this->request->data)) {
				            // Set a session flash message and redirect.
				            $this->Session->setFlash('Student has been saved!');
				            $this->redirect('Index');
				        }
					}
			}
			catch( Exception $e ){
				echo 'Message: ' . $e->getMessage();
			}

		}

		/*view action method for student take student id as parameter*/
		public function view($id){
			try {
				$data = $this->Student->findById($id);
				$this->Set('studentView',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*edit action method for student take student id as parameter */
		public function Edit($id){
			try {
				$data = $this->Student->findById($id);

				if ($this->request->is( array('post' ,'put'))) {
					$this->Student->id = $id ;

					if ($this->Student->save($this->request->data)) {
						$this->Session->setFlash('The Student has been uptaded');
						$this->redirect('Index');
					}
				}
				$this->request->data = $data ;
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();	
			}
		}

		/*delete action method for student take student id as parameter */
		public function Delete($id){
			try {
				$this->Student->id = $id ;

				if ($this->request->is( array('post' ,'put'))) {
					$this->Student->id = $id ;

					if ($this->Student->delete()) {
						$this->Session->setFlash('The Student has been deleted');
						$this->redirect('Index');
					}
				}

			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}
	}
?>