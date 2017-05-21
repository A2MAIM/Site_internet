<?php
include_once('Lib/template.inc');
include_once('Lib/functions.inc');

function verification($login,$pass)
{
	//connexion et selection de la base
	include('connexion_bd.inc.php');

	//Création de la requete SQL
	$login_sql=mysql_real_escape_string($login);
	$pass_sql=mysql_real_escape_string($pass);
	$sql = "SELECT membreid from identification WHERE (login='$login_sql') AND (PASSWORD='$pass_sql')";

	//execute la requete SQL
	$result = mysql_query($sql,$link);
	$txterr = mysql_error();
	echo $txterr;

	if ($q = mysql_fetch_array($result))
  	{
		mysql_close($link);
		return $q[0]; // membreid
	}
	else
  	{
		mysql_close($link);
		return 0; // membreid==0 => non authentifié
	}
}

function SetUtilisateur($login)
{
	//connexion et selection de la base
	include("connexion_bd.inc.php");

	//Création de la requete SQL
	$login_sql=mysql_real_escape_string($login);
	$sql = "SELECT membreid from identification where login='$login_sql'";
	//execute la requete SQL
	$data = mysql_query($sql,$link);
	$result = mysql_fetch_assoc($data);
	$_SESSION['LOGIN'] = $login_sql;
	$_SESSION['MEMBREID'] = $result["membreid"];

	mysql_close($link);
}

$message = "";
if ($action == "Entrer")
{
	$membreid = verification($login,$password);
	if ($membreid != 0)
  	{
		// le mot de passe est valide, l'utilisateur est identifié
		// on change d'identifiant de session
		$verified_login = $login;
		$verified_membreid = $membreid;
		//session_register("verified_login"); NOTE: FONCTION DEPRECIEE
		//session_register("verified_membreid"); IDEM
		$_SESSION['verified_login'] = true;
		$_SESSION['verified_membreid'] = $membreid;

		$query = "select membre, ancienmembre from identification where membreid=$membreid";
    		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		$member = affichechaine($row['membre']);
		$ancienmember = affichechaine($row['ancienmembre']);
	    	if ($member=='Y')
    		{
      			$verified_member=$member;
      			//session_register("verified_member");
			$_SESSION['verified_member'] = true;
    		}
    		else
    		{
      			if ($ancienmember=='Y')
      			{
        			$verified_member=$ancienmember;
        			//session_register("verified_member");
				$_SESSION['verified_member'] = true;
      			}
    		}
		//$message=$verified_member;
		$HEAD='<meta http-equiv="refresh" content="0;url=coindesmembres.php" />';
    		//$CONTENU=$verified_member;
		//$CONTENU.= '<br />
    		//<p class="soft">Si vous avez envie de nous aider, cliquez <a href="aider.php">ici</a>.</p>
    		//<br /><br />
    		//<a class="nav sub" href="quitter.php">Déconnexion</a><br class="hide" />
   		//<br /><br />';
	}
	else
	{
		$message='Login ou mot de passe erroné.';
  	}
}
$CONTENU.='
    <p class="soft">Pour accéder au Coin des membres, veuillez vous identifier.</p>
    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
    <p><span class="largecolored">Login </span><input name="login" type="text" size="10" /></p>
    <p><span class="largecolored">Mot de passe </span><input name="password" type="password" size="10" /></p>
    <p><span style="color:red">'.$message.'</span></p>
    <p><input name="action" class="button2" type="submit" value="Entrer" /></p></form>
    <p><h4>Si vous avez oublié votre mot de passe, cliquez <a href="motdepasseperdu.php">ici</a>.</h4></p>
    <p><h4>Si vous n&#146;êtes pas encore membre et vous souhaitez le devenir, cliquez <a href="adherer.php">ici</a>.<h4></p>
    <p><h4>Si vous avez envie de nous aider, cliquez <a href="aider.php">ici</a>.<h4></p>';

$t = new Template();
$t->set_file('cpage','menutemplate.tpl');
$t->set_var("HEAD",$HEAD);
$t->set_var("CONTENU",$CONTENU);
$t->parse("CPAGE","cpage");
$t->p("CPAGE");

?>
