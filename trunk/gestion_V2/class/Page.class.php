<?php

/**
 * Cette classe permet de gerer les pages du site.
 */
	
class Page {

/**
 * Déclaration des attributs de la classe
 */
 	var $_arbo; //arborescence pour retrouver les dossier scripts, css, images...
	var $_titre; //titre de la page
	var $_titreh1;
	var $_description; // metadata description
	var $_motscles; //metadata keywords
	var $_contenu;
	var $_url;
	var $_scripts = array();

/*
 * Constructeur par defaut
 */
	
    function Page($a, $t, $th1){
		//require_once ('/inc/global.inc.php');
		$this->_arbo = $a;
		$this->_titre = $t;
		$this->_titreh1 = $th1;
    }
	
	/******************************/
	function pageHaut(){
	
	
		$file = $this->_arbo."templates/entete.tpl.php";
      
        

		$handle = fopen ($file, "r");
		$contents = fread ($handle, filesize ($file));
		fclose ($handle);
		
		$varTemplates = array("__TITLE__", "__TITLE_H1__", "__SCRIPTS__");
		$replaceVarTemplates = array($this->_titre, $this->_titreh1, implode($this->_scripts));
		
		//on remplace les variables
		$contents = str_replace($varTemplates, $replaceVarTemplates, $contents);
		
		//$contents=str_replace('<'.'?php','<'.'?',$contents);
		$contents='?'.'>'.trim($contents).'<'.'?';

		return eval($contents);
	}

	
	/******************************/
    function test($nom_test,$nom_son,$id_son,$id_test){
        
        $file = $this->_arbo."templates/tests/".$nom_test.".php";
        //$file = $this->_arbo."tests/".$GLOBALS['bienvenue']."/templates/entete.tpl.php";
        

		$handle = fopen ($file, "r");
		$contents_body = fread ($handle, filesize ($file));
        fclose ($handle);
        	
            $varTemplates = array("__SON__","__IDSON__","__IDTEST__");
		$replaceVarTemplates = array($nom_son,$id_son,$id_test);
		
		//on remplace les variables
		$contents_body = str_replace($varTemplates, $replaceVarTemplates, $contents_body);
        
       
		$contents_body='?>'.trim($contents_body);
		
        return eval($contents_body);
        //require_once ("themes/".$GLOBALS['themes']."/templates/tests/".$nom_test.".php");
    }

    /******************************/
    function testrep($nom_test,$nom_son1,$nom_son2,$nom_son3,$nom_son4,$nom_son5){
        
        $file = $this->_arbo."templates/tests/".$nom_test.".php";
        //$file = $this->_arbo."tests/".$GLOBALS['bienvenue']."/templates/entete.tpl.php";
        

		$handle = fopen ($file, "r");
		$contents_body = fread ($handle, filesize ($file));
        fclose ($handle);
        	
            $varTemplates = array("__SON1__","__SON2__","__SON3__","__SON4__","__SON5__");
		$replaceVarTemplates = array($nom_son1,$nom_son2,$nom_son3,$nom_son4,$nom_son5);
		
		//on remplace les variables
		$contents_body = str_replace($varTemplates, $replaceVarTemplates, $contents_body);
        
       
		$contents_body='?>'.trim($contents_body);
		
        return eval($contents_body);
    }


/******************************/
	function menuPrincipal($typeMenu){
		global $contenu;
		
		switch ($typeMenu){
			case "contenu_large":
				$file = $this->_arbo."templates/menu_large.php";
			break;
			case "client":
				if(is_file($this->_arbo."templates/".$contenu->getRubrique()."/menu.tpl.php")){
					$file = $this->_arbo."templates/".$contenu->getRubrique()."/menu.tpl.php";
				}else{
					$file = $this->_arbo."templates/menu.tpl.php";
				}
			break;
			case "adminPage":
				$file = $this->_arbo."templates/admin/admin_menu_contenu.php";
			break;
			default:
				$file = $this->_arbo."templates/menu_".$typeMenu.".php";
			break;
		}

		$handle = fopen ($file, "r");
		$contents = fread ($handle, filesize ($file));
		fclose ($handle);
		
		$varTemplates = array("__ARBO__", "__URL__");
		$replaceVarTemplates = array($this->_arbo, $this->_url);
		
		//on remplace les variables
		$contents = str_replace($varTemplates, $replaceVarTemplates, $contents);
		
		$contents=str_replace('<'.'?php','<'.'?',$contents);
		$contents='?'.'>'.trim($contents).'<'.'?';

		return eval($contents);
	}
	
