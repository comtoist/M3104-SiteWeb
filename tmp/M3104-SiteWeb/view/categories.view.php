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
<h1>Catégories :</h1>
</header>



    <?php foreach ($categorie as $obj => $value) { ?>
      <img src="../data/img/<?php echo $value->nom ?>.jpg" width="200"/>
      <br>
      <p> <?php echo $value->nom ?> </p>
      <br>
    <?php } ?>


</body>
</html>
