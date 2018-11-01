<!DOCTYPE html>
<html>
<head>
  <title>Shopper|Accueil</title>
  <meta charset="UTF-8"/>
  <meta http-equiv="content-type" content="text/html;" />
  <link rel="stylesheet" type="text/css" href="../view/design/categoriesview.css">
</head>

<body>
  <header>
    <h1>Shopper</h1>
    <h2>Les chaussures à petit prix !</h2>
    <form class="" action="recherche.ctrl.php" method="get">
      <label for="Cat">Catégories :</label>
      <select class="Cat" name="cat">
        <option value="1">Botte</option>
        <option value="2">Mocassin</option>
        <option value="3">Chausson</option>
        <option value="4">Rangers</option>
        <option value="5">tong</option>
        <option value="6">Chaussure de sport</option>
        <option value="7">Chaussure de ville</option>
      </select>

      <label for="Lieu">Lieu disponible :</label>
      <select class="Lieu" name="lieu">
        <option value="Grenoble">Grenoble</option>
        <option value="Paris">Paris</option>
        <option value="Lyon">Lyon</option>
        <option value="Marseille">Marseille</option>
        <option value="Toulouse">Toulouse</option>
        <option value="Nice">Nice</option>
        <option value="Nantes">Nantes</option>
        <option value="Montpellier">Montpellier</option>
      </select>

      <label for="ChoixMarque">Marque :</label>
      <select class="ChoixMarque" name="marque">
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
    </br>
    <label for="ChoixPrix">Prix Min:</label>
    <input type="number" name="prixMIN" id="prixMIN">
    <label for="ChoixPrix">Prix Max:</label>
    <input type="number" name="prixMAX" id="prixMAX">
  </br>
  <input type="submit"  value="valider recherche">
</form>
</header>
<section class="conteneur">
  <section class="sousconteneur">
    <?php foreach ($categorie1 as $obj => $value) { ?>
      <article>
        <a href="afficherArticles.ctrl.php?cat=<?php echo $value->libelle ?>">
          <img src="../data/img/<?php echo $value->nom ?>.png" width="200px" height="200px"/>
          <br>
          <p> <?php echo $value->nom ?> </p>
          <br>
        </a>
      </article>
    <?php } ?>
  </section>
  <section class="sousconteneur">
    <?php foreach ($categorie2 as $obj => $value) { ?>
      <article>
        <a href="afficherArticles.ctrl.php?cat=<?php echo $value->libelle ?>">
          <img src="../data/img/<?php echo $value->nom ?>.png" width="200px" height="200px"/>
          <br>
          <p> <?php echo $value->nom ?> </p>
          <br>
        </a>
      </article>
    <?php } ?>
  </section>
  <section class="sousconteneur">
    <?php foreach ($categorie3 as $obj => $value) { ?>
      <article>
        <a href="afficherArticles.ctrl.php?cat=<?php echo $value->libelle ?>">
          <img src="../data/img/<?php echo $value->nom ?>.png" width="200px" height="200px"/>
          <br>
          <p> <?php echo $value->nom ?> </p>
          <br>
        </a>
      </article>
    <?php } ?>
  </section>
</section>
</body>
</html>
