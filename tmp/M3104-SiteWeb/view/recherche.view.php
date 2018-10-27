<html>
<head>
<title>Bricomachin</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<meta name="author" content="Jean-Pierre Chevallet" />
<link rel="stylesheet" type="text/css" href="../view/design/style.css">
</head>

<body>
<header>
  <a href="javascript:history.back(-1)">
  <img src="https://www-info.iut2.univ-grenoble-alpes.fr/intranet/enseignements/ProgWeb/M3104/TP/tp02/sujet/img/Actions-arrow-top-icon.png"/></a>

<h1>Articles :</h1>
</header>



    <?php foreach ($arti as $obj => $value) {
        ?>
      <a href="afficherInfo.ctrl.php?id=<?php echo $value->libelle ?>">
      <img src="../data/img/<?php echo $value->libelle ?>.jpg" width="200"/>
      <br>
      <p> <?php echo $value->nom_produit ?> </p>
      <br>
    </a>
  <?php } ?>


</body>
</html>
