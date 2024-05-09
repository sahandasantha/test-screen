<?php

$current_version = "2.2";

if (isset($_GET['version']) && !empty($_GET['version']))
{
  $version = $_GET['version'];
  if($version == $current_version)
  {
    $data = "true";
    header("Access-Control-Allow-Origin: *");
 header('Content-Type: application/json; charset=utf-8');
 echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);
  }
  else
  {
    $data = "false";
    header("Access-Control-Allow-Origin: *");
 header('Content-Type: application/json; charset=utf-8');
 echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);
  }
}
else
{
  $data = "false";
  header("Access-Control-Allow-Origin: *");
 header('Content-Type: application/json; charset=utf-8');
 echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);
}

  
?>
