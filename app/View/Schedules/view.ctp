<h1> View Student </h1>

<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br />
<?php echo $this->Html->link( 'Back To Students', array('controller' => 'Students' , 'action' => 'Index')); ?>
<table>
	<tr> 
		<th> <label>ID</label></th>
		<td> <?php echo $studentView['Student']['ID'] ; ?></td>
	 </tr>
	 <tr> 

	 <tr>
	 	<th><label>First Name</label></th>
	 	<td> <?php echo $studentView['Student']['S_FName'] ; ?></td>
	 </tr>

	  <tr>
	 	<th> <label>Last Name</label></th>
	 	<td> <?php echo $studentView['Student']['S_LName'] ; ?></td>
	 </tr>

	 <tr>
	 	<th> <label>Email</label></th>
	 	<td> <?php echo $studentView['Student']['S_Email'] ; ?></td>
	 </tr>
</table>
