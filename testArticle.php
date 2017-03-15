<?php

require_once("Article.php");

$monpremierarticle = new Article ("Titre de l'article à rechercher en SQL", "Contenu de l'article à rechercher en SQL");

echo 'Titre: '.$monpremierarticle->getTitlearticle().'<br>';
echo 'Contenu: '.$monpremerarticle->getContenu();