<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="LECOEUR Eve"/>
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Conseil d'administration</title>
	
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
			<h3>Présentation du conseil d'administration (CA)</h3>

			<h5><a href="https://www.ljll.math.upmc.fr/abadiej/">Jean-François ABADIE</a> - Président</h5>
			<pp>Jean-François a obtenu son diplôme en 2015 après avoir suivi le parcours Probabilités - Statistiques et a effectué son stage au <a href="https://www.ljll.math.upmc.fr/">Laboratoire Jacques-Louis Lions (LJLL)</a> pour les besoins de <a href="http://www.metrolab.net">Metrolab</a> sur le sujet "Modélisation et optimisation de techniques d'odométrie". Il est actuellement en études doctorales au LJLL.</pp><h5></h5>

			<h5><a href="https://fr.linkedin.com/in/idil-dusmez-0648ba107">Idil DUSMEZ</a> - Vice Présidente</h5>
			<pp>Idil a obtenu son diplôme en 2016 après avoir suivi le parcours Mécanique et a effectué son stage à l'<a href="http://www.irt-systemx.fr/">Institut de Recherche Technologique SystemX</a> sur le sujet "Développement et implémentation de critères d’optimisation de forme en isogéométrie, application à la vibroacoustique des structures minces".</pp><h5></h5>

			<h5><a href="https://fr.linkedin.com/in/lilia-bedidi">Lilia BÉDIDI</a> - Secrétaire</h5>
			<pp>Lilia a obtenu son diplôme en 2016 après avoir suivi le parcours Mécanique et a effectué son stage à <a href="https://www.edf.fr/">EDF R&D</a> sur le sujet "Modélisation de la variance de température dans le code de thermique SYRTHES".</pp><h5></h5>

			<h5><a href="https://fr.linkedin.com/in/katia-ait-ameur-226100110">Katia AÏT AMEUR</a> - Responsable trésorerie et évènementiel </h5>
			<pp>Katia a obtenu son diplôme en 2016 après avoir suivi le parcours Mécanique et a effectué son stage au <a href="http://www.cea.fr/">Commissariat à l’énergie atomique et aux énergies alternatives (CEA)</a> et au <a href="https://www.math.univ-paris13.fr/laga/index.php/fr/">Laboratoire Analyse, Géométrie et Applications (LAGA)</a> (Université Paris 13) sur le sujet "Implémentation de conditions de Robin pour le problème de Stokes dans le cadre de méthodes de décomposition de domaine de Schwarz : application au code TRUST". Elle est actuellement en études doctorales au CEA et au LJLL.</pp><h5></h5>			

			<h5><a href="https://fr.linkedin.com/in/aurélien-detruit-b93894109">Aurélien DETRUIT</a> - Responsable communication</h5>
			<pp>Aurélien a obtenu son diplôme en 2016 après avoir suivi le parcours Mécanique et a effectué son stage à <a href="https://www.edf.fr/">EDF R&D</a> sur le sujet "Analyse paramétrique in-situ et simulations parallèles à grande échelle en mécanique des fluides".</pp><h5></h5>

			<h5><a href="https://fr.linkedin.com/in/gryshka-belhassen">Gryshka BELHASSEN</a> - Webmaster</h5> 
			<pp>Gryshka a obtenu son diplôme en 2016 après avoir suivi le parcours Probabilités - Statistiques et a effectué son stage chez <a href="http://www.saint-gobain-recherche.fr/">Saint-Gobain Recherche</a> sur le sujet "Apprentissage automatique d’un processus industriel".</pp><h5></h5>
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
