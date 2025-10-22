<?php

abstract class VehiculeAMoteur
{
    protected string $typeMoteur;
    protected int $nbPassagers;
    protected array $typesMoteurAutorises = ['E', 'T'];
    protected static $nbVehicules = 0;

    public function __construct(string $typeMoteur, int $nbPassagers) {
        $this->setTypeMoteur($typeMoteur);
        $this->setNbPassagers($nbPassagers);
        self::$nbVehicules++; }

    public function setTypeMoteur(string $typeMoteur): void {
        if (in_array($typeMoteur, $this->typesMoteurAutorises)) {
            $this->typeMoteur = $typeMoteur;
        } else { echo 'Type de moteur invalide'; $this->typeMoteur = ''; } }

    public function setNbPassagers(int $nbPassagers): void
    { if (is_int($nbPassagers) && $nbPassagers > 0) { $this->nbPassagers = $nbPassagers;
    } else {
        echo 'Nombre de passagers invalide';
    }
    }
}