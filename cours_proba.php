<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Cours Probas/Stats</title>
	
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
			
			<h5 class=color_red>Attention !! Le contenu des modules peut varier d'une année sur l'autre !</h5>

			<h5>Calcul Stochastique - J. Berestycki</h5>
			<ul>
				<li>Martingales à temps discret</a></li>
				<li>Martingales à temps continu</a></li>
				<li>Mouvement brownien</a></li>
				<li>Intégrale stochastique et formule d'Ito</a></li>
				<li>Equations différentielles stochastiques</a></li>
			</ul>
			

			<h5>Méthodes de Monte-Carlo - V. Lemaire</h5>
			<ul>
				<li>Introduction</a></li>
				<li>Simulation de variables aléatoires</a></li>
				<li>Méthodes de réduction de variance</a></li>
				<li>Méthodes de Quasi Monte Carlo</a></li>
				<li>Lien avec les EDP, simulation de processus</a></li>
			</ul>

			
			<h5>Séries Temporelles - S. Gaïffas</h5>
			<ul>
				<li><a href="http://www.lsta.upmc.fr/gaiffas/files/ifma/ifma-cours-scan1.pdf" target="_blank">Introduction</a></li>
				<li><a href="http://www.lsta.upmc.fr/gaiffas/files/ifma/ifma-cours-scan2.pdf" target="_blank">Processus stationnaires</a></li>
				<li><a href="http://www.lsta.upmc.fr/gaiffas/files/ifma/ifma-cours-scan3.pdf" target="_blank">Théorie spectrale</a></li>
				<li><a href="http://www.lsta.upmc.fr/gaiffas/files/ifma/ifma-cours-scan5.pdf" target="_blank">Modèles ARMA</a></li>
				<li>Stationnarisation d'une série</a></li>
				<li><a href="http://www.lsta.upmc.fr/gaiffas/files/ifma/chapitre-garch.pdf" target="_blank">Séries temporelles financières</a></li>
			</ul>

			
			<h5>Modèles Aléatoires - O. Bardou</h5>
			<ul>
				<li>Chaînes de Markov</a></li>
				<li>Chaînes de Markov à temps continu sur un espace dénombrable</a></li>
			</ul>


			<h5>Finance 1 - M. Rosenbaum</h5>
			<ul>
				<li>Arbitrage</a></li>
				<li>Modèle binomial à une période</a></li>
				<li>Modèle binomial multipériodes</a></li>
				<li>Modèle de Black et Scholes</a></li>
			</ul>
			
			
			<h5>Analyse de données - M. Bertrand</h5>
			<ul>
				<li>Statistiques (rappel)</a></li>
				<li>Introduction au modèle linéaire gaussien</a></li>
				<li>Régression linéaire</a></li>
				<li>ACP</a></li>
				<li>Analyse discriminante</a></li>
				<li><a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/polySAS.pdf" target="_blank">Introduction à SAS</a></li>
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
