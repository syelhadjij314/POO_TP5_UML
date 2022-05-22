<?php
namespace App\Core;

abstract class Model implements IModel{

    //Dependance
    protected static function database():Database
    {
        return new Database();
    }
    public static function table():string
    {
        $table= get_called_class();
        $table=str_replace("App\\Model\\","",$table);
        $table = ($table=="Users" or $table=="AC" or $table=="RP" or $table=="Professeur")?"personne":strtolower($table);
        return $table;
    }

    public function insert():int
    {
        return 0;
    }
    public function update():int
    {
        return 0;
    }
    public static function delete(int $id):int
    {
        $db=self::database();
        $db->connexionBD();
        //Requete non preparee:variable injectee lors de l'ecriture de la requete
            $sql="delete from ".self::table()." where id=$id";
            $result=$db->executeUpdate($sql);
        $db->deconnexionBD();
        return $result;
    }
    public static function findAll():array
    {
        $db=self::database();
        $db->connexionBD();
            $sql="select * from ".self::table();
            $result=$db->executeSelect($sql);
        $db->deconnexionBD();
        return $result;
    }
    public static function findById(int $id):object|null
    {
        $db=self::database();
        $db->connexionBD();
        //Requete preparee:variable injectee lors de l'execution de la requete
        // ?=> jocker
        // ? => 0, ? => 1

            $sql="select * from ".self::table()." where id= ?";
            $result=$db->executeSelect($sql,['$id']);
        $db->deconnexionBD();
        return $result;
    }
    public static function findBy(string  $sql,array $data=[],$single =false):object|null|array
    {
        $db=self::database();
        $db->connexionBD();
            $result=$db->executeSelect($sql,$data,$single);
        $db->deconnexionBD();
        return $result;
    }
    public static function findAlls($attributes="*",$column="",$search="")
    {
        $db=self::database();
        $db->connexionBD();
            $sql= ($column !="" && $search !="") ? "select $attributes from ".self::table()." where $column like '$search'":
                "select $attributes from ".self::table();
            $result=$db->executeSelect($sql);
        $db->deconnexionBD();
        return $result;
    }
}