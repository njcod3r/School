<h1> School System </h1>

<table>
	<tr>
		<td>
			<?php echo $this->Html->link('Students', array('controller'=>'Students', 'action'=>'Index')); ?>
		</td>
	</tr>		
	<tr>
		<td>
			<?php echo $this->Html->link('Rooms', array('controller'=>'Rooms', 'action'=>'Index')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Html->link('Courses', array('controller'=>'Courses', 'action'=>'Index')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Html->link('Scheules Time', array('controller'=>'Schedules', 'action'=>'Index')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Html->link('Reservation Course', array('controller'=>'Enrollments', 'action'=>'Index')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Html->link('Reservation Room', array('controller'=>'RoomSchedules', 'action'=>'Index')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Html->link('Reports', array('controller'=>'Reports', 'action'=>'Index')); ?>
		</td>
	</tr>



</table>