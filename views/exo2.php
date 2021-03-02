<?php

require_once ("../myConfig.php");
require_once ("../Models/Database.php");
require_once ("../Models/Showtypes.php");

require_once("header.php");
require_once("../controllers/array_des_exos.php");


$showsTypesObj = new Showtypes;
$showsTypesArray = $showsTypesObj -> getAllShowtypes();
//var_dump(($showsTypesArray));

?>
<link rel="stylesheet" href="../assets/style.css">
<!-- dans header.php
  <!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
-->
  <div id="titreExo">    <h2> EXO 2  </h2>
 <?= $ListeExos['Exo2']?> <br>
</div>
  <section>    
    <div>

    <div>
    <strong> TYPES DE SPECTACLE : </strong>
<br><br>


            <?php
            foreach($showsTypesArray as $show)
            {
            ?>
               <?= $show["type"] ?><br>
            <?php
            }
            ?>
      

  </div>


  </section>

<!-- dans footer.php
  </body> -->

<?php
require_once("../controllers/close_Conn_BDD.php");
require_once("footer.php") ;
// $reponse->closeCursor(); // Termine le traitement de la requête
//https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-lisez-des-donnees
?>