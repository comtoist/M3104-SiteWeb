<?php
    // Partie principale

    // Inclusion du modèle
    include_once("../model/DAO.class.php");
    $id = $_GET['id'];
    ///////////////////////////////////////////////////////
    //  A COMPLETER
    ///////////////////////////////////////////////

    global $article;
    $art = $dao->get($id);

    include('../view/info.view.php');

    ?>
