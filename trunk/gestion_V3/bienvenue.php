<?php 
$_SESSION['start']=1; 
 

?>
<!DOCTYPE html>
<script type="text/javascript">
history.go(1);
</script>

<html>
	<head>
	<meta charset="utf-8" />
	<title>Bienvenue</title>
    <link  rel="stylesheet" type="text/css" href="cssfile\css\style.css"/>
    
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
     <img src="image/logo_telecom_bretagne.jpg" alt="Ballade" width="120" height="120"/>
	<h1 class="center">Sondage Neuro-psychologique</h1>
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
	
	
	</section>
	
	<section class="center">
	<h1>Veuillez renseigner ce formulaire:</h1>
	<form method="post" action="bienvenue_post.php"  id="form">
	<p>
	
	<label class="center" for="nom">Nom:</label>
	<input type="text" name="nom" id="nom"/> 
	<span class="tooltip">Veuillez saisir votre nom</span>
	
	<label class="center" for="prenom">Prenom:</label>
	<input type="text" name="prenom" id="prenom"/> 
	<span class="tooltip">Veuillez saisir votre prénom</span>
	
	
    <label class="center" for="masculin">Masculin:<input type="radio" name="sexe"  value="masculin" id="masculin"/> </label>
	<label  class="center" for="feminin">Feminin:<input type="radio" name="sexe"  value="feminin" id="feminin"/></label>
	<span class="tooltip">Vous devez sélectionnez votre sexe</span>
    
	
	<label class="center" for="mail">Adresse mail:</label>
	<input type="email" name="mail" id="mail"/> 
	<span class="tooltip">Veuillez saisir votre Adresse email</span>
	
	<label class="center" for="date">Date de naissance:</label>
	<input type="date" name="date_naissance" id="date"/> 
	<span class="tooltip">Veuillez saisir votre date de naissance</span>
	
	<label class="center" for="pays">Pays d'origine:</label>
	<select name="pays" id="pays"> 
	    <option value="none">Selectionner votre pays d'origine</option>
		<option value="france">France</option>
	    <option value="france">Maroc</option>
		<option value="france">Chine</option>
		<option value="france">Tunisie</option>
	</select>	
	<span class="tooltip">Veuillez selectionner votre pays d'origine</span>
	<br/><br/>
	<input type="submit" value="envoyer" >
	<input type="reset" value="Reinitialiser le formulaire" ><br/><br/>

	</p>
	</form>
	</section>
 	
    
    <aside>
	<h1>Auteurs</h1>
	Ce site a été réalisé, dans le cadre d'un projet à Telecom Bretagne, par: Affane Reda, Nam, Julien , et CHAO.....
	</aside>

	<footer>
		<br/>	<br/>
	Contactez nous <a href="#">ici</a>
	</footer>

	<script>
	
		function deactivateTooltips() {
	          var tooltips = document.querySelectorAll('.tooltip'),
	              tooltipsLength = tooltips.length;
	
	             for (var i = 0 ; i < tooltipsLength ; i++) {
	               tooltips[i].style.display = 'none';
	            }
	
	    }
		
		function getTooltip(elements) {
	         while (elements = elements.nextSibling) {
	             if (elements.className === 'tooltip') {
	                return elements;
	            }
	        }
	     return false;	
	    }
		
     var check = {}; 
	
	check['sexe'] = function() {
	
	var sex = document.getElementsByName('sexe'),
	    tooltipStyle = getTooltip(sex[1].parentNode).style;
	
	if (sex[0].checked || sex[1].checked) {
	tooltipStyle.display = 'none';
	return true;
	} else {
	tooltipStyle.display = 'inline-block';
	return false;
	}
	
	};
	
	check['nom'] = function() {
	
	var name = document.getElementById('nom'),
	tooltipStyle = getTooltip(name).style;
	
	if (name.value.length > 1) {
	name.className = "correct";
	tooltipStyle.display = 'none';
	return true;
	} else {
	name.className = "incorrect";
	tooltipStyle.display = 'inline-block';
	return false;
	}
	
	};
	
	check['prenom'] = function() {
	
	var name = document.getElementById('prenom'),
	tooltipStyle = getTooltip(name).style;
	
	if (name.value.length > 2) {
	name.className = 'correct';
	tooltipStyle.display = 'none';
	return true;
	} else {
	name.className = 'incorrect';
	tooltipStyle.display = 'inline-block';
	return false;
	}
	
	};
	
	check['pays'] = function() {
	
	var country = document.getElementById('pays'),
	tooltipStyle = getTooltip(country).style;
	
	if (country.options[country.selectedIndex].value != 'none') {
	tooltipStyle.display = 'none';
	return true;
	} else {
	tooltipStyle.display = 'inline-block';
	return false;
	}
	
	};
	
	check['mail'] = function() {
	
	var mail = document.getElementById('mail'),
	tooltipStyle = getTooltip(mail).style;
	
	if (mail.value.length  >2 ) {
	mail.className = 'correct';
	tooltipStyle.display = 'none';
	return true;
	} else {
	mail.className = 'incorrect';
	tooltipStyle.display = 'inline-block';
	return false;
	}
	
	};
	
	(function() {
	var myForm = document.getElementById('form'),
	inputs = document.querySelectorAll('input[type=text]'),
	inputsLength = inputs.length;
	
	for (var i = 0 ; i < inputsLength ; i++) {
	inputs[i].addEventListener('keyup', function(e) {
	check[e.target.id](); 
	}, false);
	}
	
	myForm.addEventListener('submit', function(e) {
	
	var result = true;
	
	for (var i in check) {
	result = check[i]() && result;
	}
	
	if (!result) {
	e.preventDefault();
	}
	
	
	}, false);
	
	myForm.addEventListener('reset', function() {
	
	for (var i = 0 ; i < inputsLength ; i++) {
	inputs[i].className = '';
	}
	
	deactivateTooltips();
	
	}, false);
	
	})();
	deactivateTooltips();
	
			
 
	
	</script>



	</body>
</html>