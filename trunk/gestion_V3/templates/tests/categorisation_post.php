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




$var1=$bdd->prepare(' INSERT INTO test_personne(id_test,id_son,test_categorisation,id_personne) VALUES(:id_test,:id_son,:test_categorisation,:id_personne)'); 
$var1->execute(array(
	
		
		
		
		'id_test' => $_SESSION['id_test'],
		'id_son' => $_SESSION['id_son'],
		'test_categorisation' => $_POST['reponse'],
		'id_personne'=>$_SESSION['id_personne']
		
		
		));

     $_SESSION['test']='familiarite';
     $_SESSION['id_test']=3; 


header('Location: http://localhost/gestion');		
 	 
?>
