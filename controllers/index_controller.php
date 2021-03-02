<b>Partie1 : </b>Lire les données colyseum.sql<br>
Exécuter le script colyseum.sql fourni avant de commencer.<br> 
Tous les résultats devront être affichés dans une page index.php.<br><br>
<?php
require_once("array_des_exos.php");

foreach($ListeExos as $clef => $valeur){
  ?>
  <a href="views/<?= $clef ?>.php" target="blank_"> <b><?= $clef?></b></a><br>
  <?= $valeur ?> <br><br>
  <?php
}
?>