<?php

require_once ("../myConfig.php");
require_once ("../Models/Database.php");
require_once ("../Models/Shows.php");

require_once("header.php");
require_once("../controllers/array_des_exos.php");


$clientsObj = new Shows;
$clientsArray = $clientsObj -> getAllShows();
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
  <div id="titreExo">    <h2> EXO 6  </h2>
 <?= $ListeExos['Exo6']?> <br>
</div>
  <section>    
    <div>
    <strong> Tous les Spectacles : </strong>
    <br><br>

<!--  ***** correction avec  *****  TABLE  -->
<table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Artiste</th>
                <th>Date</th>
                <th>Heure</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach($clientsArray as $client)
            {
            ?>
                <tr>
                    <td><?= $client["title"] ?></td>
                    <td><?= $client["performer"] ?></td>
                    <td><?= $client["newDate"] ?></td>
                    <td><?= $client["newStartTime"] ?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
    </table><br><br>
    <strong>Il y a  : <?= count($clientsArray); ?> spectacles . </strong><br />

  </div>

  </section>

<!-- dans footer.php
  </body> -->

<?php
//$reponse1_2->closeCursor(); // Termine le traitement de la requête ???

require_once("footer.php") ;
?>