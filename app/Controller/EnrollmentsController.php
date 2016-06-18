<?php
/**
 * Created by PhpStorm.
 * User: NinjaCod3r
 * Date: 04/09/2015
 * Time: 7:05 PM
 */
    class EnrollmentsController extends AppController{

    	public $components = array('Session');


    	/*index action method for Rooms*/
		public function Index(){
			try {
				$this->set('IndexEnrollment','Reservation Home Page');
				$data = $this->Enrollment->usp_getAllEnrollment();
				$this->set('Enrollments',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}


		/*add action method for add new Enrollment*/
		public function Add(){
			try
			{
					if ( $this->request->is('post')) {
						 $this->Enrollment->create();
						 
						 $StudentID =  $this->request->data['Enrollment']['Student_ID_Fk'] ;
						 $CourseID =  $this->request->data['Enrollment']['Course_ID_Fk'] ;
						 $ScheduleID =  $this->request->data['Enrollment']['Schedule_ID_Fk'] ;
						
						 $StudentChkReg = $this->Enrollment->chkStudentregBefore($StudentID,$CourseID,$ScheduleID);
						 //check if student register before in course in same day in same schedule
						 //debug($StudentChkReg);
						 if ( $StudentChkReg == false ) {
						 	//if student register before in course and schedule
						 	$this->Session->setFlash('Error the student register before in the course');
						 }else{

							 $course_ID = $this->request->data['Enrollment']['Course_ID_Fk'];
							 $result = $this->Enrollment->execproc_GetCountRegCourse($course_ID);
							 $this->loadModel('Course');
							 $C_Quota = $this->Course->findById($course_ID);
							 $numQuota = (int) $C_Quota['Course']['C_Quota'];
							 $numStudent = (int) $result[0][0]['count(Course_ID_Fk)'];
							 if ($numStudent >= $numQuota || is_null($numStudent)) {
							 	//when the course quota is completed
							 	//debug('error the course quota is completed');
							 	$this->Session->setFlash('Error the course quota is completed Try again later');
							 }else{
							 	//course Quota avilabl then form data can be validated and saved...
							    if ($this->Enrollment->save($this->request->data)) {

							        // Set a session flash message and redirect.
							      	$this->Session->setFlash('Reservation has been saved!');
							        $this->redirect('Index');
							    }
							 }

						}	
					}
						
			 	
					$this->loadModel('Student');
			 		$this->loadModel('Course');
	 				$this->loadModel('Schedule');


			        //we get the students from the database
			        $students = $this->Student->find('list',
					            array(
					                'fields' => array('Student.ID','Student.name'),
					                'order' => array('Student.S_FName','Student.S_FName')));
			        $this->set('students', $students);

			         //we get the Courses from the database
			        $courses = $this->Course->find('list',
					            array('fields' => array('Course.ID','Course.C_Name'),
					                  'order' => array('Course.C_Name')));
			        $this->set('courses', $courses);

			        $this->set('students', $students);

			         //we get the Schedule from the database
			        $Schedules = $this->Schedule->find('list',
					            array('fields' => array('Schedule.ID','Schedule.S_Day'),
					                  'order' => array('schedule.S_Day')));
			        $this->set('schedules', $Schedules);
			}
			catch( Exception $e ){
				echo 'Message: ' . $e->getMessage();
			}

		}

		
    }


?>