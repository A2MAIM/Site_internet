<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name / Original design: Andreas Viklund - http://andreasviklund.com/" />
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Offres d'emploi</title>
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
		Voici les offres d'emploi envoyéees par nos membres. Merci beaucoup pour vos contributions.
		<ul>

				<li><a href="offreemploi/Poste_Ingenieur_developpement_logiciel_embarque.pdf" target="_blank">Ingénieur développement logiciel embarqué SAFRAN.</a></li>
				<li><a href="offreemploi/consultant-analyste-junior-qualite-service.pdf" target="_blank">Consultant Analyste Junior Qualité de Service IT.</a></li>

<li><a href="offreemploi/consultant-analyste-maitrise-logiciels.pdf" target="_blank">Consultant Analyste Junior, Maîtrise et Optimisation des Logiciels Editeur.</a></li>

<li><a href="offreemploi/consultant-senior-maitrise-logiciels.pdf" target="_blank">Consultant Senior, Maîtrise et Optimisation des Logiciels Editeur.</a></li>

				<li><a href="offreemploi/SKEETMALLROW_fiche_de_poste_analyste_CDD.pdf" target="_blank">Analyste marketing Skeet&Mallrow.</a></li>

				<li><a href="offreemploi/JD_Charge_detudes_techniques_statistiques_et_actuarielles_senior.pdf" target="_blank">Chargé d’études techniques, actuarielles confirmé H/F (Assurance) Hudson.</a></li>
				<li><a href="offreemploi/IngenieurCalculdeCharges.pdf" target="_blank">Ingénieur Calcul de Charges SAFRAN Toulouse</a></li>
				<li><a href="offreemploi/IngenieurCalculStatique-Fatigue.pdf" target="_blank">Ingénieur Calcul statique SAFRAN Toulouse</a></li>
				<li><a href="offreemploi/IngenieurChefdeprojetetqualitejunior.pdf" target="_blank">Ingénieur Chef de projet et qualité SAFRAN Istres</a></li>
				<li><a href="offreemploi/IngenieurGenerationElectriqueHelicoptereLeger.pdf" target="_blank">Ingénieur Génération Electrique Hélicoptère Léger SAFRAN  Vitrolles</a></li>
				<li><a href="offreemploi/IngenieurMaintenance.pdf" target="_blank">Ingénieur de Maintenance SAFRAN Toulouse</a></li>
			

				
				<li><a href="offreemploi/022013-MesocentreAmiens.pdf" target="_blank"> Ingénieur de Recherche en calcul scientifique </a></li>
					Les candidat(e)s intéressé(e)s sont prié(e)s de prendre contact avec :
					<a href="mailto:mark.asch@u-picardie.fr"> Mark ASCH</a>
					<a href="mailto:olivier.goubet@u-picardie.fr"> Olivier GOUBET</a>

				<li><a href="offreemploi/ingenieur_developpement_mechanical_modeler_2013.pdf" target="_blank">Ingénieur développement mechanical modeler - Dassault Systems</a></li>
				<li><a href="offreemploi/102012_Consultant_Analyste_ELEE_v3.pdf" target="_blank">Consultant(e) Analyste</a></li>
				<li><a href="offreemploi/092012_Offre_LEMTA.pdf" target="_blank">Ingénieur en calcul scientifique - CDD</a></li>

				<li><a href="offreemploi/092012_fiche2511.pdf" target="_blank">Ingénieur d'essais d'intégration de systèmes avioniques - Safran Engineering Services - CDI</a></li>

				<li><a href="offreemploi/092012_fiche2514.pdf" target="_blank">Ingénieur calcul statique/fatigue H/F - Safran Engineering Services - CDI</a></li>

				<li><a href="offreemploi/092012_fiche2517.pdf" target="_blank">Ingénieur développement logiciel - Safran Engineering Services - CDI</a></li>

				<li><a href="offreemploi/092012_fiche2353.pdf" target="_blank">Ingénieur programmeur systèmes simulations hélicoptères - Safran Engineering Services - CDI</a></li>

				<li><a href="offreemploi/092012_fiche2459.pdf" target="_blank">Ingénieur développement logiciel - Safran Engineering Services - CDI</a></li>

				<li><a href="offreemploi/072012_incka_annonce_etude.pdf" target="_blank">Ingénieur Etudes Mécanique des Fluides - INCKA - CDI</a></li>
				<li><a href="offreemploi/072012_incka_annonce_optimisation.pdf" target="_blank">Ingénieur Informatique Optimisation - INCKA - CDI</a></li>
				<li><a href="offreemploi/072012_incka_annonce_simulation_numerique_HPC.pdf" target="_blank">Ingénieur développement en simulation numérique sur supercalculateur - INCKA - CDI</a></li>
		</ul>
		
		Vous trouverez de nombreuses offres sur les sites suivants:
		<ul>
		<li><a http://www.enseignementsup-recherche.gouv.fr/pid24790/concours-et-recrutements-des-ingenieurs-et-personnels-techniques-de-recherche-et-de-formation.html> Concours et recrutement des ingénieurs et personnels techniques de recherche et de formation</a></li>
		<ul>
		
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
