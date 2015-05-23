<?php

session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		

}




$var1=$bdd->prepare(' INSERT INTO test_personne(id_test,id_son,test_imageabilite) VALUES(:id_test,:id_son,:test_imageabilite)'); 
$var1->execute(array(
	
		
		
		'id_test' =>  $_SESSION['id_test'],
		'id_son' => $_SESSION['id_son'],	
		'test_imageabilite' => $_POST['reponse']
		
		
		));


       
        $_SESSION['test']='affectif';
        $_SESSION['id_test']=5; 


		header('Location: http://localhost/gestion');
 	
?>