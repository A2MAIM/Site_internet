<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="featureription" content="your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="LECOEUR Eve"/>
	<link rel="stylesheet" type="text/css" href="a2maim.css" media="screen,projection" title="A2MAIM : Association des Anciens du MAster d'Ingénierie Mathématique" />
	<title>Association A2MAIM : Parrainage de la promotion 2012</title>
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
			La liste des anciens étudiants du MPE est disponible ci-après. Vous y trouverez leur emploi actuel ainsi qu'un mail de contact. N'hésitez pas à les contacter (en cliquant sur leur nom). <br> <br>

			<TABLE border=1 width=100%>
				<TR >
					<TH align="center"> Poste</TH>
					<TH align="center"> Entreprise </TH>
					<TH align="center"> Contact </TH>
				</TR>
				<TR>
					<TD> Doctorant</TD>
					<TD> IFPEN </TD>
					<TD> <a href="mailto: francois.mckee@ifpen.fr">François McKee</a></TD>
				</TR>
					<TD> Maitre de conférences </TD>
					<TD> Institut Polytechnique de Bordeaux </TD>
					<TD> <a href="mailto: cecile.dobrzynski@math.u-bordeaux1.fr"> Cécile Dobrynski</a></TD>
				</TR>
			
				</TR>
					<TD> Gérant </TD>
					<TD> Fluidian </TD>
					<TD> <a href="mailto: jeremie.tache@fluidian.fr"> Jérémie Tache</a></TD>
				</TR>
				
				</TR>
					<TD> Ingénieur synthèse véhicule - architecture </TD>
					<TD> Renault </TD>
					<TD> <a href="mailto: christophe.maries@renault.com"> Christophe Maries</a></TD>
				</TR>
			
				</TR>
					<TD> Trader Equity finance/liquidity management </TD>
					<TD> Natixis </TD>
					<TD> <a href="mailto:  tanguy.girves@natixis.com"> Tanguy Girves</a></TD>
				</TR>

				</TR>
					<TD> Thèse, Modé­li­sa­tion de la géné­ra­tion d’ultrasons par laser : Appli­ca­tion à l’inspection de com­po­sants aéronautiques </TD>
					<TD> Commissariat à l Énergie Atomique (C.E.A) </TD>
					<TD> <a href="mailto:  anagnostopoulos.eleftherios@gmail.com"> Anagnostopoulos Eleftherios</a></TD>
				</TR>

				</TR>
					<TD> Doctorant en électrotechnique et statistiques </TD>
					<TD> EDF R&D / L2EP / LAGIS (Université de Lille 1) </TD>
					<TD> <a href="mailto:  alexandre.bacchus@gmail.com"> Alexandre Bacchus</a></TD>
				</TR>

				</TR>
					<TD> Doctorante </TD>
					<TD> Laboratoire LOMC CNRS, Université du Havre </TD>
					<TD> <a href="mailto:  xuezhou.lu@gmail.com"> Xuezhou Lu</a></TD>
				</TR>

				</TR>
					<TD> Ingénieure d'étude en contrôle non destructif par courants de Foucault </TD>
					<TD> EDF CEIDRE </TD>
					<TD> <a href="mailto:  cordeiro.sara.m@gmail.com"> Sara Cordeiro</a></TD>
				</TR>

				</TR>
					<TD> Doctorant, sujet de thèse: Couplage interfacial de systèmes hyperboliques non linéaires </TD>
					<TD> Onera </TD>
					<TD> <a href="mailto:  khalil.haddaoui@onera.fr"> Khalil Haddaoui</a></TD>
				</TR>

					<TD> Responsable du groupe Analyses Thermiques et Mécanique Compresseur </TD>
					<TD> TURBOMECA – Groupe SAFRAN </TD>
					<TD> <a href="mailto:  Olivier.Tuot@turbomeca.fr"> Olivier Tuot</a></TD>
				</TR>
		
					<TD> Associé dirigeant   </TD>
					<TD> Pandat Finance </TD>
					<TD> <a href="tel:0183818161"> David Guyot</a></TD>
				</TR>

					<TD> Consultante Business intelligence </TD>
					<TD> CGI </TD>
					<TD> <a href="mailto:  islah.bahiri@gmail.com"> Islah Bahiri </a></TD>
				</TR>

					<TD> Doctorante </TD>
					<TD> Centre d'Enseignement et de Recherche en Environnement Atmosphérique, Ecole des Ponts ParisTech </TD>
					<TD> <a href="mailto:  eve.lecoeur@gmail.com"> Eve Lecoeur</a></TD>
				</TR>

					<TD> Doctorant/Chercheur </TD>
					<TD> Global Market Solutions R&D, Laboratoire Jacques Louis Lions,                     Laboratoire Probabilités et Modèles Aléatoires </TD>
					<TD> <a href="mailto:  sall@ann.jussieu.fr"> Guillaume Sall</a></TD>
				</TR>

						<TD> Operational Risk Manager </TD>
					<TD> Investec </TD>
					<TD> <a href="mailto:  emile.dunand@gmai.com"> Emile Dunand</a></TD>
				</TR>

			</TABLE>

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
