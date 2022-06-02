<?php
namespace App\Core;

interface IModel
{
    //instance
    public function insert():int;
    public function update():int;

    //static
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null|array;
    public static function findBy(string $sql,array $data=[],$single=false):object|null|array;

}
//Methodes Static=> Methodes Classe
    //Classe::methode()
    //Classe::delete(1)//delete from classe where id=1
    //Classe::findAll(1)//select * from classe


//Methodes Instances => Methodes Objet
    //etat de Objet => valeurs des attributs
    //$obj=new Classe()
    //$obj-> methode()
    //update
        //$obj->new Classe()
        //$obj->setID(1)
        //$obj->setLibelle("classe 1")
        //$obj->update()
        //update from classe set libelle='classe 1' where id=1