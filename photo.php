<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="LECOEUR Eve"/>
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Parrainage de la promotion 2012</title>
</head>

<body>
<div id="container">
		<?php include("header.php") ?>

	<div id="main">
		<?php include("menu.php") ?>
	</div>
	<div id="main">
		
		<h6> N'hésitez pas à nous envoyer vos photos et à nous proposer des dates de soirées !</h6>

		<ul>
		
			<li><h5> Soirée anciens/nouveaux le 18 mai 2017 après la soutenance de mi-stage : </h5></li>
    		<a href="images/soirees/20170518_1.jpg"><img src="images/soirees/20170518_1_mini.jpg" alt="18 mai 2017" title="Cliquez pour agrandir" /></a>
    		<a href="images/soirees/20170518_1.jpg"><img src="images/soirees/20170518_2_mini.jpg" alt="18 mai 2017" title="Cliquez pour agrandir" /></a>
			<li><h5> Deuxième soirée parrains/filleuls le 30 novembre 2012. Vos photos sont les bienvenues !</h5></li>
    		<li><h5> Première soirée le 18 septembre 2012 pour la rencontre parrains/filleuls </h5></li>
    		<a href="images/soirees/20120918_1.jpg"><img src="images/soirees/20120918_1_mini.jpg" alt="18 sept 2012" title="Cliquez pour agrandir" /></a>
    		<a href="images/soirees/20120918_2.jpg"><img src="images/soirees/20120918_2_mini.jpg" alt="18 sept 2012" title="Cliquez pour agrandir" /></a>
		</ul>

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
