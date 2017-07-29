<?php

include_once('Lib/template.inc');
include_once('Lib/functions.inc');
include('connexion_bd.inc.php'); 

function verificationlogin($login)
{
	//Création de la requete SQL
	$login_sql=mysql_real_escape_string($login);
	$sql = "SELECT membreid from identification WHERE (login='$login_sql')";
	
	//execute la requete SQL
	$result = mysql_query($sql);
	if(mysql_num_rows($result)==1)
  {
		$row = mysql_fetch_assoc($result);
		return $row['membreid'];
	}
  else
  {
		return 0;
	}
	mysql_close($link);				
}

function verificationreponse($membreid,$reponse)
{
	//Création de la requete SQL
	$reponse_sql=mysql_real_escape_string($reponse);
	$sql = "SELECT membreid from identification WHERE (membreid=$membreid) AND (reponse='$reponse_sql')";
	//echo $sql;
	
	//execute la requete SQL
	$result = mysql_query($sql);
	if(mysql_num_rows($result)==1)
  {
		return TRUE;
	}
  else
  {
		return FALSE;
	}		
}

$message = "";

if (isset($_POST['login_ok'])) 
{
	$login_ok = $_POST['login_ok']; 
}
else 
{
	$login_ok = 0; 
}

if (isset($_POST['login']))
{
	$login = $_POST['login'];
	$login_ok = verificationlogin($login);
	if ($login_ok==0) 
  {
		$message="Le login est erroné. Merci de recommencer.";
	}
}

if (isset($_POST['reponse'])) 
{
	$reponse = $_POST['reponse'];
	if (verificationreponse($login_ok,$reponse))
  {
		// envoi du mot de passe par mail
		//echo "yes!";
		$query_mail = "SELECT PER.mail, IDE.password from infosperso PER inner join identification IDE on IDE.membreid=PER.membreid WHERE PER.membreid=$login_ok";
		$result = mysql_query($query_mail);
		$row = mysql_fetch_assoc($result); 

		$mail = $row['mail']; 
		$password = $row['password'];
		$mes = "Voici votre mot de passe pour le site d'A2MAIN : $password \n
		Bonne navigation !";

		$MailSubject =  "Votre mot de passe pour le site A2MAIN"; //texte qui va figurer dans le champ "sujet" du email
		$MailHeader = "From: a2maim.paris6@gmail.com"; //adresse email qui va figurer dans le champ "expéditeur" du email

		mail($mail, $MailSubject, $mes, $MailHeader);
		$message = "Votre mot de passe vous a été envoyé par mail.";
	}
	else 
  {
		$message = "Réponse incorrecte !";
	}
}

$TITRE='';
$TEXTE_ACCUEIL='';
if ($login_ok==0) 
{
	$CONTENU  = "
    <table>
			<tr>
  			<td width='30%'></td>
  			<td width='60%'>
  				<form name='data' method='post' action='".$_SERVER['PHP_SELF']."'>
    				<table>
      				<tr>
        				<td>Votre login : </td>
        				<td><input name='login' type='text' /></td>
      				</tr>
      				<tr>
      				  <td colspan='2'><span style='color:red; align:center'> $message </span></td>
      				</tr>
      				<tr>
        				<td colspan='2' align='center'>
          				<input type='hidden' name='login_ok' value='$login_ok' />
          				<input name='Submit' class='button2' type='submit' value='Entrer' />
                </td>
      				</tr>
    				</table>
          </form>
  			</td>
			</tr>
		</table>
		";
}
else 
{
	$query_bete = "SELECT pensebete from identification WHERE membreid=$login_ok";
	$result = mysql_query($query_bete);
	$row = mysql_fetch_assoc($result);
	$pensebete = $row['pensebete'];
	
		$CONTENU  = "
      <table>
  			<tr>
    			<td width='20%'></td>
    			<td width='70%'>
    				<form name='data' method='post' action=".$_SERVER['PHP_SELF'].">
      				<table>
        				<tr>
          				<td>Votre question pense-b&ecirc;te : </td>
          				<td><input name='question' type='text' value='$pensebete' disabled /></td>
          			</tr>
          			<tr>
          				<td>Votre réponse : </td>
          				<td><input name='reponse' type='text' /></td>
          			</tr>
          			<tr>
          				<td colspan='2'> <span style='color:red; align:center'> $message </span> </td>
          			</tr>
          			<tr>
          				<td colspan='2' align='center'>
            				<input type='hidden' name='login_ok' value=$login_ok />
            				<input name='Submit' class='button2' type='submit' value='Entrer' />
                  </td>
        				</tr>
      				</table>
            </form>
    			</td>
  			</tr>
			</table>
			";
}
mysql_close($link);
	
$t = new Template();
$t->set_file("cpage","menutemplate.tpl");
$t->set_var("TITRE_PAGE",$TITRE);
$t->set_var("CONTENU",$CONTENU);
$t->set_var("TEXTE_ACCUEIL",$TEXTE_ACCUEIL);
$t->parse("CPAGE","cpage");
$t->p("CPAGE");

?>
