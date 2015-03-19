<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projets2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

session_start;
?>

<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8" />
	<title>Test catégorisation</title>
	</head>
	
	
	<body>	
	<header>
	
	</header>
	
	<body>
	<p>Vous ecouterez le son seulement une fois. Veuillez sélectionner la bonne réponse.<p>
	<audio src="../Sons/tonnerre.mp3" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="categorisation_post.php">
	<p>

	<label for="reponse">Réponse</label>
	<input type="radio" name="reponse" value="animal" id="animal"/><label for="animal">Animal</label><br/>
	<input type="radio" name="reponse" value="humain" id="humain"/><label for="humain">Humain</label><br/>
	<input type="radio" name="reponse" value="nature" id="nature"/><label for="nature">Nature</label><br/>
	<input type="radio" name="reponse" value="outil" id="outil"/><label for="outil">Outil</label><br/>
	<input type="radio" name="reponse" value="recreational" id="recreational"/><label for="recreational">Recreational</label><br/>
	<input type="radio" name="reponse" value="transport" id="transport"/><label for="transport">Transport</label><br/>
	<input type="radio" name="reponse" value="arme" id="arme"/><label for="arme">Arme</label><br/>
	<input type="radio" name="reponse" value="alarme" id="alarme"/><label for="alarme">Alarme</label><br/>
	<input type="radio" name="reponse" value="instruments" id="instruments"/><label for="instruments">Instruments</label><br/>
	
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	