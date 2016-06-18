<h1> View Room </h1>

<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Rooms', array('controller' => 'Rooms' , 'action' => 'Index')); ?>

<table>
	<tr> 
		<th> <label>ID</label></th>
		<td><?php  echo $roomView['Room']['ID'] ; ?></td>
	 </tr>
	 <tr> 
		<th> <label>Room Name</label></th>
		<td> <?php echo $roomView['Room']['R_Name'] ; ?></td>
	 </tr>

</table>
