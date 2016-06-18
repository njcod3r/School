<h1> Edit Schedule </h1>


<?php
	
	echo $this->Html->link( 'Back To Index', array('controller' => 'Schedules' , 'action' => 'Index'));
	echo '<br/>';
	echo $this->Html->link( 'Back To Schedules', array('controller' => 'Schedules' , 'action' => 'Index')); 

	echo $this->Form->create('Schedule', array('label' => false));
	echo '<label for="S_Day">Day Schedule*</label>';
	echo $this->Form->input('S_Day' , array('label' => false));
	echo '<label for="S_StartTime">Start Time *</label>';
	echo $this->Form->input('S_StartTime' , array('label' => false));
	echo '<label for="S_EndTime">Email *</label>';
	echo $this->Form->input('S_EndTime' , array('label' => false));
	echo $this->Form->end('Edit Schedule');



?>	