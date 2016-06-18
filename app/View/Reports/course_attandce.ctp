<h1>List of courses with number of course attendances </h1>

<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Reports', array('controller' => 'Reports' , 'action' => 'Index')); ?>

<table>
	<tr>
		<th>Course Name</th>
		<th>Course Grade</th>

	</tr>
	<?php foreach($CoursesAttandce as $CourseAttandce) : ?>
	<tr>
		<td><?php echo $CourseAttandce['Course_Name'] ; ?></td>
		<td><?php echo $CourseAttandce['Attend_Course']; ?> </td>
	</tr>
	<?php endforeach ?>
	<?php unset($CourseAttandce); ?>
</table>