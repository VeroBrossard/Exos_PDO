<?php
require_once("views/header.php");
require_once("controllers/array_des_exos.php");


?>
<!-- dans header.php
  <!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Colyseum</title>
</head>

<body>
  <div id="header"><span id="title1"> Colyseum </span>
  </div> -->

  <section>
  <br><br>
    <div>
    <b>Partie1 : </b>Lire les données colyseum.sql<br>
Exécuter le script colyseum.sql fourni avant de commencer.<br> 
Tous les résultats devront être affichés dans une page index.php.<br><br>
<?php

foreach($ListeExos as $clef => $valeur){
  ?>
  <a href="views/<?= $clef ?>.php" target="blank_"> <b><?= $clef?></b></a>
  <?php
    if ($clef == "Exo3") {
      ?>
      <a href="views/form.php" target="blank_"> <b><?= $clef?> avec Form.</b></a>
      <?php
    }
  ?>
  <br>
  <?= $valeur ?> <br><br>
  <?php
}
?>
    </div>

    <br><br>
  </section>
<!-- dans footer.php
  </body> -->

  <?php
require_once("views/footer_index.php") ;
// $reponse->closeCursor(); // Termine le traitement de la requête
?>

