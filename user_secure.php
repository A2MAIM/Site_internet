<?php
session_start();

// preg_match("/[\/a-z0-9]*\/([a-z0-9]+)_?([a-z0-9_]*)\.php/",$_SERVER["PHP_SELF"],$result);

//on verifie si l'utilisateur est identifiť
if (!session_is_registered("verified_member")) 
{
	header("Location:coindesmembres.php");
}

?>
