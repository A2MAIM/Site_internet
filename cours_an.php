<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Cours Analyse Numérique et Calcul Scientifique</title>
	
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
		
			<h5>Analyse Numérique - Cours de Pascal Frey</h5>
			<ul>
				<li><a href="cours/Cours_Analyse_Numerique_Introduction.pdf" target="_blank">Introduction</a></li>
				<li><a href="cours/Cours_Analyse_Numerique_Chapitre1.pdf" target="_blank">Chapitre 1</a></li>
				<li><a href="cours/Cours_Analyse_Numerique_Chapitre2.pdf" target="_blank">Chapitre 2</a></li>
			</ul>
		
			<h5>Calcul Scientifique</h5>
			<ul>
				<li><a href="cours/Cours_Calcul_Scientifique_Pironneau.pdf" target="_blank">Transparents d'Olivier Pironneau</a></li>
				<li><a href="cours/Cours_MPI.pdf" target="_blank">MPI - Cours de Jacques Portès</a></li>
				<li><a href="cours/Cours_Roux.pdf" target="_blank">Cours de François-Xavier Roux</a></li>
			</ul>
		
			<h5>C++</h5>
			<ul>
				<li><a href="cours/Cours_C++.pdf" target="_blank">Cours de Frédéric Hecht</a></li>
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
