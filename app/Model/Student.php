<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 */
class Student extends AppModel {


/**
 * virtualFields
 *
 * @var mixed False or table name
 */
	public $virtualFields = array('name' => 'CONCAT(Student.S_FName," ", Student.S_LName)');

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'student';


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
		),
		'S_FName' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Your Enter Student First',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'S_LName' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please Enter Student Last Name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'S_Email' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please Enter Student  Email',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'created' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'modified' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);


/**
 * belongsTo associations
 *
 * @var array
 */

	public $hasMany = array(
        'Enrollment' => array(
            'className' => 'Enrollment',
            'foreignKey' => 'Student_ID_Fk'
        ),
    );
}
