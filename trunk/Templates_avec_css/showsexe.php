<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

// Create the graph.
$graph = new Graph(450,350);
$graph->SetScale('textlin');
$graph->SetMarginColor('black');

$conn=new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
$res1=$conn->query("select sexe,count(sexe) as countsexe from personne group by sexe having sexe='masculin';");
$res2=$conn->query("select sexe,count(sexe) as countsexe from personne group by sexe having sexe='feminin';");
$i=0;
$datay1 = array(0,0);
$datay1[$i++]=$res1->fetch()[1];
$datay1[$i]=$res2->fetch()[1];

// Setup title
$graph->title->Set('r¨¦partition par sexe');
$graph->title->setFont(FF_SIMSUN,FS_BOLD,14);
// Create the first bar
$bplot = new BarPlot($datay1);
$bplot->SetFillGradient('AntiqueWhite2','AntiqueWhite4:0.8',GRAD_VERT);
$bplot->SetColor('darkred');
$x=array('Masculin','Feminin');
$graph->xaxis->SetTickLabels($x); 
$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD);
// Create the second bar

// And join them in an accumulated bar
$accbplot = new AccBarPlot(array($bplot));
$graph->Add($accbplot);

$graph->Stroke();
?>