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

$var1=$bdd->prepare('INSERT INTO test_personne(test_familiarite) VALUES(:test_familiarite)');
$var1->execute(array(
			
				'test_familiarite' => $_POST['reponse']
				));

header('Location: http://localhost/exemples1/?test=imageabilite.php');		
?>
