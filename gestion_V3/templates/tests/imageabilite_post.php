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




$var1=$bdd->prepare(' INSERT INTO test_personne(id_test,id_son,test_imageabilite,id_personne) VALUES(:id_test,:id_son,:test_imageabilite,:id_personne)'); 
$var1->execute(array(
	
		
		
		'id_test' =>  $_SESSION['id_test'],
		'id_son' => $_SESSION['id_son'],	
		'test_imageabilite' => $_POST['reponse'],
		'id_personne'=>$_SESSION['id_personne']
		
		
		));


       
        $_SESSION['test']='affectif';
        $_SESSION['id_test']=5; 


		header('Location: http://localhost/gestion');
 	
?>