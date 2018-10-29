<html>
<head>
  <title>Shooper|Articles</title>
  <meta charset="UTF-8"/>
  <meta http-equiv="content-type" content="text/html;" />
  <link rel="stylesheet" type="text/css" href="../view/design/articlesview.css">
</head>

<body>
  <header>
    <a href="javascript:history.back(-1)">
      <img src="https://www-info.iut2.univ-grenoble-alpes.fr/intranet/enseignements/ProgWeb/M3104/TP/tp02/sujet/img/Actions-arrow-top-icon.png"/></a>
      <h1>Articles</h1>
    </header>
    <section>

      <?php foreach ($article as $obj => $value) { ?>
        <article>
          <a href="afficherInfo.ctrl.php?id=<?php echo $value->libelle ?>">
            <img src="../data/img/<?php echo $value->libelle ?>.png"  width="200px" height="200px"/>
            <br>
            <p> <?php echo $value->nom_produit ?> </p>
            <br>
          </a>
        </article>
      <?php } ?>

    </section>
  </body>
  </html>
