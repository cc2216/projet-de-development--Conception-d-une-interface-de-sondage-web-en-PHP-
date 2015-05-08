<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		
session_start;
}




$var1=$bdd->prepare(' INSERT INTO test_personne(test_affectif) VALUES(:test_affectif)'); 
$var1->execute(array(
	
		
		
		
		'test_affectif' => $_POST['reponse']
		
		
		));

$var2=$bdd->prepare(' INSERT INTO test_personne(test_affectif) VALUES(:test_affectif)'); 
$var2->execute(array(
	
		
		
		
		'test_affectif' => $_POST['choix']
		
		
		));
		
		

		header('Location: http://localhost/gestion/?test=representativite');
 	
?>