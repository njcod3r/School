<h1> Create New Student </h1>

<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Students', array('controller' => 'Students' , 'action' => 'Index')); ?>

<?php


	echo $this->Form->create('Student', array('label' => false));
	echo '<label for="S_FName">First Name *</label>';
	echo $this->Form->input('S_FName' , array('label' => false));
	echo '<label for="S_LName">Last Name *</label>';
	echo $this->Form->input('S_LName' , array('label' => false));
	echo '<label for="S_Email">Email *</label>';
	echo $this->Form->input('S_Email' , array('label' => false));
	echo $this->Form->end('Save Student');

?>	