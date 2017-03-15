<?php

class Patient extends Personne {
	
	private $_numsecu;
	
	public function __construct($nom, $numsecu){
		
		//appel constructeur parrent
		parent::__construct ($nom);
                
                
                $this->_numsecu=$numsecu;
	}
	
	public function getNumsecu() {
		return $this->_numsecu;		
	}
	
	public function setNumsecu($nu){
		$this->_numsecu=$nu;
	}
	
}