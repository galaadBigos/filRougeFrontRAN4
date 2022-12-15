<?php

class Joueur 
{
    static int $nombreDeJoueur = 0;

    public int $id;
    public string $prenom; 
    public string $nom;
    public string $dateDeNaissance;
    public string $poste;
    public string $photo;
    public string $biographie;

    public function __construct($prenom, $nom, $dateDeNaissance, $poste, $photo  = "../assets/img/silhouette2.jpg", $biographie = "null") 
    {
        self::$nombreDeJoueur++;

        $this->id = self::$nombreDeJoueur;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->poste = $poste;
        $this->photo = $photo;
        $this->biographie = $biographie;
    }
}

?>