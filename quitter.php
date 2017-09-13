<?php
	session_start();

	unset($_SESSION['verified_login']);
	unset($_SESSION['verified_membreid']);
	unset($_SESSION['verified_member']);

	//session_unregister("verified_login");
	//session_unregister("verified_membreid");
	//session_unregister("verified_member");

	header("Location:index.php");
?>
