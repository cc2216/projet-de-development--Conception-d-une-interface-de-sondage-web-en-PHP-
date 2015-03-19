<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projets2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		
session_start;
}


$var1=$bdd->prepare('INSERT INTO utilisateurs(nom,prenom,sexe,nationalite,mail,date_naissance) VALUES(:nom,:prenom,:sexe,:nationalite,:mail,:date_naissance)');
$var1->execute(array(

		'nom'=> $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'sexe' => $_POST['sexe'],
		'nationalite' => $_POST['pays'],
		'date_naissance' => strtotime($_POST['date']),
		'mail' => $_POST['mail']
		));

$var2=$bdd->query(' SELECT * FROM utilisateurs ORDER BY id DESC LIMIT 0,1');
$var3=$var2->fetch();

	$_SESSION["nom"]=$var3['nom'];
	$_SESSION["prenom"]=$var3['prenom'];
	$_SESSION["id"]=$var3['id'];
	
	 $var2->closeCursor();
	 
	 header('Location: identification.php');
	 ?>	
	