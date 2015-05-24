<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

session_start();
?>

<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8" />
	<title>Test identification</title>
	</head>
	
	
	<body>	
	<header>
	
	</header>
	
	<body>
	<p>Vous ecouterez le son seulement une fois. Veuillez identifier le son en ecrivant son nom.<p>
	<audio src="../Sons/pluie.mp3" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="identification_post.php">
	<p>

	<label for="reponse">Réponse</label>
	<input type="text" name="reponse" id="reponse"/>
	<br/>
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	