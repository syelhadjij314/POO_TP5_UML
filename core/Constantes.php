<?php
namespace App\Core;

class Constantes{
    public const PROF="ROLE_PROFESSEUR";
    public const ETUDIANT="ROLE_ETUDIANT";
    public const RP="ROLE_RP";
    public const AC="ROLE_AC";

    public const WEB_ROOT="http://localhost:8002/";
    public static function ROOT(){
        return str_replace("public","",$_SERVER["DOCUMENT_ROOT"]);

    }

}