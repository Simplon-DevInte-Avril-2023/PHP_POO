<?php
class Personne {
    private $nom;
    public $age;
    public $sexe;
    public $couleur;

    function __construct($nom, $age, $sexe, $couleur){
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->couleur = $couleur;
    }

    //Création du getter pour mon attribut 'nom', comme mon attribut 'nom' est en private j'y accède depuis cette fonction.
    function getNom(){
        return $this->nom;
    }

    //Creation du setter pour modifier mon attribut 'nom'
    function setNom($nom){
        //je vérifie que mon paramètre a une longueur inferieur à 10
        if(strlen($nom) < 10){
            $this->nom = $nom;
        }
    }
}

?>