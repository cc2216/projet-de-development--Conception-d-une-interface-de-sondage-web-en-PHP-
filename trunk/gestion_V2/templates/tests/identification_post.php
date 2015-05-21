<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		

}




$var1=$bdd->prepare(' INSERT INTO test_personne(id_test,id_son,test_identification) VALUES(:id_test,:id_son,:test_identification)'); 
$var1->execute(array(
	
		
		'id_test' => $_POST['id_test'],
		'id_son' => $_POST['id_son'],
		'test_identification' => $_POST['reponse']
		
		
		));
		
    header('Location: http://localhost/gestion/?test=categorisation&id=2');
    exit;		
?>
