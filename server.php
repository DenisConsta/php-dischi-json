<?php
/* 
header("Access-Control-Allow-Origin: http://127.0.0.1:5173");
header("Access-Control-Allow-Headers: X-Requested-With"); */


$string = file_get_contents('dischi.json');
$disks = json_decode($string, true);

header('Content-Type: application/json');
echo json_encode($disks);

?>