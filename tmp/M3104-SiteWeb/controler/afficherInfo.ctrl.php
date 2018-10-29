<?php
// Partie principale

// Inclusion du modèle
include_once("../model/DAO.class.php");
$id = $_GET['id'];


$art = $dao->get($id);
$dispo = $dao->getLieu($id);
include('../view/info.view.php');

?>
