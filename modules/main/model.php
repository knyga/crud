<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

if ($usermanager->isAuthorized()) {
    require('view.php');
} else {
    header("Location: /modules/user/login.php");
}
?>