<h1>list of student courses and grade</h1>


<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br/>
<?php echo $this->Html->link( 'Back To Reports', array('controller' => 'Reports' , 'action' => 'Index')); ?>

<form method="post" action="/Reports/findStudent/">
	<?php
		echo '<label for="Student_ID_Fk">Student Name *</label>';
		echo $this->Form->input('Student_ID_Fk', 
        array(
            'options' => $students,
          	'type'=>'select',
          	'empty'=> '',
          	'label' => false ,
            'class' => 'span5',
            'error' => array('attributes' => array('wrap' => 'span', 'class' => 'label custom-inline-error label-important help-inline'))
        ));

        echo $this->Form->button('Submit Query', ['type' => 'submit','escape' => true]);
	?>
</form>

