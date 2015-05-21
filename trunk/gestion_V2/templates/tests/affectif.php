<!DOCTYPE html>
<html>
    <style>
       
        label{
            position: absolute;
            left:45%;
            }
    
    </style>

	
	<body>
	<p>Choisissez une valeur de 1 à 9 suivant le caractere calme ou exite que vous vous representez du son. Vous pouvez ecoutez le son autant de fois que possible. </p>
		<audio src="./__SON__" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="templates/tests/affectif_post.php">
	<p>

	<label for="reponse">Votre choix</label><br/>
	<label for="1">1</label><input type="radio" name="reponse" value="1" id="1"/><br/>
	<label for="2">2</label><input type="radio" name="reponse" value="2" id="2"/><br/>
	<label for="3">3</label><input type="radio" name="reponse" value="3" id="3"/><br/>
	<label for="4">4</label><input type="radio" name="reponse" value="4" id="4"/><br/>
	<label for="5">5</label><input type="radio" name="reponse" value="5" id="5"/><br/>
	<label for="6">6</label><input type="radio" name="reponse" value="6" id="6"/><br/>
	<label for="7">7</label><input type="radio" name="reponse" value="7" id="7"/><br/>
	<label for="8">8</label><input type="radio" name="reponse" value="8" id="8"/><br/>
	<label for="9">9</label><input type="radio" name="reponse" value="9" id="9"/><br/>

	<input type="hidden" name="id_son" value='.__IDSON__.' />
	<input type="hidden" name="id_test" value='.__IDTEST__.' />
	
	
	
	</p>
	<p>Choisissez une valeur de -5 à +5 suivant le caractère joyeux ou triste que vous vous representez du son. Vous pouvez ecoutez le son autant de fois que possible. </p>
	
	<p>

	<label for="choix">Votre choix</label><br/>
	<label for="-5">-5</label><input type="radio" name="choix" value="-5" id="-5"/><br/>
	<label for="-4">-4</label><input type="radio" name="choix" value="-4" id="-4"/><br/>
	<label for="-3">-3</label><input type="radio" name="choix" value="-3" id="-3"/><br/>
	<label for="-2">-2</label><input type="radio" name="choix" value="-2" id="-2"/><br/>
	<label for="-1">-1</label><input type="radio" name="choix" value="-1" id="-1"/><br/>
	<label for="0">0</label><input type="radio" name="choix" value="0" id="0"/><br/>
	<label for="1">1</label><input type="radio" name="choix" value="1" id="1"/><br/>
	<label for="2">2</label><input type="radio" name="choix" value="2" id="2"/><br/>
	<label for="3">3</label><input type="radio" name="choix" value="3" id="3"/><br/>
	<label for="4">4</label><input type="radio" name="choix" value="4" id="4"/><br/>
	<label for="5">5</label><input type="radio" name="choix" value="5" id="5"/><br/>
	
	<input type="submit" value="OK" /><br/>
	</body>
</html>
	