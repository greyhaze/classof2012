<?php
$action = array_key_exists('action', $_POST)?$_POST['action']: '';
$action = array_key_exists('action', $_GET)?$_GET['action']: $action;

require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/emails',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

echo $action;

if($action == "Subscribe"){
	$oEmail = new Email;
	$oEmail->email = $_POST['email'];
	$oEmail->save();
}elseif($action == 'Unsubscribe'){
	print_r($_GET);
	$oEmail = Email::find_by_email($_GET['email']);
	if($oEmail->delete()){
		echo "You have successfully been unsubscribed... we will miss you.";
	}else{
		echo "There was an error, please try again.";
	}
	exit();
}

if($action == 'Edit List'){
	include 'views/edit.php';
	
}else{
	include 'views/email.php';
}

?>
