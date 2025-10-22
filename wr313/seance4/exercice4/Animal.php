namespace exercice4;
namespace exercice4;
namespace exercice4\exercice4;
namespace exercice4\exercice4;
namespace exercice4;
namespace exercice4;
namespace exercice4;
Copier
<?php

class Animal
{
    public string $nom;
    public int $age;
    public int $ageTheorique;
    public string $etat = 'vivant';
    public array $regimeAlimentaire = [];

    public function __construct(string $nom, int $age, int $ageTheorique)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->ageTheorique = $ageTheorique;
        $this->regimeAlimentaire = []; //ici ou dans la propriété
        $this->etat = 'vivant'; //ici ou dans la propriété
    }

    public function mange(string $aliment): void
    {
        if ($this->etat === 'mort') { // === => 3 * =
            echo 'L\'animal ' . $this->nom . ' est mort et ne peut plus manger !<br>';
        } else {
            $this->regimeAlimentaire[] = $aliment;
        }
    }

    public function lire_regime(): string
    {
//        $message = '';
//        foreach ($this->regimeAlimentaire as $aliment) {
//            $message .= $aliment.', '; // => $message = $message . $aliment . ', ';
//        }
//
//        return 'Regime alimentaire : '.$message.'<br>';

        // ou
        return 'Regime alimentaire : ' . implode(', ', $this->regimeAlimentaire) . '<br>';
    }

    public function lire_informations(): string
    {
        return 'Animal : ' . $this->nom . ' : ' . $this->age . ' ans, ' . $this->etat . '<br>';
    }

    public function vieillir(int $nbAnnee): void
    {
        $this->age += $nbAnnee;
        if ($this->age > $this->ageTheorique) {
            $this->etat = 'mort';
        }
    }

}