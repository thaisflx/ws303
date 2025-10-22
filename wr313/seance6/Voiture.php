<?php

    class Voiture extends VehiculeAMoteur
    {
        protected string $marque;
        protected int $puissance;

        public function __construct (string $type, int $nbPassagers, string $marque, int $puissance)
        {
            parent::__construct($type, $nbPassagers);
            $this->$marque = $marque;
            $this->$puissance = $puissance;
        }

    public function lireCaracteristiques() : string
    {
        return 'Voiture '.$this->$marque.' : '.$this->$puissance.' CV. Type de moteur : '.$this->$typeMoteur.', nombre de passagers : '.$this->$nbPassagers;
    }
}


