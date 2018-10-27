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
<h1>Articles :</h1>
</header>



    <?php foreach ($article as $obj => $value) { ?>
      <a href="afficherArticles.ctrl.php?cat=<?php echo $value->libelle ?>">
      <img src="../data/img/<?php echo $value->libelle ?>.jpg" width="200"/>
      <br>
      <p> <?php echo $value->nom_produit ?> </p>
      <br>
    </a>
    <?php } ?>


</body>
</html>
