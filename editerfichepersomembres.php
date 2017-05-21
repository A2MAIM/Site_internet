<?php 
session_start(); 
include("invite_secure.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; ; charset=utf-8" />
  <meta name="description" content="Site web de A2MAIM" />
  <meta name="keywords" content="association, A2MAIM, MPE, jussieu" />
  <meta name="GD" content="A2MAIM" />
  <link rel="stylesheet" type="text/css" href="a2maim.css" title="andreas06" media="screen,projection" />
  <title>A2MAIM : Annuaire</title>
  </head>
  <body>
  <div id="container">
  <?php include("header.php") ?>
    	
  <div id="main">
  <?php include("menu.php") ?>
  </div>
		
  <div id="main">
  <?php
  include_once('Lib/template.inc');
include_once('Lib/functions.inc');
include('connexion_bd.inc.php'); 

$membreid = $verified_membreid;
$CONTENU='';
                
// enregistrement des données de l'utilisateur
if (isset($_POST['motdepasse'])) 
  {
    $login = mysql_real_escape_string($_POST['login']);
    $motdepasse = mysql_real_escape_string($_POST['motdepasse']);
    $confirmotdepasse = mysql_real_escape_string($_POST['confirmotdepasse']);
    $questionpensebete = mysql_real_escape_string($_POST['questionpensebete']);
    $reponsepensebete = mysql_real_escape_string($_POST['reponsepensebete']);
    $nom = mysql_real_escape_string($_POST['nom']);
    $prenom = mysql_real_escape_string($_POST['prenom']);
    $mail = mysql_real_escape_string($_POST['mail']);
    if (isset($_POST['autorisationmail']))
      $autorisationmail = 'Y';
    else
      $autorisationmail = 'N';
                		
    $region = mysql_real_escape_string($_POST['region']);
    $posteactuel = mysql_real_escape_string($_POST['posteactuel']);
    $societeactuelle = mysql_real_escape_string($_POST['societeactuelle']);
    $descriptionposte = mysql_real_escape_string($_POST['descriptionposte']);
    $salaire = mysql_real_escape_string($_POST['salaire']);
    if (isset($_POST['autorisationpro']))
      $autorisationpro = 'Y';
    else
      $autorisationpro = 'N';
                		
                		
    $obtentionmaster = $_POST['anneeobtentionmaster'];
    $query = "select annee from promos where promoid=$obtentionmaster";
    $result = mysql_query($query); $row = mysql_fetch_row($result); $anneeobtentionmaster = $row[0];
    $specialitemaster = mysql_real_escape_string($_POST['specialitemaster']);
    if (isset($_POST['reseau']))
      $reseau = 'Y';
    else
      $reseau = 'N';
    $societestage = mysql_real_escape_string($_POST['societestage']);
    $descriptionstage = mysql_real_escape_string($_POST['descriptionstage']);
    $descriptionprovenance = mysql_real_escape_string($_POST['descriptionprovenance']);
    if (isset($_POST['autorisationformation']))
      {
	$autorisationformation = 'Y';
      }
    else
       
    $societeactuelle = $row['societe']; 
    $posteactuel = $row['poste']; 
    $descriptionposte = $row['descriptionposte']; 
    $salaire = $row['salaire']; 
    $autorisationpro = $row['autoinfospro'];		
                	
    $query_for = "select anneeobtention, specialite,reseau, provenance, societestage, descriptionstage, autoinfosmaster from infosmaster where membreid=$membreid";
    $result = mysql_query($query_for);
    $row = mysql_fetch_assoc($result);
    $anneeobtentionmaster=$row['anneeobtention']; 
    $specialitemaster=$row['specialite']; 
    $reseau=$row['reseau'];
    $descriptionprovenance=$row['provenance']; 
    $societestage = $row['societestage']; 
    $descriptionstage=$row['descriptionstage']; 
    $autorisationformation=$row['autoinfosmaster'];
  }
$login = affichechaine($login);
$motdepasse = affichechaine($motdepasse);
$confirmotdepasse = affichechaine($confirmotdepasse);
$questionpensebete = affichechaine($questionpensebete);
$reponsepensebete = affichechaine($reponsepensebete);
$nom = affichechaine($nom);
$prenom = affichechaine($prenom);
$mail = affichechaine($mail);
$region = affichechaine($region);
$posteactuel = affichechaine($posteactuel);
$societeactuelle = affichechaine($societeactuelle);
$descriptionposte = affichechaine($descriptionposte);
$specialitemaster = affichechaine($specialitemaster);
$societestage = affichechaine($societestage);
$descriptionstage = affichechaine($descriptionstage);
$descriptionprovenance = affichechaine($descriptionprovenance);

//<form name="data" method="post" action="'.$_SERVER["PHP_SELF"].'">
$CONTENU.='
                  <table  border="0">
                    <tr>
                      <td width="5%" valign="top"></td>
                      <td width="95%" valign="top">
                        <form name="data" method="post" action="'.$_SERVER["PHP_SELF"].'">
                          <table border="0">';
                				
// INFOS DE CONNEXION
$CONTENU .= '
                            <tr>
                              <td colspan="2"><h2> Infos de connexion </h2></td>
                            </tr>
                            <tr>
                              <td>Login : </td>
                              <td>
                                <input type="text" value="'.$login.'" size="40" disabled="disabled"  />
                                <input type="hidden" name="login" value="'.$login.'" />
                              </td>
                            </tr>
                            <tr>
                              <td>Mot de passe<span class="red">*</span> : </td>
                              <td>
                                <input name="motdepasse" type="password" size="40" value="'.$motdepasse.'" />
                              </td>
                            </tr>
                            <tr>
                              <td>Confirmation du mot de passe<span class="red">*</span> : </td>
                              <td>
                                <input name="confirmotdepasse" type="password" size="40" value="'.$confirmotdepasse.'" />
                              </td>
                            </tr>
                            <tr>
                              <td>Question pense-b&ecirc;te<span class="red">*</span> : </td>
                              <td>
                                <input name="questionpensebete" type="text" size="40" value="'.$questionpensebete.'" />
                              </td>
                            </tr>
                            <tr>
                              <td>R&eacute;ponse pense-b&ecirc;te<span class="red">*</span> : </td>
                              <td>
                                <input name="reponsepensebete" type="text" size="40" value="'.$reponsepensebete.'" />
                              </td>
                            </tr>';
                				
// INFOS PERSONNELLES
$CONTENU.='
                            <tr>
                              <td colspan="2"><hr /></td>
                            </tr>
                            <tr>
                              <td colspan="2"><h2>Infos personnelles</h2></td>
                            </tr>
                            <tr>
                              <td>Pr&eacute;nom : </td>
                              <td>
                                <input name="prenom" type="text" size="40" value="'.$prenom.'"  disabled="disabled" />
                              </td>
                            </tr>
                            <tr>
                              <td>Nom : </td>
                              <td>
                                <input name="nom" type="text" size="40" value="'.$nom.'"  disabled="disabled" />
                              </td>
                            </tr>
                            <tr>
                              <td>Adresse mail<span class="red">*</span> : </td>
                              <td>
                                <input name="mail" type="text" size="40" value="'.$mail.'" />
                              </td>
                            </tr>';
if ($autorisationmail=='Y') $CONTENU.='<tr><td colspan="2">J\'accepte d\'être contacté(e) par les membres via cet e-mail :  <input name="autorisationmail" type="checkbox" checked/></td></tr>';				
                
// INFOS PROFESSIONNELLES
$CONTENU.='
                            <tr>
                              <td colspan="2"><hr /></td>
                            </tr>
                            <tr>
                              <td colspan="2"><h2>Infos professionnelles</h2></td>
                				    </tr>
                            <tr>
                				      <td>Région : </td>
                              <td>
                                <input name="region" type="text" size="40" value="'.$region.'" />
                              </td>
                            </tr>
                            <tr>
                              <td>Soci&eacute;t&eacute; actuelle : </td>
                              <td>
                                <input name="societeactuelle" type="text" size="40" value="'.$societeactuelle.'" />
                              </td>
                            </tr>
                            <tr>
                              <td>Poste actuel : </td>
                              <td>
                                <input name="posteactuel" type="text" size="40" value="'.$posteactuel.'" />
                              </td>
                            </tr>
                            <tr>
                              <td>Description du poste : </td>
                              <td>
                                <textarea name="descriptionposte" cols="30" rows="5" >'.$descriptionposte.'</textarea>
                              </td>	
                            </tr>';
if ($salaire=='a') 
  {
    $CONTENU.='
                            <tr>
                              <td>Salaire : </td>
                              <td>
                                <input name="salaire" type="radio" value="a" checked="checked" />inférieur à 20000 EUR
                                <br />
                                <input name="salaire" type="radio" value="b" />entre 20000 EUR et 40000 EUR 
                                <br />
                                <input name="salaire" type="radio" value="c" />supérieur à 40000 EUR 
                                <br />
                                <input name="salaire" type="radio" value="n" />je ne souhaite pas le communiquer
                              </td>
                            </tr>';
  }
else
  {
    if ($salaire=='b') 
      {
	$CONTENU.='
                    <tr>
                      <td>Salaire : </td>
                      <td>
                        <input name="salaire" type="radio" value="a" />inférieur à 20000 EUR  
                        <br />
                        <input name="salaire" type="radio" value="b" checked="checked" />entre 20000 EUR et 40000 EUR 
                        <br />
                        <input name="salaire" type="radio" value="c" />supérieur à 40000 EUR  
                        <br />
                        <input name="salaire" type="radio" value="n" />je ne souhaite pas le communiquer
                      </td>
                    </tr>';
      }
    else
      {
	if ($salaire=='c') 
	  {
	    $CONTENU.='
                      <tr>
                        <td>Salaire : </td>
                        <td>
                          <input name="salaire" type="radio" value="a" />inférieur à 20000 EUR  
                          <br />
                          <input name="salaire" type="radio" value="b" />entre 20000 EUR et 40000 EUR 
                          <br />
                          <input name="salaire" type="radio" value="c" checked="checked" />supérieur à 40000 EUR  
                          <br />
                          <input name="salaire" type="radio" value="n" />je ne souhaite pas le communiquer
                        </td>
                      </tr>';
	  }
	else 
	  {
	    $CONTENU.='
                      <tr>
                        <td>Salaire : </td>
                        <td>
                          <input name="salaire" type="radio" value="a" />inférieur à 20000 EUR  
                          <br />
                          <input name="salaire" type="radio" value="b" />entre 20000 EUR et 40000 EUR 
                          <br />
                          <input name="salaire" type="radio" value="c" />supérieur à 40000 EUR  
                          <br />
                          <input name="salaire" type="radio" value="n" checked="checked" />je ne souhaite pas le communiquer
                        </td>
                      </tr>';
	  }
      }
  }
       
if ($autorisationpro=='Y') $CONTENU.='<tr><td colspan="2">J\'autorise la diffusion de ces infos sur le site :  <input name="autorisationpro" type="checkbox" checked /></td></tr>';
else $CONTENU.='<tr><td colspan="2">J\'autorise la diffusion de ces infos sur le site :  <input name="autorisationpro" type="checkbox" /></td></tr>';
                					
             
// INFOS SUR VOTRE FORMATION
$query = "select promoid, annee from promos order by annee";
$result = mysql_query($query); 
$CONTENU.='
                            <tr>
                              <td colspan="2"><hr /></td>
                            </tr>
                					  <tr>
                              <td colspan="2"><h2>Infos sur votre formation</h2></td>
                				    </tr>
                            <tr>  
                              <td>Ann&eacute;e d\'obtention du master :</td>
                              <td>
                                <select name="anneeobtentionmaster">';
while ($row=mysql_fetch_row($result)) 
  {
    if ($anneeobtentionmaster==$row[1]) $CONTENU.='<option value="'.$row[0].'"" selected>'.$row[1].'</option>'; 
    else $CONTENU.='<option value="'.$row[0].'">'.$row[1].'</option>'; 		
  }				
$CONTENU.='	
                                </select>
                              </td>
                            </tr>		
                    				<tr>
                    					<td>Sp&eacute;cialit&eacute; : </td>
                              <td>
                                <input name="specialitemaster" type="text" size="40" value="'.$specialitemaster.'" />
                              </td>
                    				</tr>';
                				
if ($reseau =='Y') $CONTENU.='<tr><td colspan="2">J\'ai gardé des contacts avec les anciens de ma promo :  <input name="reseau" type="checkbox" checked /></td></tr>';
else $CONTENU.='<tr><td colspan="2">J\'ai gardé des contacts avec les anciens de ma promo :  <input name="reseau" type="checkbox" /></td></tr>';
                					
$CONTENU.='	
                            <tr>
                    					<td>Soci&eacute;t&eacute; du stage : </td><td><input name="societestage" type="text" size="40" value="'.$societestage.'" /></td>
                    				</tr>
                            <tr>
                    					<td>Description du stage : </td><td><textarea name="descriptionstage"  cols="30" rows="5">'.$descriptionstage.'</textarea></td>
                    				</tr>
                            <tr>
                    					<td>Et avant le master ? </td><td><textarea name="descriptionprovenance" cols="30" rows="5" >'.$descriptionprovenance.'</textarea></td>
                    				</tr>';
                				
if ($autorisationformation=='Y') $CONTENU.='<tr><td colspan="2">J\'autorise la diffusion de ces infos : <input name="autorisationformation" type="checkbox" checked /></td></tr>';
else $CONTENU.='<tr><td colspan="2">J\'autorise la diffusion de ces infos : <input name="autorisationformation" type="checkbox" /></td></tr>';
                
$CONTENU.='	
                            <tr>		
                    				  <td colspan="2" align="center"><br /><br /><input name="submit" type="submit" style="font-size:12px;height:30px;width:150px;font-weight:bold" value="Enregistrer" /></td>
                    				</tr>
                          </table>
                  			</form>
                  		</td>
                  	</tr>
                  </table>';
                
mysql_close($link);
                			
$t = new Template();
$t->set_file("cpage","menutemplate.tpl");
$t->set_var("TITRE_PAGE",$TITRE);
$t->set_var("CONTENU",$CONTENU);
$t->parse("CPAGE","cpage");
$t->p("CPAGE");
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
                            </tr>
                					  <tr>
                              <td colspan="2"><h2>Infos sur votre formation</h2></td>
                				    </tr>
                            <tr>  
                              <td>Ann&eacute;e d\'obtention du master :</td>
                              <td>
                                <select name="anneeobtentionmaster">';
while ($row=mysql_fetch_row($result)) 
  {
    if ($anneeobtentionmaster==$row[1]) $CONTENU.='<option value="'.$row[0].'"" selected>'.$row[1].'</option>'; 
    else $CONTENU.='<option value="'.$row[0].'">'.$row[1].'</option>'; 		
  }				
$CONTENU.='	
                                </select>
                              </td>
                            </tr>		
                    				<tr>
                    					<td>Sp&eacute;cialit&eacute; : </td>
                              <td>
                                <input name="specialitemaster" type="text" size="40" value="'.$specialitemaster.'" />
                              </td>
                    				</tr>';
                				
if ($reseau =='Y') $CONTENU.='<tr><td colspan="2">J\'ai gardé des contacts avec les anciens de ma promo :  <input name="reseau" type="checkbox" checked /></td></tr>';
else $CONTENU.='<tr><td colspan="2">J\'ai gardé des contacts avec les anciens de ma promo :  <input name="reseau" type="checkbox" /></td></tr>';
                					
$CONTENU.='	
                            <tr>
                    					<td>Soci&eacute;t&eacute; du stage : </td><td><input name="societestage" type="text" size="40" value="'.$societestage.'" /></td>
                    				</tr>
                            <tr>
                    					<td>Description du stage : </td><td><textarea name="descriptionstage"  cols="30" rows="5">'.$descriptionstage.'</textarea></td>
                    				</tr>
                            <tr>
                    					<td>Et avant le master ? </td><td><textarea name="descriptionprovenance" cols="30" rows="5" >'.$descriptionprovenance.'</textarea></td>
                    				</tr>';
                				
if ($autorisationformation=='Y') $CONTENU.='<tr><td colspan="2">J\'autorise la diffusion de ces infos : <input name="autorisationformation" type="checkbox" checked /></td></tr>';
else $CONTENU.='<tr><td colspan="2">J\'autorise la diffusion de ces infos : <input name="autorisationformation" type="checkbox" /></td></tr>';
                
$CONTENU.='	
                            <tr>		
                    				  <td colspan="2" align="center"><br /><br /><input name="submit" type="submit" style="font-size:12px;height:30px;width:150px;font-weight:bold" value="Enregistrer" /></td>
                    				</tr>
                          </table>
                  			</form>
                  		</td>
                  	</tr>
                  </table>';
                
mysql_close($link);
                			
$t = new Template();
$t->set_file("cpage","menutemplate.tpl");
$t->set_var("TITRE_PAGE",$TITRE);
$t->set_var("CONTENU",$CONTENU);
$t->parse("CPAGE","cpage");
$t->p("CPAGE");
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
