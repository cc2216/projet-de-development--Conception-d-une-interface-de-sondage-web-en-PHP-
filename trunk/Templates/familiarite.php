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

	<head>
	<meta charset="utf-8" />
	<title>Test de familiarité</title>
	</head>
	
	
	<body>	
	<header>
	
	</header>
	
	<body>
	<p>Choisissez sur une echelle de 1 à 6, votre degre de familiarite avec ce son (1=Peu familie; 6=Tres famlilie). Vous pouvez rejouer le son autant de fois que necessaire.<p>
	<audio src="../Sons/tonnerre.mp3" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="familiarite_post.php">
	<p>

	<label for="reponse">Votre choix:</label><br/>
	<input type="radio" name="reponse" value="1" id="1"/><label for="1">1</label><br/>
	<input type="radio" name="reponse" value="2" id="2"/><label for="2">2</label><br/>
	<input type="radio" name="reponse" value="3" id="3"/><label for="3">3</label><br/>
	<input type="radio" name="reponse" value="4" id="4"/><label for="4">4</label><br/>
	<input type="radio" name="reponse" value="5" id="5"/><label for="5">5</label><br/>
	<input type="radio" name="reponse" value="6" id="6"/><label for="6">6</label><br/>
	
	
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	