<h1> View Course </h1>

<?php echo $this->Html->link( 'Back To Index', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Courses', array('controller' => 'Courses' , 'action' => 'Index')); ?>

<table>
	<tr> 
		<th> <label>ID</label></th>
		<td> <?php echo $courseView['Course']['ID'] ; ?></td>
	 </tr>
	 <tr> 

	 <tr>
	 	<th><label>Course Name</label></th>
	 	<td> <?php echo $courseView['Course']['C_Name'] ; ?></td>
	 </tr>

	  <tr>
	 	<th> <label>Course Quota</label></th>
	 	<td> <?php echo $courseView['Course']['C_Quota'] ; ?></td>
	 </tr>

</table>
