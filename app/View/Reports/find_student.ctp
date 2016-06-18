
<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Reports', array('controller' => 'Reports' , 'action' => 'StudentCourseGrade')); ?>

<h1> Student Name : <?php echo $Student_Info['S_FName'].' '.$Student_Info['S_LName'] ;?> <h1>
<h1> Email : <?php echo $Student_Info['S_Email'] ;?> <h1>	
<table>
	<tr>
		<th>Course Name</th>
		<th>Course Grade</th>

	</tr>
	<?php foreach($Coursesdata as $Coursedata) : ?>
	<tr>
		<td><?php echo $Coursedata['Course_Name'] ; ?></td>
		<td><?php echo $Coursedata['Grade']; ?> </td>
	</tr>
	<?php endforeach ?>
	<?php unset($Coursedata); ?>
</table>