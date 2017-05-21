<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
		La liste des parrains et filleuls est disponible ci-après. Les parrains prendront directement contact avec leurs filleuls (attention, si vous n'êtes pas enregistré, nous ne serons pas en mesure d'avoir une adresse mail valide). Les parrains sont des contacts privilégiés auxquels les élèves peuvent s'adresser pour des questions (en particulier pour la recherche de stage et d'emploi). <br> <br>

		<TABLE frame="border" cellpadding="2">
  		<TR>
   		<TH align="center"> Elèves de la promotion 2013</TH>
   		<TH align="center"> </TH>
   		<TH align="center"> Parrains </TH>
  		</TR>
  		<TR>
   		<TD> JULISSON Sarah</TD>
		<TD>  </TD>
		<TD> BACCHUS Alexandre</TD>
  		</TR>
  		<TR>
   		<TD> CLAES Florent</TD>
   		<TD>  </TD>
   		<TD> BRAGHINI Perle</TD>
  		</TR>
  		<TR>
   		<TD> CHAN Siqi</TD>
   		<TD>  </TD>
   		<TD> CARRAZ Alban</TD>
  		</TR>
  		
  		<TR>
   		<TD>MORENTE Antoine</TD>
   		<TD>  </TD>
   		<TD>CORDEIRO Sara</TD>
  		</TR>
  		
  		<TR>
   		<TD>DIOUF Abdou Khadre</TD>
   		<TD>  </TD>
   		<TD>ESBRAT Jérôme</TD>
  		</TR>
  		
  		<TR>
   		<TD>OHNONA Yaniv</TD>
   		<TD>  </TD>
   		<TD>FRANCOIS Matthias</TD>
  		</TR>
  		
  		<TR>
   		<TD>REJEB Jamil</TD>
   		<TD>  </TD>
   		<TD>HADDAOUI Khalil</TD>
  		</TR>
  		
  		<TR>
   		<TD>DUFOUR Pauline</TD>
   		<TD>  </TD>
   		<TD>LAMY Aurélie</TD>
  		</TR>
  		
  		<TR>
   		<TD>SAHOURY Nada</TD>
   		<TD>  </TD>
   		<TD>LECOEUR Eve</TD>
  		</TR>
  		
  		<TR>
   		<TD>AMEUR Amina</TD>
   		<TD>  </TD>
   		<TD>LEPOITTEVIN Yann</TD>
  		</TR>
		
  		<TR>
   		<TD>BENARAB Lynda</TD>
   		<TD>  </TD>
   		<TD>LU Xuezhou</TD>
  		</TR>
  		
  		<TR>
   		<TD>N'DIAYE Mamadou</TD>
   		<TD>  </TD>
   		<TD>McKEE François</TD>
  		</TR>
  		
  		<TR>
   		<TD>BEZZA Zakaria</TD>
   		<TD>  </TD>
   		<TD>PRIVAT Karim</TD>
  		</TR>
  		
  		<TR>
   		<TD>JABEUR Nabil</TD>
   		<TD>  </TD>
   		<TD>ROUSSEAU Nicolas</TD>
  		</TR>
  		
  		<TR>
   		<TD>GAULTIER Adrien</TD>
   		<TD>  </TD>
   		<TD>SADOUN Ahmed</TD>
  		</TR>
  		
  		<TR>
   		<TD>VINET Raphael</TD>
   		<TD>  </TD>
   		<TD>SALL Guillaume</TD>
  		</TR>
  		
  		<TR>
   		<TD>JOUX DIT ALISON Anthony</TD>
   		<TD>  </TD>
   		<TD>SANG Liqiang</TD>
  		</TR>
  		
  		<TR>
   		<TD>KANE Birane</TD>
   		<TD>  </TD>
   		<TD>TOUAHMIA Hamza</TD>
  		</TR>
		</TABLE>
