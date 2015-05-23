<?php
session_start();

include ('../../class/Connexion.class.php');
$c = new Connexion();
      $bdd = $c->connect();




$var1=$bdd->prepare(' INSERT INTO test_personne(id_test,id_son,test_identification) VALUES(:id_test,:id_son,:test_identification)'); 
$var1->execute(array(
	
		
		'id_test' => $_SESSION['id_test'],
		'id_son' => $_SESSION['id_son'],
		'test_identification' => $_POST['reponse']
		
		
		));
      $_SESSION['test']='categorisation';
      $_SESSION['id_test']=2; 

		
    header('Location: http://localhost/gestion');
    exit;		
?>
