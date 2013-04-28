<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

if(isset($_REQUEST["nameservice"],$_REQUEST["hourprice"],$_REQUEST["descservice"])) {
	$nameservice = $_REQUEST["nameservice"];
	$descservice = $_REQUEST["descservice"];
	$hourprice = $_REQUEST["hourprice"];
	
	if(!is_numeric($hourprice)) die("Цена должна быть числом");
	if($hourprice<0)  die("Цена должна быть больше нуля");

	$servicemanager->add($nameservice, $descservice, $hourprice);
}

?>