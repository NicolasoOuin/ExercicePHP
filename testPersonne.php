<?php

require_once("Personne.php");
require_once("Patient.php");

$superman = new Personne ("Superman");
$patient = new Patient ("Leclerc","17171633623671");

echo 'Monsieur '.$patient->getNom().' est '.$superman->getNom().' et son numéro de sécurité sociale est '.$patient->getNumsecu().'<br>';


