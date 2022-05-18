<?php
namespace App\Core;
//\:namespace racine
class Database
{
    private \PDO|null $pdo;

    public function connexionBD():void
    {
        $this->pdo=new \PDO("mysql:dbname=gestion_inscription;host=localhost","syelhadji314","201707Z4K.sy");
    }
    public function deconnexionBD():void
    {
        $this->pdo=null;
    }
    public  function executeSelect(string $sql,array $data=[],bool $single=false):object|null|array
    {
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        if ($single) {
            //single=true
            $result=$query->fetch(\PDO::FETCH_OBJ);
            if ($query->rowCount()==0) {
                return null;
            }
        }else {
            //single=false 
            $result=$query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function executeUpdate(string $sql,array $data=[]):int
    {
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        //insert => retourner le dernier id generé
        return $query->rowCount();
    }
}