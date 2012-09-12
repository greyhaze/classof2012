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
	static $belongs_to = array(array('gallery'));
}
$oAlternates = Alternate::all(array('joins' => array('gallery')));

class Entry extends ActiveRecord\Model{
	static $belongs_to = array(array('gallery'));
}
$oEntries = Entry::all(array('joins' => array('gallery')));

class Proxy extends ActiveRecord\Model{
	static $belongs_to = array(array('gallery'));
}
$oProxies = Proxy::all(array('joins' => array('gallery')));

class Source extends ActiveRecord\Model{
	static $belongs_to = array(array('gallery'));
}
$oSources = Source::all(array('joins' => array('gallery')));

class Stat extends ActiveRecord\Model{
	static $belongs_to = array(array('gallery'));
}
$oStats = Stat::all(array('joins' => array('gallery')));


$sSel = 'size, rarity, type, origin, gender, class, weapons, armour, setname, productionline, manufacturer, streetdate, source, st.label AS stat';
$sJoin = 'LEFT JOIN entries e on(galleries.id = e.gallery_id)';
$sJoin2 = 'LEFT JOIN stats st on(galleries.id = st.gallery_id)';
$oGallery = gallery::find('all', array('select' => $sSel, 'joins'=>array($sJoin, $sJoin2)));
//print_r($oAlternates);

foreach($oGallery as $ogall){
	$s[] = $ogall->size;
	$r[] = $ogall->rarity;
	$t[] = $ogall->type;
	$o[] = $ogall->origin;
	$g[] = $ogall->gender;
	$c[] = $ogall->class;
	$w[] = $ogall->weapons;
	$a[] = $ogall->armour;
	$set[] = $ogall->setname;
	$p[] = $ogall->productionline;
	$f[] = $ogall->manufacturer;
	$d[] = $ogall->streetdate;
	$e[] = $ogall->source;
	$st[] = $ogall->stat;
}

$mast[]=$sx = $s;
$mast[]=$rx = $r;
$mast[]=$tx = $t;
$mast[]=$ox = $o;
$mast[]=$gx = $g;
$mast[]=$cx = $c;
$mast[]=$wx = $w;
$mast[]=$ax = $a;
$mast[]=$setx = $set;
$mast[]=$px = $p;
$mast[]=$fx = $f;
$mast[]=$dx = $d;
$mast[]=$ex = $e;
$mast[]=$stx = $st;

$lbl = array('SIZE: ', 'RARITY: ', 'TYPE: ', 'PLACE OF ORIGIN: ', 'GENDER: ', 'CLASS: ', 'WEAPONS: ', 'ARMOUR: ', 'SET: ', 'PRODUCTION LINE: ', 'MANUFACTURER: ', 'STREET DATE BY YEAR: ', 'MANUALS: ', 'STATS: ');
$nam = array('size', 'rarity', 'type', 'origin', 'gender', 'class', 'weapons', 'armour', 'setname', 'productionline', 'manufacturer', 'streetdate', 'source', 'stat');

for($i = 0; $i < count($mast); $i++){
	$tmp = array("");
	$cc = 0;
		for($j = 0; $j < count($mast[$i]); $j++){
			if(!array_search($mast[$i][$j], $tmp, true)){
				$cc++;
				$tmp[] = $mast[$i][$j];
			}
		}
	$order[] = $cc;
}

array_multisort($order,SORT_DESC,$mast,$lbl,$nam);

$st[] = $e[] = $d[] = $f[] = $p[] = $set[] = $st[] = $m[] = $a[] = $w[] = $c[] = $g[] = $o[] = $t[] = $r[] = $s[] = 'NA';
$s = array_unique($s);
$r = array_unique($r);
$t = array_unique($t);
$o = array_unique($o);
$g = array_unique($g);
$c = array_unique($c);
$w = array_unique($w);
$a = array_unique($a);
$set = array_unique($set);
$p = array_unique($p);
$f = array_unique($f);
$d = array_unique($d);
$e = array_unique($e);
$st = array_unique($st);

