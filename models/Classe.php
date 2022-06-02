<?php
namespace App\Model;
use App\Core\Model;

class Classe extends Model

{

    private string $libelleClasse;
    private string $filiere;
    private string $niveau;

    public function __construct($id,$libelleClasse,$filiere,$niveau)
    {
        $this->id->$id;
        $this->libelleClasse = $libelleClasse;
        $this->filiere=$filiere;
        $this->niveau=$niveau;

    }

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
            /* $sql="INSERT INTO `classe` (`libelleClasse`, `filiere`, `niveau`,`rp_id`) VALUES
            ('Classe8', 'Physique', 'L2',19),
            ('CAD', 'Mathematique', 'L2',19),
            ('Rose', 'Informatique', 'L1',20),
            ('Abdloulaye Wade', 'Chimie', 'L1',20),
            ('Mor', 'Francais', 'M2',20),
            ('Doudou', 'Informatique', 'L2',20),
            ('Classe1', 'Mathematique', 'L1',20),
            ('Classe9', 'Physique', 'L1',20),
            ('Classe2', 'Informatique', 'L3',20),
            ('Classe3', 'Informatique', 'M1',20),
            ('Classe4', 'Physique', 'M1',20),
            ('Classe5', 'Mathematique', 'L3',19),
            ('Classe6', 'Physique', 'L3',19),
            ('Classe7', 'Chimie', 'L2',19)"; */

            $sql="INSERT INTO `classe` (`libelleClasse`, `filiere`, `niveau`,`rp_id`) VALUES(?,?,?,?)";

            $result=$db->executeUpdate($sql,[$this->libelleClasse,$this->filiere,$this->niveau,20]);
        $db->deconnexionBD();
        return $result;        
    }
    
}