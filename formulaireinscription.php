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
      			
              <!--DEBUT CODE FORMULAIRE-->
              <!-- Ce script a été développé par Nadine Gaine.
              Vous pouvez l'utiliser gratuitement à des fins NON-COMMERCIALES seulement, et le modifier à votre convenance.
              Trouvé sur http://www.toulouse-renaissance.net/c_outils/ -->
              <form method="post" action="formulaire.php3" name="avis">
                  <h1>Formulaire d'adh&eacute;sion</h1>
                  <br />
                  Les champs suivis d'une <span class="red">*</span> sont obligatoires.
                  <!--  INFOS PERSONNELLES -->
                  <br />
                  <h2>Infos personnelles :</h2>
                  <p>Nom<span class="red">*</span> :<br /><input type="text" name="nom" size="20" /></p>
                  <p>Pr&eacute;nom<span class="red">*</span> :<br /><input type="text" name="prenom" size="20" /></p>
                  <p>E-mail<span class="red">*</span> : <br /><input type="text" name="mail" size="20" /></p>
                  <p>J'accepte d'être contacté(e) par les membres via cet e-mail :  <input name="autorisationmail" type="checkbox" /></p>
                  <br />
                  <hr />
                  <!-- INFOS PROFESSIONNELLES -->
                  <h2>Infos professionnelles :</h2>
                  <p>Région : <br /><input name="region" type="text" size="30" /></p>
          				<p>Soci&eacute;t&eacute; : <br /><input name="societeactuelle" type="text" size="30" /></p>
          				<p>Situation actuelle<span class="red">*</span> : <br /><input name="posteactuel" type="text" size="30" /></p>
          				<p>Salaire : <br />
          				<input name="salaire" type="radio" value="a" />inférieur à 20000 EUR<br />
          				<input name="salaire" type="radio" value="b" />entre 20000 et 40000 EUR<br />
          				<input name="salaire" type="radio" value="c" />supérieur à 40000 EUR<br />
          				<input name="salaire" type="radio" value="n" />je ne souhaite pas le communiquer
          				</p>
          				<p>Description du poste : <br /><textarea name="descriptionposte" cols="30" rows="5"></textarea></p>
                  <p>J'autorise la diffusion de ces infos sur le site :  <input name="autorisationpro" type="checkbox" /></p>
                  <br />
                  <hr />
                  <!-- INFOS SUR VOTRE FORMATION -->
                  <h2>Infos sur votre formation</h2>
                  <br />
                  <p>Ann&eacute;e d'obtention du master<span class="red">*</span> :<br />
                  <select name="annee" size="1">
                    <option value="0" selected="selected" >- Choisir -</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                  </select>
                  </p>
                  <p>Sp&eacute;cialit&eacute;<span class="red">*</span> : <br /><input type="radio" value="Meca" name="spe" />M&eacute;canique <input type="radio" name="spe" value="Proba" />Proba-Stats</p>
                  <p>J'ai gardé des contacts avec les anciens de ma promo : <input name="reseau" type="checkbox" /></p>
                  <p>Soci&eacute;t&eacute; du stage : <br /><input name="societestage" type="text" size="30" /></p>
                  <p>Description du stage : <br /><textarea name="descriptionstage"  cols="30" rows="5" ></textarea></p>
                  <p>Et avant le master ? <br /><textarea name="descriptionprovenance" cols="30" rows="5" ></textarea></p>
                  <p>J'autorise la diffusion de ces infos : <input name="autorisationformation" type="checkbox" /></p>
              		<br />
                  <hr />	
                  <!-- Acces coins des membres -->
                  <h2>Acc&egrave;s au coins des membres :</h2> 
                  <p> Login<span class="red">*</span> :<br /><input type="text" name="login" size="30" /></p>
                  <p> Mot de passe (attention il sera envoy&eacute; en clair)<span class="red">*</span> : <br /><input name="motdepasse" type="password" size="30" /></p>
                  <p>Confirmation du mot de passe<span class="red">*</span> : <br /><input name="confirmotdepasse" type="password" size="30" /></p>
                  <p>Question pense-b&ecirc;te<span class="red">*</span> : <br /><input name="questionpensebete" type="text" size="30" /></p>
                  <p>R&eacute;ponse pense-b&ecirc;te<span class="red">*</span> : <br /><input name="reponsepensebete" type="text" size="30" /></p>
                  <br />
                  <br />
                  <p>
                    <input type="submit" value="Envoyer" name="envoyer" />&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Recommencer" name="recommencer" /> 
                    <br />
                    <br />
                  </p>
                </form>
                <!--FIN CODE FORMULAIRE-->
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
  
