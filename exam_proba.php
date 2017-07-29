<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Examens Probas/Stats</title>
	
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
			<?php
				if (session_is_registered("verified_login")){
			?>
			
			<h5>Calcul Stochastique</h5>
			<ul>
				<li><a href="exam/Examen_Calcul_Stochastique_2009.pdf" target="_blank">Examen 2009</a></li>
				<li><a href="exam/Examen_Calcul_Stochastique_2010.pdf" target="_blank">Examen 2010</a></li>
				<li><a href="exam/Examen_Calcul_Stochastique_2012.pdf" target="_blank">Examen 2012</a></li>
				<li><a href="exam/ExamenCalculStochastique2012-2013.pdf" target="_blank">Examen 2013</a></li>
			</ul>


			<h5>Méthodes de Monte-Carlo</h5>
			<ul>
				<li><a href="exam/Examen_Monte_Carlo_2009.pdf" target="_blank">Examen 2009</a></li>
				<li><a href="exam/Examen_Monte_Carlo_2010.pdf" target="_blank">Examen 2010</a></li>
				<li><a href="exam/Examen_Monte_Carlo_2011.pdf" target="_blank">Examen 2011</a></li>
				<li><a href="exam/Examen_Monte_Carlo_2012.pdf" target="_blank">Examen 2012</a></li>
				<li><a href="exam/ExamenMonteCarlo2012-2013.pdf" target="_blank">Examen 2013</a></li>
			</ul>
			
			<h5>Séries Temporelles</h5>
			<ul>
				<li><a href="exam/Examen_Series_Temporelles_2010.pdf" target="_blank">Examen 2010</a></li>
				<li><a href="http://www.lsta.upmc.fr/gaiffas/files/ifma/exam-2010-2011.pdf" target="_blank">Examen 2011</a></li>
				<li><a href="exam/Examen_Series_Temporelles_2012.pdf" target="_blank">Examen 2012</a></li>
				<li><a href="exam/ExamenSeriesTemporelles2012-2013.pdf" target="_blank">Examen 2013</a></li>
			</ul>
			
			<h5>Modèles Aléatoires</h5>
			<ul>
				<li><a href="exam/Examen_Modeles_Aleatoires_2009.pdf" target="_blank">Examen 2009</a> et son <a href="exam/Examen_Modeles_Aleatoires_2009_corr.pdf" target="_blank">corrigé</a></li>
				<li><a href="exam/Examen_Modeles_Aleatoires_2009b.pdf" target="_blank">Rattrapage 2009</a> et son <a href="exam/Examen_Modeles_Aleatoires_2009b_corr.pdf" target="_blank">corrigé</a></li>
				<li>Examen 2010 et son <a href="exam/Examen_Modeles_Aleatoires_2010_corr.pdf" target="_blank">corrigé</a></li>
				<li><a href="exam/Examen_Modeles_Aleatoires_2011.pdf" target="_blank">Examen 2011</a></li>
				<li><a href="exam/Examen_Modeles_Aleatoires_2012.pdf" target="_blank">Examen 2012</a></li>
			</ul>
			
			
			<h5>Finance 1</h5>
			<ul>
				<li><a href="exam/Examen_Finance1_2009.pdf" target="_blank">Examen 2009</a></li>
				<li><a href="exam/Examen_Finance1_2009b.pdf" target="_blank">Rattrapage 2009</a></li>
				<li><a href="exam/Examen_Finance1_2010.pdf" target="_blank">Examen 2010</a></li>
				<li><a href="exam/Examen_Finance1_2012.pdf" target="_blank">Examen 2012</a></li>
			</ul>
			
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
