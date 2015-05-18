<?php
	include ('./class/Page.class.php');
    //$heard= $_SERVER['QUERY_STRING'];
    //$heard = str_replace('test=', '', $heard);
    if($_SERVER['QUERY_STRING']==null)
    {
        require_once ('bienvenue.php');
    }
    else
	{
	   $p = new Page ('./', $_GET['test'], 'Test d\''.$_GET['test']);//afficher la tete de test
	   
       $nom_test = $_GET['test'];
       try
       {
         $bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
       }
       catch (Exception $e)
       {
        die('Erreur : ' . $e->getMessage());
        }                
$var1= $bdd->query(' SELECT son.lien, COUNT(test_personne.id_son) as numberofutilisation FROM son
        LEFT JOIN test_personne
        ON son.id=test_personne.id_son
        WHERE test_personne.id_personne != 1
        GROUP BY id_son
        ORDER BY numberofutilisation
        limit 1');
        $var2=$var1->fetch();
        $tab=explode("/",$var2['lien']);
        //echo $tab[2];
       echo $p->pageHaut();
       echo $p->test($nom_test,$tab[2]);
	}
    
    /*print_r($_SERVER['QUERY_STRING']);
    echo '<hr />';
    print_r($_GET);*/
?>