<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Bienvenue</title>
    <link  rel="stylesheet" type="text/css" href="..\cssfile\css\style.css"/>
    
    
	</head>
    <style>

    .center
    {
        margin:auto;
        text-align: center;
        width:70%;
    }
    header{
        margin:auto;
        text-align: left; 
        font-size: 30pt;
        color: black;
       
    }
    a:link {color:#FF0000;}    
    a:visited {color:#00FF00;} 
    html,body{margin:0;padding:0}
    body{
        font: 76% arial,sans-serif;
        text-align:center;
        position: relative;
        }
    .position{
        left: 50%;
        right:50%;
    }
    p{margin:0 10px 10px; text-align:center}
    

</style>
	<body>	

	<header>
     <img src="../image/logo_telecom_bretagne.jpg" alt="Ballade" width="120" height="120"/>
	<h1 class="center">Sondage Neuro-pshycologique</h1>
	</header>
    

	<section>
	
	<article>
	<p style="text-align: center; font-size: 20pt; margin: 20px">
	Bienvenue cher internaute.</p>
	<p class="page-title">Vous êtes sur le point de participer à un sondage neuro-psychologique, dont l'objectif est de mieux comprendre le fonctionnement de notre cerveau.<br/>
	Ce petit quizz contient 20 questions sous formes de pistes audios, lesquelles vous devez identifier. Vous ne pourrez écouter une piste audio qu'une seule fois.<br/>
	Merci pour votre temps.<br/>
    </p>
    </article>
	
	<aside>
	<h1>Auteurs</h1>
	Ce site a été réalisé, dans le cadre d'un projet à Telecom Bretagne, par: Affane Reda, Nam, Julien , et CHAO.....
	</aside>
	</section>
	
	<section class="center">
	<h1>Veuillez renseigner ce formulaire:</h1>
	<form method="post" action="formulaire.php">
	<p>
	
	<label class="center" for="nom">Nom:</label>
	<input type="text" name="nom" id="nom"/> 
	<br/>
	
	<label class="center" for="prenom">Prenom:</label>
	<input type="text" name="prenom" id="prenom"/> 
	<br/>
	
	
    <label class="center" for="masculin">Masculin:<input type="radio" name="sexe"  value="masculin" id="masculin"/> </label>
	<label  class="center" for="feminin">Feminin:<input type="radio" name="sexe"  value="feminin" id="feminin"/></label>
    
	
	<label class="center" for="mail">Adresse mail:</label>
	<input type="email" name="mail" id="mail"/> 
	<br/>
	
	<label class="center" for="date">Date de naissance:</label>
	<input type="date" name="date_naissance" id="date"/> 
	<br/>
	
	<label class="center" for="pays">Pays d'origine:</label>
	<select name="pays" id="pays"> 
		<option value="france">France</option>
	    <option value="france">Maroc</option>
		<option value="france">Chine</option>
		<option value="france">Tunisie</option>
	</select>	
	<br/>
	
	<input type="submit" value="envoyer"/>
	</p>
	</form>
	</section>
 	
	
	
	
	
	
	
	<footer>
	Contactez nous <a href="#">ici</a>
	</footer>
	</body>
</html>