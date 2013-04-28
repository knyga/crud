<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

$users = $sellmanager->fetchAllUsers();
require('form_view.php');
?>