<?php
/**
 * Created by PhpStorm.
 * User: NinjaCod3r
 * Date: 04/09/2015
 * Time: 7:05 PM
 */
    class SchedulesController extends AppController{

    	public $components = array('Session');


    	/*index action method for Schedules*/
		public function Index(){
			try {
				$this->set('IndexSchedules','Schedules Home Page');
				$data = $this->Schedule->find('all');
				$this->set('Schedules',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*add action method for add new Schedules*/
		public function Add(){
			try
			{
					if ( $this->request->is('post')) {
						 $this->Schedule->create();
						 // If the form data can be validated and saved...
				        if ($this->Schedule->save($this->request->data)) {
				            // Set a session flash message and redirect.
				            $this->Session->setFlash('Schedule has been saved!');
				            $this->redirect('Index');
				        }
					}
			}
			catch( Exception $e ){
				echo 'Message: ' . $e->getMessage();
			}

		}

		/*view action method for Schedules take Schedule id as parameter*/
		public function view($id){
			try {
				$data = $this->Schedule->findById($id);
				$this->Set('scheduleView',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*edit action method for Schedules take Schedule id as parameter */
		public function Edit($id){
			try {
				$data = $this->Schedule->findById($id);

				if ($this->request->is( array('post' ,'put'))) {
					$this->Schedule->id = $id ;

					if ($this->Schedule->save($this->request->data)) {
						$this->Session->setFlash('The Schedule has been uptaded');
						$this->redirect('Index');
					}
				}
				$this->request->data = $data ;
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();	
			}
		}

		/*delete action method for Schedule take Schedule id as parameter */
		public function Delete($id){
			try {
				$this->Schedule->id = $id ;

				if ($this->request->is( array('post' ,'put'))) {
					$this->Schedule->id = $id ;

					if ($this->Schedule->delete()) {
						$this->Session->setFlash('The Schedule has been deleted');
						$this->redirect('Index');
					}
				}

			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}
    }


?>