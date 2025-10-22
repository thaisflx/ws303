<?php

class Voiture extends Vehicule
{
    protected string $type;

    protected array $typesAutorises = ['suv', '4x4', 'break', 'Berline'];
    public function __construct(string $marque, int $puissance, float  $kilometrage, string $type)
    {
        parent::__construct($marque, $puissance, $kilometrage);
        $this->setType($type);
    }

    public function setType(string $type) : void
    {
        if (in_array($type, $this->typesAutorises)) {
            $this->type = $type;
        } else {
            echo 'Type de voiture invalide';
            $this->type = '';
        }
    }

    public function lireCaracteristique() : string
    {
        return parent::lireCaracteristique(). '<br>Type : '.$this->type;
    }
}

?>