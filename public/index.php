<?php
// 1) Inclure le fichier de la classe 
require_once("../models/Personne.php");
require_once("../models/Users.php");
require_once("../models/AC.php");
require_once("../models/Inscription.php");

//Chargement Automatique => Composer

//2) Creer un Objet ou Instanciation
// $pers1 = new Personne();
//appel methode de la classe nommee le constructeur
// 3) Donner un Etat à un Objet
//->:operateur de portee d'instance(objet)
// $pers1->interface de la classe
//(Tous les attributs et methodes publics de la classe)
// $pers1->setId(1)
//     ->setNomComplet('Baila wane');

// $pers2=new Personne();

// $pers2->setId(2)
//     ->setNomComplet('Aly Tall Niang');

// echo $pers1->getId();
// echo $pers1->getNomComplet();

// Methode Statique
// Personne :: setNbrePersonne(12);
// echo Personne :: getNbrePersonne();

$ac= new AC();
echo $ac -> getRole();
$ins = new Inscription();

$ins -> ac();
$ins -> anneeScolaire();
