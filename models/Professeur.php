<?php
namespace App\Model;
use App\Core\Constantes;

class Professeur extends Personne
{
    private string $grade;
    public function __construct()
    {
        parent:: $role= Constantes::PROF;
    }

    //Fonctions navigationnelles
    //ManyToMany => Classe

    public function classes():array
    {
        return [] ;
    }

    public static function findAll():array
    {
        $sql = "select * from ".parent::table()." where role like ?";
        return parent::findBy($sql,[Constantes::PROF]);
    }

    public function insert():int
    {
        $db=parent::database();
        $db->connexionBD();
        //Requete non preparee:variable injectee lors de l'ecriture de la requete
            $sql="INSERT INTO `personne` (`nom_complet`, `role`, `grade`) VALUES (?,?,?);";
            $result=$db->executeUpdate($sql,[$this->nomComplet, parent::$role, $this->grade]);
        $db->deconnexionBD();
        return $result;        
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}