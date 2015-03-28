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
	<title>Test affectif</title>
	</head>
	
	
	<body>	
	<header>
	
	</header>
	
	<body>
	<p>Choisissez une valeur de 1 à 9 suivant le caractere calme ou exite que vous vous representez du son. Vous pouvez ecoutez le son autant de fois que possible. </p>
	<audio src="../Sons/tonnerre.mp3" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="affectif_post.php">
	<p>

	<label for="reponse">Votre choix</label><br/>
	<input type="radio" name="reponse" value="1" id="1"/><label for="1">1</label><br/>
	<input type="radio" name="reponse" value="2" id="2"/><label for="2">2</label><br/>
	<input type="radio" name="reponse" value="3" id="3"/><label for="3">3</label><br/>
	<input type="radio" name="reponse" value="4" id="4"/><label for="4">4</label><br/>
	<input type="radio" name="reponse" value="5" id="5"/><label for="5">5</label><br/>
	<input type="radio" name="reponse" value="6" id="6"/><label for="6">6</label><br/>
	<input type="radio" name="reponse" value="7" id="7"/><label for="7">7</label><br/>
	<input type="radio" name="reponse" value="8" id="8"/><label for="8">8</label><br/>
	<input type="radio" name="reponse" value="9" id="9"/><label for="9">9</label><br/>
	
	
	
	</p>
	<p>Choisissez une valeur de -5 à +5 suivant le caractère joyeux ou triste que vous vous representez du son. Vous pouvez ecoutez le son autant de fois que possible. </p>
	
	<p>

	<label for="choix">Votre choix</label><br/>
	<input type="radio" name="choix" value="-5" id="-5"/><label for="-5">-5</label><br/>
	<input type="radio" name="choix" value="-4" id="-4"/><label for="-4">-4</label><br/>
	<input type="radio" name="choix" value="-3" id="-3"/><label for="-3">-3</label><br/>
	<input type="radio" name="choix" value="-2" id="-2"/><label for="-2">-2</label><br/>
	<input type="radio" name="choix" value="-1" id="-1"/><label for="-1">-1</label><br/>
	<input type="radio" name="choix" value="0" id="0"/><label for="0">0</label><br/>
	<input type="radio" name="choix" value="1" id="1"/><label for="1">1</label><br/>
	<input type="radio" name="choix" value="2" id="2"/><label for="2">2</label><br/>
	<input type="radio" name="choix" value="3" id="3"/><label for="3">3</label><br/>
	<input type="radio" name="choix" value="4" id="4"/><label for="4">4</label><br/>
	<input type="radio" name="choix" value="5" id="5"/><label for="5">5</label><br/>
	
	<input type="submit" value="OK" /><br/>
	</body>
</html>
	