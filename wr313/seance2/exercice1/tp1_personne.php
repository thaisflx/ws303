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
<h1>Exercice 3</h1>

<?php
require 'Personne.php';
// Nouvelle instance de class.Personne
$etudiant=new Personne('Martin','Paul',19);
echo $etudiant->sePresente().'<br>'; //Je m'appelle Paul Martin et j'ai 19 ans
// Modification de l'attribut Nom
$etudiant->Setnom='Durand';
echo $etudiant->sePresente().'<br>'; // Je m'appelle Paul Durand et j'ai 19 ans
?>

</body>
</html>
