

<?php echo $this->Html->link( 'Back To Home', array('controller' => 'Main' , 'action' => 'Index')); ?>
<br />
<?php echo $this->Html->link( 'List student courses and grade', array('controller' => 'Reports' , 'action' => 'StudentCourseGrade')); ?>
<br />
<?php echo $this->Html->link( 'List Courses number with attendances', array('controller' => 'Reports' , 'action' => 'CourseAttandce')); ?>
