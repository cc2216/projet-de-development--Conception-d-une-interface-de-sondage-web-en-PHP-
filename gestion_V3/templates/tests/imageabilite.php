
<!DOCTYPE html>
<html>
     <style>
      .right{
            position: absolute;
            right:45%;
            }
    
     </style>
	
	<body>
	<p>Notez de 1 à 9 la facilite avec laquelle vous pouvez evoquez l'image correspondant à ce son. Vous pouvez entendre ce son autant de fois que necessaire. </p>
	<audio src="./__SON__" controls>Veuillez mettre à jour votre navigateur !</audio>
	<form method="post" action="templates/tests/imageabilite_post.php">
	<p>

	<div><label class="center" for="reponse">Votre choix</label><br/></div>
	<div><label class="right" for="1">1</label><input type="radio" name="reponse" value="1" id="1"/><br/></div>
  	<div><label class="right" for="2">2</label><input type="radio" name="reponse" value="2" id="2"/><br/></div>
	<div><label class="right" for="3">3</label><input type="radio" name="reponse" value="3" id="3"/><br/></div>
    <div><label class="right" for="4">4</label><input type="radio" name="reponse" value="4" id="4"/><br/></div>
	<div><label class="right" for="5">5</label><input type="radio" name="reponse" value="5" id="5"/><br/></div>
	<div><label class="right" for="6">6</label><input type="radio" name="reponse" value="6" id="6"/><br/></div>
	<div><label class="right" for="7">7</label><input type="radio" name="reponse" value="7" id="7"/><br/></div>
	<div><label class="right" for="8">8</label><input type="radio" name="reponse" value="8" id="8"/><br/></div>
	<div><label class="right" for="9">9</label><input type="radio" name="reponse" value="9" id="9"/><br/></div>

	
	
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	