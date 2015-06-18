<!DOCTYPE html>
<html>
     <style>
      div{
      		margin:auto;
        	text-align: center;
       		width:50%;
            }
      label{
      		display: inline;
      }
    
    
    </style>

	
	<body>
	</br>
	<p style="font-size:150%">Notez le caractère calme où excité de ce son sûr une échelle de 1 à 9(1 calme; 9 excité).</p>
    <button onclick="play('audioPlayer', this)">Ecouter</button>
    <script type="text/javascript">

     function play(idAudioPlayer, context) {
     var audioplayer = document.querySelector('#' + idAudioPlayer);


    if (audioplayer.played) {
        audioplayer.play();
        context.textContent = 'Ecouter';
        
       }
       }

       
</script>
	<form method="post" action="templates/tests/affectif_post.php">
	<p>
	</br>
	<label class="center" for="reponse">Votre choix</label>
    <div>
    <table class="center" width="10">
	<td><label for="1">1</label><input type="radio" name="reponse" value="1" id="1"/></td>
	<td><label for="2">2</label><input type="radio" name="reponse" value="2" id="2"/></td>
	<td><label for="3">3</label><input type="radio" name="reponse" value="3" id="3"/></td>
	<td><label for="4">4</label><input type="radio" name="reponse" value="4" id="4"/></td>
	<td><label for="5">5</label><input type="radio" name="reponse" value="5" id="5"/></td>
	<td><label for="6">6</label><input type="radio" name="reponse" value="6" id="6"/></td>
	<td><label for="7">7</label><input type="radio" name="reponse" value="7" id="7"/></td>
	<td><label for="8">8</label><input type="radio" name="reponse" value="8" id="8"/></td>
	<td><label for="9">9</label><input type="radio" name="reponse" value="9" id="9"/></td>
	</table>
    </div>
	
	
	
	
	
	</p>
	<p style="font-size:150%">Notez le caractère triste où joyeux de ce son sur une échelle de -5 à 5(-5=triste; 0=neutre; 5=joyeux).</p>
	
	<p>

	<label class="center"  for="choix">Votre choix</label>
    <div>
    <table class="center" width="10">
	<td><label for="-5">-5</label><input type="radio" name="choix" value="-5" id="-5"/></td>
	<td><label for="-4">-4</label><input type="radio" name="choix" value="-4" id="-4"/></td>
	<td><label for="-3">-3</label><input type="radio" name="choix" value="-3" id="-3"/></td>
	<td><label for="-2">-2</label><input type="radio" name="choix" value="-2" id="-2"/></td>
	<td><label for="-1">-1</label><input type="radio" name="choix" value="-1" id="-1"/></td>
	<td><label for="0">0</label><input type="radio" name="choix" value="0" id="0"/></td>
	<td><label for="1">1</label><input type="radio" name="choix" value="1" id="1"/></td>
	<td><label for="2">2</label><input type="radio" name="choix" value="2" id="2"/></td>
	<td><label for="3">3</label><input type="radio" name="choix" value="3" id="3"/></td>
	<td><label for="4">4</label><input type="radio" name="choix" value="4" id="4"/></td>
	<td><label for="5">5</label><input type="radio" name="choix" value="5" id="5"/></td>
	</table>
	<input type="submit" value="OK" /><br/>
	</body>
</html>
	