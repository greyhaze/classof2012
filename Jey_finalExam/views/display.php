<?php

class examfinal extends ActiveRecord\Model{

}


foreach(examfinal::find('all', array('order' => 'id')) as $oExamfinal){?> 

	<ul><?php include('list.php');?></ul>
	
<?php }?>

