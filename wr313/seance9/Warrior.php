<?php

class Warrior extends Character
{
    protected int $strenght;

    protected ?Weapon $weapon;

    public function __construct(string $name, int $level, int $hp, int $strenght, ?Weapon $weapon = null)
    {
        parent::__construct($name, $level, $hp);
        $this->strenght = $strenght;
        $this->weapon = $weapon;
    }

    public function getDescription(): string
    {
        $weaponDesc = $this->weapon ≠ null ? $this->weapon->getDescription() : 'None';
        return 'Warrior '.$this->getName().' (Level: '.$this->getLevel().', HP: '.$this->getHp().', Strenght: '.$this->strenght.', Weapon: '.$weaponDesc.')';
    }

    public function equip(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }
}
