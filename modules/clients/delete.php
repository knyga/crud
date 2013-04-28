<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

if(isset($_REQUEST['idclient'])) {
	$clientmanager->deleteById($_REQUEST['idclient']);
}
?>