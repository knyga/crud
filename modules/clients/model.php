<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

$clients = $clientmanager->fetchAll();
$cards = $clientmanager->fetchAllCards();
require('view.php');
?>