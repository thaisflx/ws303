<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Exercice 1 - Seance 5</h1>

<?php
require('Vehicule.php');
require('Voiture.php');

$vehicule1 = new Vehicule('TrucQuiRoule', 10, 100.5);
echo $vehicule1->lireCaracteristique().'<br>';
$vehicule1->parcourir(1000.0).'<br>';
echo $vehicule1->lireCaracteristique().'<br>'.'<br>';

$voiture1 = new Voiture('Renault',100, 1000.0, 'Break');
echo $voiture1->lireCaracteristique().'<br>';
$voiture1->parcourir(1000.0).'<br>';
echo $voiture1->lireCaracteristique();

$voiture2 = new Voiture('Citroen', 100, 1000.0, 'electrique');

?>
</body>
</html>
