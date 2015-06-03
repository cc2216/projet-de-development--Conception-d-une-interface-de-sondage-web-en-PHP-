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




$var1=$bdd->prepare(' INSERT INTO test_personne(id_test,id_son,test_affectif_calme_exite,test_affectif_joyeux_triste,id_personne) VALUES(:id_test,:id_son,:test_affectif_calme_exite,:test_affectif_joyeux_triste,:id_personne)'); 
$var1->execute(array(
	
		
		
		'id_test' =>  $_SESSION['id_test'],
		'id_son' => $_SESSION['id_son'],	
		'test_affectif_calme_exite' => $_POST['reponse'],
		'test_affectif_joyeux_triste' => $_POST['choix'],
		'id_personne'=>$_SESSION['id_personne']
		
		
		));


	    $_SESSION['test']='representativite';
        $_SESSION['id_test']=6; 
		

		header('Location: http://localhost/gestion');
 	
?>