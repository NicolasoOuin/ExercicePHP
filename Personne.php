<?php

class Personne {
    
   
	private $_nom;        
	
	public function getNom() {
	   return $this->_nom;
	}
	
	public function setNom($nom) {
	   return $this->_nom = $nom;
	}
	
	
	public function __construct($nom) {
		$this->_nom=$nom;
	}
}
