<?php

//interrogation de la BDD

$reponse = $bdd->query('select lastName , firstName from clients where lastName LIKE "M%" ORDER BY lastName;');

//$donnees est un array qui contient champ par champ les valeurs de la première entrée
//$donnees = $reponse->fetch();
?>