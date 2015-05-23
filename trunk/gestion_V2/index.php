<?php
       session_start();
       


        try
       {
         $bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
       }
       catch (Exception $e)
       {
        die('Erreur : ' . $e->getMessage());
        } 


	include ('./class/Page.class.php');
  include ('./class/Connexion.class.php');
    //$heard= $_SERVER['QUERY_STRING'];
    //$heard = str_replace('test=', '', $heard);
  if( !(isset($_SESSION['start'])))
    {
        require_once ('bienvenue.php');
    }
    else
	{
	   $p = new Page ('./', $_SESSION['test'], 'Test d\''.$_SESSION['test']);//afficher la tete de test
	   
      $c = new Connexion();
      $bdd = $c->connect();

       $nom_test =$_SESSION['test'];
      

$var1= $bdd->query(' SELECT son.lien,son.id, COUNT(test_personne.id_son) as numberofutilization FROM son
                    LEFT JOIN test_personne ON son.id=test_personne.id_son
                    WHERE son.nom IN(
                    SElECT son.nom FROM son
                    WHERE son.nom NOT IN (
                    SELECT son.nom FROM son 
                    WHERE son.id IN (
                    SELECT test_personne.id_son FROM test_personne 
                    WHERE test_personne.id_personne = 1
                    ) GROUP BY nom
                    ) 
                    GROUP BY son.nom
                    )
                    GROUP BY son.id
                    ORDER BY numberofutilization
                    LIMIT 1 ');

        $var2=$var1->fetch();



 $var3= $bdd->query(' SELECT son.lien,son.id, COUNT(test_personne.id_son) as numberofutilization FROM son
                      LEFT JOIN test_personne ON son.id=test_personne.id_son
                      WHERE son.nom IN(
                      SElECT son.nom FROM son
                      WHERE son.nom NOT IN (
                      SELECT son.nom FROM son 
                      WHERE son.id IN (
                      SELECT test_personne.id_son FROM test_personne 
                      WHERE test_personne.id_personne = 1
                      ) GROUP BY nom
                      ) 
                      GROUP BY son.nom
                      )
                      GROUP BY son.id
                      ORDER BY numberofutilization, lien
                      LIMIT 5 ');
        
        $noms_sons = array();
        $i=1;
        while($var4=$var3->fetch()){
          $noms_sons[$i]=$var4['lien'];
      
          $i=$i+1;
        }       

          $_SESSION['id_son']=$var2['id'];
          
           echo $p->pageHaut();
        if($nom_test!="representativite"){
          echo $p->test($nom_test,$var2['lien']);}
        else{
          echo $p->testrep($nom_test,$noms_sons[1],$noms_sons[2],$noms_sons[3],$noms_sons[4],$noms_sons[5]);
        }

	}
    
    /*print_r($_SERVER['QUERY_STRING']);
    echo '<hr />';
    print_r($_GET);*/
?>