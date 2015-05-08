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
    <style>
        
        .right{
            position: absolute;
            right:45%;
            }
    
    </style>

	<body>
	<p>Choisissez sur une echelle de 1 à 6, votre degre de familiarite avec ce son (1=Peu familie; 6=Tres famlilie). Vous pouvez rejouer le son autant de fois que necessaire.<p>
	<	<audio src="./MES_SONS_V2/Animal/-___SON__" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="templates/tests/familiarite_post.php">
	<p>

	<div><label class="center" for="reponse">Votre choix:</label><br/></div>
	<label class="right" for="1">1</label><input type="radio" name="reponse" value="1" id="1"/><br/>
	<label class="right" for="2">2</label><input type="radio" name="reponse" value="2" id="2"/><br/>
	<label class="right" for="3">3</label><input type="radio" name="reponse" value="3" id="3"/><br/>
	<label class="right" for="4">4</label><input type="radio" name="reponse" value="4" id="4"/><br/>
	<label class="right" for="5">5</label><input type="radio" name="reponse" value="5" id="5"/><br/>
	<label class="right" for="6">6</label><input type="radio" name="reponse" value="6" id="6"/><br/>
	
	
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	