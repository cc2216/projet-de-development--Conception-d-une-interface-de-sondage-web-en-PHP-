<?php
session_start();

print_r($_SESSION);
echo '<hr />';
if(isset($_SESSION['idPersonne'])){
	echo 'ma personne connect�e : '.$_SESSION['idPersonne'];
}else{
	echo 'il y a personne';
}
?>