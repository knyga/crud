<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

$sells = $sellmanager->fetchAll();
$services = $sellmanager->fetchAllServices();
$clients = $sellmanager->fetchAllClients();
$users = $sellmanager->fetchAllUsers();
require('view.php');
?>