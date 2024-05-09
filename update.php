<?php 
header('Access-Control-Allow-Origin: *');

$data = $_GET['data'];
echo json_encode($data);

?>
