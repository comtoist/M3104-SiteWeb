<?php
// Controleur permettant d'afficher la liste des catégories

// Inclusion du modèle
include_once("../model/DAO.class.php");

global $categorie;

$categorie = $dao->getAllCat();//on récuperer les catégories
$categorie1=array_slice($categorie,0,3);//On recupere les 3 premiers elements
$categorie2=array_slice($categorie,3,3);//On recupere les 3 suivants elements
$categorie3=array_slice($categorie,6,6);//On recupere le dernier element

if (isset($categorie1,$categorie2,$categorie3)) {

  // On charge la vue
  include('../view/categories.view.php');
}else {
  // C'est une erreur : on doit toujours avoir un nom
  $error = 'afficherCategories.ctrl.php : Pas de données pour les categories';
}
?>
