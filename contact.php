<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; ; charset=utf-8" />
	<meta name="description" content="Site web de A2MAIM" />
  	<meta name="keywords" content="association, A2MAIM, MPE, jussieu" />
  	<meta name="GD" content="A2MAIM" />
  	<link rel="stylesheet" type="text/css" href="a2maim.css" title="andreas06" media="screen,projection" />
  	<title>Association A2MAIM : Envie d'aider</title>
  	
	<!-- <script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-20314521-2']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script> -->
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-35382676-1']);
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
    		/*
        	<h3>Envie de nous aider à faire vivre l'association ?</h3>

            <h6>Bureau</h6>
            <p>Lors du pot qui a lieu fin février, l'assemblée générale de l'association a lieu. Si vous souhaitez faire partie du prochain bureau, faites vous connaître !</p>

            <h6>Initiatives</h6>
            <p>Si vous avez envie de créer ou d'animer un groupe de discussion sur un thème précis, d'organiser des rencontres entre les différentes personnes ou  des ateliers pour aider à la recherche d'emploi, surtout n'hésitez pas : l'association a été créée pour donner vie à toutes ces idées.</p>

            <h6>Pot</h6>
            <p>Pour l'instant, nous organisons un pot par an pour rassembler les anciens et les nouveaux du Master. Nous sommes toujours preneurs d'un coup de main pour l'organisation de celui-ci.</p>

            <h6>Web</h6>
            <p>La page web de l'association est en cours de création. Si vous avez des idées, du temps ou des compétences pour nous aider, n'hésitez pas à vous faire connaître.</p>
			*/
            <h6>Toutes vos remarques sont les bienvenues, donc n'hésitez pas à nous écrire !</h6> 
            <a href="mailto:a2maim.paris6@gmail.com">a2maim.paris6@gmail.com</a>
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

