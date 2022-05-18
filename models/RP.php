<?php
namespace App\Model;

use App\Core\Constantes;

class RP extends Users
{
    public function listerClasse(){
        
    }
    public function __construct()
    {
        self:: $role= Constantes::RP;
    }

    public function insert():int
    {
        $db=parent::database();
        $db->connexionBD();
        //Requete non preparee:variable injectee lors de l'ecriture de la requete
            $sql="INSERT INTO `personne` (`nom_complet`, `role`, `login`,`password`) VALUES (?,?,?,?);";
            $result=$db->executeUpdate($sql,[$this->nomComplet, parent::$role, $this->login, $this->password]);
        $db->deconnexionBD();
        return $result;        
    }
    public static function findAll():array
    {
        $sql = "select * from ".parent::table()." where role like ? ";
        return parent::findBy($sql,[Constantes::RP]);
    }
}