<?php

require_once 'Character.php';
require_once 'Mage.php';
require_once 'Warrior.php';
require_once 'Weapon.php';
    class Party {

        private string $name;
        private int $capacity;
        private array $members = [];

        public function __construct(string $name, int $capacity)
        {
            $name = trim($name);
            $this->name = $name;
            $this->capacity = $capacity;
        }

        public function recruitWarrior(string $name, int $level, int $hp, int $strenght, ?Weapon $weapon = null): bool
        {
            if ($this->getCount() >= $this->capacity) {
                return false;
            }
            $w = new Warrior($name, $level, $hp, $strenght, $weapon);
            $this->members[] = $w;
            return true;
        }
    }
?>