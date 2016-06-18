<?php

	echo $IndexRoomSchedule;
?>
<br />
<?php echo $this->Html->link( 'Add Room Reservation', array('controller' => 'RoomSchedules' , 'action' => 'Add')); ?>
<br />
<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>



<table>
	<tr>
		<th>Reservation ID</th>
		<th>Room Name</th>
		<th>Schedule Day</th>
		<th>Course Name</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach($RoomSchedules as $RoomSchedule => $value) : ?>
	<tr>
		<td><?php echo $value['rsch']['Reservation_ID'] ; ?></td>
		<td><?php echo $value['ro']['Room_Name'] ; ?> </td>
		<td><?php echo $value[0]['Schedule_Day'] ; ?> </td>
		<td><?php echo $value['co']['Course_Name'] ; ?></td>
		<td><?php echo $value['rsch']['Created'] ; ?></td>
		<td><?php echo $value['rsch']['Modified'] ; ?></td>
		<td><?php /* echo $this->HTML->link( 'Edit' , array('controller' => 'RoomSchedules' , 'action' => 'Edit', $value['rsch']['Reservation_ID']));*/ ?> </td>
		<td><?php /* echo $this->Form->postLink( 'Delete' , array('controller' => 'Enrollments' , 'action' => 'Delete', $value['rsch']['Reservation_ID']), array('confirm' => 'Are you sure want delete Room Schedule?')); */?></td>
	</tr>
	<?php endforeach ?>
	<?php unset($value); ?>
</table>