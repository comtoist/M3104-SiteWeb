<?php
    // Partie principale

    // Inclusion du modèle
    include_once("../model/DAO.class.php");
    $cat = $_GET['cat'];
    $lieu = $_GET['lieu'];
    $marque = $_GET['marque'];
    $prixMIN = (int) $_GET['prixMIN'];
    $prixMAX = (int) $_GET['prixMAX'];
    ///////////////////////////////////////////////////////
    //  A COMPLETER
    ///////////////////////////////////////////////

    echo $cat;
    echo $lieu;
    echo $marque;
    echo $prixMIN;
    echo $prixMAX;
    global $arti;
    $arti = $dao->getChercher($cat,$lieu,$marque,$prixMIN,$prixMAX);



    include('../view/recherche.view.php');

    ?>
