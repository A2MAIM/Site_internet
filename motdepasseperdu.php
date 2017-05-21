<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
  <head>
  	<meta http-equiv="content-type" content="text/html; ; charset=utf-8" />
  	<meta name="description" content="Site web de A2MAIM" />
  	<meta name="keywords" content="association, A2MAIM, MPE, jussieu" />
  	<meta name="GD" content="A2MAIM" />
  	<link rel="stylesheet" type="text/css" href="a2maim.css" title="andreas06" media="screen,projection" />
  	<title>A2MAIM : Mot de passe</title>
  </head>
  
  <body>
    <div id="container">
    	<?php include("header.php") ?>
    	
    	<div id="main">
		<?php include("menu.php") ?>
		</div>
      
      	<div id="main">
      	<?php include("motdepassedemande.php");  ?>
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
  

