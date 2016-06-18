<?php
/**
 * Created by PhpStorm.
 * User: NinjaCod3r
 * Date: 04/09/2015
 * Time: 7:05 PM
 */
    class RoomsController extends AppController{

    	public $components = array('Session');


    	/*index action method for Rooms*/
		public function Index(){
			try {
				$this->set('IndexRoom','Rooms Home Page');
				$data = $this->Room->find('all');
				$this->set('Rooms',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*add action method for add new Room*/
		public function Add(){
			try
			{
					if ( $this->request->is('post')) {
						 $this->Room->create();
						 // If the form data can be validated and saved...
				        if ($this->Room->save($this->request->data)) {
				            // Set a session flash message and redirect.
				            $this->Session->setFlash('Room has been saved!');
				            $this->redirect('Index');
				        }
					}
			}
			catch( Exception $e ){
				echo 'Message: ' . $e->getMessage();
			}

		}

		/*view action method for room take room id as parameter*/
		public function view($id){
			try {
				$data = $this->Room->findById($id);
				$this->Set('roomView',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*edit action method for room take room id as parameter */
		public function Edit($id){
			try {
				$data = $this->Room->findById($id);

				if ($this->request->is( array('post' ,'put'))) {
					$this->Room->id = $id ;

					if ($this->Room->save($this->request->data)) {
						$this->Session->setFlash('The Room has been uptaded');
						$this->redirect('Index');
					}
				}
				$this->request->data = $data ;
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();	
			}
		}

		/*delete action method for room take room id as parameter */
		public function Delete($id){
			try {
				$this->Room->id = $id ;

				if ($this->request->is( array('post' ,'put'))) {
					$this->Room->id = $id ;

					if ($this->Room->delete()) {
						$this->Session->setFlash('The Room has been deleted');
						$this->redirect('Index');
					}
				}

			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}
    }


?>