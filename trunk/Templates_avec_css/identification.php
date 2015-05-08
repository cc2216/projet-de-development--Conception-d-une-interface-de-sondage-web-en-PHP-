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
	<title>Test identification</title>
    <link  rel="stylesheet" type="text/css" href="..\cssfile\css\style.css"/>
    <link  rel="stylesheet" type="text/css" href="test1.css"/>
	</head>
	
	
	<body>	
	<header>
     <img src="../image/logo_telecom_bretagne.jpg" alt="Ballade" width="80" height="80"/>
	Test d'identification
	</header>

	
	<body>
	<p>Vous ecouterez le son seulement une fois. Veuillez identifier le son en ecrivant son nom.<p>
	<audio src="../MES_SONS_V2/Animal/-_ane_0.5_a_mono_44100.wav" controls>Veuillez mettre ид jour votre navigateur !</audio>
	<form method="post" action="identification_post.php">
	<p>

	<label class='center' for="reponse">Reponse</label>
	<input type="text" name="reponse" id="reponse"/>
	<br/>
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	