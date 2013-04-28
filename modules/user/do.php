<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

if(isset($_REQUEST['username'],$_REQUEST['password'])) {
	$isDone = $usermanager->authorize($_REQUEST['username'],$_REQUEST['password']);
}

header("Location: /");
?>