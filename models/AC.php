<?php
namespace App\Model;

use App\Core\Constantes;

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

    public function inscription(){
        
    }
    public function __construct()
    {
        parent:: $role= Constantes::AC;
        $this -> inscriptions = [];
    }
    public function insert():int
    {
        $db=parent::database();
        $db->connexionBD();
        //Requete non preparee:variable injectee lors de l'ecriture de la requete
            $sql="INSERT INTO `personne` (`nom_complet`,`role`, `login`, `password`) VALUES (?,?,?,?);";
            $result=$db->executeUpdate($sql,[$this->nomComplet, parent::$role, $this->login, $this->password]);
        $db->deconnexionBD();
        return $result;        
    }

    public static function findAll(): array
    {
        $db=parent::database();
        $db->connexionBD();
            $sql = "select * from ". parent::table() ." where role like ?";
            $results=$db->executeSelect($sql,[Constantes::AC]);
        $db->deconnexionBD();
        return $results;
        
    }
    

    /**
     * Get the value of inscriptions
     */ 
    public function getInscriptions()
    {
        return $this->inscriptions;
    }

    /**
     * Set the value of inscriptions
     *
     * @return  self
     */ 
    public function setInscriptions($inscriptions)
    {
        $this->inscriptions = $inscriptions;

        return $this;
    }
}