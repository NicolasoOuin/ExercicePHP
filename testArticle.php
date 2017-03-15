<?php

require_once ('Connexionbdd.php');
require_once("Article.php");

$sql = 'SELECT * FROM articles';
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    while($donnees = $result->fetch_assoc()) {
        $monpremierarticle = new Article ("$donnees[Titre]", "$donnees[Contenu]");

        echo '<h1 style="width:200px;margin:auto;">'.$monpremierarticle->getTitlearticle().'</h1><br>';
        echo '<p style="width:200px;margin:auto;">'.$monpremierarticle->getContenu().'</p>';
    }
}