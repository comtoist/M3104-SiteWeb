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
  <label for="ChoixCat">Catégories :</label>
  <select class="ChoixCat" name="ChoixCat">
    <option value="Botte">Botte</option>
    <option value="Mocassin">Mocassin</option>
    <option value="Chausson">Chausson</option>
    <option value="Rangers">Rangers</option>
    <option value="Tong">tong</option>
    <option value="Chaussure de sport">Chaussure de sport</option>
    <option value="Chaussure de ville">Chaussure de ville</option>
  </select>
<br>
  <label for="ChoixLieu">Lieu disponible :</label>
  <select class="ChoixLieu" name="ChoixLieu">
    <option value="Grenoble">Grenoble</option>
    <option value="Paris">Paris</option>
    <option value="Lyon">Lyon</option>
    <option value="Marseille">Marseille</option>
    <option value="Toulouse">Toulouse</option>
    <option value="Nice">Nice</option>
    <option value="Nantes">Nantes</option>
    <option value="Montpellier">Montpellier</option>
  </select>
  <br>
  <label for="ChoixMarque">Marque :</label>
  <select class="ChoixMarque" name="ChoixMarque">
    <option value="Clarks">Clarks</option>
    <option value="Georgia Rose">Georgia Rose</option>
    <option value="Esprit">Esprit</option>
    <option value="Massimo Dutti">Massimo Dutti</option>
    <option value="Emporio Armani ">Emporio Armani </option>
    <option value="Enzo Marconi">Enzo Marconi</option>
    <option value="Giesswein">Giesswein</option>
    <option value="Magnum">Magnum</option>
    <option value="Birkenstock">Birkenstock</option>
    <option value="Superdry">Superdry</option>
    <option value="Birkenstock">Birkenstock</option>
    <option value="Asics">Asics</option>
    <option value="Salomon">Salomon</option>
    <option value="Nike">Nike</option>
    <option value="Timberland">Timberland</option>
    <option value="Pier One">Pier One</option>

  </select>
  <br>
    <label for="ChoixPrix">Prix :</label>
    <select class="ChoixPrix" name="ChoixPrix">
      <option value="50">Moins de 50$</option>
      <option value="100">Entre 50$ et 150$</option>
      <option value="150">Plus de 150$</option>
    </select>
    <input type="submit"  value="valider recherche">
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
