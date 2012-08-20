<?php
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/meals',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

if(array_key_exists('submit', $_POST)){
	$oMeals = new Meals();
	$oMeals->date = $_POST['date'];
	$oMeals->members = $_POST['members'];

	$oMeals->save();//saves the above information
}

if(array_key_exists('add', $_POST)){

	include 'views/add.php';

}else {

	include 'views/list.php';

}

?>
