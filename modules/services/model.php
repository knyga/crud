<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

$services = $servicemanager->fetchAll();
require('view.php');
?>