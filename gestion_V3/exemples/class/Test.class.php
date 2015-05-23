<?php

/**
 * Cette classe permet de gerer les tests 
 */
	
class Test {

/**
 * Déclaration des attributs de la classe
 */
 	var $_arbo; //arborescence pour retrouver les dossier scripts, css, images...
	var $_son; // lien du son
	var $_scripts = array();

/*
 * Constructeur par defaut
 */
	
   
	function Test($a,$s){
		$this->_son= $s;
		$this->_arbo= $a;
		
	}
	
	

	/******************************/
	
	function insererSon(){
		
		$file = $this->_arbo."test/1.tpl.php";
		
		$handle = fopen ($file, "r");
		$contents = fread ($handle, filesize ($file));
		fclose ($handle);
		
		$varTemplates = array("__SON__");
		$replaceVarTemplates = array($this->_son);
		
		//on remplace les variables
		$contents = str_replace($varTemplates, $replaceVarTemplates, $contents);
		
		$contents=str_replace('<'.'?php','<'.'?',$contents);
		$contents='?'.'>'.trim($contents).'<'.'?';

		return eval($contents);
	}
	
	
}
?>
