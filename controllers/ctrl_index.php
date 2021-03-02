<?php
require_once ("./myConfig.php");
require_once "./Models/Database.php";
require_once "./Models/Clients.php";


$clientsObj = new Clients;
$clientsArray = $clientsObj -> getAllClients();
var_dump(($clientsArray));
?>
