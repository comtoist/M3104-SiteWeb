<?php
// Partie principale

// Inclusion du modèle
include_once("../model/DAO.class.php");
$cat = $_GET['cat'];
$lieu = $_GET['lieu'];
$marque = $_GET['marque'];
$prixMIN = (int) $_GET['prixMIN'];
$prixMAX = (int) $_GET['prixMAX'];

global $arti;
$arti = $dao->getChercher($cat,$lieu,$marque,$prixMIN,$prixMAX);
if (($arti)!=null) {
  include('../view/recherche.view.php');
}else{
  include('../view/recherche.view.php');
  echo "Pas de d'articles trouvés avec vos critères";
}

?>
