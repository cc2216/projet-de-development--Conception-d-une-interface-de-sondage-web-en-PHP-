<!DOCTYPE html>
<html>
    <style>
       
        label{
            position: absolute;
            left:40%;
            }
    
    </style>

	<body>
	<p>Vous ecouterez le son seulement une fois. Veuillez sélectionner la bonne réponse.<p>
	<audio src="./MES_SONS_V2/Animal/-___SON__" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="templates/tests/categorisation_post.php">
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
	