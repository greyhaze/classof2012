<?php 
	$today = getdate();
	$footer='PlastiCrypt '.$today['year'].'&copy;, caretaker greyhaze.';
	
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
	
	<meta name="description" 
		content="" />	
		
	<meta name="keywords" 
		content="" />
	
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
				<div class="nav"><?php include 'views/nav_productline.php'; ?></div>
				<div class="nav"><?php include 'views/nav_main.php'; ?></div>
				<div class="nav"><?php include 'views/nav_links.php'; ?></div>
			</header> <!-- header -->
			
			<div id="sidebar">
				<div class="search"><?php include 'views/search.php'; ?></div>
				<div class="nav"><?php include 'views/nav_date.php'; ?></div>
				<div class="nav"><?php include 'views/nav_sets.php'; ?></div>
				<div class="title"><?php include 'views/title.php'; ?></div>
			</div> <!-- sidebar -->
			
			<div id="main">
				<div class="gallery"><?php include 'views/display.php'; ?></div>
			</div> <!-- main -->
			
			<footer>
				<?php echo $footer; ?>
			</footer> <!-- footer -->
			
		</div> <!-- container -->
	</div> <!-- page_wrap -->
</body>
</html>