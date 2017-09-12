<?php session_start(); ?>
<!DOCTYPE html>
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

			<h3>Bienvenue sur le site d'A2MAIM</h3>

			<p>Chers visiteurs,</p>
			<p>Depuis sa création en 2006, A2MAIM, l'Association des Anciens du MAster d'Ingénierie Mathématique de l’Université Pierre et Marie Curie, a pour but de faciliter l’insertion professionnelle des jeunes diplômés et de développer un réseau visant à établir un lien entre les différentes promotions.</p>
			<p>Le master, ancien DESS de mathématiques appliquées, s’articule autour de deux filières : mécanique et probabilités/statistiques. En complément, il propose une formation solide en analyse numérique, calcul scientifique et informatique à ses étudiants, et leur offre ainsi des connaissances qui s’appliquent à des domaines aussi variés que l'énergie, les transports, les télécommunications, la finance, etc.<br/>
			En outre, les étudiants en probabilités/statistiques ont également la possibilité d’obtenir une certification en Big Data.</p>
			<p>Tout au long de l’année, l’association organise des rencontres entre ses membres et les étudiants afin de favoriser les échanges. Des simulations d’entretiens menées par des Anciens de l’association sont également mises en place, ainsi qu’un CV book destiné à être diffusé dans diverses entreprises.</p>
			<p>En naviguant sur ce site, vous pourrez faire connaissance avec le bureau de l’association, vous tenir au courant des évènements organisés, ainsi que consulter des témoignages d’anciens étudiants du master.</p>
			<p>Toute l'équipe d'A2MAIM vous souhaite une bonne visite !</p>


			<h3>Restons connectés !</h3>         
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

