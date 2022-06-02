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
            $sql = "select p.nom_complet,cl.libelleClasse,cl.filiere,cl.niveau,i.etat from inscription i,personne p,classe cl where 
            p.id=i.etudiant_id
            and cl.id=i.classe_id
            and role like ?";           
            $results=$db->executeSelect($sql,["ROLE_ETUDIANT"]);
        $db->deconnexionBD();
        return $results;
    }    
}