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
    require('Vehicule.php');

    $vehicule1 = new Vehicule();
    $vehicule1->marque = 'Renault';
    $vehicule1->puissance = 120;
    $vehicule1->kilometrage = 15000.0;
    echo '<p>'.$vehicule1->lireCaracteristique().'</p>';
    echo '<h3>'.$vehicule1->lireCaracteristique().'</h3>';

    $vehicule2 = new Vehicule();
    $vehicule2->marque = 'Citroen';
    $vehicule2->puissance = 150;
    $vehicule2->kilometrage = 7000.0;
echo '<p>'.$vehicule2->lireCaracteristique().'</p>';
echo '<h3>'.$vehicule2->lireCaracteristique().'</h3>';
?>
</body>
</html>