if ($action == "search"){
	if(isset($_POST['size'])){
		$s='';
		foreach($_POST['size']as $sz){
			$s[]=$sz;
		}
	}
	if(isset($_POST['rarity'])){
		$r='';
		foreach($_POST['rarity']as $sz){
			$r[]=$sz;
		}
	}
	if(isset($_POST['type'])){
		$t='';
		foreach($_POST['type']as $sz){
			$t[]=$sz;
		}
	}
	if(isset($_POST['origin'])){
		$o='';
		foreach($_POST['origin']as $sz){
			$o[]=$sz;
		}
	}
	if(isset($_POST['gender'])){
		$g='';
		foreach($_POST['gender']as $sz){
			$g[]=$sz;
		}
	}
	if(isset($_POST['class'])){
		$c='';
		foreach($_POST['class']as $sz){
			$c[]=$sz;
		}
	}
	if(isset($_POST['weapons'])){
		$w='';
		foreach($_POST['weapons']as $sz){
			$w[]=$sz;
		}
	}
	if(isset($_POST['armour'])){
		$a='';
		foreach($_POST['armour']as $sz){
			$a[]=$sz;
		}
	}
	if(isset($_POST['alternates'])){
		$l='';
		foreach($_POST['alternates']as $sz){
			$l[]=$sz;
		}
	}
	if(isset($_POST['entries'])){
		$e='';
		foreach($_POST['entries']as $sz){
			$e[]=$sz;
		}
	}
	if(isset($_POST['stats'])){
		$st='';
		foreach($_POST['stats']as $sz){
			$st[]=$sz;
		}
	}
	if(isset($_POST['setname'])){
		$set='';
		foreach($_POST['setname']as $sz){
			$set[]=$sz;
		}
	}
	if(isset($_POST['productionline'])){
		$p='';
		foreach($_POST['productionline']as $sz){
			$p[]=$sz;
		}
	}
	if(isset($_POST['manufacturer'])){
		$f='';
		foreach($_POST['manufacturer']as $sz){
			$f[]=$sz;
		}
	}
	if(isset($_POST['streetdate'])){
		$d='';
		foreach($_POST['streetdate']as $sz){
			$d[]=$sz;
		}
	}
	if(isset($_POST['source'])){
		$e='';
		foreach($_POST['source']as $sz){
			$e[]=$sz;
		}
	}
	if(isset($_POST['stat'])){
		$st='';
		foreach($_POST['stat']as $sz){
			$st[]=$sz;
		}
	}
}

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
							foreach(gallery::find('all', array('order' => 'setnum', 'conditions' => array("(name LIKE '%$box%' OR details LIKE '%$box%')".'AND size in (?) AND rarity in (?) AND type in (?) AND origin in (?) AND gender in (?) AND class in (?) AND weapons in (?) AND armour in (?) AND setname in (?) AND productionline in (?) AND manufacturer in (?) AND source in (?) AND st.label in (?)', $s, $r, $t, $o, $g, $c, $w, $a, $set, $p, $f, $e, $st))) as $oGallery){
								$flag = false;
								include('views/display_partial.php');
							}//foreach
							if($flag){ ?>
					<p class="message">Nothing available fits your search criteria.</p>
					<?php
							}
						}else{

							$flag = true;
							foreach(gallery::find('all', array('order' => 'setnum', 'conditions' => array('size in (?) AND rarity in (?) AND type in (?) AND origin in (?) AND gender in (?) AND class in (?) AND weapons in (?) AND armour in (?) AND setname in (?) AND productionline in (?) AND manufacturer in (?) AND source in (?) AND st.label in (?)', $s, $r, $t, $o, $g, $c, $w, $a, $set, $p, $f, $e, $st))) as $oGallery){
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
