<?php
class Article {
    private $libelle;
    private $prix;

    function __construct($libelle, $prix){
        $this->libelle = $libelle;
        $this->prix = $prix;
    }

    function getLibelle(){
        return $this->libelle;
    }
    
    function getPrix(){
        return $this->prix;
    }
}
?>