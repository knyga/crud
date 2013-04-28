<?php
include_once("../../global.php");
//predone----------------------------------------------------------------------------------------------

$from = isset($_REQUEST['from']) && strlen($_REQUEST['from'])>0?$_REQUEST['from']:"01.01.1992";
$to = isset($_REQUEST['to']) && strlen($_REQUEST['to'])>0?$_REQUEST['to']:"01.01.2022";
$iduser = $_REQUEST['iduser'];

$s = explode(".",$from);
$from_time = $s[2]."-".$s[1]."-".$s[0];
$s = explode(".",$to);
$to_time = $s[2]."-".$s[1]."-".$s[0];

$data = $sellmanager->fetchByDateUser($iduser,$from_time, $to_time);

$total = 0;
for($i=0;$i<count($data);$i++) {
	$total += $data[$i]["hourprice"];
}

$user = $usermanager->getUserById($iduser);

require('report_view.php');
?>