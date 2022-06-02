<?php
namespace App\Model;
use App\Core\Constantes;

class Etudiant extends Users
{
    private string $matricule;
    private string $sexe;
    private string $adresse;

    public function __construct()
    {
        parent::$role= Constantes::ETUDIANT;
    }


    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    public function insert():int
    {
        $db=parent::database();
        $db->connexionBD();
        //Requete non preparee:variable injectee lors de l'ecriture de la requete
            $sql="INSERT INTO `personne` ( `nom_complet`, `role`, `login`, `password`, `matricule`, `adresse`, `sexe`) VALUES (?,?,?,?,?,?,?);";
            $result=$db->executeUpdate($sql,[$this->nomComplet, parent::$role, $this->login, $this->password,$this->matricule,$this->adresse,$this->sexe]);
        $db->deconnexionBD();
        return $result;        
    }
    public static function findAll():array
    {
        $sql = "select * from ".parent::table()." where role like ?";
        return parent::findBy($sql,[Constantes::ETUDIANT]);
    }

}