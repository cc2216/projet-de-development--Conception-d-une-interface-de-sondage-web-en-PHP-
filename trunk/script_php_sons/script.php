<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}		
$var1=$bdd->query('SELECT * FROM categorie');



echo '<ul>';

 while($var2=$var1->fetch()) {
	 $nb_son=0;
	 
 if($dossier=opendir('../MES_SONS_V2/'.$var2['nom'].'')){
	 
	while( false!==($son=readdir($dossier))){
		if($son!='.' && $son!='..' ){
		$nb_son++;
		$tab=explode("_", $son);
		if($tab[0]!="-"){
		$bdd->exec('INSERT INTO son(nom,duree,choix,type,frequence,lien,id_categorie) VALUES(\''.$tab[0].'\',\''.$tab[1].'\',\''.$tab[2].'\',\''.$tab[3].'\',\''.str_replace('.wav', '', $tab[4]).'\',\'../MES_SONS_V2/'.$son.'\',\''.$var2['id'].'\')');
		$new_name= "-_".$son;
		rename("../MES_SONS_V2/$var2[nom]/$son","../MES_SONS_V2/$var2[nom]/$new_name");
		}
		}
	}
 
    echo '</ul><br/>';
	echo 'Il y a <strong>'.$nb_son.'</strong> sons dans le dossier';
	closedir($dossier);
 }
 else
	 echo 'Le dossier n\'a pas pu etre ouvert';
 }
 ?>