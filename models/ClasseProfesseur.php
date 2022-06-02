<?php
namespace App\Model;
use App\Core\Model;

class ClasseProfesseur extends Model{

    private string $classe_id;
    private string $professeur_id;


    /**
     * Get the value of classe_id
     */ 
    public function getClasse_id()
    {
        return $this->classe_id;
    }

    /**
     * Set the value of classe_id
     *
     * @return  self
     */ 
    public function setClasse_id($classe_id)
    {
        $this->classe_id = $classe_id;

        return $this;
    }

    /**
     * Get the value of professeur_id
     */ 
    public function getProfesseur_id()
    {
        return $this->professeur_id;
    }

    /**
     * Set the value of professeur_id
     *
     * @return  self
     */ 
    public function setProfesseur_id($professeur_id)
    {
        $this->professeur_id = $professeur_id;

        return $this;
    }

    public static function findAll():array
    {
        $sql = "select cl.libelleClasse,p.nom_complet,cl.filiere,cl.niveau from classeprofesseur clp, classe cl,personne p where
        p.id=clp.professeur_id and
        cl.id=clp.classe_id and
        role like ?";
        return parent::findBy($sql,["ROLE_PROFESSEUR"]);
    }
}