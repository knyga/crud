<?php
include_once("../../config.php");
include_once("../../controllers/database.php");
include_once("../../controllers/usermanager.php");
include_once("../../controllers/servicemanager.php");
include_once("../../controllers/clientmanager.php");
include_once("../../controllers/sellmanager.php");
$db = new DataBase();
$usermanager = new UserManager($db);
$servicemanager = new ServiceManager($db);
$clientmanager = new ClientManager($db);
$sellmanager = new SellManager($db);
$db->connect($config["server"], $config["database_name"], $config["username"], $config["password"]);

$userrights = $usermanager->getRights();
//predone----------------------------------------------------------------------------------------------
?>