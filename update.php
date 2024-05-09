<?php

$current_version = "2.2";

if (isset($_GET['version']) && !empty($_GET['version']))
{
  $version = $_GET['version'];
  if($version == $current_version)
  {
    $data = "upto-date";
    echo $data;
  }
  else
  {
    $data = "required";
    echo $data;
  }
}
else
{
  $data = "error";
  echo $data;
}

  
?>
