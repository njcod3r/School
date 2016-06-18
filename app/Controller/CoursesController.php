<?php
/**
 * Created by PhpStorm.
 * User: NinjaCod3r
 * Date: 04/09/2015
 * Time: 7:05 PM
 */
    class CoursesController extends AppController{

    	public $components = array('Session');


    	/*index action method for courses*/
		public function Index(){
			try {
				$this->set('IndexCourse','Course Home Page');
				$data = $this->Course->find('all');
				$this->set('Courses',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*add action method for add new course*/
		public function Add(){
			try
			{
					if ( $this->request->is('post')) {
						 $this->Course->create();
						 // If the form data can be validated and saved...
				        if ($this->Course->save($this->request->data)) {
				            // Set a session flash message and redirect.
				            $this->Session->setFlash('Course has been saved!');
				            $this->redirect('Index');
				        }
					}
			}
			catch( Exception $e ){
				echo 'Message: ' . $e->getMessage();
			}

		}

		/*view action method for course take course id as parameter*/
		public function view($id){
			try {
				$data = $this->Course->findById($id);
				$this->Set('courseView',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*edit action method for Course take Course id as parameter */
		public function Edit($id){
			try {
				$data = $this->Course->findById($id);

				if ($this->request->is( array('post' ,'put'))) {
					$this->Course->id = $id ;

					if ($this->Course->save($this->request->data)) {
						$this->Session->setFlash('The Course has been uptaded');
						$this->redirect('Index');
					}
				}
				$this->request->data = $data ;
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();	
			}
		}

		/*delete action method for Course take Course id as parameter */
		public function Delete($id){
			try {
				$this->Course->id = $id ;

				if ($this->request->is( array('post' ,'put'))) {
					$this->Course->id = $id ;

					if ($this->Course->delete()) {
						$this->Session->setFlash('The Course has been deleted' );
						$this->redirect('Index');
					}
				}

			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}
    }


?>