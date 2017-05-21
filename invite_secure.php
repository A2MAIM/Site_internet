<?php
session_start();

// preg_match("/[\/a-z0-9]*\/([a-z0-9]+)_?([a-z0-9_]*)\.php/",$_SERVER["PHP_SELF"],$result);

//on verifie si l'utilisateur est invite
if (!isset($_SESSION["verified_login"])) 
{
	header("Location:coindesmembres.php");
}

?>
