<?php

require_once("../myConfig.php");
require_once("../Models/Database.php");
require_once("../Models/Clients.php");

require_once("header.php");
require_once("../controllers/array_des_exos.php");


$clientsObj = new Clients;
$clientsArray = $clientsObj->getCardTypeClients();
//var_dump(($clientsArray));
?>
<link rel="stylesheet" href="../assets/style.css">
<!-- dans header.php
  <!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
-->
<div id="titreExo">
  <h2> EXO 7 </h2>
  <?= $ListeExos['Exo7'] ?> <br>
</div>
<section>
  <div>
    <strong>Clients : </strong>
    <br><br>

    <?php
    $ind=0;
    foreach ($clientsArray as $client) {
    ?>
      <ul>
        <li><?= $client["lastName"] ?></li>
        <li><?= $client["firstName"] ?></li>
        <li><?= $client["newBirthDate"] ?></li>

        <?php
        if ($client['type'] == "Fidélité") {
          $ind++;
        ?>
          <li>OUI</li>
          <li> carte n°:<?= $client["cardNumber"] ?></li>
        <?php
        } else {
        ?>
          <li>NON</li>
        <?php
        }
        ?>
      </ul>
    <?php
    }
    ?>
    <br><br>
    <strong>Il y a <?= $ind; ?> clients avec carte de Fidelité. </strong> <br />

  </div>

</section>

<!-- dans footer.php
  </body> -->

<?php
//$reponse1_2->closeCursor(); // Termine le traitement de la requête ???

require_once("footer.php");
?>