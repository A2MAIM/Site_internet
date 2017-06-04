<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	
	<!-- ligne qui indique que ce fichier est associé à a2maim.css -->
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />

	<title>Association A2MAIM</title>

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

			<marquee> <h2 class=color_blue> <!--Rencontre anciens/nouveaux le 24 mai ! Pensez à confirmer votre présence. --> </h2></marquee>

			<h3>Mot de l'ancienne Présidente </h3>
			<p>Chers internautes, anciens et nouveaux étudiants,</p>
			<p>Depuis sa création en 2006, l'association des Anciens élèves du Master d'Ingénierie Mathématique propose de défendre la qualité d'ancien élève en maintenant les liens d'amitiés que les étudiants ont tissé dès leur arrivée dans le master.<br/>
			Anciennement DESS de mathématiques appliquées, le master d'Ingénierie Mathématique fait désormais figure de formation de premier plan dans les domaines des mathématiques appliquées, des sciences de l'ingénieur et des finances.<br/>
			Fort de ce constat, nos efforts portent sur la valeur ajoutée que nous pouvons apporter en construisant un pont entre les différentes promotions. Nous souhaitons que les expériences des anciens profitent aux nouveaux étudiants afin de valoriser toujours plus notre 			formation.<br/>
			Parce que nous pensons que le passé des uns peut aider à construire l'avenir des autres, nous développons jour après jour un réseau au plus près des anciens comme des nouveaux élèves.<br/>
			Ensemble, faisons vivre cette association.</p>
		
			<p>Bonne Visite</p>

			<p>L'ancienne Présidente</p>



			<h3>Pourquoi une association ?</h3>
			<p>A2MAIM est l'association des anciens élèves du <b>Master Mathématiques & Applications</b>, spécialité <b>Ingénierie Mathématique</b> 		de l'Université Pierre et Marie Curie (Paris VI). L'asssociation s'adresse en particulier aux élèves du parcours <b>Mathématiques pour 			l'Entreprise</b> (ancien <b>DESS d'Analyse Numérique</b>, formation existant depuis 1977). Elle organise les échanges entre les anciens 		élèves et souhaite aider les nouveaux étudiants à s'insérer professionnellement. Depuis 2006, A2MAIM relaie des offres de stage/d'emploi 			et organise chaque année une rencontre d'échange entre les anciens et les nouveaux étudiants.</p>

			<h3>Pour qui ?</h3>
			<p>Tous les détenteurs du diplôme ainsi que pour les actuels étudiants.</p>

			<p></p>
	
			<h3>Rejoignez nous !</h3>         
			<a href="https://www.facebook.com/a2maim/" target="_blank"><img src="images/facebook-baner.jpg" TITLE="Rejoignez-nous sur Facebook !"></a>
            <a href="https://www.linkedin.com/groups/8385529" target="_blank"><img src="images/linkedin-baner.png" TITLE="Rejoignez-nous sur LinkedIn !"></a>
		</div>

		<div id="sidebar">
			<?php
				if (isset($_SESSION['verified_login'])){
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
