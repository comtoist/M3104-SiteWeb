<?php
    // Partie principale

    // Inclusion du modèle
    include_once("../model/DAO.class.php");
    $cat = $_GET['cat'];
    $lieu = $_GET['lieu'];
    $marque = $_GET['marque'];
    $prixMIN = $_GET['prixMIN'];
    $prixMAX = $_GET['prixMAX'];
    ///////////////////////////////////////////////////////
    //  A COMPLETER
    ///////////////////////////////////////////////


    $art = $dao->getChercher($cat,$lieu,$marque,$prixMAX,$prixMIN);


    include('../view/info.view.php');

    ?>
