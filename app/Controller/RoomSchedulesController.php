<?php
/**
 * Created by PhpStorm.
 * User: NinjaCod3r
 * Date: 04/09/2015
 * Time: 7:05 PM
 */
    class RoomSchedulesController extends AppController{

    	public $components = array('Session');


    	/*index action method for Room Reservation*/
		public function Index(){
			try {
				$this->set('IndexRoomSchedule','Room Schedule Home Page');
				$data = $this->RoomSchedule->usp_getAllReserveRooms();
				$this->set('RoomSchedules',$data);
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		}

		/*add action method for add new room reservation*/
		public function Add(){
			try
			{
					if ( $this->request->is('post')) {
						
						 $RoomID =  $this->request->data['RoomSchedule']['Room_ID_Fk'] ;
						 $ScheduleID =  $this->request->data['RoomSchedule']['Schedule_ID_Fk'] ;

						 $RoomChkReg = $this->RoomSchedule->chkRoomReservationBefore($RoomID,$ScheduleID);

						 if ( $RoomChkReg == false ) {
						 	//if student register before in course and schedule
						 	$this->Session->setFlash('Error the room reserve before at this time');
						 }else{
							//course Quota avilabl then form data can be validated and saved...
							if ($this->RoomSchedule->save($this->request->data)) {

							    // Set a session flash message and redirect.
								$this->Session->setFlash('Reservation Room has been saved!');
								$this->redirect('Index');
							}
						}
					}
						
			 	
					$this->loadModel('Room');
					$this->loadModel('Schedule');
			 		$this->loadModel('Course');



			        //we get the rooms from the database
			        $Rooms = $this->Room->find('list',
					            array(
					                'fields' => array('Room.ID','Room.R_Name'),
					                'order' => array('Room.R_Name')));
			        $this->set('rooms', $Rooms);

			         //we get the Schedule from the database
			        $Schedules = $this->Schedule->find('list',
					            array('fields' => array('Schedule.ID','Schedule.FullSchedule'),
					                  'order' => array('schedule.S_Day')));
			        $this->set('schedules', $Schedules);

			        //we get the Courses from the database
			        $courses = $this->Course->find('list',
					            array('fields' => array('Course.ID','Course.C_Name'),
					                  'order' => array('Course.C_Name')));
			        $this->set('courses', $courses);


			}
			catch( Exception $e ){
				echo 'Message: ' . $e->getMessage();
			}

		}

		
    }


?>