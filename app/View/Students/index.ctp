<?php

	echo $IndexStudent;
?>
<br />
<?php echo $this->Html->link( 'Add Student', array('controller' => 'Students' , 'action' => 'Add')); ?>
<br />
<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>



<table>
	<tr>
		<th>Student ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($Students as $Student): ?>
		
	<tr>
		<td><?php echo $Student['Student']['ID'] ; ?></td>
		<td><?php echo $this->HTML->link( $Student['Student']['S_FName'], array('controller' => 'Students' , 'action' => 'View', $Student['Student']['ID'])); ?> </td>
		<td><?php echo $Student['Student']['S_LName'] ; ?></td>
		<td><?php echo $Student['Student']['S_Email'] ; ?></td>
		<td><?php echo $Student['Student']['created'] ; ?></td>
		<td><?php echo $Student['Student']['modified'] ; ?></td>
		<td><?php echo $this->HTML->link( 'Edit' , array('controller' => 'Students' , 'action' => 'Edit', $Student['Student']['ID'])); ?> </td>
		<td><?php /*echo $this->Form->postLink( 'Delete' , array('controller' => 'Students' , 'action' => 'Delete', $Student['Student']['ID']), array('confirm' => 'Are you sure want delete Student?')); */?></td>
	</tr>
	<?php endforeach ?>
	<?php unset($Student); ?>
</table>