<br>
		<TABLE frame="border" cellpadding="2">
  		<TR>
   		<TH align="center"> Elèves de la promotion 2O12</TH>
   		<TH align="center"> </TH>
   		<TH align="center"> Parrains </TH>
  		</TR>
  		<TR>
   		<TD> Yahya AHMED MENEYA</TD>
   		<TD>  </TD>
   		<TD> Sami NAAMANE</TD>
  		</TR>
  		<TR>
   		<TD> Eleftherios ANAGNOSTOPOULOS</TD>
   		<TD>  </TD>
   		<TD> Jérôme ESBRAT</TD>
  		</TR>
  		<TR>
   		<TD> El Hadj Moussa BA</TD>
   		<TD>  </TD>
   		<TD> Alexandra CHRISTOPHE-ARGENVILLIER</TD>
  		</TR>
  		
  		<TR>
   		<TD>Alexandre BACCHUS</TD>
   		<TD>  </TD>
   		<TD>Alban CARRAZ</TD>
  		</TR>
  		
  		<TR>
   		<TD>Guillaume BEDAINE</TD>
   		<TD>  </TD>
   		<TD>Claire LIZON</TD>
  		</TR>
  		
  		<TR>
   		<TD>Zied BEN KILANI</TD>
   		<TD>  </TD>
   		<TD>Islah BAHIRI</TD>
  		</TR>
  		
  		<TR>
   		<TD>David BERTOIN</TD>
   		<TD>  </TD>
   		<TD>Jérôme ESBRAT</TD>
  		</TR>
  		
  		<TR>
   		<TD>Julien BERTRAND</TD>
   		<TD>  </TD>
   		<TD>Eve LECOEUR</TD>
  		</TR>
  		
  		<TR>
   		<TD>Nabil BIRGLE</TD>
   		<TD>  </TD>
   		<TD>Jérôme ESBRAT</TD>
  		</TR>
  		
  		<TR>
   		<TD>Perle BRAGHINI</TD>
   		<TD>  </TD>
   		<TD>Sami NAAMANE</TD>
  		</TR>
		
  		<TR>
   		<TD>Thomas BRIFFARD</TD>
   		<TD>  </TD>
   		<TD>Claire LIZON</TD>
  		</TR>
  		
  		<TR>
   		<TD>Laetitia COLANTONIO</TD>
   		<TD>  </TD>
   		<TD>Hamza TOUAHMIA</TD>
  		</TR>
  		
  		<TR>
   		<TD>Sara Milana CORDEIRO</TD>
   		<TD>  </TD>
   		<TD>Claire LIZON</TD>
  		</TR>
  		
  		<TR>
   		<TD>Delphine DEGRAVE</TD>
   		<TD>  </TD>
   		<TD>François McKEE</TD>
  		</TR>
  		
  		<TR>
   		<TD>Félix DEMANGEON</TD>
   		<TD>  </TD>
   		<TD>David ROY</TD>
  		</TR>
  		
  		<TR>
   		<TD>Sidney GABBAY</TD>
   		<TD>  </TD>
   		<TD>Islah BAHIRI</TD>
  		</TR>
  		
  		<TR>
   		<TD>Imed GHERAB</TD>
   		<TD>  </TD>
   		<TD>Alexandra CHRISTOPHE-ARGENVILLIER</TD>
  		</TR>
  		
  		<TR>
   		<TD>Mamadou GUEYE</TD>
   		<TD>  </TD>
   		<TD>Hamza TOUAHMIA</TD>
  		</TR>
  		
  		<TR>
   		<TD>Khalil HADDAOUI</TD>
   		<TD>  </TD>
   		<TD>Marlène PREIRA</TD>
  		</TR>
  		
  		<TR>
   		<TD>Nicolas HECHT</TD>
   		<TD>  </TD>
   		<TD>David ROY</TD>
  		</TR>
  		
  		<TR>
   		<TD>Aurélie LAMY</TD>
   		<TD>  </TD>
   		<TD>Alban CARRAZ</TD>
  		</TR>
  		
  		<TR>
   		<TD>Yann LEPOITTEVIN</TD>
   		<TD>  </TD>
   		<TD>Alexandra CHRISTOPHE-ARGENVILLIER</TD>
  		</TR>
  		
  		<TR>
   		<TD>Sulan LIU</TD>
   		<TD>  </TD>
   		<TD>Sami NAAMANE</TD>
  		</TR>
  		
  		<TR>
   		<TD>Xuezhou LIU</TD>
   		<TD>  </TD>
   		<TD>Alexandra CHRISTOPHE-ARGENVILLIER</TD>
  		</TR>
  		
  		<TR>
   		<TD>Maimouna MINT BRAHIM</TD>
   		<TD>  </TD>
   		<TD>David ROY</TD>
  		</TR>
  		
  		<TR>
   		<TD>Karim PRIVAT</TD>
   		<TD>  </TD>
   		<TD>Marlène PREIRA</TD>
  		</TR>
  		
  		<TR>
   		<TD>Nicolas ROUSSEAU</TD>
   		<TD>  </TD>
   		<TD>Hamza TOUAHMIA</TD>
  		</TR>
  		
  		<TR>
   		<TD>Ahmed SADOUN</TD>
   		<TD>  </TD>
   		<TD>François McKEE</TD>
  		</TR>
  		
  		<TR>
   		<TD>Guillaume SALL</TD>
   		<TD>  </TD>
   		<TD>Marlène PREIRA</TD>
  		</TR>
  		
  		<TR>
   		<TD>Abib SAMB</TD>
   		<TD>  </TD>
   		<TD>Islah BAHIRI</TD>
  		</TR>
  		
  		<TR>
   		<TD>Liqiang SANG</TD>
   		<TD>  </TD>
   		<TD>Eve LECOEUR</TD>
  		</TR>
  		
  		<TR>
   		<TD>Julia SCHWARTZ</TD>
   		<TD>  </TD>
   		<TD>Eve LECOEUR</TD>
  		</TR>
  		
  		<TR>
   		<TD>Delphine TRANAP</TD>
   		<TD>  </TD>
   		<TD>François McKEE</TD>
  		</TR>
  		
  		<TR>
   		<TD>Jingang YANG</TD>
   		<TD>  </TD>
   		<TD>Alban CARRAZ</TD>
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
