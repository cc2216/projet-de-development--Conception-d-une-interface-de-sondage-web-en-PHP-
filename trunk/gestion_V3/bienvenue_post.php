<?php
session_start();
    $_SESSION['test']='identification';
    $_SESSION['id_test']=1; 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		

}




$var1=$bdd->prepare('INSERT INTO personne(prenom,nom,sexe,nationalite,date_naissance,mail) VALUES(:prenom,:nom,:sexe,:nationalite,:date_naissance,:mail)');
$var1->execute(array(

        'prenom' => $_POST['prenom'],
		'nom'=> $_POST['nom'],
		'sexe' => $_POST['sexe'],
		'nationalite' => $_POST['pays'],
		'date_naissance' => $_POST['date_naissance'],
		'mail' => $_POST['mail']
		));

$var2=$bdd->query(' SELECT * FROM personne ORDER BY id DESC LIMIT 0,1');
$var3=$var2->fetch();

$_SESSION['id_personne']=$var3['id'];	
	
	 $var2->closeCursor();

    
  
	 
	 header('Location: http://localhost/gestion');
   
    // echo "<script>window.location = http://localhost/exemples1/?test=identification";</script>";

     //header('Location: identification.php');
	 ?>	
	