<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice - Seance 4</title>
</head>
<body>
<h1>Animaux et chiens</h1>
<?php

use exercice4\Animal;
use exercice4\Chien;

include('Animal.php');
include('Chien.php');

//créer l’instance $bestiole de la classe animal :
//Nom : ‘Une drôle de bête’, Age : 1, Age théorique maximum : 10, état : ‘vivant’

$bestiole = new Animal('Une drôle de bête', 1, 10);

// Appeler la méthode : mange(‘fruits’)
$bestiole->mange('fruits');
// Appeler la méthode : mange(‘légumes’)
$bestiole->mange('légumes');
// Appeler la méthode : lire_regime()
echo $bestiole->lire_regime();
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();
// Appeler la méthode : vieillir(4)
$bestiole->vieillir(4);
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();
// Appeler la méthode : vieillir(6)
$bestiole->vieillir(6);
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();

$bestiole->mange('viande');
echo '<hr>';
$chien = new Chien(4, "Médor");
echo $chien->lire_informations();
echo '<hr>';
echo $chien->seNomme();
$chien->mange('Croquettes');
$chien->mange('Viande');
echo $chien->lire_regime();
?>
</body>
</html>
