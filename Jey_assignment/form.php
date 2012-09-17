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

$lbl = array('SIZE: ', 'RARITY: ', 'TYPE: ', 'GENDER: ', 'PLACE OF ORIGIN: ', 'CLASS: ', 'WEAPONS: ', 'ARMOUR: ', 'SET: ', 'PRODUCTION LINE: ', 'MANUFACTURER: ', 'MANUALS: ', 'STATS: ');
$cat = array('size', 'rarity', 'type', 'gender', 'origin', 'profile', 'weapon', 'armour', 'setname', 'productionline', 'manufacturer', 'entry', 'stat');

//streetdate

?>

<!DOCTYPE html>

<!--
	Website:  		plasticrypt.com
	Page:			gallery
	Developer:      Jey Legarie
	Languages Used: HTML 5
	Date Created:   sept 17th, 2012
	Last Revised:   

	Website Description:	
	
	External files:
		./css/main.css
-->

<html lang="en">
<head>
<meta charset="utf-8" />

<title>PlastiCrypt Gallery Curator</title>

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
				<div class="title">
					<?php include 'views/title.php'; ?>
				</div>
			<div class="gallery">
				<div>CURATOR: </div>
				<div><input type="button" value="VIEW FORUM" id="viewforum" /> | <input type="button" value="VIEW GALLERY" id="viewgallery" /></div>
				<div><input type="button" value="ENTER NEW MINI" id="submitnew" /> | <input type="button" value="EDIT EXISTING MINI" id="edit" /> | <input type="button" value="DELETE EXISTING MINI" id="delete" /></div>
				</div>
			</div>
			<!-- sidebar -->

			<div id="main">
			
			<div class="gallery">
			<form action="." method="post">
			<fieldset>
			<legend></legend>
			
				<div class="subform">
					<label>Name: </label>
						<input id="name" type="text" name="nametext" />
					<label>Image Upload: </label>
						<img id="image" src="" /><input type="button" value="upload" id="upload" />UPLOAD IMAGE</div>
					<label>Figure Base Size: </label>
						<select id="size">
							<option selected value="unknown">Unknown</option>
							<option value="tiny">Tiny</option>
							<option value="small">Small</option>
							<option value="medium">Medium 1x1</option>
							<option value="large1">Large 2x1</option>
							<option value="large">Large 2x2</option>
							<option value="huge">Huge 3x3</option>
						</select>
					<label>Rarity: </label>
						<select id="rarity">
							<option selected value="unknown">Unknown</option>
							<option value="NA">No Rarity</option>
							<option value="common">Common</option>
							<option value="uncommon">Uncommon</option>
							<option value="rarity">Rare</option>
						</select>
					<label>Set Number: </label>
						<input id="setnum" type="text" name="setnumtext" />
					<label>Creature Type: </label>
						<select id="type">
							<option selected value="unknown">Unknown</option>
							<option value="aberration">Aberration</option>
							<option value="animal">Animal</option>
							<option value="beast">Beast</option>
							<option value="construct">Construct</option>
							<option value="deathless">Deathless</option>
							<option value="dragon">Dragon</option>
							<option value="elemental">Elemental</option>
							<option value="fey">Fey</option>
							<option value="giant">Giant</option>
							<option value="humanoid">Humanoid</option>
							<option value="magicalbeast">Magical Beast</option>
							<option value="monstroushumanoid">Monstrous Humanoid</option>
							<option value="ooze">Ooze</option>
							<option value="outsider">Outsider</option>
							<option value="plant">Plant</option>
							<option value="shapechanger">Shapechanger</option>
							<option value="undead">Undead</option>
							<option value="vermin">vermin</option>
						</select>
					<label>Origin: </label>
						<select id="origin">
							<option selected value="unknown">Unknown</option>
							<option selected value="abyss">Abyss</option>
							<option selected value="astralplane">Astral Plane</option>
							<option selected value="demi">Demiplane</option>
							<option selected value="ethereal">Ethereal Plane</option>
							<option selected value="farrealm">Far Realm</option>
							<option selected value="innerplane">Inner Plane</option>
							<option selected value="material">Material Plane</option>
							<option selected value="mirror">Mirror Plane</option>
							<option selected value="outer">Outer Plane</option>
							<option selected value="shadow">Shadow Plane</option>
							<option selected value="temporal">Temporal Plane</option>
							<option selected value="astralsea">The Astral Sea</option>
							<option selected value="chaos">The Elemental Chaos</option>
							<option selected value="feywild">The Feywild</option>
							<option selected value="shadowfell">The Shadowfell</option>
							<option selected value="world">The World</option>
							<option selected value="dcabyss">DC Abyss (Netherworld)</option>
							<option selected value="dcastral">DC Astral Plane</option>
							<option selected value="dcpocket">DC Dimensional Pocket</option>
							<option selected value="dcgehenna">DC Gehenna (Netherworld)</option>
							<option selected value="dcheavens">DC Heavens</option>
							<option selected value="dchell">DC Hell</option>
							<option selected value="dclimbo">DC Limbo (Netherworld)</option>
							<option selected value="dcmaterial">DC Material Plane</option>
							<option selected value="dcpandemonium">DC Pandemonium</option>
							<option selected value="dctwilight">DC Twilight (Netherworld)</option>
						</select>
					<label>Race: </label>
						<input id="race" type="text" name="racetext" />
					<label>Gender: </label>
						<select id="gender">
							<option selected value="unknown">Unknown</option>
							<option value="NA">NA</option>
							<option value="female">Female</option>
							<option value="male">Male</option>
						</select>
					<label>Class: </label>
						<select id="class">
							<option selected value="unknown">Unknown</option>
							<option value="NA">NA</option>
							<option value="barbarian">Barbarian</option>
							<option value="bard">Bard</option>
							<option value="cleric">Cleric</option>
							<option value="commoner">Commoner</option>
							<option value="druid">Druid</option>
							<option value="fighter">Fighter</option>
							<option value="monk">Monk</option>
							<option value="paladin">Paladin</option>
							<option value="ranger">Ranger</option>
							<option value="rogue">Rogue</option>
							<option value="sorcerer">Sorcerer</option>
							<option value="wizard">Wizard</option>
						</select>
					<label>Description/Details: </label>
						<input id="details" type="text" name="detailtext" />
					<label>Weapons: </label>
						<select id="weapons">
							<option selected value="unknown">Unknown</option>
							<option value="NA">Unarmed</option>
							<option value="axe">Axe</option>
							<option value="bow">Bow</option>
							<option value="crossbow">Crossbow</option>
							<option value="dagger">Dagger or Knife</option>
							<option value="dual">Dual Wielding</option>
							<option value="flail">Flail or Chain</option>
							<option value="hammer">Hammer</option>
							<option value="implement">Implement or Book</option>
							<option value="club">Mace or Club</option>
							<option value="pick">Pick</option>
							<option value="polearm">Polearm</option>
							<option value="sceptre">Sceptre or Wand</option>
							<option value="spear">Spear or Trident</option>
							<option value="staff">Staff or Cane</option>
							<option value="sword">Sword</option>
							<option value="tool">Tool</option>
							<option value="shield">Weapon and Shield</option>
							<option value="whip">Whip</option>
						</select>
					<label>Armour: </label>
						<select id="armour">
							<option selected value="unknown">Unknown</option>
							<option value="NA">No Armour</option>
							<option value="light">Light Armour</option>
							<option value="medium">Medium Armour</option>
							<option value="heavy">Heavy Armour</option>
						</select>
					<label>Alternate Paint Link: </label>
						<input id="alts" type="text" name="altstext" />
					<label>Proxy Link: </label>
						<input id="proxies" type="text" name="proxiestext" />
					<label>Manuals: </label>
						<input id="book" type="text" name="booktext" />
						<input id="heading" type="text" name="headingtext" />
						<input id="page" type="text" name="pagetext" />
					<label>Set Name: </label>
						<input id="setname" type="text" name="setnametext" />
					<label>Production Line: </label>
						<select id="productionline">
							<option selected value="unknown">Unknown</option>
							<option value="">D &amp; D Skirmish</option>
							<option value="">Pathfinder Battles</option>
							<option value="">Legendary Encounters</option>
							<option value="">Star Wars</option>
							<option value="">Dungeon Crawler</option>
						</select>
					<label>Manufacturer: </label>
						<select id="manufacturer">
							<option selected value="unknown">Unknown</option>
							<option value="">WotC</option>
							<option value="">Paizo/Wizkids</option>
							<option value="">Reaper</option>
							<option value="">Gifted Vision inc</option>
						</select>
					<label>Street Date: </label>
						<input id="streetdate" type="text" name="streetdatetext" />
					<label>News Source Link: </label>
						<input id="sources" type="text" name="sourcestext" />
					<label>Stat Link: </label>
						<input id="stats" type="text" name="statstext" />
					<input id="btn_submit" type="submit" alt="Submit" name="action" value="SUBMIT" />
						</div>
				</fieldset>
			</form>
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
