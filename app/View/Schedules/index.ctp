<?php

	echo $IndexSchedules;
?>
<br />
<?php echo $this->Html->link( 'Add Schedules', array('controller' => 'Schedules' , 'action' => 'Add')); ?>
<br />
<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>



<table>
	<tr>
		<th>Schedule ID</th>
		<th>Schedule Day</th>
		<th>Schedule StartTime</th>
		<th>Schedule EndTime</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($Schedules as $schedule) : ?>
		
	<tr>
		<td><?php echo $schedule['Schedule']['ID'] ; ?></td>
		<td><?php echo $this->HTML->link( $schedule['Schedule']['S_Day'], array('controller' => 'Schedules' , 'action' => 'View', $schedule['Schedule']['ID'])); ?> </td>
		<td><?php echo $schedule['Schedule']['S_StartTime'] ; ?></td>
		<td><?php echo $schedule['Schedule']['S_EndTime'] ; ?></td>
		<td><?php /* echo $this->HTML->link( 'Edit' , array('controller' => 'Schedules' , 'action' => 'Edit', 
			$schedule['Schedule']['ID'])); */ ?> </td>
		<td><?php /* echo $this->Form->postLink( 'Delete' , array('controller' => 'Schedules' , 'action' => 'Delete', $schedule['Schedule']['ID']), array('confirm' => 'Are you sure want delete Schedule?')); */?></td>
	</tr>
	<?php endforeach ?>
	<?php unset($schedule); ?>
</table>