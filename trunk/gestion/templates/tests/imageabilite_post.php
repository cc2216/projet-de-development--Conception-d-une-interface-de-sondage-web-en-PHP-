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




$var1=$bdd->prepare(' INSERT INTO test_personne(test_imageabilite) VALUES(:test_imageabilite)'); 
$var1->execute(array(
	
		
		
		
		'test_imageabilite' => $_POST['reponse']
		
		
		));

		header('Location: http://localhost/gestion/?test=affectif');
 	
?>