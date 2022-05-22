<?php
namespace App\Model;
use App\Core\Model;
class Inscription extends Model{
    //Attributs Instances
    //Attributs de classe
    private int $id;

    public function __construct()
    {

    }

    //ManyToOne => AC
    public function ac(): AC
    {
        $sql="select p.* from inscription i,personne p
            where p.id=i.ac_id
            and p.role like AC
            and i.id=?";
        return parent::findById($sql,[$this->id]);
        ;
    }

    //ManyToOne => AnneeScolaire
    public function anneeScolaire(): AnneeScolaire
    {
        $sql="select a.* from anne_scolaire a,inscription i
            where a.id=i.annee_id
            and i.id=?";
        return parent::findById($sql,[$this->id]);
    }

    public static function findAll(): array
    {
        $db=parent::database();
        $db->connexionBD();
            $sql = "select * from ".parent::table()."";           
            $results=$db->executeSelect($sql);
        $db->deconnexionBD();
        return $results;
    }    
}