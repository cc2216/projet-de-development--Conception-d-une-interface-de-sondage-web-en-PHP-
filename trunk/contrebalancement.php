<?php
//(code v1 la fonction MINUS n'est pas disponible sur nos version de wamp)
SELECT son.lien, COUNT(test_personne.id_son) as numberofutilization FROM son
LEFT JOIN test_personne ON son.id_son=test_personne.id_son

WHERE son.nom IN(
	SELECT son.nom FROM son
	GROUP BY son.nom
	MINUS
	SELECT son.nom FROM son
	WHERE son.id_son IN (
		SELECT test_personne.id_son FROM test_personne
		WHERE test_personne.id_personne = 1)
	GROUP BY nom)

GROUP BY son.id_son
ORDER BY numberofutilization
LIMIT 1

//code v2 (fonctionne)
SELECT son.lien, COUNT(test_personne.id_son) as numberofutilization FROM son
LEFT JOIN test_personne ON son.id_son=test_personne.id_son
WHERE son.nom IN(

SElECT son.nom FROM son
WHERE son.nom NOT IN (
	SELECT son.nom FROM son 
	WHERE son.id_son IN (
		SELECT test_personne.id_son FROM test_personne 
		WHERE test_personne.id_personne = 1
	) GROUP BY nom
) 
GROUP BY son.nom
)
GROUP BY son.id_son
ORDER BY numberofutilization
LIMIT 1	

//pour le test de représentativité (fonctionne)
SELECT son.lien, COUNT(test_personne.id_son) as numberofutilization FROM son
LEFT JOIN test_personne ON son.id_son=test_personne.id_son
WHERE son.nom IN(

SElECT son.nom FROM son
WHERE son.nom NOT IN (
	SELECT son.nom FROM son 
	WHERE son.id_son IN (
		SELECT test_personne.id_son FROM test_personne 
		WHERE test_personne.id_personne = 1
	) GROUP BY nom
) 
GROUP BY son.nom
)
GROUP BY son.id_son
ORDER BY numberofutilization, lien
LIMIT 5



//les codes en verts suivant sont des essais

/* $req = SELECT, COUNT(id_son) WHERE id_personne != id FROM test_personne;
$resultat = mysql_fetch($req) or die("requête invalide");*/

/*$req = 'SELECT TOP 1 son.lien COUNT(test_personne.id_son) as numberofutilisation FROM test_personne
LEFT JOIN son 
ON son.id=test_personne.id_son
WHERE test_personne.id_personne != 1
GROUP BY id_son
ORDER BY numberofutilisation|ASC';

//$resultat = mysql_query($req) or die("requête invalide");
$resultat = mysql_fetch($req)*/


/*SELECT son.lien, COUNT(test_personne.id_son) as numberofutilisation FROM son
LEFT JOIN test_personne
ON son.id=test_personne.id_son
WHERE test_personne.id_personne != 1
GROUP BY id_son*/


/*SELECT son.lien, COUNT(test_personne.id_son) as numberofutilization FROM son
LEFT JOIN test_personne
ON son.id=test_personne.id_son
WHERE test_personne.id_personne != 1
GROUP BY id_son
ORDER BY numberofutilization
LIMIT 1*/

/*
SELECT son.lien, COUNT(test_personne.nom) as numberofutilizationobject FROM son
LEFT JOIN test_personne
ON son.nom=test_personne.nom
WHERE test_personne.id_personne != 1
GROUP BY test_personne.nom
ORDER BY numberofutilizationobject
LIMIT 1*/

//UNION/INTERSECT/CASE?


/*CASE
	WHEN (SELECT id_son FROM test_personne INTERSECT SELECT id_son FROM son) IS NOT NULL
	SELECT son.lien
	ELSE
	SELECT son.lien,(COUNT(test_personne.id_son) as numberofutilization FROM son
	FULL OUTER JOIN test_personne
	ON son.id=test_personne.id_son
	WHERE test_personne.id_personne != 1
	GROUP BY id_son
	ORDER BY numberofutilization
END
	
SELECT son.lien, COUNT(test_personne.id_son) as numberofutilization FROM son
LEFT JOIN test_personne
ON son.id_son=test_personne.id_son
WHERE test_personne.id_personne != 1
GROUP BY test_personne.id_son
ORDER BY numberofutilization */

//selectionne les noms des sons non utilisés par la personne
/*SELECT son.nom FROM son
LEFT JOIN test_personne
ON son.id_son=test_personne.id_son
WHERE (test_personne.id_son NOT IN ('1') OR son.id_son NOT IN (SELECT test_personne.id_son))
GROUP BY son.nom*/
?>