<?php

//interrogation de la BDD

$reponse = $bdd->query('SELECT * FROM clients');

$reponse1_2 = $bdd->query('select count(*) from clients');
//$donnees est un array qui contient champ par champ les valeurs de la première entrée
//$donnees = $reponse->fetch();
?>