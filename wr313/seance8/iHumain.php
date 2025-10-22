<?php
interface iHumain {
    public function travailler(float $nombreHeures): void;
    public function reposer(int $nombreJours): void;
    public function sePresente(): string;
}
?>

