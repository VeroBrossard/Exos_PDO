<?php
require_once("../controllers/connexionBDD.php");
require_once("header.php");
require_once("../controllers/exo1_controller.php");
require_once("../controllers/array_des_exos.php");


$clientsObj = new Clients;
$clientsArray = $clientsObj -> getAllClients();
//var_dump(($clientsArray));
$clientsNumber = $clientsObj -> getClientsTotal();
var_dump ($clientsNumber);
?>
<link rel="stylesheet" href="../assets/style.css">
<!-- dans header.php
  <!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
-->
  <div id="titreExo">    <h2> EXO 1  </h2>
 <?= $ListeExos['Exo1']?> <br>
</div>
  <section>    
    <div>
    <strong>Clients : </strong>
<!-- <?php

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
   <?=$donnees['lastName']; ?> <?=$donnees['firstName']; ?>,<br> né(e) le  <?= $donnees['birthDate']; ?> <br />
    <?php
    // test sur carte de fidélité 
    $comm = ($donnees['card']==1) ? "carte numéro " . $donnees['cardNumber'] ."<br>" :'pas de carte';
    echo $comm;
    ?> 
   </p>
<?php
}
$donnees = $reponse1_2->fetch()
?>
<strong>Il y a </strong> : <?=$donnees['count(*)']; ?> clients.<br />
      <BR> -->
    </div>



  </section>

<!-- dans footer.php
  </body> -->

<?php

$reponse1_2->closeCursor(); // Termine le traitement de la requête
require_once("../controllers/close_Conn_BDD.php");
require_once("footer.php") ;
// $reponse->closeCursor(); // Termine le traitement de la requête
//https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-lisez-des-donnees
?>