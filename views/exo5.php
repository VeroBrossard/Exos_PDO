<?php

require_once ("../myConfig.php");
require_once ("../Models/Database.php");
require_once ("../Models/Clients.php");

require_once("header.php");
require_once("../controllers/array_des_exos.php");


$clientsObj = new Clients;
$var = "M%"; //choix de l'initiale deu nom recherché.
$clientsArray = $clientsObj -> getfirstLetterClients($var);
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
  <div id="titreExo">    <h2> EXO 5  </h2>
 <?= $ListeExos['Exo5']?> <br>
</div>
  <section>    
    <div>
    <strong>Clients : </strong>

<br><br>
<?php
            foreach($clientsArray as $client)
            {
            
            ?>
<p>

    Nom : <?= $client["lastName"]; ?> <br>
    Prénom : <?= $client["firstName"]; ?><br> 
   </p>

   <?php
            }
   ?>
    <strong>Il y a  : <?= count($clientsArray); ?> lignes .</strong><br />

  </div>

  </section>

<!-- dans footer.php
  </body> -->

<?php
//$reponse1_2->closeCursor(); // Termine le traitement de la requête ???

require_once("footer.php") ;
?>
