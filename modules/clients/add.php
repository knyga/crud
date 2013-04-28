<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

if(isset($_REQUEST["fnameclient"],$_REQUEST["lnameclient"],$_REQUEST["idcard"])) {
	$fnameclient = $_REQUEST["fnameclient"];
	$lnameclient = $_REQUEST["lnameclient"];
	$idcard = $_REQUEST["idcard"];

	if(!is_numeric($idcard)) die("Идентификатор карты должен быть числом");

	if($idcard == 0) {
		$idcard = 'NULL';
	}

	$clientmanager->add($fnameclient, $lnameclient, $idcard);
}
?>