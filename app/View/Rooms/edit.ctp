<h1> Edit Student </h1>


<?php
	

	echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index'));
	echo '<br/>';
	echo $this->Html->link( 'Back To Rooms', array('controller' => 'Rooms' , 'action' => 'Index'));


	echo $this->Form->create('Room', array('label' => false));
	echo '<label for="R_Name">Room Name *</label>';
	echo $this->Form->input('R_Name' , array('label' => false));
	echo $this->Form->end('Edit Room');



?>	