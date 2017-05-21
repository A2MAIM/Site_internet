<?php

ini_set("include_path", realpath('lib/PEAR/') . PATH_SEPARATOR . realpath('lib') . PATH_SEPARATOR . ini_get("include_path"));
//include('Mail.php');
//include('Mail/mime.php');
/**
* Permet de retourner dans une variable le contenu d'un fichier
* @param string
* nom du fichier dont on doit récupérer le contenu
* @return string
*/
function returnFile($fileName)
{
	$handle = fopen($fileName, "r");
	$contents = '';
	while (!feof($handle))
	{
		$contents .= fread($handle, 8192);
	}
	fclose($handle);
	return $contents;
}


/**
* Retourne du code HTML coresspondant à un bouton graphique définit par 2 images au format gif
* les deux images doivent avoir le même nom à un suffixe près :
* <ul>
*<li>nom_on.gif, image associée au bouton lorsqu'il n'est actif</li>
*<li>nom_off.gif, image associée au bouton lorsqu'il n'est inactif</li>
* </ul>
* @param string
* valeur des attributs HTML "name" et "id" du bouton ainsi que le préfixe du nom des images gif
* @param string
* valeur attribut HTML "href" du lien associé au bouton
* @return string
*/
function genBouton($nomBouton,$lienBouton)
{
return "\t\t\t\t\t\t\t\t\t\t\t<a href=".'"'.$lienBouton.'"'." onMouseOver=\"MM_swapImage('$nomBouton','','images/$nomBouton"."_on.gif',1)\" onMouseOut=\"MM_swapImgRestore()\"><img src=\"images/$nomBouton"."_off.gif\" name=\"$nomBouton\" width=\"100\" height=\"33\" border=\"0\" id=\"$nomBouton\" align=\"right\"></a>\n";
}
/**
* Retourne du code HTML coresspondant à un bouton graphique définit par 2 images au format png
* les deux images doivent avoir le même nom à un suffixe près :
* <ul>
*<li>nom_on.png, image associée au bouton lorsqu'il n'est actif</li>
*<li>nom_off.png, image associée au bouton lorsqu'il n'est inactif</li>
* </ul>
* @param string
* préfixe du nom des images png
* @param string
* valeur attribut HTML "href" du lien associé au bouton
* @param string
* attributs supplémentaires à ajouter au lien associé au bouton
* @return string
*/
function genBoutonPNG($nomBouton,$lienBouton,$attributsBonus=null)
{
return "<a href=".'"'.$lienBouton.'"'.($attributsBonus?' '.$attributsBonus:'')."><img style='border-width:0' src=\"images/$nomBouton"."_off.png\" onMouseOver=\"this.src='images/$nomBouton"."_on.png'\" onMouseOut=\"this.src='images/$nomBouton"."_off.png'\"></a>";
}

/**
* Retourne une chaine décrivant le navigateur
* @return string
* @use phpSniff
*/
function getBrowser()
{
	$client=new phpSniff();
	return $client->property('browser');
}
/**
* Retourne un bout de code javascript initialisant la variable browser
* @return string
* @use phpSniff
*/
function setJavascriptBrowser()
{
	return "var browser=\"".getBrowser()."\";\n";
}
/**
* equivalent de la fonction rtrim()
* @param string
* @return string
*/
function stripBackSlashN($string)
{
	if(preg_match("/([\S ]+)[\n\r\f]+/",$string,$result))
	{
		return $result[1];
	}
	else
	{
		return $string;
	}	
}

function affichechaine($string)
{
	$string = str_replace('\r','',$string);
	$string = str_replace('\n',chr(13),$string);
	$string = stripslashes($string);
	$string = str_replace('"','&quot;',$string);
	return $string;
}

?>