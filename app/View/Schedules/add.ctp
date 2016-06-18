<h1> Create New Student </h1>

<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Schedules', array('controller' => 'Schedules' , 'action' => 'Index')); ?>

<?php


	echo $this->Form->create('Schedule', array('label' => false));
	echo '<label for="S_Day">Day Schedule *</label>';
	echo $this->Form->input('S_Day' , array('label' => false));
	echo '<label for="S_StartTime">Start Time *</label>';
	echo $this->Form->input('S_StartTime' , array('label' => false));
	echo '<label for="S_EndTime">End Time *</label>';
	echo $this->Form->input('S_EndTime' , array('label' => false));
	echo $this->Form->end('Save Schedule');

?>	