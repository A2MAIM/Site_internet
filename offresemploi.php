<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Offres d'emploi</title>
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
		Voici les offres d'emploi envoyéees par nos membres. Merci beaucoup pour vos contributions.
		<ul>
                <li><a href="offreemploi/INdAM.pdf" target="_blank">Offre de thèse : "New Mathematical Methods for Future Communication Networks" - Turin Doctoral School of Mathematical Science</a><br/>
Date limite de candidature : 20 mai 2017</li>
				<li><a href="offreemploi/Senior_Research_Scientist_on_Machine_Learning-Statistical_Learning.pdf" target="_blank">HUAWAI: Machine Learning.</a></li>
				<li><a href="offreemploi/Senior_Research_Scientist_on_Applied_Machine_Learning-Statistical_Learning.pdf" target="_blank">HUAWAI: Machine Learning.</a></li>
				<li><a href="offreemploi/Research_Scientist_on_Machine_Learning-Operations_Research.pdf" target="_blank">HUAWAI: Machine Learning .</a></li>
				<li><a href="offreemploi/AltairFlux.pdf" target="_blank">Altair: Développeur calcul numérique .</a></li>
				<li><a href="offreemploi/FR_MACS_Client Solution development_Quant Research_Quant Analyst.pdf" target="_blank">AXA: Analyste quantitatif .</a></li>
				<li><a href="offreemploi/dcns_mailing02_Jobdating Cherbourg.pdf" target="_blank">DCNS: 17 et 18 mars 2017, CASTING.</a></li>
		</ul>
		
		Vous trouverez de nombreuses offres sur les sites suivants:
		<ul>
		<li><a http://www.enseignementsup-recherche.gouv.fr/pid24790/concours-et-recrutements-des-ingenieurs-et-personnels-techniques-de-recherche-et-de-formation.html> Concours et recrutement des ingénieurs et personnels techniques de recherche et de formation</a></li>
		<ul>
		
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
