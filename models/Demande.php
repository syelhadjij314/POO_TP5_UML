<?php
namespace App\Model;
use App\Core\Model;
use DateTime;

class Demande extends Model{

    private string $motif;
    private DateTime $date;


    /**
     * Get the value of motif
     */ 
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */ 
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
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