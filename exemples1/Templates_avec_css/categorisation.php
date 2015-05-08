<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

session_start;
?>

<!DOCTYPE html>
<html>
    <style>
       
        label{
            position: absolute;
            left:40%;
            }
    
    </style>
	<head>
	<meta charset="utf-8" />
	<title>Test catégorisation</title>
    <link  rel="stylesheet" type="text/css" href="..\cssfile\css\style.css"/>
    <link  rel="stylesheet" type="text/css" href="test1.css"/>
	</head>
	
	
	<body>	
	<header>
	<img src="../image/logo_telecom_bretagne.jpg" alt="Ballade" width="80" height="80"/>
    Test de categorisation
	</header>
	
	<body>
	<p>Vous ecouterez le son seulement une fois. Veuillez sélectionner la bonne réponse.<p>
	<audio src="../Sons/tonnerre.mp3" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="categorisation_post.php">
	<p>

	<label style="position: absolute; left:43%;" for="reponse">Réponse</label><br/>
    
	<label for="animal">Animal</label><input type="radio" name="reponse" value="animal" id="animal"/><br/>
	<label for="humain">Humain</label><input type="radio" name="reponse" value="humain" id="humain"/><br/>
	<label for="nature">Nature</label><input type="radio" name="reponse" value="nature" id="nature"/><br/>
	<label for="outil">Outil</label><input type="radio" name="reponse" value="outil" id="outil"/><br/>
	<label for="recreational">Recreational</label><input type="radio" name="reponse" value="recreational" id="recreational"/><br/>
	<label for="transport">Transport</label><input type="radio" name="reponse" value="transport" id="transport"/><br/>
	<label for="arme">Arme</label><input type="radio" name="reponse" value="arme" id="arme"/><br/>
	<label for="alarme">Alarme</label><input type="radio" name="reponse" value="alarme" id="alarme"/><br/>
	<label for="instruments">Instruments</label><input type="radio" name="reponse" value="instruments" id="instruments"/><br/>
	
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	