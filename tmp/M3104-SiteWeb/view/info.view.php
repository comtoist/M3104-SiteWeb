<html>
<head>
  <title>Shopper|InformationsProduit</title>
  <meta charset="UTF-8"/>
  <meta http-equiv="content-type" content="text/html;" />
  <link rel="stylesheet" type="text/css" href="../view/design/infosview.css">
</head>

<body>
  <header>
    <a href="javascript:history.back(-1)">
      <img src="https://www-info.iut2.univ-grenoble-alpes.fr/intranet/enseignements/ProgWeb/M3104/TP/tp02/sujet/img/Actions-arrow-top-icon.png"/></a>
      <h1>Produit sélectionné</h1>
    </header>

    <section>

      <?php foreach ($art as $obj => $value) { ?>
        <article>
          <img src="../data/img/<?php echo $value->libelle ?>.png"  width="200px" height="200px"/>
          <br>
          <div>
            <p><strong>Nom Produit :</strong> <?php echo $value->nom_produit ?> </p>
            <p><strong>Marque :</strong> <?php echo $value->marque ?></p>
            <p><strong>Prix </strong>: <?php echo $value->prix ?>$ </p>
          <?php } ?>

          <p><strong>Disponible à ces lieux :</strong></p>
          <?php foreach ($dispo as $obj => $value) { ?>
            <p> <?php echo $value->lieu_dispo ?> </p>
          </div>
        </article>
      <?php } ?>

    </section>
  </body>
  </html>
