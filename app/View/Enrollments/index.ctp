<?php

	echo $IndexEnrollment;
?>
<br />
<?php echo $this->Html->link( 'Add Reservation', array('controller' => 'Enrollments' , 'action' => 'Add')); ?>
<br />
<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>

<table>
	<tr>
		<th>Enrollment ID</th>
		<th>Student Name</th>
		<th>Schedule Date</th>
		<th>Course Name</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach($Enrollments as $Enrollment => $value) : ?>
	<tr>
		<td><?php echo  $value['en']['Enrollment_ID'] ; ?></td>
		<td><?php echo $value[0]['Student_Name'] ; ?> </td>
		<td><?php echo $value[0]['Schedule_Day'] ; ?> </td>
		<td><?php echo $value['co']['Course_Name'] ; ?></td>
		<td><?php echo $this->HTML->link( 'Edit' , array('controller' => 'Enrollments' , 'action' => 'Edit',  $value['en']['Enrollment_ID'])); ?> </td>
		<td><?php echo $this->Form->postLink( 'Delete' , array('controller' => 'Enrollments' , 'action' => 'Delete',  $value['en']['Enrollment_ID']), array('confirm' => 'Are you sure want delete Reservation?')); ?></td>
	</tr>
	<?php endforeach ?>
	<?php unset($value); ?>
</table>