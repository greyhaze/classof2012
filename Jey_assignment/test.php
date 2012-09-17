<?php

require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/gallery',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://syndicat_jobs:Secret55Passw0rd@localhost/syndicat_jobs'
			)
	);
});

class Origin extends ActiveRecord\Model{};
class Size extends ActiveRecord\Model{};

$aCategories = array('size', 'gender', 'origin');
$aContents = array();
$aContents['gender'] = array('NA', 'male', 'female');

$aOrigins = array();
foreach(Origin::find("all") as $oOrigin){
	array_push($aOrigins, $oOrigin->label);
}
$aContents['origins'] = $aOrigins;

$aSizes = array();
foreach(Size::find("all") as $oSize){
	array_push($aSizes, $oSize->label);
}
$aContents['sizes'] = $aSizes;

$aTypes = array();
foreach(Type::find("all") as $oType){
	array_push($aTypes, $oType->label);
}
$aContents['types'] = $aTypes;

foreach($aContents as $sCat=>$aLabels){
	echo '<fieldset>';
	echo '<p>' .$sCat . '</p>';
	foreach($aLabels as $sLabel){
		echo '<p>' . $sLabel . '</p>';
	}
	echo '</fieldset>';
	
}




?>