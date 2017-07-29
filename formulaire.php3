<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
  <head>
  	<meta http-equiv="content-type" content="text/html; ; charset=utf-8" />
  	<meta name="description" content="Site web de A2MAIM" />
  	<meta name="keywords" content="association, A2MAIM, MPE, jussieu" />
  	<meta name="GD" content="A2MAIM" />
  	<link rel="stylesheet" type="text/css" href="a2maim.css" title="andreas06" media="screen,projection" />
  	<title>A2MAIM : Adhésion</title>
  </head>
  
  <body>
    <div id="container">
    	<?php include("header.php") ?>
    	
    	<div id="main">
		<?php include("menu.php") ?>
		</div>
		
		<div id="main">
<?
// DEBUT Fonction de contrôle du mail PHP-UNIX
function check_mail($mail) { 
  if( (preg_match('/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/', $mail)) || 
  (preg_match('/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/',$mail)) ) 
  { 
    $host = explode('@', $mail);
    if(checkdnsrr($host[1].'.', 'MX') ) return true;
    if(checkdnsrr($host[1].'.', 'A') ) return true;
    if(checkdnsrr($host[1].'.', 'CNAME') ) return true;
  }
  return false;
}

include('connexion_bd.inc.php'); 

// FIN Fonction de contrôle du mail
$MailTo = "a2maim.paris6@gmail.com"; //adresse à laquelle sera envoyé le contenu du formulaire
$MailCc = $mail; // adresse à laquelle sera envoyé un communiqué
$MailSubject = "Inscription A2MAIM"; //texte qui va figurer dans le champ "sujet" du email
$MailHeader = "From: ".$MailTo; //adresse email qui va figurer dans le champ "expéditeur" du email

/* Les routines suivantes permettent à chacune des variables de prendre la valeur des champs du formulaire et de les stocker ensuite dans la variable globale MailBody qui constituera le corps du message */

$Envoi = 1; //initialisation de la variable envoi à 1
$MailBody="";

//INFOS PERSO
if ($nom == ""){ //nom du champ1
	echo("Vous n'avez pas donné votre nom.<br>"); //message qui s'affiche si le visiteur n'a pas rempli ce champ
	$Envoi = 0; //si le champ1 n'a pas été rempli, la variable envoi prend la valeur de 0
} else {
	$MailBody .= "Nom : $nom\n"; //si le champ1 contient de l'information, elle est stockée dans la variable MailBody
}

if ($prenom == ""){
	echo("Vous n'avez pas donné votre prénom.<br>");
	$Envoi = 0;
} else {
	$MailBody .= "Prenom : $prenom\n";
}

if ($mail == ""){
	echo("Vous n'avez pas donné votre e-mail<br>");
	$Envoi = 0;
} else {
	if (check_mail($mail)) {
	$MailBody .= "Mail : $mail\n";
	$MailBody .= "Autorisation contact : $autorisationmail\n";
	} else {
		echo("L'adresse e-mail n'est pas valide<br>");
		$Envoi = 0;
	}
}

//INFOS PROF
if ($posteactuel == ""){
	echo("Vous n'avez pas précis&eacute votre situation actuelle.<br>");
	$Envoi = 0;
} else {
	$MailBody .= "Poste actuel : $posteactuel\n";
}
if ($societeactuelle != ""){
	$MailBody .= "Societe actuelle : $societeactuelle\n";
}
if ($descriptionposte != ""){
	$MailBody .= "Description poste : $descriptionposte\n";
}
if ($region != ""){
	$MailBody .= "Region : $region\n";
}

$MailBody .= "Salaire : $salaire\n";
$MailBody .= "Autorisation diffusion : $autorisationpro\n";


//FORMATION
if ($annee == "0"){
	echo("Vous n'avez pas précisé l'année d'obtention de votre DESS<br>");
	$Envoi = 0;
} else {
	$MailBody .= "Annee diplome : $annee\n";
}
if ($spe == ""){
	echo("Vous n'avez pas précisé votre spécialité.<br>");
	$Envoi = 0;
} else {
	$MailBody .= "Specialite : $spe\n";
}

$MailBody .= "Reseau : $reseau\n";
$MailBody .= "Societe stage : $societestage\n";
$MailBody .= "Description stage : $descriptionstage\n";
$MailBody .= "Provenance : $descriptionprovenance\n";
$MailBody .= "Autorisation formation : $autorisationformation\n";

if ($login == ""){
	echo("Vous n'avez pas choisi de login.<br>");
	$Envoi = 0;
} else {
	$MailBody .= "login : $login\n";
}

if($motdepasse == "") {
	echo("Vous n'avez pas choisi de mot de passe.<br>");
	$Envoi = 0;
} else {
	if ($motdepasse != $confirmotdepasse){
		echo("Confirmation du mot de passe fausse.<br>");
		$Envoi = 0;
	} else {
		$MailBody .= "mot de passe : ".$motdepasse."<br>";	
	}
}	

if ($questionpensebete == ""){
	echo("Vous  n'avez pas défini de question en cas d'oubli du mot de passe.<br>");
	$Envoi = 0;
} else {
	$MailBody .= "Question bete : $questionpensebete\n";
}
	
if ($reponsepensebete == ""){
	echo("Vous n'avez pas répondu &agrave; la question pense-b&ecirc;te.<br>");
	$Envoi = 0;
} else {
	$MailBody .= "reponse : $reponsepensebete\n";
}

if ($Envoi == 0) {
	echo("<p>&nbsp;</p><p>&nbsp;</p><p align=\"center\"><a href=\"formulaireinscription.php\"><strong>Retour</strong></a></p>"); 
}

//Envoi du message de confirmation
if ($Envoi == 1) { //vérification que la variable envoi est bien à 1
	mail($MailTo, $MailSubject, $MailBody, $MailHeader); //envoi du message
	mail($MailCc, $MailSubject, $MailBody, $MailHeader); //envoi du communiqué (enlever // pour le rendre opérationnel
	echo("<p>Votre inscription a bien été prise en compte.<br>.<br>");
	echo("<p>&nbsp;</p><p>&nbsp;</p><p align=\"center\"><a href=\"formulaireinscription.php\"><strong>Retour</strong></a></p>"); //affichage d'un message de confirmation.

	// Ajoute une entrée dans la table identification	
	$ReqInsert="INSERT INTO identification VALUES ('',  '".$login."',  '".$motdepasse."',  '".$questionpensebete."',  '".$reponsepensebete."',  'Y',  'N');";
	$requete = mysql_query($ReqInsert); 	

	// Ajoute une entrée dans la table infosperso	
	$ReqInsert="INSERT INTO  infosperso VALUES ('',  '".$nom."',  '".$prenom."',  '".$mail."',  '".$autorisationmail."');";
	$requete = mysql_query($ReqInsert);

	// Ajoute une entrée dans la table infosmaster	
	$ReqInsert="INSERT INTO  infosmaster VALUES ('',  '".$annee."',  '".$spe."',  '".$reseau."',  '".$descriptionprovenance."',  '".$societestage."',  '".$descriptionstage."',  '".$autorisationformation."');";
	$requete = mysql_query($ReqInsert);
	
	// Ajoute une entrée dans la table infospro	
	$ReqInsert="INSERT INTO  infospro VALUES ('',  '".$societeactuelle."',  '".$region."',  '".$posteactuel."',  '".$descriptionposte."',  '".$salaire."',  '".$autorisationpro."');";
	$requete = mysql_query($ReqInsert);
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
  
