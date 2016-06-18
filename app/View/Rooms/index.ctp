<?php

	echo $IndexRoom;
?>

<br />
<?php echo $this->Html->link( 'Add Room', array('controller' => 'Rooms' , 'action' => 'Add')); ?>
<br />
<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>

<table>
	<tr>
		<th>Room ID</th>
		<th>Room Name</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($Rooms as $Room): ?>
		
	<tr>
		<td><?php echo $Room['Room']['ID'] ; ?></td>
		<td><?php echo $this->HTML->link( $Room['Room']['R_Name'], array('controller' => 'Rooms' , 'action' => 'View', $Room['Room']['ID'])); ?> </td>
		<td><?php echo $Room['Room']['created'] ; ?></td>
		<td><?php echo $Room['Room']['modified'] ; ?></td>
		<td><?php echo $this->HTML->link( 'Edit' , array('controller' => 'Rooms' , 'action' => 'Edit', $Room['Room']['ID'])); ?> </td>
		<td><?php /* echo $this->Form->postLink( 'Delete' , array('controller' => 'Rooms' , 'action' => 'Delete', $Room['Room']['ID']), array('confirm' => 'Are you sure want delete Room?')); */?></td>
	</tr>
	<?php endforeach ?>
	<?php unset($Room); ?>
</table>