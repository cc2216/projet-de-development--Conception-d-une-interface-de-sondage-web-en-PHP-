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

$var1=$bdd->prepare('INSERT INTO test_personne(id_test,id_son,test_familiarite) VALUES(:id_test,:id_son,:test_familiarite)');
$var1->execute(array(
			

	            'id_test' =>  $_SESSION['id_test'],
		         'id_son' => $_SESSION['id_son'],		
				'test_familiarite' => $_POST['reponse']
				));

        $_SESSION['test']='imageabilite';
        $_SESSION['id_test']=4; 


header('Location: http://localhost/gestion');		
?>
