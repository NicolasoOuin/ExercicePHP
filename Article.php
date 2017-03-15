<?php

class Article {
    
    private $_titlearticle;
    private $_contenu;
    
    public function getTitlearticle(){
        return $this->_titlearticle;
    }
    
    public function setTitlearticle($titlearticle){
        return $this->_titlearticle = $titlearticle;
    }
    
    public function getContenu(){
        return $this->_contenu;
    }
    
    public function setContenu($contenu) {
        return $this->_contenu = $contenu;
    }
    
    
    public function __construct($titlearticle,$contenu){
        $this->_titlearticle=$titlearticle;
        $this->_contenu=$contenu;
    }
    
    
}