<?php

require_once ("../myConfig.php");
require_once ("../Models/Database.php");
require_once ("../Models/Clients.php");

require_once("header.php");
require_once("../controllers/array_des_exos.php");
$ind = 0;
$nbre = 20;
$clientsObj = new Clients;
$clientsArray = $clientsObj -> getfirstClients($nbre);
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
  <div id="titreExo">    <h2> EXO 3  </h2>
 <?= $ListeExos['Exo3']?> <br>
</div>
  <section>    
    <div>
    <strong>Clients : </strong>
<br><br>

<!--  ***** correction avec  *****  TABLE  -->
<table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Carte</th>
                <th>Numero de carte</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($clientsArray as $client)
            {
              $ind ++
            ?>
                <tr>
                    <td><?= $client["lastName"] ?></td>
                    <td><?= $client["firstName"] ?></td>
                    <td><?= $client["newBirthDate"] ?></td>
                    <td>
                    <?php

                    // test sur carte de fidélité 
                  $comm = ($client['card']==1) ? "carte numéro " :'pas de carte';
                  echo $comm;
                    ?>                  
                    </td>
                    <td><?= $client["cardNumber"] ?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
    </table><br><br>
    <strong>Il y a <?= $ind ?> clients selectionnés.<br />

  </div>

  </section>

<!-- dans footer.php
  </body> -->

<?php
//$reponse1_2->closeCursor(); // Termine le traitement de la requête ???

require_once("footer.php") ;
?>