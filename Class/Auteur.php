<?php

class Auteur {
    private string $nom;
    private string $prenom;
    private array $bibliographie = [];

    public function __construct(string $nom , string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __toString()
    {
        return "$this->nom $this->prenom";
    }

    public function getNom():string {
        return $this->nom;
    }
    public function setNom(string $nom):void{
        $this->nom=$nom;
    }
        
    /**
     * getBibliographie
     *
     * @return array[Livre]
     */
    public function getBibliographie():array{
        return $this->bibliographie;
    }

    public function getPrenom():string {
        return $this->prenom;
    }
    public function setPrenom(string $prenom):void{
        $this->prenom=$prenom;
    }

    public function addLivre(Livre $livre):int{
        if (!in_array($livre , $this->bibliographie)) {
            if ($livre->getAuteur()==$this) {
                $this->bibliographie[]=$livre;
                return 0; //reussit
            }else{
                //N'est pas le bon auteur
                return -1;
            }
        }else {
            //est deja dans la bibliographie
            return -1;
        }
    }

    public function delLivre(Livre $livre){
        $this->bibliographie=array_diff($this->bibliographie,[$livre]);
        return;
    }

    public function printBibliographie():void{
        $retour = "<h2>Livres de $this</h2> <br>";
        foreach ($this->bibliographie as $livre) {
            $retour.="$livre <br>";
        }
        echo $retour;
        return;
    }


} 




?>