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
       
        label{
            position: absolute;
            left:40%;
            }
    
    </style>

	<body>
	   <p>Vous ecouterez le son seulement une fois. Veuillez sélectionner la bonne réponse.</p>
	   <audio src="./__SON__" controls>Veuillez mettre à jour votre navigateur !</audio>
	   <form method="post" action="templates/tests/categorisation_post.php">
	   <p>

	   <label style="position: absolute; left:43%;" for="reponse">Réponse</label><br/>
    
	   <?php while($donnees=$var1->fetch()){ ?>
	   <label for="<?php echo $donnees['code']; ?>"><?php echo $donnees['nom']; ?></label><input type="radio" name="reponse" value="<?php echo $donnees['id']; ?>" id="<?php echo $donnees['code']; ?>"/><br/>
	    <?php } ?>
	
	    <input type="submit" value="OK" /><br/>
	
	    </p>

	</body>
</html>
	