<?php
App::uses('AppModel', 'Model');
/**
 * Enrollment Model
 *
 * @property Student $Enrollment_Student
 * @property Course $Enrollment_Course
 * @property schedule $Enrollment_Schedule
 */
class Enrollment extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'enrollment';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Student_ID_Fk' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Course_ID_Fk' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'schedule_ID_Fk' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Course_Score' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'Student_ID_Fk',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'Course_ID_Fk',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Schedule' => array(
			'className' => 'schedule',
			'foreignKey' => 'Schedule_ID_Fk',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	function execproc_GetCountRegCourse($Course_ID){
		$query = "SELECT count(Course_ID_Fk) FROM enrollment WHERE Course_ID_Fk = $Course_ID Group By Schedule_ID_Fk";
		//$query = "SELECT ufn_getCountStudentInCourse($Course_ID)" ;
		$proc_result = $this->query($query);
		return $proc_result;
	}

	function chkStudentregBefore($Student_ID,$Course_ID,$Schedule_ID){
		$query = "SELECT * FROM enrollment WHERE Student_ID_Fk = $Student_ID AND Course_ID_Fk = $Course_ID AND Schedule_ID_Fk = $Schedule_ID";
		$result = $this->query($query);
		//debug($result);
		if (empty($result) || !isset($result[0])) {
			return true;
		}else{
			return false ;
		}
	}


	function usp_getAllEnrollment(){
		$result = $this->query('CALL usp_getAllEnrollment();');
		//debug($result);
		return $result;
	}
}
