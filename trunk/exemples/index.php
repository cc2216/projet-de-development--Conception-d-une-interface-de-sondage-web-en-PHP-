<?php
	include ('./class/Page.class.php');
	
	$p = new Page ('./', 'Ma page 1', 'mon titre h1');
	
	$c = new Connexion();
	$db = $c->connect();
	
	echo $p->pageHaut();
	echo $p->menuPrincipal("client");
	
	//Ajout d'une nouvelle personne
	$idPersonne = $db->lastInsertId('seq_personne');
	$p = array($idPersonne, 'VAILLANT', 'Pierre', 'M', 'Francaise', '1983/06/26', 'ph.vaillant@telecom-bretagne');
	echo '<h2>Ajout d\'une nouvelle personne</h2>';
	echo implode($p, ', ');
	$sth = $db->prepare('INSERT INTO personne (id, prenom, nom, sexe, nationalite, date_naissance, mail) VALUES (?, ?, ?, ?, ?, ?, ?)');
	$sth->execute($p);
	
	$idPersonne = $db->lastInsertId();
	echo '<strong>Identifiant de la personne inserée à mettre en session '.$idPersonne.'</strong>';
	
	//Affiche les données de la table personne
	echo '<h2>Les données de la table personne</h2>';
	$rs = $db->query('SELECT * FROM personne');
	$list_personne = $rs->fetchAll();
	echo '<table class="table table-hover">';
	echo '	<thead>';
	echo '		<tr><th>id</th><th>nom</th><th>prenom</th><th>sexe</th><th>nationalite</th><th>date naissance</th><th>mail</th></tr>';
	echo '	</thead>';
	echo '	<tbody>';
	foreach($list_personne as $p){
		echo '		<tr><th>'.$p['id'].'</th><th>'.$p['nom'].'</th><th>'.$p['prenom'].'</th><th>'.$p['sexe'].'</th><th>'.$p['nationalite'].'</th><th>'.$p['date_naissance'].'</th><th><a href="mailto:'.$p['mail'].'">'.$p['mail'].'</th></tr>';
	}
	echo '	</tbody>';
	echo '</table>';	
?>