<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Examens Analyse Numérique/Calcul Scientifique</title>
	
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
			
			<h5>Matlab</h5>
			<ul>
				<li><a href="exam/Examen_Matlab_2007.pdf" target="_blank">Examen 2007/2008</a></li>
				<li><a href="exam/Examen_Matlab_2008.pdf" target="_blank">Examen 2008/2009</a></li>
				<li><a href="exam/Examen_Matlab_2009.pdf" target="_blank">Examen 2009/2010</a></li>
				<li><a href="exam/Examen_Matlab_2010.pdf" target="_blank">Examen 2010/2011</a></li>
				<li><a href="exam/Examen_Matlab_2011.pdf" target="_blank">Examen 2011/2012</a> et son <a href="exam/Examen_Matlab_cor_2011.pdf" target="_blank">corrigé</a> </li>
			</ul>
			
			<h5>Calcul Scientifique</h5>
			<ul>
				<li><a href="exam/Examen_Calcul_Scientifique_2010.pdf" target="_blank">Examen 2009/2010 (1)</a></li>
				<li><a href="exam/Examen_Calcul_Scientifique_2010_2.pdf" target="_blank">Examen 2009/2010 (2)</a></li>
			</ul>
			
			<h5>Analyse Numérique</h5>
			<ul>
				<li><a href="exam/Examen_Analyse_Numerique_2010.pdf" target="_blank">Examen 2010</a></li>
				<li><a href="exam/Examen_Analyse_Numerique_2011.pdf" target="_blank">Examen 2011</a></li>
			</ul>
			
			<h5>Volumes Finis</h5>
			<ul>
				<li><a href="exam/Examen_Volumes_Finis_2010.pdf" target="_blank">Examen 2010</a></li>
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
