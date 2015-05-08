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




$var1=$bdd->prepare(' INSERT INTO test_personne(test_identification) VALUES(:test_identification)'); 
$var1->execute(array(
	
		
		
		
		'test_identification' => $_POST['reponse']
		
		
		));
		
    header('Location: http://localhost/exemples1/?test=categorisation');
    exit;		
?>
