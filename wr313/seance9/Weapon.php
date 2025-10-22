<?php

class Weapon
{
    private string $name;
    private int $damage;

    public function __construct(string $name, int $damage)
    {
        if (empty($name)) {
            throw new InvalidArgumentException("Le nom de l'arme ne peut pas être vide.");
        }

        if ($damage < 0) {
            throw new InvalidArgumentException("Les dégâts doivent être supérieurs ou égaux à 0.");
        }

        $this->name = $name;
        $this->damage = $damage;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function getDescription(): string
    {
        return sprintf("%s+%d", $this->name, $this->damage);
    }
}


