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
		<h5>Jean-François Abadie (2014/2015)  -  Président</h5>
<pp>Jean-François a suivi le parcours Probabilités/Statistiques. Il a effectué son stage au <a href="https://www.ljll.math.upmc.fr/"> Laboratoire Jacques-Louis Lions (LJLL)</a>  pour <a href="http://www.metrolab.com/"> METROLAB </a>sur le sujet "Modélisation et optimisation de techniques d’odométrie".</pp><h5></h5>



		
	<h5>Gryshka Belhassen (2015/2016) - Conseiller</h5> 
<pp>Gryshka a suivi le parcours Probabilités/Statistiques. Il a effectué son stage chez <a href="http://www.saint-gobain-recherche.fr/"> Saint-Gobain recherche</a>, sur le sujet de l' "Apprentissage automatique d’un processus industriel". </pp><h5></h5>


	<h5>Ibrahim Benslim (2015/2016) - Responsable de l'évènementiel</h5>
		<pp>Ibrahim a suivi le parcours Mécanique. </pp><h5></h5>
		
		<h5>Idil Dusmez (2015/2016) - Secrétaire</h5>
		<pp>Idil a suivi le parcours Mécanique.  Elle a effectué son stage à l'<a href="http://www.irt-systemx.fr/"> Institut de Recherche Technologique SystemX</a> sur le sujet "Développement et implémentation de critères d’optimisation de forme en isogéométrie, application à la vibroacoustique des structures minces  </pp><h5></h5>


		<h5>Julien Floquet (2014/2015) - Trésorier</h5>
		<pp> Julien a suivi le parcours Probabilités/Statistiques. Il a effectué son stage à <a href="https://www.ibm.com/fr-fr/"> IBM France</a> sur le sujet "Développement d’un prototype de la plateforme SOLON". </pp><h5></h5>



<h5>Adnane Marzouk (2014/2015) - Résponsable communication</h5>
		<pp> Adnane a suivi le parcours Probabilités/Statistiques. Il a effectué son stage chez <a href="https://www.lamutuellegenerale.fr/"> La Mutuelle Generale</a>, en big data.</pp><h5></h5>



<h5>Dan Partouche (2014/2015) - Résponsable communication</h5>
		<pp> Dan a suivi le parcours Probabilités/Statistiques. Il a effectué son stage chez <a href="http://www.sarenza.com/"> Sarenza </a>, sur le sujet "Analyse statistique liée aux problématiques de fraude".</pp><h5></h5>



<h5>Nicolas Raimundo (2014/2015) - Webmaster</h5>
		<pp> Nicolas a suivi le parcours Mécanique. Il a effectué son stage chez <a href="http://www.space-airbusds.com/fr/"> Airbus Defence and Space</a> sur le site des Mureaux, sur le sujet du "Pistage de satellites et débris géostationnaires".</pp><h5></h5>


<h5>Lilia Bédidi (2015/2016) - Responsable mail</h5>
		<pp> Lilia a suivi le parcours Mécanique. Elle a effectué son stage chez <a href="https://www.edf.fr/"> EDF R&D</a>, sur le sujet du "Modélisation de lavariance de température dans le code de thermique SYRTHES".</pp><h5></h5>

		 
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