	function information(){
		global $contenu;
		
		$file = $this->_arbo."templates/information.tpl.php";
		if(is_file($this->_arbo."templates/".$contenu->getRubrique()."/information.tpl.php")){
			$file = $this->_arbo."templates/".$contenu->getRubrique()."/information.tpl.php";
		}
		
		$handle = fopen ($file, "r");
		$contents = fread ($handle, filesize ($file));
		fclose ($handle);
		
		$varTemplates = array("__ARBO__", "__THEMES__");
		$replaceVarTemplates = array($this->_arbo, $GLOBALS['themes']);
		
		//on remplace les variables
		$contents = str_replace($varTemplates, $replaceVarTemplates, $contents);
		
		$contents=str_replace('<'.'?php','<'.'?',$contents);
		$contents='?'.'>'.trim($contents).'<'.'?';

		return eval($contents);
	}
	
	/******************************/
	function menu2(){
		global $contenu;
		
		if(is_file($this->_arbo."templates/".$contenu->getRubrique()."/menu2.tpl.php")){
			$file = $this->_arbo."templates/".$contenu->getRubrique()."/menu2.tpl.php";
		}else{
			$file = $this->_arbo."templates/menu2.tpl.php";
		}
		
		$handle = fopen ($file, "r");
		$contents = fread ($handle, filesize ($file));
		fclose ($handle);
		
		$varTemplates = array("__THEMES__", "__ARBO__");
		$replaceVarTemplates = array($GLOBALS['themes'], $this->_arbo);
		
		//on remplace les variables
		$contents = str_replace($varTemplates, $replaceVarTemplates, $contents);
		
		$contents=str_replace('<'.'?php','<'.'?',$contents);
		$contents='?'.'>'.trim($contents).'<'.'?';

		return eval($contents);
	}
	
	/******************************/
	function pageBas($rubrique, $typePiedpage){

		if($typePiedpage == 'popup'){		
			if(is_file($this->_arbo."templates/".$rubrique."/piedpagepop.php")){
				$file = $this->_arbo."templates/".$rubrique."/piedpagepop.php";
			}else{
				$file = $this->_arbo."templates/piedpagepop.tpl.php";
			}
		}else{
			if(is_file($this->_arbo."templates/".$rubrique."/piedpage.tpl.php")){
				$file = $this->_arbo."templates/".$rubrique."/piedpage.tpl.php";
			}else{
				if(is_file($this->_arbo."templates/piedpage_".$_SESSION['lang'].".tpl.php")){
					$file = $this->_arbo."templates/piedpage_".$_SESSION['lang'].".tpl.php";
				}else{
					$file = $this->_arbo."templates/piedpage.tpl.php";
				}
			}
		}
			
		
		$handle = fopen ($file, "r");
		$contents = fread ($handle, filesize ($file));
		fclose ($handle);
		
		$varTemplates = array("__THEMES__", "__ARBO__");
		$replaceVarTemplates = array($GLOBALS['themes'], $this->_arbo);
		
		//on remplace les variables
		$contents = str_replace($varTemplates, $replaceVarTemplates, $contents);
		
		$contents=str_replace('<'.'?php','<'.'?',$contents);
		$contents='?'.'>'.trim($contents).'<'.'?';

		return eval($contents);
	}
	
	function setLangue(){
		global $contenu;
		$langue = '';
		
		if($contenu->getLangue() != ''){
			if($contenu->getLangue() != $_SESSION['lang']){
				$langue = $contenu->getLangue();
			}
		}
		
		$directory = $GLOBALS['PRIVATE_ROOT'].'/inc/locale';
		$domain = 'default';
		$locale = $contenu->getLangue();
		
		setlocale(LC_MESSAGES, $locale);
		bindtextdomain($domain, $directory);
		textdomain($domain);
		bind_textdomain_codeset($domain, 'UTF-8');
		
		if($langue != ''){
			return $langue;
		}else{
			return $_SESSION['lang'];
		}
	}
	
	function addScript($s){
		$this->_scripts[] = '<script type="text/javascript" src="'.$s.'"></script>';
	}
	
} //fin de Page
?>