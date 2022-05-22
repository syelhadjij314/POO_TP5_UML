<?php
namespace App\Core;

use App\Model\Users;

Class Session{
    private Users $user;
    public function __construct()
    {
        if (session_status()==PHP_SESSION_NONE) {
            session_start();
        }
    }

    //Ajouter une donnee dans la session
    public function set(string $key,$data){
        $_SESSION[$key]=$data;
    }

    public function get(string $key){
        return $_SESSION[$key];
    }
    

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public static function isConnect()
    {
        return isset($_SESSION['user-connect']);
    }
}