<?php

class Chien
{
    public float $poids;
    public string $race;
    public int $age;

    public function vieillir(): void
    {
        $this->age++;
    }

    public function afficher(): string
    {
        return 'Chien ' . $this->race . ' : ' . $this->age . 'ans, ' . $this->poids . ' kg';
    }

    public function manger(float $poids): void
    {
        $this->poids += $poids;
    }


}