<?php
abstract class Individu implements iHumain {
    protected string $nom;
    protected string $prenom;
    protected string $genre;
    protected float $revenu = 0;
    protected int $conges = 0;

    protected static int $nombreIndividus = 0;
    public function __construct(string $nom, string $prenom, string $genre) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->genre = $genre;
    }

    public function __destruct()
    {
        self::$nombreIndividus--;
    }

    public static function getNombreIndividus(): int {
        return self::$nombreIndividus;
    }

    public function travailler(float $nombreHeures): void {
        $this->revenu += $nombreHeures * 9.5;
    }

    public function reposer(int $nombreJours): void {
        $this->conges += $nombreJours;
    }

    public function sePresente(): string {
        return '<br>'.'Nom: '.$this->nom.'<br>'.' Prenom: '.$this->prenom.'<br>';
    }

    public function RAZrevenu() {
        $this->revenu = 0;
    }

    public function RAZconges() {
        $this->conges = 0;
    }

    public function declareSalaire() {
        return $this->prenom.' '.$this->nom.' a un revenu de '.$this->revenu.' euros.'.'<br>';
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getAge(): string {
        return $this->prenom.' '.$this->nom.' a '.$this->age.' ans.'.'<br>';
    }

    public function setAge(string $age): void {
        $this->age = $age;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function getRevenu(): float {
        return $this->revenu;
    }

    public function getConges(): int {
        return $this->conges;
    }

}

