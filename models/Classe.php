<?php
namespace App\Model;
use App\Core\Model;

class Classe extends Model
{
    //Fonctions navigationnelles
    //ManyToMany => Professeur
    public function professeurs():array|null
    {
        $sql="select.....";
        return parent::findById($sql,[$this->id]);
    }

    public function insert():int
    
    {
        $db=parent::database();
        $db->connexionBD();
        //Requete non preparee:variable injectee lors de l'ecriture de la requete
            $sql="INSERT INTO `classe` (`libelle`, `filiere`, `niveau`) VALUES
            ('Classe8', 'Physique', 'L2'),
            ('Abdloulaye Wade', 'Chimie', 'L1'),
            ('Mor', 'Francais', 'M2'),
            ('Doudou', 'Informatique', 'L2'),
            ('Classe1', 'Mathematique', 'L1'),
            ('Classe9', 'Physique', 'L1'),
            ('Classe2', 'Informatique', 'L3'),
            ('Classe3', 'Informatique', 'M1'),
            ('Classe4', 'Physique', 'M1'),
            ('Classe5', 'Mathematique', 'L3'),
            ('Classe6', 'Physique', 'L3'),
            ('Classe7', 'Chimie', 'L2')";

            $result=$db->executeUpdate($sql);
        $db->deconnexionBD();
        return $result;        
    }
}