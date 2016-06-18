<?php

	echo $IndexCourse;
?>
<br />
<?php echo $this->Html->link( 'Add Course', array('controller' => 'Courses' , 'action' => 'Add')); ?>
<br />
<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>



<table>
	<tr>
		<th>Course ID</th>
		<th>Course Name</th>
		<th>Course Quota</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($Courses as $Course): ?>
		
	<tr>
		<td><?php echo $Course['Course']['ID'] ; ?></td>
		<td><?php echo $this->HTML->link( $Course['Course']['C_Name'], array('controller' => 'Courses' , 'action' => 'View', $Course['Course']['ID'])); ?> </td>
		<td><?php echo $Course['Course']['C_Quota'] ; ?></td>
		<td><?php echo $Course['Course']['created'] ; ?></td>
		<td><?php echo $Course['Course']['modified'] ; ?></td>
		<td><?php echo $this->HTML->link( 'Edit' , array('controller' => 'Courses' , 'action' => 'Edit', $Course['Course']['ID'])); ?> </td>
		<td><?php /* echo $this->Form->postLink( 'Delete' , array('controller' => 'Courses' , 'action' => 'Delete', $Course['Course']['ID']), array('confirm' => 'Are you sure want delete Course?')); */?></td>
	</tr>
	<?php endforeach ?>
	<?php unset($Course); ?>
</table>