<?php

$current_version = "2.2";

if (isset($_GET['version']) && !empty($_GET['version']))
{
  $version = $_GET['version'];
  if($version == $current_version)
  {
    $data = "true";
    echo $data;
  }
  else
  {
    $data = "false";
    echo $data;
  }
}
else
{
  $data = "false";
  echo $data;
}

  
?>
