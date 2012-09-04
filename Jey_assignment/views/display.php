<?php

foreach(gallery::find('all', array('order' => 'setnum')) as $oGallery){ 

	include('display_partial.php');
	
}?>

