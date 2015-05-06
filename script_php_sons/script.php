<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		

}

$nb_son=0;
echo '<ul>';
 if($dossier=opendir('../MES_SONS')){
	 
	while( false!==($son=readdir($dossier))){
		if($son!='.' && $son!='..' ){
		$nb_son++;
		list($nom,$duree,$choix,$type,$frequence)=explode("_", $son);
		$bdd->exec('INSERT INTO son(nom,duree,choix,type,frequence,lien) VALUES(\''.$nom.'\',\''.$duree.'\',\''.$choix.'\',\''.$type.'\',\''.$frequence.'\',\'../MES_SONS/'.$son.'\')');

		}
	}
    echo '</ul><br/>';
	echo 'Il y a <strong>'.$nb_son.'</strong> sons dans le dossier';
	closedir($dossier);
 }
 else
	 echo 'Le dossier n\'a pas pu etre ouvert';
 ?>