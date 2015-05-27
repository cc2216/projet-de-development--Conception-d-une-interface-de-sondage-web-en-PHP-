<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

// Create the graph.
$graph = new Graph(450,350);
$graph->SetScale('textlin');
$graph->SetMarginColor('black');

$conn=new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');

$res = $conn->query("create view test_identification as select s.id, s.nom, p.test_identification, p.id_son from son s, test_personne p where s.id = p.id_son;");

$res1=$conn->query("select nom, test_identification,count(nom) as countcorrect from test_identification where nom=test_identification;");
$res2=$conn->query("select nom, test_identification,count(nom) as countuncorrect from test_identification where nom<>test_identification;");
$res = $conn->query("drop view test_identification;");
$i=0;
$datay1 = array(0,0);
$datay1[$i++]=$res1->fetch()[2];
$datay1[$i]=$res2->fetch()[2];

// Setup title
$graph->title->Set('r¨¦partition par identification');
$graph->title->setFont(FF_SIMSUN,FS_BOLD,14);
// Create the first bar
$bplot = new BarPlot($datay1);
$bplot->SetFillGradient('AntiqueWhite2','AntiqueWhite4:0.8',GRAD_VERT);
$bplot->SetColor('darkred');
$x=array('m¨ºme nom avec le naturel','pas m¨ºme');
$graph->xaxis->SetTickLabels($x); 
$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD);
// Create the second bar

// And join them in an accumulated bar
$accbplot = new AccBarPlot(array($bplot));
$graph->Add($accbplot);

$graph->Stroke();
?>