<?php

//interrogation de la BDD

$reponse = $bdd->query('select * from showtypes');
//$donnees est un array qui contient champ par champ les valeurs de la première entrée
//$donnees = $reponse->fetch();
?>