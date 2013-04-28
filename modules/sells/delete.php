<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

if(isset($_REQUEST['idsell'])) {
	$sellmanager->deleteById($_REQUEST['idsell']);
}
?>