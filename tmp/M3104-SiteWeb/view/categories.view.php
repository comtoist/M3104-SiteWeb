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
<h2>Chercher un produit :</h2>
<form class="" action="index.html" method="post">
  <label for="Choix">Catégories :</label>
  <select class="Choix" name="Choix">
    <option value="Botte">Botte</option>
    <option value="Mocassin">Mocassin</option>
    <option value="Chausson">Chausson</option>
    <option value="Rangers">Rangers</option>
    <option value="Tong">tong</option>
    <option value="Chaussure de sport">Chaussure de sport</option>
    <option value="Chaussure de ville">Chaussure de ville</option>

  </select>
</form>
</header>
<h1>Catégories :</h1>


    <?php foreach ($categorie as $obj => $value) { ?>
      <a href="afficherArticles.ctrl.php?cat=<?php echo $value->libelle ?>">
      <img src="../data/img/<?php echo $value->nom ?>.jpg" width="200"/>
      <br>
      <p> <?php echo $value->nom ?> </p>
      <br>
    </a>
    <?php } ?>


</body>
</html>
