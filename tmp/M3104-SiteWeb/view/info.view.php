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
<h1>Info :</h1>
</header>




<?php foreach ($art as $obj => $value) { ?>
  <img src="../data/img/<?php echo $value->libelle ?>.jpg" width="200"/>
  <br>
  <p>Nom Produit : <?php echo $value->nom_produit ?> </p>
  <br>
  <p>Marque : <?php echo $value->marque ?> </p>
  <br>
  <p>Prix : <?php echo $value->prix ?>$ </p>
  <br>

<?php } ?>

<p>Disponible à ces lieux :</p>
<?php foreach ($dispo as $obj => $value) { ?>
  <p> <?php echo $value->lieu_dispo ?> </p>
<?php } ?>

<a href="javascript:history.back(-1)">
<img src="https://www-info.iut2.univ-grenoble-alpes.fr/intranet/enseignements/ProgWeb/M3104/TP/tp02/sujet/img/Actions-arrow-top-icon.png"/></a>



</body>
</html>
