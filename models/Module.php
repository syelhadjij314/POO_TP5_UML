<?php
namespace App\Model;
use App\Core\Model;
class Module extends Model{
    public static function findAll():array
    {
        $sql = "select m.libelleModule,p.nom_complet from module m,personne p where
        p.id=m.professeur_id and
        role like ?";
        return parent::findBy($sql,["ROLE_PROFESSEUR"]);
    }
}