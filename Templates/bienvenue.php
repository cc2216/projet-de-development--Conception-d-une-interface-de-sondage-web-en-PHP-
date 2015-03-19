<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Bienvenue</title>
	</head>

	<body>	
	<header>
	Sondage Neuro-pshycologique
	</header>

	<section>
	
	<article>
	<p>
	Bienvenue cher internaute.</p>
	<p>Vous êtes sur le point de participer à un sondage neuro-psychologique, dont l'objectif est de mieux comprendre le fonctionnement de notre cerveau.<br/>
	Ce petit quizz contient 20 questions sous formes de pistes audios, lesquelles vous devez identifier. Vous ne pourrez écouter une piste audio qu'une seule fois.<br/>
	Merci pour votre temps.<br/>
    </p>
    </article>
	
	<aside>
	<h1>Auteurs</h1>
	Ce site a été réalisé, dans le cadre d'un projet à Telecom Bretagne, par: Affane Reda, Nam, Julien , et CHAO.....
	</aside>
	</section>
	
	<section>
	<h1>Veuillez renseigner ce formulaire:</h1>
	<form method="post" action="formulaire.php">
	<p>
	
	<label for="nom">Nom:</label>
	<input type="text" name="nom" id="nom"/> 
	<br/>
	
	<label for="prenom">Prenom:</label>
	<input type="text" name="prenom" id="prenom"/> 
	<br/>
	
	
	<input type="radio" name="sexe"  value="masculin" id="masculin"/> <label for="masculin">Masculin</label><br/>
	<input type="radio" name="sexe"  value="feminin" id="feminin"/> <label for="feminin">Feminin</label><br/>
	
	
	<label for="mail">Adresse mail:</label>
	<input type="email" name="mail" id="mail"/> 
	<br/>
	
	<label for="date">Date de naissance:</label>
	<input type="date" name="date_naissance" id="date"/> 
	<br/>
	
	<label for="pays">Pays d'origine:</label>
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