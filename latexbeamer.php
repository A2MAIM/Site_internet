<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Liens utiles en informatique</title>
	
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
		
		Nous répertorions sur cette page quelques liens nous semblant utiles à la fois pour votre culture générale et pour
		vous aider dans votre formation. Ces liens sont classés par thème.<h5></h5>
		
		<h5>LaTeX et Beamer</h5>
		<ul>
		<li><a href="http://siragi.sourceforge.net/LaTeX.htm#etq2" target="_blank">Comment installer LaTeX ?</a></li>
		<li><a href="http://www.tuteurs.ens.fr/logiciels/latex/" target="_blank">Tutoriel LaTeX</a></li>
		<li><a href="http://www.tuteurs.ens.fr/logiciels/latex/beamer.html" target="_blank">Tutoriel Beamer</a></li>
		<li><a href="beamer.zip" target="_blank">Exemple de code complet pour une présentation Beamer</a> - Télécharger l'archive et l'extraire dans un dossier avant de compiler le .tex.</li>
		<li>Exemple de code complet pour un rapport en LaTeX</li>
		</ul>
		
		<h5>Site généraux</h5>
		<ul>
		<li><a href="https://openclassrooms.com" target="_blank">OpenClassrooms</a></li>
		</ul>
		
		<h5>Linux</h5>
		<ul>
		<li><a href="http://doc.ubuntu-fr.org/wubi" target="_blank">Installation d'une machine virtuelle Ubuntu sous Windows</a></li>
		<li><a href="http://www.ubuntu.com/" target="_blank">Installation d'Ubuntu</a></li>
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
