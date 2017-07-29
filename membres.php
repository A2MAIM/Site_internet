<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Membres</title>
</head>

<body>
<div id="container">
		<?php include("header.php") ?>

	<div id="main">
		<?php include("menu.php") ?>
	</div>
	<div id="main">
		<?php
			if (session_is_registered("verified_login")){
		?>
		
		<?php include("annuaire.php") ?>
		
		<?php
			} else {
				echo "Pour accéder à cette page vous devez être authentifié."; 
			}
		?>
		
	</div>

	<div id="sidebar">
		<?php
			if (session_is_registered("verified_login")){
				include("menudesmembres.php");
			} else {
				include("register.php");
			}
		?>
		<?php include("links.php") ?>
	</div>
</div>

	<?php include("footer.php") ?>
</body>
</html>
