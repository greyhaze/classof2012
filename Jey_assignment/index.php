<?php 
$today = getdate();
$footer='PlastiCrypt '.$today['year'].'&copy;, caretaker greyhaze.';
$action = array_key_exists('action', $_POST)?$_POST['action']: '';
$action = array_key_exists('action', $_GET)?$_GET['action']: $action;

//setup database
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/gallery',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

class Alternate extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Armour extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Entry extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Gender extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Manufacturer extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Origin extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Productionline extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Profile extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Proxy extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Rarity extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Setname extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Size extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Source extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Stat extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Type extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Weapon extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Entries_Miniature extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

class Stats_Miniature extends ActiveRecord\Model{
	static $belongs_to = array(array('miniature'));
}

$lbl = array('SIZE: ', 'RARITY: ', 'TYPE: ', 'GENDER: ', 'PLACE OF ORIGIN: ', 'CLASS: ', 'WEAPONS: ', 'ARMOUR: ', 'SET: ', 'PRODUCTION LINE: ', 'MANUFACTURER: ', 'MANUALS: ', 'STATS: ');
$cat = array('size', 'rarity', 'type', 'gender', 'origin', 'profile', 'weapon', 'armour', 'setname', 'productionline', 'manufacturer', 'entry', 'stat');
$catmin = array('sizes.id', 'rarities.id', 'types.id', 'genders.id', 'origins.id', 'profiles.id', 'weapons.id', 'armours.id', 'setnames.id', 'productionlines.id', 'manufacturers.id', 'entries.id', 'stats.id');
$cattab = array('size_id', 'rarity_id', 'type_id', 'gender_id', 'origin_id', 'profile_id', 'weapon_id', 'armour_id', 'setname_id', 'productionline_id', 'manufacturer_id', 'entry_id', 'stat_id');
$catsort = array('1 desc', '1', '2 asc', '1', '2 asc', '1', '1', '1', '1', '2 asc', 'label', '2 asc', '1'); //1 = sort by id, 2 = sort by label
$catjoin = array('', '', '', '', '', '', '', '', '', '', '', 'Entries_Miniature', 'Stats_Miniature');

//streetdate

if ($action == "search"){
	$aSz = array();
	foreach ($cat as $sCat){
		if(isset($_POST[$sCat])){
			$aRow = array();
			$s='';
			foreach($_POST[$sCat]as $s){
				array_push($aRow, $s);				
			}//end foreach
			$aSz[$sCat] = $aRow;
		}// end if
	}//end foreach
	
	$sql = "";
	for($i = 0; $i < count($cat); $i++){
		$sField = $cat[$i];
		if(array_key_exists($sField, $aSz)){
			if ($sql != ''){
				$sql.=' AND ';
			}//end if
			
			$sKeys = '';
			foreach($aSz[$sField] as $sValue){
				if($sKeys != ''){
					$sKeys .= ', ';
				}
				$sKeys .= $sValue;
			}//end foreach
			if($sField == 'entry' || $sField == 'stat'){
				$sNewKeys = '';
				foreach ($catjoin[$i]::find("all", array('conditions'=>array($cattab[$i] .' in (' . $sKeys .')'))) as $sMins){
					if($sNewKeys != ''){
						$sNewKeys .= ', ';
					}//end if
					$sNewKeys .= $sMins->miniature_id;
				}//end foreach
				if($sNewKeys != ""){
					$sql .= 'id in (' . $sNewKeys .')';
				}//end if
			}else{
				if($sKeys != ""){
					$sql .= $cattab[$i].' in (' . $sKeys .')';
				}//end if
			}//end else
		}//end if
	}// end for
}//end if

?>

<!DOCTYPE html>

<!--
	Website:  		plasticrypt.com
	Page:			gallery
	Developer:      Jey Legarie
	Languages Used: HTML 5
	Date Created:   Aug 28th, 2012
	Last Revised:   

	Website Description:	
	
	External files:
		./css/main.css
-->

<html lang="en">
<head>
<meta charset="utf-8" />

<title>PlastiCrypt Gallery</title>

<meta name="description" content="" />

<meta name="keywords" content="" />

<!-- Favicon links 
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	-->

<!-- JavaScript link
	<script src="./js/filename.js"></script>
	-->

<!-- CSS link -->
<link rel="stylesheet" href="./css/main.css" />

<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page_wrap">
		<div id="container">
			<header>
				<div class="nav">
					<?php include 'views/nav_productline.php'; ?>
				</div>
				<div class="nav">
					<?php include 'views/nav_main.php'; ?>
				</div>
				<div class="nav">
					<?php include 'views/nav_links.php'; ?>
				</div>
			</header>
			<!-- header -->

			<div id="sidebar">
				<div class="search">
					<?php include 'views/search.php'; ?>
				</div>
				<div class="nav">
					<?php include 'views/nav_date.php'; ?>
				</div>
				<div class="nav">
					<?php include 'views/nav_sets.php'; ?>
				</div>
				<div class="title">
					<?php include 'views/title.php'; ?>
				</div>
			</div>
			<!-- sidebar -->

			<div id="main">

				<div class="gallery">
					<?php 
					if($action=='search'){
						if(isset($_POST['searchbox'])){
							$box = $_POST['searchbox'];
							$flag = true;
							$sBox = "(label LIKE '%$box%' OR details LIKE '%$box%')";
								if($sql != ''){
									$sBox.=' AND '.$sql;
								}
							foreach(miniature::find('all', array('order' => 'setnum', 'conditions' => array($sBox))) as $oGallery){
								$flag = false;
								include('views/display_partial.php');
							}//foreach
							if($flag){ ?>
					<p class="message">Nothing available fits your search criteria.</p>
					<?php
							}
						}else{

							$flag = true;
							foreach(miniature::find('all', array('order' => 'setnum', 'conditions' => array($sql))) as $oGallery){
								$flag = false;
								include('views/display_partial.php');
							}//foreach
							if($flag){ ?>
					<p class="message">Nothing available fits your search criteria.</p>
					<?php
							}
						}
					}else{

						include('views/display.php');

					}?>
				</div>
			</div>
			<!-- main -->

			<footer>
				<?php echo $footer; ?>
			</footer>
			<!-- footer -->

		</div>
		<!-- container -->
	</div>
	<!-- page_wrap -->
</body>

<!-- JavaScript link -->
<script src="js/filterIt.js"></script>


</html>
