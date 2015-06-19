
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
	<p style="font-size:150%">Notez de 1 à 9 la facilite avec laquelle vous pouvez evoquer l'image correspondant à ce son(1 peu imageable, 9 très imageable).</br> Vous pouvez écouter ce son autant de fois que necessaire. </p>
   <audio id="audioPlayer" width="300" height="32" src="./__SON__"></audio>
    <button onclick="play('audioPlayer', this)"><img src="./templates/image/ecouter.png"></button>
    <script type="text/javascript">

     function play(idAudioPlayer, context) {
     var audioplayer = document.querySelector('#' + idAudioPlayer);


    if (audioplayer.played) {
        audioplayer.play();
      
        
       }
       }

       
</script>
	<form method="post" action="templates/tests/imageabilite_post.php">
	<p>
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
</br>
	
	
	<input type="submit" value="OK" /><br/>
	
	</p>
	</body>
</html>
	