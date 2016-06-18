<?php

	class ReportsController extends AppController {

		public function Index(){
			
		}

		public function StudentCourseGrade(){
			$this->loadModel('Student');

			//we get the students from the database
			$students = $this->Student->find('list',array(
					    'fields' => array('Student.ID','Student.name'),
					    'order' => array('Student.S_FName','Student.S_FName')));
						$this->set('students', $students);
		}

		public function findStudent(){
			//debug($this->request->data['Student_ID_Fk']);
			$Student_ID = (int)  mysql_real_escape_string( $this->request->data['Student_ID_Fk']);
			//$data = $this->query("CALL usp_listStuCourseGrade($this->request->data['Student_ID_Fk']);");

			//connect to database
			$connection = mysqli_connect("localhost", "root", "", "schooldb");

			//run the store proc
			$query = mysqli_query($connection ,"SELECT * FROM student WHERE ID = $Student_ID");
			$Student_Info = mysqli_fetch_array($query);

			$data = mysqli_query($connection, 
			    "CALL usp_listStuCourseGrade($Student_ID);") or die("Query fail: " . mysqli_error());

			$this->set('Coursesdata', $data);
			$this->set('Student_Info', $Student_Info);
		}


		public function CourseAttandce(){

			//connect to database
			$connection = mysqli_connect("localhost", "root", "", "schooldb");

			$data = mysqli_query($connection, 
			    "CALL usp_listCourseAttande();") or die("Query fail: " . mysqli_error());
			//debug($data);
			$this->set('CoursesAttandce', $data);

		}
	}
?>