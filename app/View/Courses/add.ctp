<h1> Create New Course </h1>

<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Courses', array('controller' => 'Courses' , 'action' => 'Index')); ?>

<?php


	echo $this->Form->create('Course', array('label' => false));
	echo '<label for="C_Name">Course Name *</label>';
	echo $this->Form->input('C_Name' , array('label' => false));
	echo '<label for="C_Quota">Course Quota *</label>';
	echo $this->Form->input('C_Quota' , array('label' => false));
	echo $this->Form->end('Save Course');

?>	