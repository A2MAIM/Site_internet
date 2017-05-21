<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="LAMY Aurélie" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Agenda</title>
	
	<!-- <script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-20314521-2']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script> -->

	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-35382676-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

</head>

<body>
	<div id="container">
		<?php include("header.php") ?>

		<div id="main">
			<?php include("menu.php") ?>
		</div>
		<div id="main">

			<h3> Dates cles </h3>
			
			<h5> Fevrier 2017 </h5>
			<ul>
				<li>24 Fevrier : Rencontre ancien et nouvelle promotion pour feter la fin des cours de la nouvelle promotion.</li>
				<li>7 Fevrier : Atelier CV anime par les anciens.</li>
			</ul>

			<?php /*
    
				<h5> Mai 2013 </h5>
				<ul>
					<li>24 mai : Rencontre anciens-nouveaux sur le theme "Que faire apres son stage ?". N'oubliez pas de confirmer votre presence en nous envoyant un mail.</li>
				</ul>
				
				<h5> Mars 2013 </h5>
				<ul>
					<li>1 mars : Assemblee generale de l'association : Bilan de l'annee, election du nouveau bureau</li>
				</ul>
				
				
				<h5> Janvier 2013 </h5>
				<ul>
					<li>11 janvier : <a href="http://smai.emath.fr/forum-emploi/" target="_blank">Forum emploi maths</a> </li>
					<li>25/26 janvier : Salon ADREP, Espace Champerret</li>
				</ul>
				
				<h5> Decembre 2012 </h5>
				<ul>
					<li>19 decembre : Remise des diplomes de la promotion 2012 </li>
				</ul>
				
				<h5> Novembre 2012 </h5>
				<ul>
					<li>12/13 novembre : JOR (Journees d'Orientation Reflechies)</li>
					<li>30 novembre : 2eme soiree parrains/filleuls</li>
				</ul>
				
				<h5> Octobre 2012 </h5>
				<ul>
					<li>9 octobre : <a href="http://www.saloningenieurs.com/" target="_blank">Salon recrutement</a> </li>
					<li>16 octobre : <a href="http://www.provemploi.fr/" target="_blank">Salon provemploi</a> </li>
				</ul>
				
				<h5> Septembre 2012 </h5>
				<ul>
					<li>18 septembre : Soiree rencontre parrains/filleuls</li>
				</ul>
			
			*/?>

			<h3> Liens utiles </h3>
			<a href="http://www.agence-maths-entreprises.fr/a/?q=fr" target="_blank"><img src="images/AMIES_bandeau.jpg" TITLE="AMIES"></a>
		
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
