<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		

}




$var1=$bdd->prepare(' INSERT INTO test_personne(id_test,id_son,test_affectif_calme_exite,test_affectif_joyeux_triste) VALUES(:id_test,:id_son,:test_affectif_calme_exite,:test_affectif_joyeux_triste)'); 
$var1->execute(array(
	
		
		
		'id_test' => $_POST['id_test'],
		'id_son' => $_POST['id_son'],
		'test_affectif_calme_exite' => $_POST['reponse'],
		'test_affectif_joyeux_triste' => $_POST['choix']
		
		
		));


		
		

		header('Location: http://localhost/gestion/?test=representativite&id=6');
 	
?>