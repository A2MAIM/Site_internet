<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Exercices Probas/Stats</title>
	
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
		
		<h5>Séries temporelles</h5>
		<ul>
		<li><a href="exo/TD_1_Series_Temporelles.pdf" target="_blank">Introduction aux séries temporelles (TD1)</a></li>
		<li><a href="exo/TD_2_Series_Temporelles.pdf" target="_blank">Introduction aux séries temporelles (TD2)</a></li>
		<li><a href="exo/TD_3_Series_Temporelles.pdf" target="_blank">Introduction aux séries temporelles (TD3)</a></li>
		<li><a href="exo/TD_3bis_Series_Temporelles.pdf" target="_blank">Séries temporelles</a></li>
		<li><a href="exo/Devoir_1_Series_Temporelles.pdf" target="_blank">Devoir maison</a> et son <a href="exo/Devoir_1_Series_Temporelles_corr.pdf" target="_blank">corrigé</a></li>
		</ul>
		
		<h5>Calcul Stochastique</h5>
		<ul>
		<li><a href="exo/TD_1_Calcul_Stochastique.pdf" target="_blank">TD 1</a></li>
		<li><a href="exo/TD_2_Calcul_Stochastique.pdf" target="_blank">TD 2</a></li>
		<li><a href="exo/TD_3_Calcul_Stochastique.pdf" target="_blank">TD 3</a></li>
		<li><a href="exo/TD_4_Calcul_Stochastique.pdf" target="_blank">TD 4</a></li>
		<li><a href="exo/TD_5_Calcul_Stochastique.pdf" target="_blank">TD 5</a></li>
		<li><a href="exo/TD_6_Calcul_Stochastique.pdf" target="_blank">TD 6</a></li>
		</ul>
		
		<h5>Analyse De Données</h5>
		<ul>
		<li><a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/TP1.pdf" target="_blank">TP 1 : Manipulation de données</a> et son <a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/CorrectionPartielleTP1.sas" target="_blank">corrigé partiel</a></li>
		<li><a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/TP2.pdf" target="_blank">TP 2 : Procédures statistiques élémentaires</a> et son <a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/CorrectionPartielleTP2.sas" target="_blank">corrigé partiel</a></li>
		<li><a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/TP3.pdf" target="_blank">TP 3 : Premiers modèles linéaires</a> et son <a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/CorrectionPartielleTP3.sas" target="_blank">corrigé partiel</a></li>
		<li><a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/TP4.pdf" target="_blank">TP 4 : Régression multiple</a> et son <a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/CorrectionTP4.sas" target="_blank">corrigé partiel</a></li>
		<li><a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/TP5.pdf" target="_blank">TP 5 : Analyse en Composantes Principales</a> et son <a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/CodesTP5.sas" target="_blank">corrigé partiel</a></li>
		<li><a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/TP6.pdf" target="_blank">TP 6 : Analyse discriminante</a> et son <a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/CodesTP6.sas" target="_blank">corrigé partiel</a></li>
		<li><a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/TP7.pdf" target="_blank">TP 7 : Régression logistique</a> et son <a href="http://www.lsta.upmc.fr/michelb/Enseignements/M2ADDModLin/CodesTP7.sas" target="_blank">corrigé partiel</a></li>
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
