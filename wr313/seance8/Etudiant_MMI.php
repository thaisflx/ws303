<?php

require_once('Etudiant.php');

final class Etudiant_MMI extends Etudiant {
    private string $option;

    public function __construct(
        string $nom,
        string $prenom,
        string $genre,
        string $numetudiant,
        int $age,
        string $option
    ) {
        parent::__construct($nom, $prenom, $genre, $numetudiant, "BUT MMI", $age);
        $this->option = $option;
    }

    public function QuelleOption(): string {
        return $this->option;
    }

    public function ChangerOption(string $option): void {
        $this->option = $option;
    }
}

