<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="LECOEUR Eve"/>
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Bureau</title>
	
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
			<h3>Présentation du bureau et du conseil d'administration (CA)</h3>
			
			
			<h5>Jean-François Abadie (promotion 2014/2015)  -  Président</h5>
			<pp><a href="https://www.ljll.math.upmc.fr/abadiej/">Jean-François</a> a suivi le parcours Probabilités/Statistiques. Il a effectué son stage au <a href="https://www.ljll.math.upmc.fr/"> Laboratoire Jacques-Louis Lions (LJLL)</a>  pour <a href="http://www.metrolab.net"> METROLAB </a>sur le sujet "Modélisation et optimisation de techniques d’odométrie".</pp><h5></h5>


			<h5>Katia Aitameur (promotion 2015/2016) - </h5>


			<h5>Lilia Bedidi (promotion 2015/2016) - </h5>
			

			<h5>Gryshka Belhassen (promotion 2015/2016) - Webmaster</h5> 
			<pp>Gryshka a suivi le parcours Probabilités/Statistiques. Il a effectué son stage chez <a href="http://www.saint-gobain-recherche.fr/"> Saint-Gobain recherche</a>, sur le sujet de l' "Apprentissage automatique d’un processus industriel". </pp><h5></h5>


			<h5>Ibrahim Benslim (promotion 2015/2016) - </h5>
			<pp>Ibrahim a suivi le parcours Mécanique. </pp><h5></h5>


			<h5>Aurelien Detruit (promotion 2015/2016) - </h5>
		
			<h5>Idil Dusmez (promotion 2015/2016) - Vice Présidente </h5>
			<pp>Idil a suivi le parcours Mécanique.  Elle a effectué son stage à l'<a href="http://www.irt-systemx.fr/"> Institut de Recherche Technologique SystemX</a> sur le sujet "Développement et implémentation de critères d’optimisation de forme en isogéométrie, application à la vibroacoustique des structures minces  </pp><h5></h5>



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
