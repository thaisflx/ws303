<?php
//----------------------------------------------------
// fichier : personne2.php
// ---------------------------------------------------
// Notion d'encapsulation : protection des propriétés
// de l'objet.
// IUT de Troyes - MMI 2ème année
//----------------------------------------------------

class Personne2 {
    // Définition des attributs de la classe
    private string $prenom;
    private string $nom;
    private int $age;

    // Définition de la fonction constructeur
    public function __construct($n,$p,$a) {
        $this->setNom($n);
        $this->prenom=$p;
        $this->age=$a;
    }

    // Définition du comportement sePresente()
    public function sePresente(): string {
        return 'Je m\'appelle '.$this->prenom.' '.$this->nom.' et j\'ai '.$this->age.' ans ';
    }

    // initialisation du nom en majsucules
    public function setNom(string $n): void {
        $this->nom=strtoupper($n);
    }
}
?>
