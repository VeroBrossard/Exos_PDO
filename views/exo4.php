<?php

require_once ("../myConfig.php");
require_once ("../Models/Database.php");
require_once ("../Models/Clients.php");

require_once("header.php");
require_once("../controllers/array_des_exos.php");


$clientsObj = new Clients;
$clientsArray = $clientsObj -> getClientwithXTypeCard();
//var_dump(($clientsArray));
$clientsNumber = $clientsObj -> getClientsTotal();
//var_dump ($clientsNumber);
?>
<link rel="stylesheet" href="../assets/style.css">
<!-- dans header.php
  <!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
-->
  <div id="titreExo">    <h2> EXO 4  </h2>
 <?= $ListeExos['Exo4']?> <br>
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
           
                <th>TypeCarte</th>
         
            </tr>
        </thead>
        <tbody>
            <?php
            $ind =0;
            foreach($clientsArray as $client)
            {
              $ind ++ 
            ?>
                <tr>
                    <td><?= $client["lastName"] ?></td>
                    <td><?= $client["firstName"] ?></td>
        
                    <td><?= $client["type"] ?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
    </table><br><br>
 
Il y a <strong><?= $ind ?> </strong>  clients avec carte de fidélité.<br />
      <BR>
    </div>

  </section>

<!-- dans footer.php
  </body> -->

<?php
//require_once("../controllers/close_Conn_BDD.php");
require_once("footer.php") ;
// $reponse->closeCursor(); // Termine le traitement de la requête
//https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-lisez-des-donnees
?>