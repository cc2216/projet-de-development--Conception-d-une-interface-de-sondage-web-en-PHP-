<?php

/**
 * Cette classe permet les connexions aux bases de données
 */
	
class Connexion {

/**
 * Déclaration des attributs de la classe
 */
 
 	var $_host;
	var $_dbname;
	var $_port;
	var $_user;
	var $_pass;


/*
 * Constructeur par defaut
 */
	
	//constructeur vide, initialise la base par défaut
	function __construct() {
		$this->_host = 'localhost';
		$this->_dbname = 's2_sons';
		$this->_user = 'root';
		$this->_pass = '';
	}
	
	function connect(){
		try {
			$pdo = new PDO('mysql:host='.$this->_host.';dbname='.$this->_dbname, $this->_user, $this->_pass);
			return $pdo;
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage() . "<br/>"; //aficher uniquement en dev, pas en PROD !
			die();
		}
	}
} //fin de Connexion
?>