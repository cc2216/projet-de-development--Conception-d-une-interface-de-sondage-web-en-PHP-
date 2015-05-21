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
	 
 if($dossier=opendir('../MES_SONS/'.$var2['nom'].'')){
	 
	while( false!==($son=readdir($dossier))){
		if($son!='.' && $son!='..' ){
		$nb_son++;
		$tab1=explode("_", $son);
		if($tab1[0]!="-"){
		$bdd->exec('INSERT INTO son(nom,duree,choix,type,frequence,id_categorie) VALUES(\''.$tab1[0].'\',\''.$tab1[1].'\',\''.$tab1[2].'\',\''.$tab1[3].'\',\''.str_replace('.wav', '', $tab1[4]).'\',\''.$var2['id'].'\')');
		$last_id = $bdd->lastInsertId();
		$new_name= "-_".$son;
		rename("../MES_SONS/$var2[nom]/$son","../MES_SONS/$var2[nom]/$new_name");
        $doc=$var2['nom'];    
		$bdd->exec('UPDATE son SET lien ="MES_SONS/'.$doc.'/'.$new_name.'"  Where id='.$last_id.' ');     
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
