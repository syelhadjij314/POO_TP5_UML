<?php
class Professeur extends Personne
{
    public function __construct()
    {
        $this -> role= "ROLE_PROFESSEUR";
    }

    //Fonctions navigationnelles
    //ManyToMany => Classe

    public function classes():array
    {
        return [] ;
    }
}