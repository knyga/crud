<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

if(isset($_REQUEST["idsell"],$_REQUEST["idservice"],$_REQUEST["iduser"],$_REQUEST["idclient"])) {
	$idsell = $_REQUEST["idsell"];
	$idservice = $_REQUEST["idservice"];
	$iduser = $_REQUEST["iduser"];
	$idclient = $_REQUEST["idclient"];
	$datetime = 'CURRENT_TIMESTAMP';

	$sellmanager->edit($idsell, $idservice, $iduser, $idclient, $datetime);
}
?>