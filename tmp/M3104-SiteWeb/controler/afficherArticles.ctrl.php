<?php
// Partie principale

// Inclusion du modèle
include_once("../model/DAO.class.php");
$cat = $_GET['cat'];

global $article;
$article = $dao->getNCateg($cat);
if (isset($categorie)) {
  // On charge la vue
  include('../view/article.view.php');
}else {
  // C'est une erreur : on doit toujours avoir un nom
  $error = 'afficherCategories.ctrl.php : Pas de données pour les categories';
}
// Charge la vue
include("../view/articles.view.php")
?>
 
