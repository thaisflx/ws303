<?php

namespace exercice3;
class Connexion_SQL
{
    private string $adresseip;

    private string $nombase;

    private string $utilisateur;

    private string $mdp;

    public function __construct(string $adresseip, string $nombase, string $utilisateur, string $mdp)
    {
        $this->SetAdresseIp($adresseip);
        $this->nombase = $nombase;
        $this->utilisateur = $utilisateur;
        $this->mdp = $mdp;
    }

    public function lire_connexion()
    {
        return '<br>Connexion SQL : ' . $this->adresseip . ', ' . $this->nombase . ', ' . $this->utilisateur . '. ';
    }

    public function SetAdresseIp(string $ip): void
    {
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            $this->adresseip = $ip;
        } else {
            $this->adresseip = '0.0.0.0';
            echo "Adresse IP non valide";
        }
    }

}