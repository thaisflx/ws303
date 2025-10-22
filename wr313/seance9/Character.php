<?php

abstract class Character
{
    private string $name;
    private int $level;
    private int $hp;

    public function __construct(string $name, int $level, int $hp)
    {
        if (empty($name)) {
            throw new InvalidArgumentException("Le nom ne peut pas être vide.");
        }
        if ($level < 1) {
            throw new InvalidArgumentException("Le niveau doit être supérieur ou égal à 1.");
        }
        if ($hp < 1) {
            throw new InvalidArgumentException("Les points de vie doivent être supérieurs ou égaux à 1.");
        }

        $this->name = $name;
        $this->level = $level;
        $this->hp = $hp;
    }

    protected function setHp(int $hp): void
    {
        $this->hp = max(0, $hp);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function isAlive(): bool
    {
        return $this->hp > 0;
    }

    public function getType(): string
    {
        return "character";
    }

    public function getDescription(): string
    {
        return sprintf(
            "%s (niveau %d) - %d PV - Type : %s",
            $this->name,
            $this->level,
            $this->hp,
            $this->getType()
        );
    }
}
