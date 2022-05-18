<?php
// 1) Inclure le fichier de la classe 

use App\Model\Classe;

require_once("../config/fonctions.php");
require("../vendor/autoload.php");

require("../routes/route.web.php");

$classe=new Classe;
$classe->insert();