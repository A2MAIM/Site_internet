<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Examens Méca</title>
	
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
			
			<h5>Mécanique des Milieux Continus</h5>
			<ul>
				<li><a href="exam/Examen_Mecanique_Milieux_Continus_2005.pdf" target="_blank">Examen 2005</a> et son <a href="exo/Examen_Mecanique_Milieux_Continus_2005_corr.pdf" target="_blank">corrigé</a></li>
				<li><a href="exam/Examen_Mecanique_Milieux_Continus_2006.pdf" target="_blank">Examen 2006</a> et son <a href="exo/Examen_Mecanique_Milieux_Continus_2006_corr.pdf" target="_blank">corrigé</a></li>
				<li><a href="exam/Examen_Mecanique_Milieux_Continus_2007.pdf" target="_blank">Examen 2007</a> et son <a href="exo/Examen_Mecanique_Milieux_Continus_2007_corr.pdf" target="_blank">corrigé</a></li>
				<li><a href="exam/Examen_Mecanique_Milieux_Continus_2009.pdf" target="_blank">Examen 2009</a> et son <a href="exo/Examen_Mecanique_Milieux_Continus_2009_corr.pdf" target="_blank">corrigé</a></li>
			</ul>
			
			<h5>Mécanique des Solides</h5>
			<ul>
				<li><a href="exam/Examen_Mecanique_Solide_2010.pdf" target="_blank">Examen 2010</a></li>
			</ul>
			
			<h5>Aérodynamique</h5>
			<ul>
				<li><a href="exam/Examen_Aerodynamique_2010.pdf" target="_blank">Examen 2010</a></li>
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
