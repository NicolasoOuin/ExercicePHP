﻿<?php

require_once("Personne.php");
require_once("Patient.php");

$superman = new Personne ("Superman");
$patient = new Patient ("Leclerc","17171633623671");

echo 'Monsieur '.$patient->getNom().' est '.$superman->getNom().' et son numéro de sécurité sociale est '.$patient->getNumsecu().'<br>';


$wonderwomen = new Personne ("Wonderwomen");
$patient2 = new Patient ("Loic","1937329387232");

echo 'Madame '.$patient2->getNom().' est '.$wonderwomen->getNom().' et son numéro de sécu est '.$patient2->getNumsecu();


