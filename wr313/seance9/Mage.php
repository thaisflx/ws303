<?php

require_once 'Character.php';

class Mage extends Character
{
    private int $intelligence;
    private int $mana;

    public function __construct(string $name, int $level, int $hp, int $intelligence, int $mana)
    {
        parent::__construct($name, $level, $hp);

        if ($intelligence < 1) {
            throw new InvalidArgumentException("L'intelligence doit être supérieure ou égale à 1.");
        }

        if ($mana < 0) {
            throw new InvalidArgumentException("Le mana ne peut pas être négatif.");
        }

        $this->intelligence = $intelligence;
        $this->mana = $mana;
    }

    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function getType(): string
    {
        return "mage";
    }

    public function getDescription(): string
    {
        return sprintf(
            "Mage %s Lvl %d (HP: %d) [Int %d, Mana %d]",
            $this->getName(),
            $this->getLevel(),
            $this->getHp(),
            $this->intelligence,
            $this->mana
        );
    }
}
