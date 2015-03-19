<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projets2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		
session_start;
}


if($_POST['reponse']=='tonnerre')
{  $boolean=1;}
else $boolean=0;

$var1=$bdd->prepare(' INSERT INTO reponse_categorisation(id_test,reponse,boolean) VALUES(2,:reponse,:boolean)'); 
$var1->execute(array(
	
		
		
		
		'reponse' => $_POST['reponse'],
		'boolean' => $boolean
		
		));
		
 	
?>
