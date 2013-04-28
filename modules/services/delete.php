<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------


if(isset($_REQUEST['idservice'])) {
	$servicemanager->deleteById($_REQUEST['idservice']);
}
?>