<?php
// Autoload des classes
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// 1) Création d’armes
$sword = new Weapon('Epée', 3);
$axe   = new Weapon('Arc', 4);

// 2) Création d’une équipe (capacity 3)
$party = new Party('La Guerre de Troyes', 3);

// 3) Recrutement via composition (instanciation interne dans Party)
$party->recruitWarrior('Thor', 3, 25, 7, $axe); // Warrior instancié dans Party
// Ajout manuel d’un Mage
$mage = new Mage('Lyra', 2, 18, 6, 12);
$party->add($mage);

// 4) Ajout d’un autre Warrior puis équipement après coup
$war2 = new Warrior('Bjorn', 2, 22, 5);
$war2->equip($sword);
$party->add($war2);

// 5) Affichage équipe
echo '=== Partie : '.$party->getName().' ('.$party->getCount().'/'.$party->getCapacity().') ===<br>';
foreach ($party->getMembers() as $m) {
    echo '- '.$m->getDescription().'<br>';
}
echo 'Total niveaux: '.$party->totalLevels().'<br>';

?>
