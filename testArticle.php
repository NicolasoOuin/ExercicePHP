<?php

require_once ('Connexionbdd.php');
require_once("Article.php");

$sql=

$monpremierarticle = new Article ("$donnees())", "Contenu de l'article à rechercher en SQL");

echo '<h1>Titre: '.$monpremierarticle->getTitlearticle().'</h1><br>';
echo '<p>Contenu: '.$monpremierarticle->getContenu().'</p>';