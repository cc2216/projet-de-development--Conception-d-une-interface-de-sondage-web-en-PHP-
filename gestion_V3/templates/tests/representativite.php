<!DOCTYPE html>

<html>
    <head>
	<meta charset="utf-8" />
    </head>

    <body>
	<p style="font-size:150%">Vous ecouterez 5 versions différentes d'un même son. Classez de 1 à 5, les sens qui vous sont le plus reprresentatifs.<p>
     
    <form method="post" action="templates/tests/representativite_post.php">
    <audio id="audioPlayer1" width="300" height="32" src="./__SON1__"></audio>
    <button onclick="play('audioPlayer1', this); this.onclick=' '"><img src="./templates/image/ecouter.png"></button>
    <script type="text/javascript">

     function play(idAudioPlayer, context) {
     var audioplayer = document.querySelector('#' + idAudioPlayer);

    	if (audioplayer.played) {
       		 audioplayer.play();
        	 context.textContent = 'déjà écoutè';
       		}
       }

       
</script>
	<label  style="display: inline" class='center' for="champ1"><strong>N°</strong></label>
	<select name="champ1" id="champ1"> 
	    <option value="none">Derouler</option>
		<option value="1">1</option>
	    <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br/><br/>


	<audio id="audioPlayer2" width="300" height="32" src="./__SON2__"></audio>
    <button onclick="play('audioPlayer2', this); this.onclick=''"><img src="./templates/image/ecouter.png"></button>
	<label  style="display: inline" class='center' for="champ2"><strong>N°</strong></label>
	<select name="champ2" id="champ2"> 
	    <option value="none">Derouler</option>
		<option value="1">1</option>
	    <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br/><br/>


	<audio id="audioPlayer3" width="300" height="32" src="./__SON3__"></audio>
    <button onclick="play('audioPlayer3', this); this.onclick=''"><img src="./templates/image/ecouter.png"></button>
	<label style="display: inline" class='center' for="champ3"><strong>N°</strong></label>
	<select name="champ3" id="champ3"> 
	    <option value="none">Derouler</option>
		<option value="1">1</option>
	    <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br/><br/>


	<audio id="audioPlayer4" width="300" height="32" src="./__SON4__"></audio>
    <button onclick="play('audioPlayer4', this); this.onclick=''"><img src="./templates/image/ecouter.png"></button>
	<label style="display: inline" class='center' for="champ4"><strong>N°</strong></label>
	<select name="champ4" id="champ4"> 
	    <option value="none">Derouler</option>
		<option value="1">1</option>
	    <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br/><br/>


	<audio id="audioPlayer5" width="300" height="32" src="./__SON5__"></audio>
    <button onclick="play('audioPlayer5', this); this.onclick=''"><img src="./templates/image/ecouter.png"></button>
	<label style="display: inline" class='center' for="champ5"><strong>N°</strong></label>
	<select name="champ5" id="champ5"> 
	    <option value="none">Derouler</option>
		<option value="1">1</option>
	    <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br/><br/>
	<input type="submit" value="OK" /><br/>
	
	</body>
</htlml>
