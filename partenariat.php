<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="LECOEUR Eve"/>
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Partenariat</title>

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
			<h3>Sociétés créées par nos anciens :</h3>
			<p></p>

			<a href="http://www.pandat.fr/" target=blank>
			<img src="images/logos/logo_pandat.gif" ALT= "http://www.pandat.fr/1" TITLE= "http://www.pandat.fr/"></a>
			<p>Pour optimiser vos placements de trésorerie, Pandat vous propose une plateforme de mise en relation sur les dépôts à terme (DAT) ou comptes à terme (CAT) et certificats de dépôt négociables (CDN).</p>

			<a href="http://www.intuit-technologies.com/" target=blank>
			<img src="images/logos/fluidian_logo.gif" ALT= "http://www.intuit-technologies.com/" TITLE= "http://www.intuit-technologies.com/"></a>
			<p>FLUIDIAN est une entreprise de spécialistes en simulation numérique de la dynamique des fluides (Computational Fluid Dynamics).</p>
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
