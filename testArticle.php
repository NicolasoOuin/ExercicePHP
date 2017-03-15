<?php

require_once("Article.php");

$monpremierarticle = new Article ("Titre de l'article à rechercher en SQL", "Contenu de l'article à rechercher en SQL");

echo '<h1>Titre: '.$monpremierarticle->getTitlearticle().'</h1><br>';
echo '<p>Contenu: '.$monpremierarticle->getContenu().'</p>';