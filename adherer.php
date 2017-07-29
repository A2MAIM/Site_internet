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
  	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-20314521-2']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
</head>
  
<body>
	<div id="container">
    	<?php include("header.php") ?>
    	
    	<div id="main">
			<?php include("menu.php") ?>
		</div>
		
		<div id="main">
			L'inscription est gratuite. Pour adhérer il vous suffit de remplir le <a href="formulaireinscription.php ">formulaire</a>.      			
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
  



