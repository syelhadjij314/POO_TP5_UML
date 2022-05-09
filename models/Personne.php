<?php
// Classe Concrete produit des Objets
    // produit que des methodes concretes
// Classe Abstraite qui ne produit pas des Objets
    // produit des methodes concretes et des methodes abstraites
    // on ne connait pas sa definition

//Class Final qui ne peut pas avoir de classe fille(Impossible d'avoir une relation de specialisation )
abstract class Personne{
    // Attribut d'instance
    protected int $id;
    protected string $nomComplet;
    protected string $role;

    //Attribut de classe ou static
    private static int $nbrePersonne;

    // Constructeur Par defaut
    public function __construct()
    {

    }

    // Getters
    public function getId():int
    {
        return $this ->id;
    }
    public function getNomComplet():string
    {
        return $this ->nomComplet;
    }

    /**
     * Get the value of nbrePersonne
     */ 
    public static function getNbrePersonne():int 
    {
        return self::$nbrePersonne;
    }

    //Setters
    public function setId(int $id) : self {
        $this ->id = $id;
        return $this;
    }
    public function setNomComplet(string $nomComplet) :self
    {
        $this ->nomComplet = $nomComplet;
        return $this;
    }
    /**
     * Set the value of nbrePersonne
     *
     * @return  self
     */ 
    public static function setNbrePersonne(int $nbrePersonne):void
    {
        self :: $nbrePersonne = $nbrePersonne;
    }
}

