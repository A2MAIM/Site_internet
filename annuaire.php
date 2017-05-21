<?php session_start();?>			
<?php
	if (session_is_registered("verified_login")){
		include_once('Lib/template.inc');
		include_once('Lib/functions.inc');
		include('connexion_bd.inc.php'); 
              
              
		if (isset($_POST['promo'])) $promodefaut = $_POST['promo'];
		elseif (isset($_GET['defpromo'])) $promodefaut = $_GET['defpromo'];
		else $promodefaut = '0';

		// Critères de recherche
		$CONTENU  = "
		<table  border='0'>
			<tr>
				<td width='1%' valign='top'></td>
				<td width='99%' valign='top'>
					<form name='data' method='post' action='".$_SERVER['PHP_SELF']."'>
						<table  border='0'>
							<tr>
								<td> Consulter&nbsp;l'annuaire&nbsp;: </td>
								<td>
									<select name='promo' style='width:150px'>
									<option value='0'>toutes les promos  </option>";
									$query_promo = "select promoid, annee from promos order by annee";
									$result = mysql_query($query_promo);				
									while ($row_promo = mysql_fetch_row($result)) 
									{
										if ($row_promo[0]==$promodefaut) $CONTENU = $CONTENU."<option value='".$row_promo[0]."' selected>".$row_promo[1]."</option>";
										else $CONTENU = $CONTENU."<option value='".$row_promo[0]."'>".$row_promo[1]."</option>";
									}				
									$CONTENU.="</select>
								</td>
								<td>
									<input type='submit' name='submit' value='Rechercher' style='font-weight:bold'></input>
								</td>
							</tr>";
							if (!session_is_registered("verified_login")) 
							{
								$CONTENU.="
								<tr>
									<td colspan='3'><p class='redcenter'>Pour accéder aux fiches détaillées des anciens,<br /> veuillez vous identifier.</p></td>
								</tr>";
							}
							else
							{
								if (!session_is_registered("verified_member")) 
								{
									$CONTENU.="
									<tr>
										<td colspan='3'><p class='redcenter'>En tant que invité, vous pouvez consulter<br/> seulement votre fiche personnelle.</p></td>
										</tr>";
								}
							}
							$CONTENU.="
						</table>
					</form>
					<br />
					<br />";
                      
					// Création du tableau de l'annuaire
					if (isset($_POST['promo'])||isset($_GET['defpromo'])) 
					{
						$promo = $promodefaut;
						if ($promo == '0') 
						{
							$query = "select nom, prenom, membreid from infosperso order by nom, prenom"; 
						}
						else  
						{
							$query = "select PER.nom, PER.prenom, PER.membreid from infosperso PER inner join infosmaster MAS on MAS.membreid = PER.membreid inner join promos PRO on PRO.annee = MAS.anneeobtention where PRO.promoid='$promo' order by PER.nom, PER.prenom";
						
							$new_query = "select annee, promoid from promos where promoid ='$promo'"; 
							$new_result = mysql_query($new_query);
							$new_row = mysql_fetch_row($new_result);
							$anneeobtention = affichechaine($new_row[0]);
						}
						$result = mysql_query($query);
                      	
						if (session_is_registered("verified_member")) 
						{
							$CONTENU.="<table><tbody>";
							while ($row = mysql_fetch_row($result)) 
							{
								$nom = affichechaine($row[0]); 
								$prenom = affichechaine($row[1]); 
								$membreid = affichechaine($row[2]); 
								if ($promo == '0') 
								{
									$new_query = "select anneeobtention from infosmaster where membreid ='$membreid'"; 
									$new_result = mysql_query($new_query);
									$new_row = mysql_fetch_row($new_result);
									$anneeobtention = affichechaine($new_row[0]);
								}
                            
								if ($anneeobtention == '2010')
								{
									$new_query = "select societestage from infosmaster where membreid ='$membreid'"; 
								}
								else
								{
									$new_query = "select societe from infospro where membreid ='$membreid'"; 
								}
								$new_result = mysql_query($new_query);
								$new_row = mysql_fetch_row($new_result);
								$societe = affichechaine($new_row[0]);
                              
								$CONTENU.='
								<tr>
									<td> '.$prenom.'&nbsp;&nbsp; </td>
									<td><span style="text-transform: uppercase;">'.$nom.'&nbsp;&nbsp;</span></td>
									<td>'.$anneeobtention.'&nbsp;&nbsp;</td>
									<td>'.$societe.'&nbsp;&nbsp;</td>
								</tr>';
							}
							$CONTENU.="</tbody></table>";
						} 
						else 
						{
							$CONTENU.="<table border='0'><tbody>";
							while ($row = mysql_fetch_row($result)) 
							{
								$nom = affichechaine($row[0]); 
								$prenom = affichechaine($row[1]);
								$membreid = affichechaine($row[2]);  
								if ($promo == '0') 
								{
									$new_query = "select anneeobtention from infosmaster where membreid ='$membreid'"; 
									$new_result = mysql_query($new_query);
									$new_row = mysql_fetch_row($new_result);
									$anneeobtention = affichechaine($new_row[0]);
								}
								$new_query = "select societe from infospro where membreid ='$membreid'"; 
								$new_result = mysql_query($new_query);
								$new_row = mysql_fetch_row($new_result);
								$societe = affichechaine($new_row[0]);
								$CONTENU.='
								<tr>
									<td width="10%" valign="top"> </td>
									<td> '.$prenom.'&nbsp;&nbsp; </td>
									<td><span style="text-transform: uppercase;">'.$nom.'&nbsp;&nbsp;</span></td>
									<td>'.$anneeobtention.'</td>
									<td>'.$societe.'&nbsp;&nbsp;</td>';
                                
									if ($verified_membreid==$membreid)
										{$CONTENU.='<td><a href="consulterfichemembres.php?idmembre='.$row[2].'&defpromo='.$promo.'">Détails</a></td>';}
								    $CONTENU.='</tr>';
							}
							$CONTENU.="</tbody></table>";
						}
					}				
					$CONTENU.="	
				</td>
			</tr>
		</table>";
		if (isset($_POST['promo'])||isset($_GET['defpromo'])) 
		{
			if ($promodefaut == '0') 
			{
				$CONTENU.='<br /><br /><p><a href="#top">Retour en haut de la page</a></p>';
			}
		}
              	
        mysql_close($link);
             
        $t = new Template();
        $t->set_file("cpage","menutemplate.tpl");
        $t->set_var("CONTENU",$CONTENU);
        $t->parse("CPAGE","cpage");
        $t->p("CPAGE");
             
	} else {
		echo "Pour accéder à cette page vous devez être authentifié."; 
	}
?>

  
