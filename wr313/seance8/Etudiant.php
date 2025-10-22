<?php

require_once('Individu.php');

class Etudiant extends Individu {

    protected string $numetudiant;
    protected int $age;
    protected string $formation;
    protected string $resultat;

    public function __construct(string $nom, string $prenom, string $genre, string $numetudiant, string $formation, int $age)
    {
        parent::__construct($nom, $prenom, $genre);
        $this->age = $age;
        $this->formation = $formation;
        $this->numetudiant = $numetudiant;
    }

public function travailler(float $nombreHeures):void {
        if ($this->age < 18) {
            $this->revenu += ($nombreHeures * 9.5) * 0.8;
        } else {
            parent::travailler($nombreHeures);
        }
}

public function evaluer(float $noteExamen): void {
        if ($noteExamen < 10.0) {
            $this->resultat = 'Reçu(e)';
        } else {
            $this->resultat = 'Ajourné(e)';
        }
}

}
