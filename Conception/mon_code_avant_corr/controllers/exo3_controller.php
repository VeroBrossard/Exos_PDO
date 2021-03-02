<?php

//interrogation de la BDD

$reponse = $bdd->query('select * from clients limit 20');

//$donnees est un array qui contient champ par champ les valeurs de la première entrée
//$donnees = $reponse->fetch();
?>