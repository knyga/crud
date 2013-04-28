<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

if(isset($_POST["iduser"],$_POST["idclient"],$_POST["idservice"])) {
	$idservice = $_POST["idservice"];
	$iduser = $_POST["iduser"];
	$idclient = $_POST["idclient"];
	$datetime = 'CURRENT_TIMESTAMP';

	$sellmanager->add($idservice, $iduser, $idclient, $datetime);
}
?>