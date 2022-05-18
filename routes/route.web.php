<?php
use App\Core\Routeur;
use App\Exception\RouteNotFoundException;
use App\Controller\ClasseController;
use App\Controller\SecuriteController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;

$routeur=new Routeur;
//Chemin Relatif SecuriteController => use App\Controller\SecuriteController;
//Chemin Absolu App\Controller\SecuriteController ou SecuriteController::class;

//Definir les routes  => Ajout des routes dans le tableau
$routeur->route('/login',[SecuriteController::class,"authentification"]);
$routeur->route('/logout',[SecuriteController::class,"deconnexion"]);
$routeur->route('/classes',[ClasseController::class,"listerClasse"]);
$routeur->route('/add-classe',[ClasseController::class,"creerClasse"]);
$routeur->route('/personnes',[PersonneController::class,"lister"]);
$routeur->route('/liste-professeur',[ProfesseurController::class,"listerProfesseur"]);



try {
    //Essaie de resoudre la route
    $routeur->resolve();
} catch (RouteNotFoundException $ex) {
    //capture l'exception et affiche le
    echo $ex->message;
}