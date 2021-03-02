<?php
require_once("../controllers/connexionBDD.php");
require_once("header.php");
require_once("../controllers/exo5_controller.php");
require_once("../controllers/array_des_exos.php");

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
<?php
$ind= 0;
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
  $ind ++
?>
    <p>
    Nom : <?=$donnees['lastName']; ?> <br>
    Prénom : <?= $donnees['firstName']; ?>,<br> 
   </p>
<?php
}

?>
Il y a <strong><?= $ind ?> </strong> clients dont le nom commence par M.<br />
      <BR>
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