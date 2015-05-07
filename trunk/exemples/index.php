<?php
	include ('./class/Page.class.php');
	$p = new Page ('./', 'Ma page 1', 'mon titre h1');
	echo $p->pageHaut();
	echo $p->menuPrincipal("client");
?>