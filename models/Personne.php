<?php
// Classe Concrete produit des Objets
    // produit que des methodes concretes
// Classe Abstraite qui ne produit pas des Objets
    // produit des methodes concretes et des methodes abstraites
    // on ne connait pas sa definition

//Class Final qui ne peut pas avoir de classe fille(Impossible d'avoir une relation de specialisation )
namespace App\Model;
use App\Core\Model;

abstract class Personne extends Model{
    // Attribut d'instance
    protected int $id;
    protected string $nomComplet;
    protected static string $role;

    //Attribut de classe ou static

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
     * Get the value of role
     */ 
    public static function getRole()
    {
        return self::$role='';
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /* public static function findAll():array
    {
        $sql = "select `nom_complet`,`role`,`grade` from ? where role ?";
        return parent::findBy($sql,[parent::table(),self::getRole()]);
    } */
}

