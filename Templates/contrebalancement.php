<?php
/* $req = SELECT COUNT(id_son) WHERE id_personne != id FROM test_personne;
$resultat = mysql_fetch($req) or die("requête invalide");*/

$req = 'SELECT TOP 1 son.lien COUNT(test_personne.id_son) as numberofutilisation FROM test_personne
LEFT JOIN son 
ON son.id=test_personne.id_son
WHERE test_personne.id_personne != $id
GROUP BY id_son
ORDER BY numberofutilisation|ASC';

//$resultat = mysql_query($req) or die("requête invalide");
$resultat = mysql_fetch($req)
?>