<?php
class AC extends Users{
    //Attributs naviagationnes=>attributs issus des relations
    //OneToMany=>Inscription
    //1ere approche
    private array $inscriptions;

    //2eme approche
    //fonctions naviagationnelles => fonctions issues des associations

    public function inscriptions():array{
        return [];
    }
    
    public function __construct()
    {
        $this -> role= "ROLE_AC";
        $this -> inscriptions = [];
    }
}