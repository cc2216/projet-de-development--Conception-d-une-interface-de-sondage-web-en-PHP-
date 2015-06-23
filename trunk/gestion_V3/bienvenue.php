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

    footer{
        font: 13px arial,sans-serif;
        text-align:center;
        position:relative;
        
    }
    a:link {color:#FF0000;}    
    a:visited {color:#00FF00;} 
    html,body{margin:0;padding:0}
    body{
        font: 18px arial,sans-serif;
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
	 <br/><br/>
     <h1 class="center">Bienvenue cher internaute</h1><br/>
	 </header>
     
    <section>
	<article>
	<p font-size:"18px">Vous êtes sur le point de participer à un sondage dont l'objectif est d'obtenir des paramètres sur une banque de sons.<br/>
	Ce petit quizz contient 6 tests audios et un questionnaire initial.<br/></p><br/>
	</article>
    </section>

	<section class="center">
    <form method="post" action="formulaire.php">
    <p>	
	<input type="submit" value="Page suivante" >

	</p>
	</form>
	</section>

	<footer>
	<br/><br/><br/><h3>Auteurs</h3>
	Ce site a été réalisé, dans le cadre d'un projet à Télécom Bretagne, par: AFFANE Reda, NGUYEN Quang-Nam, TRING Julien , CHEN Chao.<br/>
	Ce projet a été encadré par:  DUFOR Olivier, KIMDUFOR Deok-Hee, VAILLANT Pierre-Hervé, BAZIN Jean-Noël, GOURVENNEC Bernard. 
	</footer>

	


	</body>
</html>