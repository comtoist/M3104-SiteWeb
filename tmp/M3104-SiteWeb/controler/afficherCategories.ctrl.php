<?php
    // Controleur permettant d'afficher la liste des catégories

    // Inclusion du modèle
    include_once("../model/DAO.class.php");

    ///////////////////////////////////////////////////////////
    // A COMPLETER
    ///////////////////////////////////////////////////////////
    global $categorie;

$categorie = $dao->getAllCat();
    if (isset($categorie)) {

  // On charge la vue
  include('../view/categories.view.php');
}else {
  // C'est une erreur : on doit toujours avoir un nom
  $error = 'afficherCategories.ctrl.php : Pas de données pour les categories';
}
  ?>
  
