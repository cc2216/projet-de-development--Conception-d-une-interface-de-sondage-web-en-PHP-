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




$var1=$bdd->prepare(' INSERT INTO test_personne(id_test,id_son,id_personne,test_representativite_N1,test_representativite_N2,test_representativite_N3,test_representativite_N4,test_representativite_N5) VALUES(:id_test,:id_son,:id_personne,:test_representativite_N1,:test_representativite_N2,:test_representativite_N3,:test_representativite_N4,:test_representativite_N5)'); 
$var1->execute(array(
	
		
		
		'id_test' =>  $_SESSION['id_test'],
		'id_son' => $_SESSION['id_son'],	
		'id_personne'=>$_SESSION['id_personne'],
		'test_representativite_N1' => $_POST['champ1'],
		'test_representativite_N2' => $_POST['champ2'],
		'test_representativite_N3' => $_POST['champ3'],
		'test_representativite_N4' => $_POST['champ4'],
		'test_representativite_N5' => $_POST['champ5']

		));


       
        

		header('Location: http://localhost/gestion/templates/tests/finale.php');

 	
?>