<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//session_start;
?>

<!DOCTYPE html>
<html>
    
    
	
	<body>
	<p>Vous ecouterez le son seulement une fois. Veuillez identifier le son en ecrivant son nom.<p>
	<audio src="./pluie.mp3" controls>Veuillez mettre ид jour votre navigateur !</audio>
	<form method="post" action="themes/1/templates/tests/identification_post.php">
	<p>

	<label class='center' for="reponse">Reponse</label>
	<input type="text" name="reponse" id="reponse"/>
	<br/>
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	