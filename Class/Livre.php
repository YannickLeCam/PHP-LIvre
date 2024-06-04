<?php 
require_once "Auteur.php";

class Livre {

    private string $titre;
    
    private int $nbPages;
    
    private DateTime $parution;

    private int $prix;
    
    private Auteur $auteur;
    
    public function __construct(string $titre,int $nbPages,DateTime $parution,int $prix,Auteur $auteur) {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->parution = $parution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        //On ajoute le livre a l'autre directement.
        $this->auteur->addLivre($this);
    }

    public function __toString()
    {
        return "$this->titre(" .$this->parution->format("Y").") : $this->nbPages pages / $this->prix €";
    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    
    public function getNbPages()
    {
        return $this->nbPages;
    }
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;
    }


    public function setParution($parution)
    {
        $this->parution = $parution;
    }
    public function getParution()
    {
        return $this->parution;
    }


    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

    }

    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}