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
<h1>Exercice 1</h1>

<?php

use exercice4\Chien;

require('Chien.php');

$chien1 = new Chien();
$chien1->race = 'Labrador';
$chien1->age = 4;
$chien1->poids = 25;
echo '<h3>'.$chien1->afficher().'</h3>';
$chien1->vieillir();
echo '<h3>'.$chien1->afficher().'</h3>';
echo '<h3>'.$chien1->manger(0.9).'</h3>';
echo '<h3>'.$chien1->afficher().'</h3>';

$chien2 = new Chien();
$chien2->race = 'Berger Allemand';
$chien2->age = 6;
$chien2->poids = 20;
echo '<h3>'.$chien2->afficher().'</h3>';
?>

</body>
</html>
