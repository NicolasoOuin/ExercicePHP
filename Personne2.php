<?php

/*

$Patient1 = array (
    "Nom" => "Marie",
    "Prénom" => "Julie",
    "DateNaissance" => "2016-03-02", 
);

$Patient2 = array (
    "Nom" => "Jejz",
    "Prénom" => "Pascal",
    "DateNaissance" => "2015-03-02", 
);

$Patient3 = array (
    "Nom" => "Loeo",
    "Prénom" => "Eliot",
    "DateNaissance" => "2014-03-02", 
);

foreach ($Patient1 as $key => $value) {
echo $key . ": ". $value . "<br>\n";
}

echo " <br><hr><br>";

$Patient = array (
        1 => array (
        "Nom" => "Marie",
        "Prénom" => "Julie",
        "DateNaissance" => "2016-03-02", 
    ),
        2 => array (
        "Nom" => "Jejz",
        "Prénom" => "Pascal",
        "DateNaissance" => "2015-03-02", 
    ),
        3 => array (
        "Nom" => "Loeo",
        "Prénom" => "Eliot",
        "DateNaissance" => "2014-03-02", 
    )
);

foreach ($Patient as $cle1 => $valeur1)
{
    echo "<br>Patient n°:".$cle1."<br><br>";
    
    foreach ($valeur1 as $cle2=>$valeur2) 
        {
        echo $cle2 .": ".$valeur2."<br>";
        }
}

echo " <br><hr><br>";

function addition ($nombre1 , $nombre2) {
    $resultat=$nombre1+$nombre2;
    return $resultat;
}

$resultat= addition (14,156);
echo '14 + 156 font '.$resultat."<br>";

echo " <br><hr><br>";

echo "<h4>POO ou programation orienté objet :</h4>";

echo "Attributs > composent des Classes > pour composer un Objets <br>";

echo " <br><hr><br>";

class Patient
// Présence du mot-clé class suivi du nom de la classe.
    {
    private $nom;
    private $prenom;
    private $numsecu;
    
// Déclaration des attributs et méthodes ici.
public function afficher () {
    
}
}

echo " <br><hr><br>";

*/

class Personne {
    
    
	/*
	private $_force;
	private $_localisation;
	private $_experience;
	private $_degats;
	*/
	private $_nom;
	private $_prenom;
	private $_age;
	private $_adresse;
	
	public function afficher () {
		echo 'J\'ai 25 ans, mon nom est Einstein et mon prénom Albert';
	}
	
	/*
	public function parler () {
		echo '<br>Je suis un personnage!<br>';
	}
	
	public function age () {
		echo '<br>J\'ai 25 ans<br>';
	}
	
	public function nom () {
		echo '<br>Mon nom est Einstein<br>';
	}
	
	public function prenom () {
		echo '<br>Mon prénom est Albert<br>';
	}
	
	//méthode pour gagner de l'exp
	public function gagnerExperience() {
		//Cette méthode ajoute 1 à l'exp du personnage
		$this->_experience++;
	}
	*/
	
	public function ageplusun() {
		$this->_age++;
	}
        
        
        
	public function get_Age() {
	   return $this->_age;
	}
	
	public function set_Age($age) {
	   return $this->_age;
	}
	
	public function get_Nom() {
	   return $this->_nom;
	}
	
	public function set_Nom($nom) {
	   return $this->_nom;
	}
	
	public function get_Prenom() {
	   return $this->_prenom;
	}
	
	public function set_Prenom($prenom) {
	   return $this->_prenom;
	}

	public function get_Adresse() {
	   return $this->_adresse;
	}
	
	public function set_Adresse($adresse) {
	   return $this->_adresse;
	}
	
	public function __construct($nom,$prenom,$age,$adresse) {
		$this->_nom=$nom;
		$this->_prenom=$prenom;
		$this->_age=$age;
		$this->_adresse=$adresse;
	}
}

class Patient extends Personne {
	
	private $_nsecu;
	
	public function get_Nsecu() {
	   return $this->_nsecu;
	}
	
	public function set_Nsecu($nsecu) {
	   return $this->_nsecu;
	}
	
	public function __construct($nsecu) {
		$this->_nsecu=$nsecu;
	}
}

class Employe extends Personne {
	
    private $_emploi;
	private $_salaire;
	
	public function get_Emploi() {
	   return $this->_emploi;
	}
	
	public function set_Emploi($emploi) {
	   return $this->_emploi;
	}
	
	public function get_Salaire() {
	   return $this->_salaire;
	}
	
	public function set_Salaire($salaire) {
	   return $this->_salaire;
	}
	
	public function __construct($emploi,$salaire) {
		$this->_emploi=$emploi;
		$this->_salaire=$salaire;
	}
	
	function Employe ($nom="",$prenom="",$age="",$adresse="") {
		parent::Personne($nom,$prenom,$age,$adresse);
	}
}


$MonsieurDupont = new Employe ("employé communal","2000€");

echo $MonsieurDupont->_emploi;


/*
$perso->parler();
$perso->age();
$perso->nom();
$perso->prenom();
*/

//$perso->_experience=$perso->_experience + 1; 
/* erreur fatale ! Pourquoi ??
On est hors de la classe et on a essayé d'accéder à un attribut privé. Ceci est interdit, donc PHP lève une erreur. Dans notre
exemple (qui essaye d'augmenter de 1 l'expérience du personnage), il faudra demander à la classe d'augmenter l'expérience. */

//$perso->gagnerExperience();
/*$this est appelé ‘pseudo variable’ et permet d’accéder aux propriété d’une classe alors qu’on n’a même pas d’objet instancié ! */

//$Einstein->_age=$Einstein->_age + 1; 


echo "<br>";





?>