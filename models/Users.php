<?php
namespace App\Model;

abstract class Users extends Personne
{
    protected string $login;
    protected string $password;

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get the value of role
     */ 
    public static function getRole()
    {
        return self::$role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
    public static function findUserByLoginAndPassword(string $login,string $password):object|null
    {
        return parent::findBy("select * from personne where login=? and password=?",[$login,$password],true);
    }

     //Redefinition
    public static function findAll():array
    {
        $sql = "select `nom_complet`,`role`,`login`,`password` from ".parent::table()." where role not like PROF ";
        return parent::findBy($sql);
    }
}