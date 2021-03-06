<?php
use App\Core\Routeur;
use App\Exception\RouteNotFoundException;
use App\Controller\ClasseController;
use App\Controller\SecuriteController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;
use App\Controller\InscriptionController;
use App\Controller\ModuleController;
use App\Controller\EtudiantController;
use App\Controller\DemandeController;
use App\Controller\ACController;
use App\Controller\RPController;
use App\Controller\AccueilController;



$routeur=new Routeur;
//Chemin Relatif SecuriteController => use App\Controller\SecuriteController;
//Chemin Absolu App\Controller\SecuriteController ou SecuriteController::class;

//Definir les routes  => Ajout des routes dans le tableau
$routeur->route('/login',[SecuriteController::class,"authentification"]);
$routeur->route('/logout',[SecuriteController::class,"deconnexion"]);
$routeur->route('/liste-classe',[ClasseController::class,"listerClasse"]);
$routeur->route('/add-classe',[ClasseController::class,"creerClasse"]);
$routeur->route('/delete-classe',[ClasseController::class,"deleteClasse"]);
$routeur->route('/edit-classe',[ClasseController::class,"editClasse"]);
$routeur->route('/liste-personne',[PersonneController::class,"lister"]);
$routeur->route('/liste-professeur',[ProfesseurController::class,"listerProfesseur"]);
$routeur->route('/add-professeur',[ProfesseurController::class,"ajouterProfesseur"]);
$routeur->route('/',[ProfesseurController::class,"affecterClasse"]);
$routeur->route('/listclasse-professeur',[ProfesseurController::class,"listeProfesseurClasse"]);
$routeur->route('/liste-inscription',[InscriptionController::class,"listerInscription"]);
$routeur->route('/inscription',[InscriptionController::class,"inscription"]);
$routeur->route('/reinscription',[InscriptionController::class,"reinscription"]);
$routeur->route('/liste-module',[ModuleController::class,"listeModule"]);
$routeur->route('/add-module',[ModuleController::class,"ajouterModule"]);
$routeur->route('/liste-etudiant',[EtudiantController::class,"listerEtudiant"]);
$routeur->route('/liste-demande',[DemandeController::class,"listerDemande"]);
$routeur->route('/add-demande',[DemandeController::class,"ajouterDemande"]);
$routeur->route('/liste-ac',[ACController::class,"listerAC"]);
$routeur->route('/liste-rp',[RPController::class,"listerRP"]);
$routeur->route('/accueil',[AccueilController::class,"accueil"]);

try {
    //Essaie de resoudre la route
    $routeur->resolve();
} catch (RouteNotFoundException $ex) {
    //capture l'exception et affiche le
    echo $ex->message;
}