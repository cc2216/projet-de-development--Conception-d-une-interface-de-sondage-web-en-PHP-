<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$var1=$bdd->query('SELECT * FROM categorie');

?>


<!DOCTYPE html>
<html>
    <style>
    
        div>label{
           
            float:left;
            width:48%;
            text-align: right;
            }
        div>input{
            position: absolute;
            left:49.5%;
            }
        
    </style>

	<body>
	   <p style="font-size:150%">Ecoutez ce son et choisissez la catégorie à laquelle il apparient(un seul choix possible)</p></br>
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
	   <form method="post" action="templates/tests/categorisation_post.php">
	   <p>
       </br>
    
	   <label class="center" for="reponse">Réponse</label>
       <div>
	   <?php while($donnees=$var1->fetch()){ ?>
	   <label for="<?php echo $donnees['code']; ?>"><?php echo $donnees['nom']; ?></label><input type="radio" name="reponse" value="<?php echo $donnees['id']; ?>" id="<?php echo $donnees['code']; ?>"/><br/>
	    <?php } ?>
	   </div>
       </br>
       
       
	    <input type="submit" value="OK" /><br/>
	
	    </p>

	</body>
</html>
	