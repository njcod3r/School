<h1> Reservation Room Schedule </h1>

<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Reservations', array('controller' => 'RoomSchedules' , 'action' => 'Index')); ?>


<?php

 
	echo $this->Form->create('RoomSchedule', array('label' => false));
	echo '<label for="Room_ID_Fk">Room Name *</label>';
	echo $this->Form->input('Room_ID_Fk', 
        array(
            'options' => $rooms,
          	'type'=>'select',
          	'empty'=> '',
          	'label' => false ,
            'class' => 'span5',
            'error' => array('attributes' => array('wrap' => 'span', 'class' => 'label custom-inline-error label-important help-inline'))
        ));
 
  echo '<label for="Schedule_ID_Fk">Schedule Day *</label>';
  echo $this->Form->input('Schedule_ID_Fk', 
        array(
            'options' => $schedules,
            'type'=>'select',
            'empty'=> '',
            'label' => false ,
            'class' => 'span5',
            'error' => array('attributes' => array('wrap' => 'span', 'class' => 'label custom-inline-error label-important help-inline'))
        ));

	echo '<label for="Course_ID_Fk">Course Name *</label>';
	echo $this->Form->input('Course_ID_Fk', 
        array(
            'options' => $courses,
          	'type'=>'select',
          	'empty'=> '',
          	'label' => false ,
            'class' => 'span5',
            'error' => array('attributes' => array('wrap' => 'span', 'class' => 'label custom-inline-error label-important help-inline'))
        ));


	echo $this->Form->end('Save Reservation');


?>	


